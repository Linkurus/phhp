<?php

declare(strict_types=1);

function is_input_empty(string $username, string $pwd, string $email)                                   // Felder ausgefüllt
{                                                                                                     // Später ergänzen, spalten
      if (empty($username) || empty($pwd) || empty($email) ) {
        return true;
      }
      else {
        return false;
      }
}


function is_email_invalid(string $email) 
{                                                                                                    //Check if E-mail is Valid
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
      } else {
        return false;
      }
}


function is_username_taken(object $pdo,string $username)                                  // error when username is taken
{                                                                                         // no error when username is not taken           
      if (get_username($pdo,$username) ) {
        return true;
      } else {
        return false;
      }
}

function is_email_registered(object $pdo,string $email)                                  // error when username is taken
{                                                                                         // no error when username is not taken           
      if (get_email($pdo,$email)) {
        return true;
      } else {
        return false;
      }
}

function create_user(object $pdo,string $pwd,string $username,string $email)                                  // error when username is taken
{    
   set_user($pdo,$pwd,$username, $email);                                                                                    // no error when username is not taken           
}





?>