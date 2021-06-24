$(document).ready(()=>{

    var userType = localStorage.getItem('userType');
    var name = localStorage.getItem('name');
    if(!Number.isNaN(parseInt(userType))){
        if(userType==1){

            $("#createclass").css({"display":"none"})
            
        }
    }
    
    $("#name-user").text("Bienvenido "+name);

    $("#logout-btn").click((e)=>{
        alert("Cerraste sesión");
        localStorage.removeItem('userType');
        localStorage.removeItem('userId');
        window.location.href="index.php";
    });



});
