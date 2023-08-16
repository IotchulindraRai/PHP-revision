<?php
$mark = 343;

function student(){
    global $mark;
    echo "Wow" . $mark."<br>";
}

student();
echo $mark;
?>
