<?php
    session_start();
    // inicialize variables
    $nam = "";
    $email = "";
    $id = 0;
    $edit_state = false;

    // Database params
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $passw = "";
    $database = "db_nwlet";
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername, $username, $passs, $database, $dbport);
    
    // save data
    if (isset($_POST['save'])) {
        $nam = $_POST['nam'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        
        $query = "INSERT INTO info (nam, lastName, email) VALUES ('$nam', '$lastName', '$email')";
        mysqli_query($db, $query);
        header('location: index.php'); //redirect to the index page    
    }

    /* upadate records
    if (isset($_POST['update'])) {
    	$nam = $_POST['nam'];
    	$lastName = $_POST['lastName'];
    	$email = $_POST['email'];
    	$id = $_POST['id'];

    	mysqli_query($db, "UPDATE info SET nam='$nam', lastName='$lastName', email='$email' WHERE id = $id");
    	header('location: index.php'); 
    }
    */
    
    // delete records
    if (isset($_GET['del'])){
    	$id = $_GET['del'];
    	mysqli_query($db, "DELETE FROM info WHERE id=$id");
    	header('location: admin.php');
    }

    // retrieve records
    $results = mysqli_query($db, "SELECT * FROM info");
    
?>