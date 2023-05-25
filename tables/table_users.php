<?php
require 'database_connect.php';
      $sql = "CREATE TABLE table_users (
                      id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                      entry_date VARCHAR(255) NULL,
                      name VARCHAR(255) NULL,
                      username VARCHAR(255) NULL,
                      phone VARCHAR(255) NULL,
                      password VARCHAR(255) NULL,
                      designation VARCHAR(255) NULL,
                      address VARCHAR(255) NULL,
                      admin_status VARCHAR(255) NULL
          )";
  
       $conn->exec($sql);
    
       if($conn){
                     echo "table_users Table Created Successfully.....";
       }else {
                   echo "Failed to Create table_users Table.....";
       }
?>