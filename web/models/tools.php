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
    if (isset($data['id'])){
        // update
        try{
            $stmt = $db_connection->prepare("UPDATE tools SET title = ?, subtitle = ?, text = ?, image = ? WHERE id = ?");
            $stmt->bind_param("ssssi", $title, $subtitle, $text, $image, $id);
            $title = $data['title'];
            $subtitle = $data['subtitle'];
            $text = $data['text'];
            $image = $data['image'];
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
            $stmt = $db_connection->prepare("INSERT INTO tools (title, subtitle, text, image) VALUES (?,?,?,?)");
            $stmt->bind_param("ssss", $title, $subtitle, $text, $image);
            $title = $data['title'];
            $subtitle = $data['subtitle'];
            $text = $data['text'];
            $image = $data['image'];
            $stmt->execute();
            return $stmt->insert_id;
        }catch(Exception $e){
            return false;
        }
    }
}

function deleteToolItemById($id){
    global $db_connection;
    try{
        $stmt = $db_connection->prepare("DELETE FROM tools WHERE ID = ?");
        $stmt->bind_param("i", $_id);
        $_id = $id;
        $stmt->execute();
        $result = $stmt->get_result();
    }catch(Exception $e){
        return false;
    }

}
