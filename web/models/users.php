<?php
/**
 * This file defines the tasks that are to take place in the DB, for the users list.
 */

/**
 * this function = get's a user by the email.
 */
function getUserByEmail($email)
{
    global $db_connection;
    try{
        $stmt = $db_connection->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param('s', $_email);
        $_email = htmlspecialchars($email);
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

/**
 * this function = updates a specified field in the DB.
 */
function updateUserField($id, $field, $newValue, $valueType){ //to update a specific user field in DB used in controllers/login.php
    global $db_connection;
    try{
        $stmt = $db_connection->prepare('UPDATE users SET ' . $field .  ' = ? WHERE id = ?');
        $stmt->bind_param($valueType . 'i', $_value, $_id);
        $_value = htmlspecialchars($newValue);
        $_id = htmlspecialchars($id);
        $stmt->execute();
        return true;
    }catch(Exception $exception){
        die('update failed');
    }
}

/**
 * this function = get all items on this list in the DB and save them in the var $items.
 */
function getAllUsers()
{
    global $db_connection;
    $res = mysqli_query($db_connection, "SELECT * FROM users");
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
        $stmt = $db_connection->prepare("SELECT * FROM users WHERE id = ?");
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
 * if there is a ID update a existing item, if not create a new item. it also hashes the password.
 *
 *if you save a new password the browser can gives a warning, but only if the site isn't https saved.
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
            $first_name = htmlspecialchars($data['first_name']);
            $last_name = htmlspecialchars($data['last_name']);
            $email = htmlspecialchars($data['email']);
            $password = password_hash($data['password'], PASSWORD_DEFAULT);
            $banned_at = htmlspecialchars($data['banned_at']);
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
            $stmt = $db_connection->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?,?,?,?)");
            $stmt->bind_param("ssss", $first_name, $last_name, $email, $password);
            $first_name = htmlspecialchars($data['first_name']);
            $last_name = htmlspecialchars($data['last_name']);
            $email = htmlspecialchars($data['email']);
            $password = password_hash($data['password'], PASSWORD_DEFAULT);
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
        $stmt = $db_connection->prepare("DELETE FROM users WHERE ID = ?");
        $stmt->bind_param("i", $_id);
        $_id = htmlspecialchars($id);
        $stmt->execute();
        $result = $stmt->get_result();
    } catch (Exception $e) {
        return false;
    }
}
