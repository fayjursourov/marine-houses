function redhover(){

    return document.getElementsByClassName("red-hover").style.backgroundColor = "red";
}

function login_notice(){

    return document.getElementById("login-notice").innerHTML = "Email address or password error!";
}


function year(){

    return document.getElementById("copywrite").innerHTML = "&copy; "+new Date().getFullYear() + " MarineHouses All Rights Reserved.";

}

function add_to_cart(){
    return document.getElementById("add-cart").style.backgroundColor = "#2f2f5f";
}

function out_add_to_cart(){
    return document.getElementById("add-cart").style.backgroundColor = "#a60606";
}