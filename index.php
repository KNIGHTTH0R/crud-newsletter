<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Newsletter</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <!-- Style CSS Custom-->
        <link rel="stylesheet" href="/custom/style.css" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="col-sm-12">
                <?php if (isset($_SESSION['msg'])): ?>
                    <div class="msg">
                    <?php
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    ?>
                    </div>
                <?php endif ?>
                 <form method="post" action="server.php">
                     <div class="form-group">
                         <h1>Newsletter</h1>
                     </div>
                     <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="nam" class="form-control" id="name">
                      </div>
                      <div class="form-group">
                        <label for="name">Last Name:</label>
                        <input type="text" name="lastName" class="form-control" id="name">
                      </div>
                      <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" name="email" class="form-control" id="email">
                      </div>
                      <button type="submit" name="save" class="btn btn-default">Submit</button>
                      <a href="admin.php" type="submit" name="admin" class="btn btn-default">Admin</a>
                 </form> 
            </div>
        </div>
    </body>
</html>