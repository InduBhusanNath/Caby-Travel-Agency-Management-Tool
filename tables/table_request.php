<?php
require 'database_connect.php';
      $sql = "CREATE TABLE table_enquiry (
                      id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                      trip_type VARCHAR(255) NULL,
                      pickup_date VARCHAR(255) NULL,
                      return_date VARCHAR(255) NULL,
                      prospect_name VARCHAR(255) NULL,
                      prospect_phone VARCHAR(255) NULL,
                      pickup_address VARCHAR(255) NULL,
                      drop_address VARCHAR(255) NULL
          )";
  
       $conn->exec($sql);
    
       if($conn){
                     echo "table_enquiry Table Created Successfully.....";
       }else {
                   echo "Failed to Create table_enquiry Table.....";
       }
?>