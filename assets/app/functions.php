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

function checkRecruit($id)
  {
    $conn = dbConnect();

    $sql_recruit = "SELECT * FROM recruits WHERE nsuid = :nsuid";
    $statement_recruit = $conn -> prepare($sql_recruit);
    $statement_recruit -> execute([
      ':nsuid'  =>  $id
    ]);

    $sql_member = "SELECT * FROM members WHERE nsuid = :nsuid";
    $statement_member = $conn -> prepare($sql_member);
    $statement_member -> execute([
      ':nsuid'  =>  $id
    ]);

    $recruit = $statement_recruit  -> fetch(PDO::FETCH_ASSOC);
    $member = $statement_member  -> fetch(PDO::FETCH_ASSOC);

    $conn = null;

    if($recruit)
    {
      return 'yes';
    }
    else if($member)
    {
      return 'yes';
    }
    else {
      return 'no';
    }

  }


?>
