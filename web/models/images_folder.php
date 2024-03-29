<?php
/**
 * This file defines the tasks that are to take place in the DB, for the image_folder list.
 */


/**
 * this function = get all items on this list in the DB and save them in the var $items_folder.
 */
function getAllimage_folders()
{
    global $db_connection;
    $res = mysqli_query($db_connection, "SELECT * FROM image_folder");
    $item_folders = [];
    // save all elements from the DB in this array
    while ($row = mysqli_fetch_assoc($res)) {
        $item_folders[] = $row;
    }
    return $item_folders;
}

/**
 * this function = get's a specific item from the DB by his ID.
 */

function getImageFolderById($id)
{
    global $db_connection;
    try {
        $stmt = $db_connection->prepare("SELECT * FROM image_folder WHERE id = ?");
        $stmt->bind_param("i", $_id);
        $_id = desinfect($id);
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
/*function saveEntry($data)
{
    global $db_connection;
    if (isset($data['id'])) {
        // update
        try {
            $stmt = $db_connection->prepare("UPDATE image_folder SET alt = ?, filename = ?, id_folder = ? WHERE id = ?");
            $stmt->bind_param("sssi", $alt, $filename, $id_folder, $id);
            $alt = $data['alt'];
            $filename = $data['filename'];
            $id_folder = $data['id_folder'];
            $id = $data['id'];
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            die($e->getMessage());
            return false;
        }
    } else {
        // Create
        try {
            $stmt = $db_connection->prepare("INSERT INTO image_folder (alt, filename, id_folder) VALUES (?,?,?)");
            $stmt->bind_param("sss", $alt, $filename, $id_folder);
            $alt = $data['alt'];
            $filename = $data['filename'];
            $id_folder = $data['id_folder'];
            $stmt->execute();
            return $stmt->insert_id;
        } catch (Exception $e) {
            return false;
        }
    }
}*/

/**
 * this function = Deletes a specific Item form the DB.
 */
/*function deleteItemById($id)
{
    global $db_connection;
    try {
        $stmt = $db_connection->prepare("DELETE FROM image_folder WHERE ID = ?");
        $stmt->bind_param("i", $_id);
        $_id = $id;
        $stmt->execute();
        $result = $stmt->get_result();
    } catch (Exception $e) {
        return false;
    }
}*/
