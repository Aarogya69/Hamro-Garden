// var card= document.getElementById("card");

// For assigning flip function on login button right side
const box = document.querySelector(".box");
    
function L(){
box.style.display="block";
}

//For assining flip on reg
// const Rbox = document.querySelector(".box");
    
// function R(){
// Rbox.style.display="block";
// Rbox.style.transform="rotateY(-180deg)";
// }


//For login and Register flip
var login= document.getElementsByClassName("login");

function openRegister(){
    card.style.transform="rotateY(-180deg)";
    
}

function openLogin(){
    card.style.transform="rotateY(0deg)";
}
