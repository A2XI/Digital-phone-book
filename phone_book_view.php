<!DOCTYPE html>
<html>
    <head>
        <title>Digital Phone Book</title>
        <?php include 'bootstrap.php'?>
    </head>
    <body>
        <?php include 'navbar.html'?>
        <div class="container">
                <div class="col-md-8 offset-md-2"><br>
                    <div class="shadow-lg p-3 mb-5 bg-body rounded">
                    <?php require_once 'phone_book_view_script.php' ?>
                </div>
            </div>
        </div>
        
    </body>
</html>



