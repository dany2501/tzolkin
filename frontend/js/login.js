$(document).ready(()=>{

    var user = $("#login-user");
    var password = $("#login-password");
    var button = $("#login-btn");

    button.click(()=>{

        if(user.val()!="" && password.val()!=""){
            login(user.val(),password.val()).then((response)=>{
                if(response!=null){
                    localStorage.setItem('userId',response[0]);
                    localStorage.setItem('name',response[1]);
                    localStorage.setItem('userType',response[3]);
                    window.location.href="classes.php";
                }
            });
        }
    });



});

const login = (username,password)=>{
    rq = {
        "username":username,
        "password":password
      }
        return $.ajax({
            method: "POST",
            url: '../../tzolkin/api/resource/loginRes.php',
            data:rq,
            success: (data) => {
                return data;
            }
        });
}