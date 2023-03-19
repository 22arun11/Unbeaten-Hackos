<?php

require('connection.php');


if (isset($_POST['username']) and isset($_POST['password'])) {
    $user = $_POST['username'];
    $passwd = $_POST['password'];
    // echo "yes";
    
    // echo $user;
    // echo $passwd;
    $sql = ("SELECT * FROM signin WHERE username = '$user' AND password = '$passwd'");
    // echo $sql;
    $stmt = mysqli_prepare($conn, $sql);
    // echo $stmt;

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Check if a match was found
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) ==1) {
        // A match was found, so the login is successful
        header('Location:http://localhost/Unbeatenhackos/index.html ');
        exit;

    } else {
        echo "Wrong Username or Password";
        // header('Location: http://localhost/website/.html ');
        
    }
    // No match was found, so the login is unsuccessful
    mysqli_close($conn);

    // Close the connection to the database
}
?>
