<?php
    
    session_start();
    echo "Welcome " . $_SESSION['Email'];
    echo "<br><a href='logout.php'>logout</a>";

?>