<?php

  ini_set('session.gc_maxlifetime', 3600);
  session_set_cookie_params(3600);
  session_start();

  // $server = "localhost";
  // $user   = "root";
  // $pass   = "";
  // $db     = "members_list";

  $server = "localhost"; //sql164.main-hosting.eu
  $user   = "u266162680_root";
  $pass   = "01597530gonzoX";
  $db     = "u266162680_acm";

  // try {
  //   $conn = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
  //   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // } catch ( PDOException $e ) {
  //   echo "Connection failed: " . $e->getMessage();
  // }

?>
