<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webdb";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "INSERT INTO form2 (email, phone) VALUES ('$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location.href='index2.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

   
    $conn->close();
}

?>