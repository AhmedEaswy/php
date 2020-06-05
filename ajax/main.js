function showsug(str) {
    var output = document.getElementById("output");
    if(str.length == 0) {
        output.innerHTML = '';
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                output.innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "suggest.php?q="+str, true);
        xmlhttp.send();
    }
}