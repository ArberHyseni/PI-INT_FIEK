<?php

//make a conn with database
require("dbconfig.php");

//make query for SQL
//$s = " SELECT Email, Pass FROM user WHERE Email = ? AND Pass = ?; ";
$s = " SELECT Email FROM user WHERE Email = ?; ";

//create a prepared statement
$stmt = mysqli_stmt_init($con);

//Prepare the prepared statements
if (!mysqli_stmt_prepare($stmt, $s)) {

    echo "SQL statement has failed";

} else {

    if (isset($_POST['Login'])) {

        if (empty($_POST['Email']) || empty($_POST['Password'])) {

            header("location: login.php");

        } else {

            //get inputs of user
            $email = $_POST['Email'];
            $pass = $_POST['Password'];

            //Bind parameters to the placeholder
            mysqli_stmt_bind_param($stmt, "s", $email);

            //execute statement 
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            //check if user is registred
            $num = mysqli_stmt_num_rows($stmt);

            if ($num < 1) {

                echo "You are not registered. <br> Click <a href=signup.html>here</a> to register";
    
            } else {

                $s = " SELECT Email, Pass FROM user WHERE Email = ? AND Pass = ?; ";

                if (!mysqli_stmt_prepare($stmt, $s)) {

                    echo "SQL statement has failed";

                } else {

                    mysqli_stmt_prepare($stmt, $s);
                    mysqli_stmt_bind_param($stmt, "ss", $email, $pass);
                    mysqli_stmt_execute($stmt);

                    //get email and pass from database and store to emailDB and pasDB
                    mysqli_stmt_bind_result($stmt, $emailDB, $passDB);
                    mysqli_stmt_fetch($stmt);

    
                    //check for correct login
                    if ($emailDB == $email and $passDB == $pass) {
        
                        //check for remember click
                        if (isset($_POST['Remember'])) {

                            //set cookie for one day
                            setcookie('Email', $email, time()+60*60*7, '/');

                        } 

                        session_start();
                        $_SESSION['Email'] = $email;
        
                        //redirect to another page
                        header("location: Welcome.php");
    
                } else {
    
                    echo "Email or Password is Invalid.<br> Click here to <a href='login.php'>try again</a>";
    
                    }
                }   
            
            }
        }
    } else {

        header("location: login.php");
        
    }
}

?>