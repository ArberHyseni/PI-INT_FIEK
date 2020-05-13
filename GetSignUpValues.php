<?php

    require("dbconfig.php");

    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $pass = $_POST['Password'];         
    $age = $_POST['Age']; 
    $preferences = $_POST['Preferences'];

    $radio_id = ($age == 'Mbi 13') ? 1 : 2;

    $s = " SELECT * FROM user WHERE Email = '$email' ";

    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if($num==1) {
        echo "Email Already Taken";
    } 
    
    else {
        $reg = "INSERT INTO user (Emri, Email, Pass, Mosha_id) VALUES ('$name', '$email', '$pass', $radio_id) ";
        mysqli_query($con, $reg);

        foreach($preferences as $selected) {
            $option = array('Filma', 'Seriale', 'Asnjeren');
            for($i=0; $i<count($option); $i++) {
                if($selected == $option[$i]) {
                    $reg_c = " INSERT INTO check_references (User_id, Check_id) VALUES ('$email', $i+1) ";
                    mysqli_query($con, $reg_c);
                }
            }
        }
        echo "</br> Registration succesful";
    }

?>