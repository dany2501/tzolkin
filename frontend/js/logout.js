$(document).ready(()=>{

    var userType = localStorage.getItem('userType');

    if(!Number.isNaN(parseInt(userType))){
        if(userType==1){

            $("#createclass").css({"display":"none"})
            
        }
    }

    $("#logout-btn").click((e)=>{
        alert("Cerraste sesión");
        localStorage.removeItem('userType');
        localStorage.removeItem('userId');
        window.location.href="index.php";
    });



});
