home = document.getElementById("home");
color = home.style.color;
about = document.getElementById("about");
colora = about.style.color;
crew = document.getElementById("crew");
colorc = crew.style.color;
contact = document.getElementById("contact");
colorct = contact.style.color;
events = document.getElementById("events");
colore = events.style.color;
home.onmouseover = function () {
    home.style.color = "#41bb9e";
};
home.onmouseout=function () {
    home.style.color = color;
};
about.onmouseout = function () {
    about.style.color = colora;
};
about.onmouseover = function () {
    about.style.color = "#41bb9e";
};
crew.onmouseout = function () {
    crew.style.color = colorc;
};
crew.onmouseover = function () {
    crew.style.color = "#41bb9e";
};
events.onmouseout = function () {
    events.style.color = colore;
};
events.onmouseover = function () {
    events.style.color = "#41bb9e";
};
contact.onmouseout = function () {
    contact.style.color = colorct;
};
contact.onmouseover = function () {
    contact.style.color = "#41bb9e";
};