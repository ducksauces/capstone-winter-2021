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
            console.log(Object.keys(results).length + " results");
            $.each(results, function(key, value){          
                $("#events").append(generateHTML(value.name, value.photo, value.description) );

            });
        }
    }
);



function generateHTML(title, photo, description)
{
    var html = "<div><img src='php/images/" + photo + "' class='img-fluid p-1' alt='' style='height: 200px; width:300px; float: left;'> <div><h2 style='float:left;'>"+ title + " </h2></div></div>";

    return(html);

}
