$(document).ready(function(){
    $('#addEvent').on('submit', function(e){
        e.preventDefault();
        document.getElementById("status").innerHTML = "Uploading...";

        var file = document.getElementById("imageFile").files;


        var data = new FormData(this);
        data.append("imageFile", file)


        $.ajax({
            url: 'php/addevent.php',
            type: 'post',
            data: data,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                document.getElementById("status").innerHTML = data.responseText;

            }, error: function(err)
            {
                document.getElementById("addEvent").reset();
                document.getElementById("status").innerHTML = err.responseText;
                document.getElementById("status").classList.add("alert");
                document.getElementById("status").classList.add("alert-success");

            }
        }
        );

        return false;
    });
});




