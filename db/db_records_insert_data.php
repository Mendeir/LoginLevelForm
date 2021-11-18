<?php 
    include_once("db_connection.php");

    $sql_command = "INSERT INTO records(email, username, user_password, user_level, user_status)
    VALUES ('user1@email.com', 'user1', 'user123', 'admin', 'active');";

    $sql_command .= "INSERT INTO records(email, username, user_password, user_level, user_status)
    VALUES ('user2@email.com', 'user2', 'user321', 'user', 'active');";

    $sql_command .= "INSERT INTO records(email, username, user_password, user_level, user_status)
    VALUES ('user3@email.com', 'user3', 'user123', 'admin', 'active');";

    $sql_command .= "INSERT INTO records(email, username, user_password, user_level, user_status)
    VALUES ('user4@email.com', 'user4', 'user321', 'user', 'active');";

    $sql_command .= "INSERT INTO records(email, username, user_password, user_level, user_status)
    VALUES ('user5@email.com', 'user5', 'user123', 'admin', 'active');";

    $sql_command .= "INSERT INTO records(email, username, user_password, user_level, user_status)
    VALUES ('user6@email.com', 'user6', 'user321', 'user', 'disable');";

    $sql_command .= "INSERT INTO records(email, username, user_password, user_level, user_status)
    VALUES ('user7@email.com', 'user7', 'user123', 'admin', 'disable');";

    $sql_command .= "INSERT INTO records(email, username, user_password, user_level, user_status)
    VALUES ('user8@email.com', 'user8', 'user321', 'user', 'disable');";

    $sql_command .= "INSERT INTO records(email, username, user_password, user_level, user_status)
    VALUES ('user9@email.com', 'user9', 'user123', 'admin', 'disable');";

    $sql_command .= "INSERT INTO records(email, username, user_password, user_level, user_status)
    VALUES ('user10@email.com', 'user10', 'user321', 'user', 'disable');";

    if ($connection->multi_query($sql_command) === FALSE) {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
?>