<?php
    $title = "Edit Records";
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    $results = $crud->getSpecialties();

    if(!isset($_GET['id'])) {
        echo "error";
    } else {
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);

        $firstname = $attendee['firstname'];
        $lastname = $attendee['lastname'];
        $dob = $attendee['dateofbirth'];
        $email = $attendee['email'];
        $phone = $attendee['phone'];
        $specialty = $attendee['specialty_id'];
?>

        <h1 class ="text-center">Registration for Conference</h1>

        <form method = "post" action ="editpost.php">
            <input type="hidden" value="<?php echo $attendee['attendee_id'] ?>" name="id">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname"  value="<?php echo $firstname ?>">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname"  value="<?php echo $lastname ?>">
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="text" class="form-control" id="dob" name="dob"  value="<?php echo $dob ?>">
            </div>
            <div class="mb-3">
                <label for="specialty" class="form-label">Area of Specialty</label>
                <select class="form-select" aria-label="Default select example" id = "specialty" name="specialty">
                    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                        <option value="<?php echo $r['specialty_id'] ?>" <?php if ($r['specialty_id'] === $attendee['specialty_id']) echo 'selected' ?>>
                            <?php echo $r['name']?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">                   
                <label for="email" class="form-label">Email address</label>
                <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email"  value="<?php echo $email ?>">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">                   
                <label for="phone" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="phone"  value="<?php echo $phone?>">
                <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
            </div>

            <button type="submit" class="btn btn-success" name="submit">Save Changes</button>
        </form>
    <?php } ?>
        
<?php
    require_once 'includes/footer.php';
?>