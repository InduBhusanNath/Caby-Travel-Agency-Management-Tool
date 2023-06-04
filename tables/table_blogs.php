<?php
require 'database_connect.php';
      $sql = "CREATE TABLE table_blogs (
                      id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                      entry_date VARCHAR(255) NULL,
                      title VARCHAR(255) NULL,
                      category VARCHAR(255) NULL,
                      author VARCHAR(255) NULL,
                      others VARCHAR(255) NULL,
                      image_path1 VARCHAR(255) NULL,
                      blog_body VARCHAR(255) NULL
                      
          )";
  
       $conn->exec($sql);
    
       if($conn){
                     echo "table_blogs Table Created Successfully.....";
       }else {
                   echo "Failed to Create table_blogs Table.....";
       }
?>