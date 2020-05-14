<?php

function emailV($start) {
    $start = trim(htmlspecialchars($start));
    $start = stripslashes($start);
    $start = filter_var($start, FILTER_VALIDATE_EMAIL);
    if ($start === false) {
		exit('Invalid Email');
    }
    return $start;
}

function validate($start) {
    $start = trim(htmlspecialchars($start));
    $start = stripslashes($start);
    return $start;

}
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	//  the request is fine
		if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $msg = $_POST['msg'];
            
            $name = validate($name);
            $subject = validate($subject);
            $msg = validate($msg);

            if (!empty($name) && !empty($email) && !empty($subject) && !empty($msg)) {
                $to = 'arberpr6@gmail.com';
                $subject='Form Submission';
                $fromwho="From: ".$email;
                $message = "Name: ".$name."\n"."Subject: ".$subject."\n"."Wrote the following: \n".$msg;
        
                if (mail($to, $subject, $message, $fromwho)) {
                    echo "<h1> Sent successfully! Thank you"."".$name."\n"."We will contact you the following days";
                } else {
                    echo "Oops! Something went wrong.";
                }
            }
            else {
                echo "</br>Something went wrong";
            }
        }
        

} else {

	exit('Invalid Request');

}
?>