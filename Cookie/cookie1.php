<?php
    $value = "Shefira";
    $value2 = "Shefira TS";

    setcookie("username", $value);
    setcookie("fullname", $value2);

    echo "<h1>Halaman Pengetesan cookie</h1>";

    echo "<h2>Pencet <a href='cookie2.php'>ini</a> yuk untuk mengetes!</h2>";
?>