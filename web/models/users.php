<?php
/**
 * funtions for the login
 * */
function getUserByEmail($email)
{
    global $db_connection;
    try{
        $stmt = $db_connection->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param('s', $_email);
        $_email = $email;
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows == 0){
            return false; //found nothing
        }else{
            return $result->fetch_assoc();
        }
    }catch(Exception $exception){
        die('Problem with database');
        return false;
    }
}

function updateUserField($id, $field, $newValue, $valueType){ //to update a specific user field in DB
    global $db_connection;
    try{
        $stmt = $db_connection->prepare('UPDATE users SET ' . $field .  ' = ? WHERE id = ?');
        $stmt->bind_param($valueType . 'i', $_value, $_id);
        $_value = $newValue;
        $_id = $id;
        $stmt->execute();
        return true;
    }catch(Exception $exception){
        die('update failed');
    }
}

/**
 * funtions for list, edit, create new and delete Users
 * */

function getAllUsers()
{
    global $db_connection;
    $res = mysqli_query($db_connection, "SELECT * FROM users");
    $items = [];
    // save all elements from the DB Tools in this array
    while ($row = mysqli_fetch_assoc($res)) {
        $items[] = $row;
    }
    return $items;
}

function getItemById($id)
{
    global $db_connection;
    try {
        $stmt = $db_connection->prepare("SELECT * FROM users WHERE id = ?");
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
 *if you save a new password the browser gives a warning, but only if the site isn't https saved.
 * as I will secure this page via https as soon as I upload it, this is not relevant.
*/
function saveEntry($data)
{
    global $db_connection;
    if (isset($data['id'])) {
        // update
        try {
            $stmt = $db_connection->prepare("UPDATE users SET first_name = ?, last_name = ?, email = ?, password = ?, banned_at = ? WHERE id = ?");
            $stmt->bind_param("sssssi", $first_name, $last_name, $email, $password, $banned_at, $id);
            $first_name = $data['first_name'];
            $last_name = $data['last_name'];
            $email = $data['email'];
            $password = $data['password'];
            $banned_at = $data['banned_at'];
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
            $stmt = $db_connection->prepare("INSERT INTO users (first_name, last_name, email, password, banned_at) VALUES (?,?,?,?,?)");
            $stmt->bind_param("sssss", $first_name, $last_name, $email, $password , $banned_at);
            $first_name = $data['first_name'];
            $last_name = $data['last_name'];
            $email = $data['email'];
            $password = password_hash($data['password'], PASSWORD_DEFAULT);
            $banned_at = $data['banned_at'];
            $stmt->execute();
            return $stmt->insert_id;
        } catch (Exception $e) {
            return false;
        }
    }
}

function deleteItemById($id)
{
    global $db_connection;
    try {
        $stmt = $db_connection->prepare("DELETE FROM users WHERE ID = ?");
        $stmt->bind_param("i", $_id);
        $_id = $id;
        $stmt->execute();
        $result = $stmt->get_result();
    } catch (Exception $e) {
        return false;
    }

}
