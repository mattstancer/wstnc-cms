mainarea = document.getElementById("mainarea");
bold = document.getElementById("bold");
italic = document.getElementById("itaic");
mareadiv = documnt.getElementById("mareadiv");
document.addEventListener("keydown", KeyDown, false);
function check() {
    setInterval(podglad, 10);
}
function pochyl() {
mainarea.value += '<span style="font-style:italic;"></span>';
}
function pogrub() {
    mainarea.value += '<span style="font-weight:bold;"></span>';
}
function podglad() {
    mareadiv.innerHTML = mainarea.value;
    alert();

}
function KeyDown(e) {
    if (e.keyCode == 13) {
        mainarea.value += '<br>';
    }
}