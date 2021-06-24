$(document).ready(()=>{

    var materia = $("#materia");
    var name = $("#name");
    var grado = $("#grado");
    var button = $("#submit-btn");
    

    button.click(()=>{

        if(materia.val()!=0 && name.val()!="" &&grado.val()!=0){
            login(materia.val(),password.val()).then((response)=>{
                if(response!=null){
                    localStorage.setItem('userId',response[0]);
                    localStorage.setItem('userType',response[3]);
                    window.location.href="index.php";
                }
            });
        }else{
            alert("Ingresa datos validos");
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
            url: '../../tzolkin/api/resource/classesRes.php',
            data:rq,
            success: (data) => {
              console.log(data);
                return data;
            }
        });
}