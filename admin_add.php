<?php 
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href="css/style.css">
    <title>Add Record</title>
</head>
<body>
    
    <header>
        <h3>Add Record</h3>
        <a href="admin.php">Back</a>
    </header>

    
    <section>
        
        <form action="db/insert_records_script.php" method="POST">
            <label for="email">Email</label>
            <input type="text" name="email">

            <label for="username">Username</label>
            <input type="text" name="username">

            <label for="password">Password</label>
            <input type="text" name="password">

            <label for="user-level">User Level</label>
            <input type="text" name="user-level">

            <label for="status">Status</label>
            <input type="text" name="status">

            <input type="submit" id="save-button" name="submit" value="Save">
        </form>

    </section>
    
</body>
</html>