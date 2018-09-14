<?php
    $a = 5;
    $b = 4;
    echo"$a == $b : ". ($a == $b);
    //5 tidak sama dengan 4
    echo"<br>$a != $b : ". ($a != $b);
    //benar, 5 tidak sama dengan 4
    echo"<br>$a > $b : ". ($a > $b);
    //benar, 5 lebih dari 4
    echo"<br>$a < $b : ". ($a < $b);
    //salah, 5 tidak lebih kecil dari 4
    echo"<br>($a == $b) && ($a > $b) : ".(($a != $b) && ($a > $b));
    echo"<br>($a == $b) || ($a > $b) : ".(($a == $b) || ($a < $b));
?>