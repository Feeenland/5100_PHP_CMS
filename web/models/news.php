<?php
/**
 * This file defines the tasks that are to take place in the DB, for the News list.
 */


/**
 * this function = get all items on this list in the DB and save them in the var $items.
 * It also adds the thins from the images list.
 * SELECT images.*, image_folder.folder FROM images JOIN image_folder ON images.id_folder = image_folder.id // zu jedem image den passenden ortner
 * SELECT news.*, images.* FROM news INNER JOIN images ON news.bg_image = images.id // all news + img from id BG
 * //all news + all img from id BG + folder from id BG img
 * SELECT news.*, images.*, image_folder.* FROM news INNER JOIN images ON images.id = news.bg_image INNER JOIN image_folder ON image_folder.id = images.id_folder ORDER BY news.id
 * SELECT news.*, img1.alt AS alt1, img1.filename AS filname1, img2.alt AS alt2, img2.filename AS filename2, folder1.folder AS folder11, folder2.folder AS folder22
 * SELECT news.*, img1.alt,img1.filename, img2.alt,img2.filename, folder1.folder, folder2.folder FROM news, images AS img1, images AS img2, image_folder AS folder1, image_folder AS folder2 WHERE news.bg_image = img1.id AND news.top_image = img2.id AND img1.id_folder = folder1.id AND img2.id_folder = folder2.id //funktioniert aber es heisst alles gleich
 *SELECT news.*, img1.alt AS alt1, img1.filename AS filname1, img2.alt AS alt2, img2.filename AS filename2, folder1.folder AS folder1, folder2.folder AS folder2 FROM news, images AS img1, images AS img2, image_folder AS folder1, image_folder AS folder2 WHERE news.bg_image = img1.id AND news.top_image = img2.id AND img1.id_folder = folder1.id AND img2.id_folder = folder2.id
 *
 * SELECT news.*,
img1.alt AS alt1,
img1.filename AS filname1,
img2.alt AS alt2,
img2.filename AS filename2,
folder1.folder AS folder1,
folder2.folder AS folder2
FROM news,
images AS img1,
images AS img2,
image_folder AS folder1,
image_folder AS folder2
WHERE news.bg_image = img1.id
AND news.top_image = img2.id
AND img1.id_folder = folder1.id
AND img2.id_folder = folder2.id
 */
function getAllNews()
{
    global $db_connection;
    $res = mysqli_query($db_connection,"SELECT news.*,
            imgBg.alt AS altBg,
            imgTop.alt AS altTop,
            imgMid.alt AS altMid,
            imgBot.alt AS altBot,
            imgBg.filename AS filenameBg,
            imgTop.filename AS filenameTop,
            imgMid.filename AS filenameMid,
            imgBot.filename AS filenameBot,
            folderBg.folder AS folderBg,
            folderTop.folder AS folderTop,
            folderMid.folder AS folderMid,
            folderBot.folder AS folderBot
            FROM news,
            images AS imgBg,
            images AS imgTop,
            images AS imgMid,
            images AS imgBot,
            image_folder AS folderBg,
            image_folder AS folderTop,
            image_folder AS folderMid,
            image_folder AS folderBot
            WHERE news.bg_image = imgBg.id
            AND imgBg.id_folder = folderBg.id
            AND news.top_image = imgTop.id
            AND imgTop.id_folder = folderTop.id
            AND news.mid_image = imgMid.id
            AND imgMid.id_folder = folderMid.id
            AND news.bot_image = imgBot.id
            AND imgBot.id_folder = folderBot.id");
    $items = [];
    // save all elements from the DB in this array
    while ($row = mysqli_fetch_assoc($res)) {
        $items[] = $row;
    }
    return $items;
}


/*function getAllNews()
{
    global $db_connection;
    $res = mysqli_query($db_connection, "SELECT * FROM news");
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
        $stmt = $db_connection->prepare("SELECT * FROM news WHERE id = ?");
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
            $stmt = $db_connection->prepare("UPDATE news SET title = ?, text = ?, bg_image = ?, top_image = ?, mid_image = ?, bot_image = ? WHERE id = ?");
            $stmt->bind_param("ssiiiii", $title, $text, $bg_image, $top_image, $mid_image, $bot_image, $id);
            $title = $data['title'];
            $text = $data['text'];
            $bg_image = $data['bg_image'];
            $top_image = $data['top_image'];
            $mid_image = $data['mid_image'];
            $bot_image = $data['bot_image'];
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
            $stmt = $db_connection->prepare("INSERT INTO images (title, text, bg_image, top_image, mid_image, bot_image) VALUES (?,?,?,?,?,?)");
            $stmt->bind_param("ssiiii", $title, $text, $bg_image, $top_image, $mid_image, $bot_image);
            $title = $data['title'];
            $text = $data['text'];
            $bg_image = $data['bg_image'];
            $top_image = $data['top_image'];
            $mid_image = $data['mid_image'];
            $bot_image = $data['bot_image'];
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
        $stmt = $db_connection->prepare("DELETE FROM news WHERE ID = ?");
        $stmt->bind_param("i", $_id);
        $_id = $id;
        $stmt->execute();
        $result = $stmt->get_result();
    } catch (Exception $e) {
        return false;
    }
}
