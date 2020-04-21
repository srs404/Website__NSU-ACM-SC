<?php

  require_once 'functions.php';

  //Edit Recruit
  if(isset($_POST['option']) && $_POST['option'] == 'edit')
  {
    $name = $_POST['name'];
    $nsuid = $_POST['nsuid'];
    $email = $_POST['email'];
    $cell = $_POST['cell'];
    $area = $_POST['area'];
    $skills = $_POST['skills'];
    $exp = $_POST['exp'];
    $ques_heard = $_POST['ques_heard'];
    $ques_other_club = str_replace("'", "/0/", $_POST['ques_other_club']); //$_POST['ques_other_club'];
    $ques_connections = str_replace("'", "/0/", $_POST['ques_connections']); //$_POST['ques_connections'];
    $ques_join = $_POST['ques_join'];
    $ques_join = str_replace("'", "/0/", $ques_join);

    $sql = "UPDATE recruits SET name=:name, nsuid=:nsuid, email=:email, area=:area, cell=:cell, ques_join=:ques_join, ques_heard=:ques_heard, ques_other_club=:other_clubs, ques_connections=:connections, skills=:skills, experience=:experience WHERE nsuid = :nsuid";

    $statement = $conn -> prepare($sql);
    $statement -> execute([
      ':name' => $name,
      ':nsuid'  =>  $nsuid,
      ':email'  =>  $email,
      ':area'   =>  $area,
      ':cell'   =>  $cell,
      ':ques_join'   => $ques_join,
      ':ques_heard'   => $ques_heard,
      ':other_clubs'   => $ques_other_club,
      ':connections'   => $ques_connections,
      ':skills'   => $skills,
      ':experience'   => $exp
    ]);
  }
  elseif (isset($_POST['option']) && $_POST['option'] == 'testing') {
    $_SESSION['name'] = "Worked!";
  }
  //usrPasswdChange
  else if(isset($_POST['option']) && $_POST['option'] == 'usrPasswdChange')
  {

    $usr = get_Member($_SESSION['nsuid']);

    if(password_verify($_POST['old_pass'], $usr['password'] ))
    {
      $pass = password_hash($_POST['new_pass'], PASSWORD_DEFAULT);


      $sql = "UPDATE members SET password=:pass WHERE nsuid=:mem_id";
      $statement = $conn -> prepare($sql);
      $statement -> execute([
        ':mem_id' => $_SESSION['nsuid'],
        ':pass'   => $pass
      ]);
    }
  }
  //Delete Recruit
  else if(isset($_POST['option']) && $_POST['option'] == 'delete')
  {
    $id = $_POST['recruit_id'];

    $sql = "DELETE FROM recruits WHERE nsuid=:rec_id";
    $statement = $conn -> prepare($sql);
    $statement -> execute([
      ':rec_id' => $id
    ]);
  }
  //Add New Recruit
  else if (isset($_POST['option']) && $_POST['option'] == 'input') {
    $nsuid = $_POST['nsuid'];
    if(checkRecruit($nsuid) == 'no')
    {
      $name = $_POST['name'];
      $ques_join = $_POST['ques_join'];
      $ques_join = str_replace("'", "/0/", $ques_join);
      $email = $_POST['email'];
      $cell = $_POST['cell'];
      $area = $_POST['area'];
      $skills = $_POST['skills'];
      $exp = $_POST['exp'];
      $ques_heard = $_POST['ques_heard'];
      $ques_other_club = str_replace("'", "/0/", $_POST['ques_other_club']); //$_POST['ques_other_club'];
      $ques_connections = str_replace("'", "/0/", $_POST['ques_connections']); //$_POST['ques_connections'];

      if(date('m') >= 9 && date('m') <= 12)
      {
        $Current_Semester = date('y') . 3;
      }
      else if(date('m') >= 1 && date('m') <= 4)
      {
        $Current_Semester = date('y') . 1;
      }
      else
      {
        $Current_Semester = date('y') . 2;
      }

      $sql = "INSERT INTO recruits (name, nsuid, signup_semester, email, area, cell, ques_join, ques_heard, ques_other_club, ques_connections, skills, experience, active) VALUES (:name, :nsuid, :semester, :email, :area, :cell, :ques_join, :ques_heard, :ques_other_club, :ques_connections, :skills, :experience, 'YES')";
      $statement = $conn -> prepare($sql);
      $statement -> execute([
        ':name'              => $name,
        ':nsuid'             => $nsuid,
        ':semester'          => $Current_Semester,
        ':email'             => $email,
        ':area'              => $area,
        ':cell'              => $cell,
        ':ques_join'         => $ques_join,
        ':ques_heard'        => $ques_heard,
        ':ques_other_club'   => $ques_other_club,
        ':ques_connections'  => $ques_connections,
        ':skills'            => $skills,
        ':experience'            => $exp
      ]);
    }
    else {
      echo "<script type='text/javascript'>alert('User Already Exists!');</script>";
    }


  }
  //Accept Recruits
  else if(isset($_POST['option']) && $_POST['option'] == 'accept')
  {
    $id = $_POST['recruit_id_current'];
    $team = $_POST['team'];
    // echo "<script type='text/javascript'>alert('$team');</script>";
    add_Recruit($id, $team);
  }
  //Realtime Data Update
  else {

    $sql = "SELECT * FROM recruits ORDER BY serial DESC";
    $statement = $conn -> prepare($sql);
    $statement -> execute();

    $data = $statement  -> fetchAll();

    foreach ($data as $d):

?>

<tr>
  <td><?php echo $d['serial']; //echo $i++; ?></td>
  <td><?php echo $d['name']; ?></td>
  <td><?php echo $d['email']; ?></td>
  <td><?php echo $d['nsuid']; ?></td>
  <td><?php echo $d['cell']; ?></td>
  <td>
    <a class="btn btn-danger btn-sm <?php if($_SESSION['usid'] == '1234567') { echo 'disabled'; } ?>" id="recruit_delete" recruit_id="<?php echo $d['nsuid']; ?>" href="#"><i class="mdi mdi-close"></i></a>

    <!-- <input type="hidden" id="RecruitInfoPass" > -->
    <a class="btn btn-secondary btn-sm" id="recruit_edit" recruit_skills="<?php echo $d['skills']; ?>" recruit_exp="<?php echo $d['experience']; ?>" recruit_ques_heard="<?php echo $d['ques_heard']; ?>" recruit_ques_join="<?php echo str_replace("/0/", "'", $d['ques_join']); ?>" recruit_other_club="<?php echo str_replace("/0/", "'", $d['ques_other_club']); ?>" recruit_connections="<?php echo str_replace("/0/", "'", $d['ques_connections']); ?>" recruit_ recruit_id="<?php echo $d['nsuid']; ?>" recruit_name="<?php echo $d['name']; ?>" recruit_email="<?php echo $d['email']; ?>" recruit_cell="<?php echo $d['cell']; ?>" recruit_area="<?php echo $d['area']; ?>" href="#"><i class="mdi mdi-clipboard-account"></i></a>
    <a class="btn btn-success btn-sm" id="recruit_add" recruit_id="<?php echo $d['nsuid']; ?>" recruit_name="<?php echo $d['name']; ?>" recruit_serial="<?php echo $d['serial']; ?>" href="#"><i class="mdi mdi-check"></i></a>
  </td>
</tr>

<?php endforeach; } ?>
