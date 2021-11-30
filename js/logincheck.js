$(document).ready(function() {
    $("#submitButton").click(function(event) {
      event.preventDefault();
      var email = $("#email").val();
      var password = $("#password").val();

      $.ajax({
        url: 'login.php',
        method: 'post',
        data: {
          login: 1,
          emailPHP: email,
          passwordPHP: password
        },
        success: function(data) {
          // Redirect user if login is successful
          if (data.indexOf('success') >= 1)
          {
            window.location = "index.php";
          }
          else
          {
            document.getElementById("alertDanger").style.display = "block";
            document.getElementById("alertDanger").innerHTML = "Invalid username or password. <br/> No acccount? Click <a href = 'register.php'>here</a> to register."
          }
        },
        dataType: 'text'
      });


    });
  });