function passwordChangeModal()
{
  document.getElementById("new_pass").value = "";
  document.getElementById("old_pass").value = "";
  $('#passwordChange').modal('show');
}

function passwordChange()
{
  let old_pass = $('input#old_pass').val();
  let new_pass = $('input#new_pass').val();

  if(old_pass == "" || new_pass == "")
  {
    alert("Fill in both fields!");
  }
  else if(old_pass == new_pass)
  {
    alert("Type Different Password!");
  }
  else {
    let option = "usrPasswdChange";

    $.ajax({
      url : 'ajax/all_data.php',
      data  : { old_pass:old_pass, new_pass:new_pass, option:option },
      method  : 'POST',
      success : function(data){
        $('#passwordChange').modal('hide');
      }
    });
  }
}
