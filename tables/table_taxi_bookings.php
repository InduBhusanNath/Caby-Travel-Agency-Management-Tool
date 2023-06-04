<?php
require 'database_connect.php';
      $sql = "CREATE TABLE table_taxi_bookings (
                      id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                      trip_type VARCHAR(255) NULL,
                      pickup_date VARCHAR(255) NULL,
                      return_date VARCHAR(255) NULL,
                      pickup_time VARCHAR(255) NULL,
                      prospect_name VARCHAR(255) NULL,
                      prospect_phone VARCHAR(255) NULL,
                      prospect_email VARCHAR(255) NULL,
                      pickup_address VARCHAR(255) NULL,
                      drop_address VARCHAR(255) NULL,
                      
                      vehicle_number VARCHAR(255) NULL,
                      vehicle_type VARCHAR(255) NULL,
                      vehicle_model VARCHAR(255) NULL,
                      driver_name VARCHAR(255) NULL,
                      driver_phone VARCHAR(255) NULL,
                      driver_idendity VARCHAR(255) NULL,
                      fare VARCHAR(255) NULL,
                      advance_fare  VARCHAR(255) NULL,
                      pending_fare  VARCHAR(255) NULL,
                      final_fare_payment VARCHAR(255) NULL,
                      fare_status VARCHAR(255) NULL,
                      booking_status VARCHAR(255) NULL,
                      booking_status_reasons VARCHAR(255) NULL,
                      trip_status VARCHAR(255) NULL,
                      trip_status_reasons VARCHAR(255) NULL
         )";
  
       $conn->exec($sql);
    
       if($conn){
                     echo "table_taxi_bookings Table Created Successfully.....";
       }else {
                   echo "Failed to Create table_taxi_bookings.....";
       }
?>