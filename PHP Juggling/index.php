<?php 

if (isset($_GET['hash'])) {
    if ($_GET['hash'] === "QNKCDZO") {
        die('Not so easy mate.');
    }

    $hash = md5($_GET['hash']);
    $target = md5(QNKCDZO);
    if($hash == $target) {
        include('flag.php');
        print $flag;
    } else {
        print "FLAGCTF{not-the-one}";
    }
} else {
    show_source(__FILE__);
}

?>
