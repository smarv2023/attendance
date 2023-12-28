<?php
    $title = "Success";
    require_once 'includes/header.php';
?>
    <h1 class ="text-center text-success">You Have Been Registered!</h1>
    <?php
        if(isset($_POST["submit"])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $dob = $_POST['dob'];
            $specialty = $_POST['specialty'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
        }
    ?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo "$firstname $lastname"; ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $specialty; ?></h6>
            <p class="card-text"><?php echo "Date of birth: $dob"; ?></p>
            <p class="card-text"><?php echo "Date of birth: $specialty"; ?></p>
            <p class="card-text"><?php echo "Date of birth: $email"; ?></p>
            <p class="card-text"><?php echo "Date of birth: $phone"; ?></p>
        </div>
    </div>

<?php
    require_once 'includes/footer.php';
?>