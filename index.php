<?php
      require_once("home.html");
      $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

      $server = $url["host"];
      $username = $url["user"];
      $password = $url["pass"];
      $db = substr($url["path"], 1);
      
      $con = new mysqli($server, $username, $password, $db);
      // $con = mysqli_connect('127.0.0.1','root','');

      if(!$con){
  echo 'Not connected to server';
         }

         if(!mysqli_select_db($con,'heroku_22bbb7fbf9a5f13')){
  echo "Data Base is not connected";
          }
  
          $FullName = filter_input(INPUT_POST, 'fullname');
          $Email = filter_input(INPUT_POST, 'email');
          $insta = filter_input(INPUT_POST, 'instagram');
          $DOB = filter_input(INPUT_POST, 'DOB');
          $Hobbies = filter_input(INPUT_POST, 'hobbies');
          $Star = filter_input(INPUT_POST, 'star');

  $sql = "INSERT INTO details(FullName,Email,Instagram,DOB,Hobbies,Star) VALUES ('$FullName','$Email','$insta','$DOB','$Hobbies','$Star')";
  mysqli_query($con, $sql);
  // if(!mysqli_query($con, $sql))
//   {
//     echo "Not Connected";
//   }
// else
// {
//   echo "Inserted";
// }

header("refresh:2000; url=home.html");

?>