<?php

      $con = mysqli_connect('127.0.0.1','root','');

      if(!$con){
  echo 'Not connected to server';
         }

         if(!mysqli_select_db($con,'Form_details')){
  echo "Data Base is not connected";
          }
  
          $FullName = filter_input(INPUT_POST, 'fullname');
          $Email = filter_input(INPUT_POST, 'email');
          $insta = filter_input(INPUT_POST, 'instagram');
          $DOB = filter_input(INPUT_POST, 'DOB');
          $Hobbies = filter_input(INPUT_POST, 'hobbies');
          $Star = filter_input(INPUT_POST, 'star');

  $sql = "INSERT INTO details(FullName,Email,Instagram,DOB,Hobbies,Star) VALUES ('$FullName','$Email','$insta','$DOB','$Hobbies','$Star')";
  if(!mysqli_query($con, $sql))
  {
    echo "Not Connected";
  }
else
{
  echo "Inserted";
}

header("refresh:2000; url=index.html");

?>