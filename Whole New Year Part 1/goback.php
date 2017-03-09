<?php
    if(file_exists("../data/account.txt")) {
        header("Location: wholenewyearmember.php");
    } else {
        header("Location: wholenewyear.php");
    }
?>