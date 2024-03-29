<?php
    $title = "View Record";
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if(!isset($_GET['id'])) {
        echo "<h1 class='text-danger'>Please4 check details and try again</h1>";
    } else {
        $id = $_GET['id'];
        $result = $crud->getAttendeeDetails($id);

        $firstname = $result['firstname'];
        $lastname = $result['lastname'];
        $dob = $result['dateofbirth'];
        $email = $result['email'];
        $phone = $result['phone'];
        $specialty = $result['name'];
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
    <br/>
        <a href="viewrecords.php?" class="btn btn-info">Back to List</a>
        <a href="edit.php?id=<?php echo $result['attendee_id']?>" class="btn btn-warning">Edit</a>
        <a onclick="return confirm('Are you sure you want to delete this record?')"href="delete.php?id=<?php echo $result['attendee_id']?>" class="btn btn-danger">Delete</a>
    <?php } ?>
<?php
    require_once 'includes/footer.php';
?>