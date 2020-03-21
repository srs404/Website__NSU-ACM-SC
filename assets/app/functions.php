<?php

require_once "connect.php";

function get_Member($id)
{
  $conn = $GLOBALS['conn'];

  $sql = "SELECT * FROM members WHERE nsuid=:nsuid";

  $statement = $conn -> prepare($sql);
  $statement -> execute([
    ':nsuid'  =>  $id
  ]);
  return $statement -> fetch(PDO::FETCH_ASSOC);
}

function getAllMember()
{
  $conn = $GLOBALS['conn'];
  $sql = "SELECT name, position, team, image, fb, linkedin, github FROM members";

  $statement = $conn -> prepare($sql);
  $statement -> execute();

  return $statement -> fetchAll();
}


?>
