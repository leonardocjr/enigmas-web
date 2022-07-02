<?php
$easter = $_POST['easter'];
If (($easter != "happy easter")) {
    Header("Location: erou.html");
} else {
    Header("Location: jooj");
} 
?>