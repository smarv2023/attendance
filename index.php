<?php
    $title = "Index";
    require_once 'includes/header.php';
?>

        <h1 class ="text-center">Registration for Conference</h1>

        <form>
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname">
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="text" class="form-control" id="dob">
            </div>
            <div class="mb-3">
                <label for="specialty" class="form-label">Select Specialty</label>
                <select class="form-select" aria-label="Default select example" id = "specialty">
                    <option selected>Open this select menu</option>
                    <option value="1">Database Admin</option>
                    <option value="2">Web Administrator</option>
                    <option value="3">Software Developer</option>
                    <option value="4">Other</option>
                </select>
            </div>
            <div class="mb-3">                   
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">                   
                <label for="phone" class="form-label">Email address</label>
                <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp">
                <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
<?php
    require_once 'includes/footer.php';
?>