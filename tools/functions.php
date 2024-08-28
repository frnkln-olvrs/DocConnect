<?php

function validate_email($email)
{
    // Check if the 'email' key exists in the $_POST array
    if (isset($email)) {
        $email = trim($email); // Trim whitespace
        // Check if the email is not empty
        if (empty($email)) {
            return "Email is required";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Check if the email has a valid format
            return "Email you've entered is invalid format.";
        } else {
            return 'success';
        }
    } else {
        return 'Email is required'; // 'email' key doesn't exist in $_POST
    }
}

function validate_wmsu_email($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $pattern = '/@wmsu\.edu\.ph$/i';

        // Check if the email matches the pattern
        if (preg_match($pattern, $email)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false; // Invalid email format
    }
}
