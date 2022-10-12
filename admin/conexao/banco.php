<?php

$con = mysqli_connect("dumont", "210157", "210157", "d210157");

if (mysqli_connect_error()) {
    echo "Falha ao se conectar ao MySQL: ".mysqli_connect_error();
} else {
    mysqli_select_db($con, "d210157");
}

?>