var ex = false;
function openLog(){
    var f = document.getElementById("openLog");
    if (!ex) {
        f.style.display = "block";
        ex = true;
    } else {
        f.style.display = "none";
        ex = false;
    }
}
