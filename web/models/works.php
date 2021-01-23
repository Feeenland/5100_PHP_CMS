<?php
/**
 * This file defines the tasks that are to take place in the DB, for the Works list.
 */


/**
 * this function = get all items on this list in the DB and save them in the var $items.
 * It also adds the thins from the images list. *
 *
 */
function getAllWorks()
{
    global $db_connection;
    $res = mysqli_query($db_connection,"SELECT works.*,
            img1.alt AS alt1,
            img2.alt AS alt2,
            img3.alt AS alt3,
            img4.alt AS alt4,
            img5.alt AS alt5,
            img6.alt AS alt6,
            img1.filename AS filename1,
            img2.filename AS filename2,
            img3.filename AS filename3,
            img4.filename AS filename4,
            img5.filename AS filename5,
            img6.filename AS filename6,
            folder1.folder AS folder1,
            folder2.folder AS folder2,
            folder3.folder AS folder3,
            folder4.folder AS folder4,
            folder5.folder AS folder5,
            folder6.folder AS folder6
            FROM works,
            images AS img1,
            images AS img2,
            images AS img3,
            images AS img4,
            images AS img5,
            images AS img6,
            image_folder AS folder1,
            image_folder AS folder2,
            image_folder AS folder3,
            image_folder AS folder4,
            image_folder AS folder5,
            image_folder AS folder6
            WHERE works.image_1 = img1.id
            AND img1.id_folder = folder1.id
            AND works.image_2 = img2.id
            AND img2.id_folder = folder2.id
            AND works.image_3 = img3.id
            AND img3.id_folder = folder3.id
            AND works.image_4 = img4.id
            AND img4.id_folder = folder4.id
            AND works.image_5 = img5.id
            AND img5.id_folder = folder5.id
            AND works.image_6 = img6.id
            AND img6.id_folder = folder6.id");
    $items = [];
    // save all elements from the DB in this array
    while ($row = mysqli_fetch_assoc($res)) {
        $items[] = $row;
    }
    return $items;
}


/*function getAllWorks()
{
    global $db_connection;
    $res = mysqli_query($db_connection, "SELECT * FROM works");
    $items = [];
    // save all elements from the DB in this array
    while ($row = mysqli_fetch_assoc($res)) {
        $items[] = $row;
    }
    return $items;
}*/

/**
 * this function = get's a specific item from the DB by his ID.
 */
function getItemById($id)
{
    global $db_connection;
    try {
        $stmt = $db_connection->prepare("SELECT * FROM works WHERE id = ?");
        $stmt->bind_param("i", $_id);
        $_id = $id;
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
            $stmt = $db_connection->prepare("UPDATE works SET title = ?, text = ?, subtitle = ?, sub_text = ?, image_1 = ?, image_2 = ?, image_3 = ?, image_4 = ?, image_5 = ?, image_6 = ? WHERE id = ?");
            $stmt->bind_param("ssssiiiiiii", $title, $text, $subtitle, $sub_text, $image_1, $image_2, $image_3, $image_4, $image_5, $image_6, $id);
            $title = $data['title'];
            $text = $data['text'];
            $subtitle = $data['subtitle'];
            $sub_text = $data['sub_text'];
            $image_1 = $data['image_1'];
            $image_2 = $data['image_2'];
            $image_3 = $data['image_3'];
            $image_4 = $data['image_4'];
            $image_5 = $data['image_5'];
            $image_6 = $data['image_6'];
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
            $stmt = $db_connection->prepare("INSERT INTO works (title, text, subtitle, sub_text, image_1, image_2, image_3, image_4, image_5, image_6) VALUES (?,?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("ssssiiiiii", $title,  $text, $subtitle, $sub_text, $image_1, $image_2, $image_3, $image_4, $image_5, $image_6);
            $title = $data['title'];
            $text = $data['text'];
            $subtitle = $data['subtitle'];
            $sub_text = $data['sub_text'];
            $image_1 = $data['image_1'];
            $image_2 = $data['image_2'];
            $image_3 = $data['image_3'];
            $image_4 = $data['image_4'];
            $image_5 = $data['image_5'];
            $image_6 = $data['image_6'];
            $stmt->execute();
            return $stmt->insert_id;
        } catch (Exception $e) {
            return false;
        }
    }
}


/**
 * this function = Deletes a specific Item form the DB.
 */
function deleteItemById($id)
{
    global $db_connection;
    try {
        $stmt = $db_connection->prepare("DELETE FROM works WHERE ID = ?");
        $stmt->bind_param("i", $_id);
        $_id = $id;
        $stmt->execute();
        $result = $stmt->get_result();
    } catch (Exception $e) {
        return false;
    }
}
