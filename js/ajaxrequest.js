// Prevent repeat filters
var brands = []
var types = []
var filteredBrands;
var filteredTypes;

$.ajax({
        url: 'php/getdata.php',
        type: 'get',
        datatype: 'JSON',
        success: function (data) {
            var results = JSON.parse(data);
            var numResults = (Object.keys(results).length + " items");
            $("#numResults").html(numResults);
            $.each(results, function(key, value){          
                $("#products").append(generateHTML(value.name, value.price, value.photo, value.description, value.stock) );

            });
        }
    }
);

$.ajax({
    url: 'php/getfilters.php',
    type: 'get',
    datatype: 'JSON',
    success: function (data) {
        var results = JSON.parse(data);

        $.each(results, function(key, value){      
            brands.push(value.brand)
            types.push(value.type)
        });

        // Prevent repeat brands in filters
        filteredBrands = brands.filter(function(elem, index, self) {
            return index === self.indexOf(elem);
        })
        filteredTypes = types.filter(function(elem, index, self) {
            return index === self.indexOf(elem);
        })
        console.log(filteredBrands);

        for (var i = 0; i < filteredBrands.length; i++)
        {
            $("#filters").append(generateFilters( filteredBrands[i]));
            
        }

        for (var i = 0; i < filteredTypes.length; i++)
        {
            $("#filtersType").append(generateTypes( filteredTypes[i]));
            
        }
    }
}
);

// Get Filtered Results
function showResults(brand)
{ 
    $.ajax({
        url: 'php/getfiltereddata.php',
        type: 'post',
        data: {filter: brand},
        success: function (data) {
            while(document.getElementById("products").firstChild)
            {
                document.getElementById("products").removeChild(document.getElementById("products").firstChild);
            }
            var results = JSON.parse(data);
            $.each(results, function(key, value){          
                $("#products").append(generateHTML(value.name, value.price, value.photo, value.description, value.stock) );
            });
            var numResults = (Object.keys(results).length + " item(s) in '" + brand + "'");
            $("#numResults").html(numResults);
        }
    });
}

function showTypes(type)
{ 
    $.ajax({
        url: 'php/getfiltereddatabytype.php',
        type: 'post',
        data: {filter: type},
        success: function (data) {
            while(document.getElementById("products").firstChild)
            {
                document.getElementById("products").removeChild(document.getElementById("products").firstChild);
            }
            var results = JSON.parse(data);
            $.each(results, function(key, value){          
                $("#products").append(generateHTML(value.name, value.price, value.photo, value.description, value.stock) );
            });
            var numResults = (Object.keys(results).length + " item(s) in '" + type + "'");
            $("#numResults").html(numResults);
        }
    });
}

function generateHTML(itemName, price, photo, description, stock)
{
    var html = " <div  style='width:300px; '> <img src='php/images/" + photo + "' class='img-fluid border' alt='' style='height: 200px; width:300px;'> <h6 style='width:100%; '>"+itemName+"</h6> <div><h4>$"+price+"</h5>"+"<button class = 'buy-button snipcart-add-item' data-item-id='"+ itemName + "' data-item-price='" + price + "' data-item-description = '" + description + "' data-item-image = 'php/images/"+photo+"' data-item-name = '"+itemName+"' data-item-max-quantity = '" + stock + "' data-item-url = '/'" + "> Add to cart </button>"+"</div></div><br/>";
console.log(html);
    return(html);

}

function generateFilters(brand)
{
    var html = "<li><a href = 'javascript:void(0);' style = 'text-decoration: none;' onclick= 'showResults(\"" + brand +  "\")'>" + brand + "</a></li>";

    return (html);

}

function generateTypes(type)
{
    var html = "<li><a href = 'javascript:void(0);' style = 'text-decoration: none;' onclick= 'showTypes(\"" + type +  "\")'>" + type + "</a></li>";

    return (html);

}
