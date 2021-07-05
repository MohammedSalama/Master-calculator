<?php 

require "cal.php";

if (isset($_POST['x']))
{
    $cal = new cal($_POST['x'],$_POST['y'],$_POST['op']);
    
    echo "<br>";

    $cal->welcome();

}

cal::drawcal();

?>