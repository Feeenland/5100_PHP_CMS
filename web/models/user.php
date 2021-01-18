<?php
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

function saveUser($data){ // to add a new user
    global $db_connection;
    if($data['id']){
        // update

    }else{
        // Create
        try{
            $stmt = $db_connection->prepare(
                "INSERT INTO users (email, password, first_name, last_name) 
                    VALUES (?,?,?,?)");
            $stmt->bind_param("ssii", $email, $password, $first_name, $last_name);
            $email = $data['emeil'];
            $password = password_hash($data['password'], PASSWORD_DEFAULT);
            $first_name = $data['priority'] ?? 1;
            $last_name = $data['starred'] == 0;
            $stmt->execute();
            return $stmt->insert_id;
        }catch(Exception $e){
            return false;
        }
    }
}
