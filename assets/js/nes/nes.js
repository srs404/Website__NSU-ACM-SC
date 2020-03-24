(function($){

  let recruit_opt;

  function clearAllInput()
  {
    document.getElementById("fname").value = "";
    document.getElementById("nsuid").value = "";
    document.getElementById("email").value = "";
    document.getElementById("cell").value = "";
    document.getElementById("area").value = "";
    document.getElementById("ques_join").value = "";
    document.getElementById("ques_other_club").value = "";
    document.getElementById("ques_connections").value = "";

    document.getElementById("heard_1").checked = false;
    document.getElementById("heard_2").checked = false;
    document.getElementById("heard_3").checked = false;
    document.getElementById("heard_4").checked = false;

    document.getElementById("team_select_1").checked = false;
    document.getElementById("team_select_2").checked = false;
    document.getElementById("team_select_3").checked = false;
    document.getElementById("team_select_4").checked = false;

    for (var x=0, n = document.getElementsByName('skills[]').length;x<n;x++)
    {
      if (document.getElementsByName('skills[]')[x].checked)
      {
        document.getElementsByName('skills[]')[x].checked = false;
      }
    }

    for (var x=0, n = document.getElementsByName('experience[]').length;x<n;x++)
    {
      if (document.getElementsByName('experience[]')[x].checked)
      {
        document.getElementsByName('experience[]')[x].checked = false;
      }
    }


  }


  //Toggle New Recruit Button
  $(document).on('click', 'a#add_recruit', function(){

    clearAllInput();

    $('#AddRecruit').modal('show');
    recruit_opt = 'add';

    return false;

  });


  $(document).ready(function(){
    $('input#addRecruit').click(function(){

      //Recruit Variables
      let name = $('input#fname').val();
      let nsuid = $('input#nsuid').val();
      let email = $('input#email').val();
      let cell = $('input#cell').val();

      ques_join = document.getElementById('ques_join').value;
      ques_other_club = document.getElementById('ques_other_club').value;
      ques_connections = document.getElementById('ques_connections').value;


      //Skills section
      let skill_options = document.getElementsByName('skills[]');

      var skills = "";
      for (var x=0, n=skill_options.length;x<n;x++)
      {
        if (skill_options[x].checked)
        {
          skills += ", "+skill_options[x].value;
        }
      }
      if (skills)
      {
        skills = skills.substring(2);
      }

      //Experience Section

      let exp_options = document.getElementsByName('experience[]');

      var exp = "";
      for (var x=0, n=exp_options.length;x<n;x++)
      {
        if (exp_options[x].checked)
        {
          exp += ", "+exp_options[x].value;
        }
      }
      if (exp)
      {
        exp = exp.substring(2);
      }


      //Heard From
      let ques_heard;
      var radios = document.getElementsByName('ques_heard');

      for (var i = 0, length = radios.length; i < length; i++) {
        if (radios[i].checked) {
          ques_heard = radios[i].value;
          break;
        }
      }

      //Area v1.2
      let e = document.getElementById("area");
      let area = e.options[e.selectedIndex].value;

      if(name == '' || nsuid == '' || email == '' || cell == '' || ques_join =='' || ques_heard == '' || ques_other_club == '' || ques_connections == '')
      {
        alert('Basic Information Fields Are Required');
      }
      else {
        if(recruit_opt == 'add')
        {

          let option = 'input';
          $.ajax({
            url : 'ajax/all_data.php',
            data  : { name:name, nsuid:nsuid, email:email, cell:cell, area:area, ques_join:ques_join, ques_heard:ques_heard, ques_other_club:ques_other_club, ques_connections:ques_connections, skills:skills, exp:exp, option:option },
            method  : 'POST',
            success : function(data){
              showAllData();
              $('#AddRecruit').modal('hide');
            }
          });
        }
        else if(recruit_opt = 'edit'){

          let option = 'edit';
          $.ajax({
            url : 'ajax/all_data.php',
            data  : { name:name, nsuid:nsuid, email:email, cell:cell, area:area, ques_join:ques_join, ques_heard:ques_heard, ques_other_club:ques_other_club, ques_connections:ques_connections, skills:skills, exp:exp, option:option },
            method  : 'POST',
            success : function(data){
              showAllData();
              $('#AddRecruit').modal('hide');
            }
          });

        }
      }

    });

    showAllData();
    function showAllData()
    {
      $.ajax({
        url : 'ajax/all_data.php',
        success : function(data)
        {
          $('#allData').html(data);
        }
      });
    }

    //Delete Data v1.2
    $(document).on('click', 'a#recruit_delete', function(){
      let recruit_id = $(this).attr('recruit_id');
      let option = 'delete';

      $.ajax({
        url : 'ajax/all_data.php',
        data : { recruit_id: recruit_id, option:option },
        method : "POST",
        success : function(data)
        {
          showAllData();
        }
      });

      return false;

    });

    //Edit Data v1.2
    $(document).on('click', 'a#recruit_edit', function(){
      clearAllInput();

      let recruit_id = $(this).attr('recruit_id');
      let name = $(this).attr('recruit_name');
      let email = $(this).attr('recruit_email');
      let cell = $(this).attr('recruit_cell');
      let area = $(this).attr('recruit_area');
      let ques_join = $(this).attr('recruit_ques_join');
      let ques_other_club = $(this).attr('recruit_other_club');
      let ques_connections = $(this).attr('recruit_connections');


      //Skilss Section
      var skills = $(this).attr('recruit_skills');
      var skills_list = skills.split(', ');

      for (var i = 0, length = document.getElementsByName('skills[]').length; i < length; i++) {

        if(skills.includes(document.getElementsByName('skills[]')[i].value))
        {
          document.getElementsByName('skills[]')[i].checked = true;
        }
      }

      //Experience Section
      var exp = $(this).attr('recruit_exp');
      var exp_list = exp.split(', ');

      for (var i = 0, length = document.getElementsByName('experience[]').length; i < length; i++) {

        if(exp.includes(document.getElementsByName('experience[]')[i].value))
        {
          document.getElementsByName('experience[]')[i].checked = true;
        }
      }

      //Question Heard Section
      let ques_heard = $(this).attr('recruit_ques_heard');
      var radios = document.getElementsByName('ques_heard');

      for (var i = 0, length = radios.length; i < length; i++) {

        if(ques_heard == radios[i].value)
        {
          radios[i].checked = true;
          break;
        }
      }
      //======================================================

      $('input#fname').val(name);
      $('input#nsuid').val(recruit_id);
      $('input#email').val(email);
      $('input#cell').val(cell);
      $('textarea#ques_join').val(ques_join);
      $('textarea#ques_other_club').val(ques_other_club);
      $('textarea#ques_connections').val(ques_connections);
      selectElement('area', area);


      $('#AddRecruit').modal('show');
      recruit_opt = 'edit';

      return false;

    });


    //Select Option for area (currently Not in Use)
    function selectElement(id, valueToSelect) {
      let element = document.getElementById(id);
      element.value = valueToSelect;
    }


    let recruit_id_current; //This is for Select Team Model for input#acceptRecruit
    //Add Data v1.2
    $(document).on('click', 'a#recruit_add', function(){
      let recruit_id = $(this).attr('recruit_id');
      let name = $(this).attr('recruit_name');
      let serial = $(this).attr('recruit_serial');

      recruit_id_current = $(this).attr('recruit_id'); //This is for Select Team Model for input#acceptRecruit

      acceptModal(name, recruit_id, serial);

      function addRecruitProcess(recruit_id)
      {
        let option = 'accept';

        $.ajax({
          url : 'ajax/all_data.php',
          data : { recruit_id: recruit_id, option:option },
          method : "POST",
          success : function(data)
          {
            showAllData();
          }
        });
      }

      function acceptModal(name, recruit_id, recruit_serial)
      {

        $('#AcceptRecruitSerial').text("Serial: " + recruit_serial);
        $('#AcceptRecruitName').text(name);
        $('#AcceptRecruitID').text("ID: " + recruit_id);
        $('#AcceptRecruit').modal('show');
      }

      return false;

    });

    $('input#acceptRecruit').click(function(){
      let option = 'accept';
      let team;

      var radios = document.getElementsByName('team_select');

      for (var i = 0, length = radios.length; i < length; i++) {
        if (radios[i].checked) {
          team = radios[i].value;
          //alert(radios[i].value);

          break;
        }
      }

      if(team == null)
      {
        alert("You Must Select A Team!");
      }
      else {
        $.ajax({
          url : 'ajax/all_data.php',
          data : { recruit_id_current: recruit_id_current, team:team, option:option },
          method : "POST",
          success : function(data)
          {
            showAllData();
            $('#AcceptRecruit').modal('hide');
          }
        });
      }
      return false;

      });

    setInterval(function(){
      showAllData();
    }, 2000);


  });
})(jQuery)
