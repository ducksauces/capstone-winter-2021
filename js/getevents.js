/*
    Past implementations used the .get function, however this makes the array a string and not of type Array.
    Retrieves product data from AJAX request and generates a view for each product.
*/

$.ajax({
        url: 'php/getevents.php',
        type: 'get',
        datatype: 'JSON',
        success: function (data) {
            var results = JSON.parse(data);

            $.each(results, function(key, value){          
                $("#events").append(generateHTML(value.name, value.photo, value.description) );

            });
        }
    }
);



function generateHTML(title, photo, description)
{
    var html = "<div class = 'card' style = 'width: 18rem;'> <img class = 'card-img-top' src = 'php/eventimages/"+ photo +"'> <div class = 'card-body'><h5 class = 'card-title'>"+ title +"</h5> <p class = 'card-text'>"+ description + "</p></div>"  ;

    return(html);

}
