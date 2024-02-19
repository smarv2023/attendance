<?php
    $title = "Success";
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST["submit"])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $specialty = $_POST['specialty'];

        $isSuccess = $crud->insertAttendees($firstname, $lastname, $dob, $email, $phone, $specialty);

        if($isSuccess){
            include 'includes/successmessage.php';
        } else {
            include 'includes/errormessage.php';
        }
    }
?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo "$firstname $lastname"; ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $specialty; ?></h6>
            <p class="card-text"><?php echo "Date of birth: $dob"; ?></p>
            <p class="card-text"><?php echo "Email: $email"; ?></p>
            <p class="card-text"><?php echo "Contact: $phone"; ?></p>
        </div>
    </div>

<?php
    require_once 'includes/footer.php';
?>