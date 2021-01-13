<?php
/**
 * Funktionen zum auslesen, schreiben und löschen von Kategorien
 */

/**
 * Query database and get all categories without a parent category
 */
function getAllMainCategories()
{
    global $db_connection;
    $db_result = mysqli_query($db_connection, "SELECT * FROM categories WHERE `parent_id`= 0");
    $categories = [];

    while ($row = mysqli_fetch_assoc($db_result))
    {
        $categories[] = $row;
    }
    return $categories;
}