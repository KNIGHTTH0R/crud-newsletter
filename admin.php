<?php  include('server.php'); 
    
    // fetch the record to be update
    if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $edit_state = true;
        $rec = mysqli_query($db, "SELECT * FROM info WHERE id=$id");
        $record = mysqli_fetch_array($rec);
        $nam = $record['nam'];
        $lastName = $record['lastName'];
        $email = $record['email'];
        $id = $record['id'];
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Newsletter - Admin</title>
        
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
                
                <table>
                    <?php if (isset($_SESSION['msg'])): ?>
                        <div class="msg">
                        <?php
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        ?>
                        </div>
                    <?php endif ?>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>E-mail</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_array($results)){ ?>
                            <tr>
                              <td><?php echo $row['nam'] ?></td>
                              <td><?php echo $row['lastName'] ?></td>
                              <td><?php echo $row['email'] ?></td>
                              <td><a class="del_btn" href="server.php?del=<?php echo $row['id']; ?>">Delete</a></td>
                            </tr>
                       <?php } ?>
                    </tbody>
                </table> 
            </div>
        </div>
    </body>
</html>