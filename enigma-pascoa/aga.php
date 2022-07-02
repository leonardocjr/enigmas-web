<?php
$vvv = $_POST['vvv'];
If (($vvv != "world")) {
    Header("Location: erou.html");
} else {
    Header("Location: tree");
}
?>