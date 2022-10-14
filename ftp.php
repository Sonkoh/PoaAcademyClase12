<?php
$ftp = ftp_connect('206.189.196.164');
ftp_login($ftp, "user", "password");
foreach (ftp_nlist($ftp, ".") as $file) {
    echo $file . "</br>";
}
require 'src/ftp.php';
$ftp = new ftp('206.189.196.164');
$ftp->login("user", "password");
foreach ($ftp->nlist(".") as $file) {
    echo $file . "</br>";
}
?>