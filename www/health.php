<?php
    $myhostn = gethostname();
    if ( $myhostn  == 'bla') {
        die("ERROR - webserver: $myhostn");
    } else {
        echo "OK";
    }
?>
