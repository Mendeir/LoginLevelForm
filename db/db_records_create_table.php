<?php  

    include_once("db_connection.php");

    $sql_command = "CREATE TABLE records 
        (
            record_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(100) NOT NULL,
            username VARCHAR(50) NOT NULL,
            user_password VARCHAR(60) NOT NULL,
            user_level VARCHAR(50) NOT NULL,
            user_status VARCHAR(50) NOT NULL
            
        )";

        if ($connection->query($sql_command) === TRUE) {
            echo "Table records created successfully";
        } else {
            echo "Error creating table: ".$connection->error;
        }

        $connection->close();
?>