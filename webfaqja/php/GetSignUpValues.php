<?php

    //make procedural conn to database
    require("dbconfig.php");
    function test_input($start) {
        $start = trim(htmlspecialchars($start));
        $start = stripslashes($start);
        return $start;
    }
    //get values 
    $name = $_POST['Name'];


    $email = $_POST['Email'];

    $pass = $_POST['Password']; 

    //hash pasword
    $pass = password_hash($pass, PASSWORD_DEFAULT);        
    $age = $_POST['Age']; 

    
    
    $preferences = array();

    if (isset($_POST['Preferences'])) {

        $preferences = $_POST['Preferences'];

    } else {

        $preferences[0] = "Asnjeren";

    }

    //check for age 
    $radio_id = ($age == 'Mbi 13') ? 1 : 2;

    //make a query for SQL
    $s = " SELECT * FROM user WHERE Email = ?; ";

    //create a prepared statement
    $stmt = mysqli_stmt_init($con);

    //Prepare the prepared statements
    if (!mysqli_stmt_prepare($stmt, $s)) {

        echo 'SQL statement ka deshtuar';

    } else {

        //Bind parameters to the placeholder
        mysqli_stmt_bind_param($stmt, "s", $email);

        //Run parameters inside database
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        //Get numbers of row
        $num = mysqli_stmt_num_rows($stmt);

        if ($num==1) {

            echo "Email Already Taken";

        } else {

            $reg = " INSERT INTO user (Emri, Email, Pass, Mosha_id) VALUES (?, ?, ?, ?); ";

            if (!mysqli_stmt_prepare($stmt, $reg)) {

                echo "SQL statement ka deshtuar";

            } else {

                //sssi stands for string, string, string, integer
                mysqli_stmt_bind_param($stmt, "sssi", $name, $email, $pass, $radio_id);
                mysqli_stmt_execute($stmt);

            }
    
            foreach($preferences as $selected) {

                $option = array('Filma', 'Seriale', 'Asnjeren');

                for($i=0; $i<count($option); $i++) {

                    if($selected == $option[$i]) {

                        $reg_c = " INSERT INTO check_references (User_id, Check_id) VALUES (?, ?); ";

                        if (!mysqli_stmt_prepare($stmt, $reg_c)) {
            
                            echo "SQL statement ka deshtuar";
            
                        } else {

                            $i = $i + 1;
                            mysqli_stmt_bind_param($stmt, "si", $email, $i);
                            mysqli_stmt_execute($stmt);
                            $i = $i - 1;
            
                        }
                    }
                }
            }

            echo "Registration succesful";
        }
    }
    

    //close prepared statement
    mysqli_stmt_close($stmt);

    //close connection
    mysqli_close($con); 

?>