<?php
    $title = "Success";
    require_once 'includes/header.php';
?>
    <h1 class ="text-center text-success">You Have Been Registered!</h1>
    <?php
        if(isset($_GET["submit"])){
            $firstname = $_GET['firstname'];
            $lastname = $_GET['lastname'];
            $dob = $_GET['dob'];
            $specialty = $_GET['specialty'];
            $email = $_GET['email'];
            $phone = $_GET['phone'];
        }
    ?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo "$firstname $lastname"; ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $specialty; ?></h6>
            <p class="card-text"><?php echo "Date of birth: $dob<br>Email: $email<br>Phone: $phone"?></p>
        </div>
    </div>

<?php
    require_once 'includes/footer.php';
?>