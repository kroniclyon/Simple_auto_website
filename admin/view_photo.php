<?php

require "../dbconnect.php";

$sqlimage  = "SELECT * FROM vehicles where `id` = '6'";
$imageresult1 = mysqli_query($conn, $sqlimage);

while($rows=mysqli_fetch_assoc($imageresult1))
{
    $image = $rows['photo1'];
    $image1 = $rows['main_photo'];
    echo "<img src='$image' >";
    echo "<img src='$image1' >";
    echo "<br>";
}




  ?>