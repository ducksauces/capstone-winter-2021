var ajax = new XMLHttpRequest();
ajax.open("GET", "php/getdata.php", true)
ajax.send();

ajax.onreadystatechange = function(){
    if (this.readystate == 4 && this.status == 200)
    {
        console.log(this.responseText);
    }

};