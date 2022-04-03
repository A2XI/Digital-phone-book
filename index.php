<!DOCTYPE html>
<html>
    <head>
        <title>Digital Phone Book</title>
        <?php include 'bootstrap.php'; ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <?php include 'ajax.php'; ?>
    </head>
    <body>
        <?php 
            include 'navbar.html';
        ?>
        <br>
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3"><br>
                <div class="shadow-lg p-3 mb-5 bg-body rounded">
                    <form method="POST">
                        <div class="card-title text-center">
                            <br><h3 class="text-center">Online phone book</h3><br>
                        </div>
                        <div class="card-body text-center">
                            <p>Enter <b>First Name</b>, <b>Last Name</b> or <b>Email Address</b>:</p>
                            <label class="text-center" style="width: 50%">
                                <input type="text" name="search" id="search" placeholder="Search..." style="width: 100%;">
                            </label>
                        </div>
                        <div id="searchresult" class='card-footer' style="display: none;"></div>
                    </form> 
                </div>
            </div>
        </div>
    </body>
</html>



