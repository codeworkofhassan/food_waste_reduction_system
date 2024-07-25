<?php
$host="127.0.0.1";
$username="root";
$password="";
$database="fwms";

$connect=new mysqli($host,$username,$password,$database);
if(!$connect){
    echo "Something is wrong with db connection!";
}