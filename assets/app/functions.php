<?php

require_once "connect.php";

function dbConnect()
{
  $server = $GLOBALS['server'];
  $user = $GLOBALS['user'];
  $pass = $GLOBALS['pass'];
  $db = $GLOBALS['db'];

  try {
    $conn = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch ( PDOException $e ) {
    echo "Connection failed: " . $e->getMessage();
  }

  return $conn;
}

function get_Member($id)
{
  $conn = dbConnect();

  $sql = "SELECT * FROM members WHERE nsuid=:nsuid";

  $statement = $conn -> prepare($sql);
  $statement -> execute([
    ':nsuid'  =>  $id
  ]);
  return $statement -> fetch(PDO::FETCH_ASSOC);
}

function getAllMember()
{
  $conn = dbConnect();
  $sql = "SELECT name, position, team, image, fb, linkedin, github FROM members";

  $statement = $conn -> prepare($sql);
  $statement -> execute();

  $conn = null;

  return $statement -> fetchAll();
}


?>
