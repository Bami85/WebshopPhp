<?php

try{

    include_once("./../Controllers/newsletterController.php");
    
    


}catch(Exception $e) {
    echo json_encode(array("Message" => $e->getMessage(), "Status" => $e->getCode()));
}


?>
