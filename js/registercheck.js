$(document).ready(function() {
    $("#submitButton").click(function(event) {
      event.preventDefault();
      var email = $("#email").val();
      var password = $("#password").val();
      var name = $("#name").val();
      var birthdate = $("#birthdate").val();
      var checked = $("#subscribed").val();

      if (checked == "on"){
         checked = 1;
      }else{
        checked = 0;
      }

      $.ajax({
        url: 'php/registerhandler.php',
        method: 'post',
        data: {
          emailPHP: email,
          passwordPHP: password,
          displayNamePHP: name,
          birthdatePHP: birthdate,
          subscribedPHP: checked
        },
        success: function(data) {
          if (data.indexOf('success') >= 1)
          {
            document.getElementById("alertSuccess").style.display = "block";
            document.getElementById("alertSuccess").innerHTML = "Success! You can now log in.";
            document.getElementById("login").reset();

          }
          else if (email.trim() == "" || password.trim() == "" || name.trim() == ""){
            document.getElementById("alertDanger").style.display = "block";
            document.getElementById("alertDanger").innerHTML = "One or more fields is blank. Please fill in all fields.";
          }
          
          else
          {
            document.getElementById("alertDanger").style.display = "block";
            document.getElementById("alertDanger").innerHTML = data + ": The email '" + email + "' is already registered.";
          }
        },
        dataType: 'text'
      });


    });
  });

  function clearWarnings()
{
  document.getElementById("alertDanger").style.display = "none";
  document.getElementById("alertSuccess").style.display = "none";
}