<?php
/**
 * This file defines the tasks that are to take place in the DB, for the tools list.
 */


/**
 * this function = get all items on this list in the DB and save them in the var $items.
 *
 */
function getAllToolItems(){
    global $db_connection;
    $res = mysqli_query($db_connection, "SELECT tools.*,
        img_1.alt AS alt_1,
        img_1.filename AS filename_1,
        folder_1.folder AS folder_1
        FROM tools,
        images AS img_1,
        image_folder AS folder_1
        WHERE tools.image_id = img_1.id
        AND img_1.id_folder = folder_1.id");
    $items = [];
    // save all elements from the DB Tools in this array
    while($row = mysqli_fetch_assoc($res)){
        $items[] = $row;
    }
    return $items;
}

/**
 * this function = get's a specific item from the DB by his ID.
 */
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

/**
 * this function = saves a Item in the DB.
 * if there is a ID update a existing item, if not create a new item.
 */
function saveToolEntry($data){
    global $db_connection;
    if (isset($data['id'])){
        // update
        try{
            $stmt = $db_connection->prepare("UPDATE tools SET title = ?, subtitle = ?, text = ?, image_id = ? WHERE id = ?");
            $stmt->bind_param("sssii", $title, $subtitle, $text, $image_id, $id);
            $title = $data['title'];
            $subtitle = $data['subtitle'];
            $text = $data['text'];
            $image_id = $data['image_id'];
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
            $stmt = $db_connection->prepare("INSERT INTO tools (title, subtitle, text, image_id) VALUES (?,?,?,?)");
            $stmt->bind_param("sssi", $title, $subtitle, $text, $image_id);
            $title = $data['title'];
            $subtitle = $data['subtitle'];
            $text = $data['text'];
            $image_id = $data['image_id'];
            $stmt->execute();
            return $stmt->insert_id;
        }catch(Exception $e){
            return false;
        }
    }
}

/**
 * this function = Deletes a specific Item form the DB.
 */
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
