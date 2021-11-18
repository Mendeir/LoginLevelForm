<?php 

    include_once("db_connection.php");
    

    if(isset($_POST["submit"])) {
        $email = $_POST["email"];
        $username = $_POST["username"];
        $user_password = $_POST["password"];
        $user_level = $_POST["user-level"];
        $user_status = $_POST["status"];


        $query = "INSERT INTO records(email, username, user_password, user_level, user_status) 
                  VALUES ('$email', '$username', '$user_password', '$user_level', '$user_status')";
        
        $run = mysqli_query($connection, $query);

        if($run) {
            echo "Record submitted successfully!";
        } else {
            echo "Record submission failed!";
        }
    }
?>