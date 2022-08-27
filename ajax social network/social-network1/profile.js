document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("body").onload = loadPosts
    document.querySelector("#updateStatusForm").onsubmit = submitStatus
    function submitStatus(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //reload the posts to reflect the users new post
            loadPosts()
            }
        }
        xhttp.open("POST", "update-status.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        const status =document.querySelector("#status").value
        xhttp.send(`status=${status}`);
        return false
    }
    function loadPosts() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          displayPosts(this);
            }
        }
        xhttp.open("GET", "all_posts.php", true);
        xhttp.setRequestHeader('Content-Type',  'text/xml');
        xhttp.responseType = "document";
        xhttp.send();
    }
    function displayPosts(xml) {
        var xmlDoc = xml.responseXML;
        var div = "<div>";
        var xmlfile = xmlDoc.getElementsByTagName("POST");
        if(xmlfile.length>0){
            for (let i = 0; i < xmlfile.length; i++) {
                div +="<div class='status'>"+xmlfile[i].getElementsByTagName("USER")[0].childNodes[0].nodeValue +
                "<hr>" +
                xmlfile[i].getElementsByTagName("STATUS")[0].childNodes[0].nodeValue +
                "</div>";
            }
        }
        else{
            div+="No Posts available yet"
        }
        document.getElementById("posts").innerHTML = div;
    }
})