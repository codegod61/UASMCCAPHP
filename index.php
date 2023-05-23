<?php

$connect = mysqli_connect (
    'db',
    'php_docker',
    'password',
    'php_docker'
);

$table_name = "php_table";

$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

echo "<strong>$table_name: </strong>";
while($i = mysqli_fetch_assoc($response))
{
    echo "<p>".$i['TITLE']."</p>";
    echo "<p>".$i['BODY']."</p>";
    echo "<p>".$i['TANGGAL']."</p>";
    echo "<hr>";
}