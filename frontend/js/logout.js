$(document).ready(()=>{

    $("#logout-btn").click((e)=>{
        alert("Cerraste sesión");
        localStorage.removeItem('userType');
        localStorage.removeItem('userId');
        window.location.href="index.php";
    });



});
