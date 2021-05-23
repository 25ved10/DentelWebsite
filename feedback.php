<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = new mysqli('localhost', 'root', '', 'apointmentsystem');

    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Subject = $_POST['subject'];
    $Description = $_POST['desc'];
 
    $stmt = $conn->prepare("insert into feedback(Name, Email, Subject, Description) values(?, ?, ?, ?)");
        echo "Data Base Connected";
        $stmt->bind_param("ssss", $Name, $Email, $Subject, $Description);    //sending data to the database
        $stmt->execute();
            echo " FeedBack Sent!";
    $stmt->close();
    $conn->close();
    header('Location: index.html');
    exit;
?>
