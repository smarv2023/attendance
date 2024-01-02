<?php
    $title = "Index";
    require_once 'includes/header.php';
?>

        <h1 class ="text-center">Registration for Conference</h1>

        <form method = "post" action ="success.php">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="text" class="form-control" id="dob" name="dob">
            </div>
            <div class="mb-3">
                <label for="specialty" class="form-label">Area of Specialty</label>
                <select class="form-select" aria-label="Default select example" id = "specialty" name="specialty">
                    <option selected>Open this select menu</option>
                    <option value="Database Admin">Database Admin</option>
                    <option value="Web Administrator">Web Administrator</option>
                    <option value="Software Developer">Software Developer</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="mb-3">                   
                <label for="phone" class="form-label">Email address</label>
                <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="email">
                <div id="phoneHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">                   
                <label for="phone" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="phone">
                <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
<?php
    require_once 'includes/footer.php';
?>