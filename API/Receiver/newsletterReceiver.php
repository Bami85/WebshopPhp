<?php

try {
    require("./../repositories/emailRepository.php");
     if(isset($_SERVER["REQUEST_METHOD"])) {

         if($_SERVER["REQUEST_METHOD"] == "POST") {

           if ($_POST["action"] == "add") {
                $newsletter = json_decode($_POST["newsletter"], true);
                echo json_encode(addNewsletter($newsletter));
             }

         }else{
             throw new ErrorException("Wrong method..", 500);
         }

 } else {
     throw new ErrorException("No requestMethod set..", 500);
 }

 } catch(Exception $e)   {
     http_response_code($e->getCode());
     echo json_encode(array("status" => $e->getCode(), "Message" => $e->getMessage()));
 }
 ?>
