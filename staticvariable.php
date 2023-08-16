<?php
function aba(){
    static $man=33;
    $man++;
    echo "man:".$man."<br>";
}
aba();
aba();
aba();
?>