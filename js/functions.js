function desplegarMenu() {
    var x = document.getElementById("header__options");
    if (x.style.display === "grid") {
    x.style.display = "none";
    } else {
    x.style.display = "grid";
    }
}