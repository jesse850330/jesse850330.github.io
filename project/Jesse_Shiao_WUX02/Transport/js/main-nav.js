document.getElementById('tool').style.visibility = 'visible';

function openNav() {
  document.getElementById("sidenav").style.right = "0px";
  document.querySelector("#overlay").style.display = "block";
}

function closeNav() {
  document.getElementById("sidenav").style.right = "-1000px";
  document.querySelector("#overlay").style.display = "none";
}

function openNav1() {
  document.getElementById("sidenav").style.height = "750px";
  document.getElementById("sidenav1").style.display = "block";
  document.querySelector("#overlay").style.display = "block";
}

function closeNav1() {
  document.getElementById("sidenav").style.height = "600px";
  document.getElementById("sidenav1").style.display = "none";
  document.querySelector("#overlay").style.display = "block";
}