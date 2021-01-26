<?php
/**
 * This file defines the tasks that are to take place in the DB, for the Gallery's list.
 */

/**
 * this function = get all items on this list in the DB and save them in the var $items.
 * It also add the folder names by the id in a new column.
 */
function getAllImages(){
    global $db_connection;
    //$res = mysqli_query($db_connection, "SELECT images.*, image_folder.folder FROM images JOIN image_folder ON images.id_folder = image_folder.id");
    $res = mysqli_query($db_connection, "SELECT gallerys.*, images.alt, images.filename, images.id_folder, image_folder.folder FROM gallerys INNER JOIN images ON images.id = gallerys.image INNER JOIN image_folder ON image_folder.id = images.id_folder ORDER BY gallerys.ID");
    $items = [];
    // save all elements from the DB in this array
    while ($row = mysqli_fetch_assoc($res)) {
        $items[] = $row;
    }
    return $items;
}

/**
 * this function = get's a specific item from the DB by his ID.
 */
function getItemById($id)
{
    global $db_connection;
    try {
        $stmt = $db_connection->prepare("SELECT * FROM gallerys WHERE id = ?");
        $stmt->bind_param("i", $_id);
        $_id = htmlspecialchars($id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    } catch (Exception $e) {
        return false;
    }
}

/**
 * this function = saves a Item in the DB.
 * if there is a ID update a existing item, if not create a new item.
*/
function saveEntry($data)
{
    global $db_connection;
    if (isset($data['id'])) {
        // update
        try {
            $stmt = $db_connection->prepare("UPDATE gallerys SET image = ? WHERE id = ?");
            $stmt->bind_param("ii", $image, $id);
            $image = htmlspecialchars($data['image']);
            $id = htmlspecialchars($data['id']);
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            die($e->getMessage());
            return false;
        }
    } else {
        // Create
        try {
            $stmt = $db_connection->prepare("INSERT INTO gallerys (image) VALUES (?)");
            $stmt->bind_param("i", $image);
            $image = htmlspecialchars($data['image']);
            $stmt->execute();
            return $stmt->insert_id;
        } catch (Exception $e) {
            return false;
        }
    }
}


/**
 * this function = Deletes a specific Item form the DB.
 * I won't use this. there will be no need to delete Images.
 */
/*function deleteItemById($id)
{
    global $db_connection;
    try {
        $stmt = $db_connection->prepare("DELETE FROM images WHERE ID = ?");
        $stmt->bind_param("i", $_id);
        $_id = htmlspecialchars($id);
        $stmt->execute();
        $result = $stmt->get_result();
    } catch (Exception $e) {
        return false;
    }
}*/
