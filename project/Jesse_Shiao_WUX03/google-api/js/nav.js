///Nav///

function openNav() {
    document.getElementById("app-menu").style.width = "15em";
    document.getElementById("open-nav").style.display = "none";
    document.getElementById("close-nav").style.display = "inline-block";
}

function closeNav() {
    document.getElementById("app-menu").style.width = "0";
    document.getElementById("open-nav").style.display = "inline-block";
    document.getElementById("close-nav").style.display = "none";
}

///GPS///

function openGuide() {
    document.getElementById("output").style.display = "inline-block";
}

function closeGuide() {
    document.getElementById("output").style.display = "none";
}