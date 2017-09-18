<?php
$link=mysqli_connect("localhost:3306","ffven_repuestos","r20697009");
mysqli_select_db($link,"ffventa1_repuestos");
if (mysqli_connect_errno())
{
    echo "Failed to connect to mysqli: " . mysqli_connect_error();
}
