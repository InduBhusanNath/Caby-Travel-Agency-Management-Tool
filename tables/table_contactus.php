<?php
require 'database_connect.php';
      $sql = "CREATE TABLE table_contactus (
                      id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                      message_date DATE NULL,
                      prospect_name VARCHAR(255) NULL,
                      prospect_phone VARCHAR(255) NULL,
                      prospect_message VARCHAR(255) NULL
                      
                      
          )";
  
       $conn->exec($sql);
    
       if($conn){
                     echo "table_contactus Table Created Successfully.....";
       }else {
                   echo "Failed to Create table_contactus Table.....";
       }
?>