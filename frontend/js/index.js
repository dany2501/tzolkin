$(document).ready(()=>{
    var userType = localStorage.getItem('userType');
    if(!Number.isNaN(parseInt(userType))){
        $("#login").css({"display":"none"});
        $("#signup").css({"display":"none"});
        $("#logout-btn").css("display:block");
    }else{
        $("#logout-btn").css({"display":"none"})
    }


    $("#logout-btn").click((e)=>{
        e.preventDefault();
        alert("Cerraste sesión");
        localStorage.removeItem('userType');
        localStorage.removeItem('userId');
        window.location.reload();
    });

    $("#menu").click(() => {
        $("#sidenav").css("width", "305px");
        $("#menu").fadeOut(200);
    });
    $("#close-btn").click(function () {
        $("#sidenav").css("width", "0px");
        $("#menu").fadeIn(200);
    });

});