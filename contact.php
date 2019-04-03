<?php
if($_POST["message"]) {
    mail("eoleahy@tcd.ie", "This works", $_POST["age","nationality"], "From: 'mail'");
}
?>
