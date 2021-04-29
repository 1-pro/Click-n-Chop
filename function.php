<?php

function click(){
  $dbname="click";
  $tablename="user";
  $username="root";
  $servername="localhost";
  $password="";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if(!$conn){
    echo "Error in data base connection" . mysqli_connect_error();
    die;
}

return $conn;

}
?>