<!DOCTYPE html>
<html>
    <head>
        <title>Digital Phone Book</title>
        <?php include 'bootstrap.php'; ?>
    </head>
    <body>
        <?php 
            include 'navbar.html';
            include 'update_script.php';
        ?>
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3"><br>
                <div class="shadow-lg p-3 mb-5 bg-body rounded">
                    <form action="update_script.php" method="POST">
                        <div class="card-title text-center">
                            <br><h3>Update</h3><br>
                        </div>
                        <div class="card-body">
                            <label>First Name: </label>
                            <input type="text" name="first_name" required="required" placeholder="*Enter Frist Name" class='form-control'
                            value="<?php echo $first_name?>"><br/>
                            <label>Last Name: </label>
                            <input type="text" name="last_name" required placeholder="*Enter Last Name" class='form-control' 
                            value="<?php echo $last_name?>"><br>
                            <label>Phone number: </label>
                            <input type="tel" name="phone_number" required placeholder="*The phone number must contain 10 digits" 
                            class='form-control' pattern="\d{10}" maxlength="10" value="<?php echo $phone_number?>"><br>
                            <label>Postal Code: </label>
                            <input type="number" name="postal_code" required placeholder="*The postal code must contain 6 digits" class='form-control' 
                            pattern="\d{6}" maxlength="6" value="<?php echo $postal_code?>"><br>
                            <label>Email: </label>
                            <input type="email" name="email" placeholder="Enter email address" class='form-control' 
                            pattern="^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$" value="<?php echo $email?>"><br>
                            <input type='number' name='id' value="<?php echo $id?>" hidden>
                        </div>
                        <div class="card-footer text-center">
                            <a href='update_script.php?update="<?php echo $id?>"'><input type="submit" name="update" class="btn btn-success" value='Update'></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
