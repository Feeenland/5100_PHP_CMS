<?php
/**
 * This file looks if a ID exist in the images DB.
 */


/**
 * this function = shows if a ID exists.
 */
// $value = ID from the Form
function existImgId($value){
    global $db_connection;
    try {
        $stmt = $db_connection->prepare("SELECT ID FROM images WHERE EXISTS(SELECT ID FROM images WHERE id = ?)");
        $stmt->bind_param("i", $_value);
        $_value = $value;
        $stmt->execute(); // = 1
        $result = $stmt->get_result();
        /* if ($_value > 0){
             print 'V'.$_value;
             print_r($stmt);
             print_r($result->num_rows);
         }*/
        return $result->num_rows;
    } catch (Exception $e){
        return false;
    }
}


