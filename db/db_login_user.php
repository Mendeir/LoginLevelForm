<?php 

    include_once("db_connection.php");

    if(isset($_POST["submit"])) {
        $username = $_POST["username"];
        $user_password = $_POST["password"];

        $query = "SELECT * FROM records WHERE username='$username' AND user_password='$user_password'";
        $run = mysqli_query($connection, $query);
        

        if((mysqli_num_rows($run) === 1)) {
            $result = mysqli_fetch_array($run);

            if ($result['user_level'] == 'admin')
                header("Location:../admin.php");
            
            if ($result['user_level'] == 'user')
                header("Location:../user.php");
        } else {
            echo "User Login failed!";
        }
    }



?>