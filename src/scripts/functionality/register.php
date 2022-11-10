<?php

    require "../../db/connect.php";

    // Now we check if the data was submitted, isset() function will check if the data exists.
    if (!isset($_POST['username'], $_POST['password'], $_POST['email'], $_POST['firstname'], $_POST['lastname'])) {
        // Could not get the data that should have been sent.
        exit('Please complete the registration form!');
    }

    // Make sure the submitted registration values are not empty.
    if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['firstname']) || empty($_POST['lastname'])) {
        // One or more values are empty.
        exit('Please complete the registration form');
    }

    // We need to check if the account with that username exists.
    if ($stmt = $mysqli->prepare('SELECT id FROM patient WHERE username = ?')) {
        // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();
        // Store the result so we can check if the account exists in the database.
        if ($stmt->num_rows > 0) {
            // Username already exists
            echo 'Username exists, please choose another!';
        } else {
            // Username doesnt exists, insert new account
            if ($stmt = $mysqli->prepare('INSERT INTO patient (firstname, lastname, username, email, password) VALUES (?, ?, ?, ?, ?)')) {
                // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $stmt->bind_param('sssss', $_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['email'], $password);
                $stmt->execute();
                echo 'You have successfully registered, you can now login!';
            } else {
                // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
                echo 'Could not prepare statement!';
            }
        }
        $stmt->close();
    } else {
        // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
        echo 'Could not prepare statement!';
    }
    $mysqli->close();
?>