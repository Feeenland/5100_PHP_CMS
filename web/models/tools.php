<?php

function getAllToolItems(){
    global $db_connection;
    $res = mysqli_query($db_connection, "SELECT * FROM tools");
    $items = [];
    // save all elements from the DB Tools in this array
    while($row = mysqli_fetch_assoc($res)){
        $items[] = $row;
    }
    return $items;
}

function getToolItemById($id){
    global $db_connection;
    try{
        $stmt = $db_connection->prepare("SELECT * FROM tools WHERE id = ?");
        $stmt->bind_param("i", $_id);
        $_id = $id;
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }catch(Exception $e){
        return false;
    }

}

function saveToolEntry($data){
    global $db_connection;
    if($data['id']){
        // update
        try{
            $stmt = $db_connection->prepare("UPDATE tools SET title = ?, nav_title = ?, priority = ?, starred = ? WHERE id = ?");
            $stmt->bind_param("ssiii", $title, $nav_title, $priority, $starred, $id);
            $title = $data['title'];
            $nav_title = $data['nav_title'];
            $priority = $data['priority'] ?? 1;
            $starred = $data['starred'] == 0;
            $id = $data['id'];
            $stmt->execute();
            return true;
        }catch(Exception $e){
            die($e->getMessage());
            return false;
        }
    }else{
        // Create
        try{
            $stmt = $db_connection->prepare("INSERT INTO tools (title, nav_title, priority, starred) VALUES (?,?,?,?)");
            $stmt->bind_param("ssii", $title, $nav_title, $priority, $starred);
            $title = $data['title'];
            $nav_title = $data['nav_title'];
            $priority = $data['priority'] ?? 1;
            $starred = $data['starred'] == 0;
            $stmt->execute();
            return $stmt->insert_id;
        }catch(Exception $e){
            return false;
        }
    }
}
