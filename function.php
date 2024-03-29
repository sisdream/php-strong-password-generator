<?php
function getRandomString($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.,-_!?^|@#%$£=';
    $randomString = '';

    $checked = '';
    if (isset($_GET['repeat'])) {
        $checked = 'checked';
    }
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        if ($checked) {
            if (str_contains($randomString, $index)) {
                return;
            } else {
                $randomString .= $characters[$index];
            }
        } else {
            $randomString .= $characters[$index];
        }
    }
    return $randomString;
}

$random_password = getRandomString($user_length);

if ($user_length) {
    session_start();
    $_SESSION['random_password'] = $random_password;
    header('location: password.php');
}