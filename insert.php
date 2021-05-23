<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = new mysqli('localhost', 'root', '', 'apointmentsystem');

    $Name = $_POST['pname'];
    $Phone = $_POST['phoneno'];
    $Date = $_POST['pdate'];
    $Time = $_POST['ptime'];
    $Age = $_POST['age'];
    $Doctor = $_POST['sel_doc'];
 
    $stmt = $conn->prepare("insert into patient(Name, Phone, Date, Time, Age, Doctor) values(?, ?, ?, ?, ?, ?)");
        echo "Data Base Connected";
        $stmt->bind_param("sissis", $Name, $Phone, $Date, $Time, $Age, $Doctor);    //sending data to the database
        $stmt->execute();
            echo " Apointment successful!!";
    $stmt->close();
    $conn->close();
    header('Location: apointment.html');
    exit;
?>

