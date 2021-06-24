$(document).ready(()=>{

    var user = $("#signup-user");
    var password = $("#signup-password");
    var tipo = $("#signup-select");
    var button = $("#signup-btn");


    button.click(()=>{

        if(user.val()==""){
            alert("Escribe un nombre de usuario válido");
            return;
        }

        if(password.val()==""){
            alert("Escribe una contraseña válida");
            return;
        }

        signUp(user.val(),password.val(),tipo.val()).then((response)=>{
            console.log(response);
            console.log(typeof(response));
            if(response==true){

                alert("Registrado correctamente");

            }
        })

        

    });
});

const signUp = (username,password,tipo)=>{
    rq = {
        "username":username,
        "password":password,
        "tipo":tipo
      }
        return $.ajax({
            method: "POST",
            url: '../../tzolkin/api/resource/signupRes.php',
            data:rq,
            success: (data) => {
              console.log(data);
                return data;
            }
        });
}