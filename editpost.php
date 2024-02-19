<?php
    $title = "Success";
    require_once 'db/conn.php';

    if(isset($_POST["submit"])){
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $specialty = $_POST['specialty'];

        $isSuccess = $crud->editAttendee($id, $firstname, $lastname, $dob, $email, $phone, $specialty);

        if($isSuccess){
            header("Location: index.php");
        } else {
            echo '<h1 class ="text-center text-danger">There was an error in processing!</h1>';
        }
    } else {
        // error
        include 'includes/errormessage.php';
    }
?>
