$(document).ready(()=>{

    var materia = $("#materia");
    var name = $("#name");
    var grado = $("#grado");
    var button = $("#submit-btn");

    var profId=localStorage.getItem('userId');
    button.click(()=>{
        if(materia.val()!=0 && name.val()!="" &&grado.val()!=0){
            createClass(name.val(),materia.val(),grado.val(),profId).then((response)=>{
                if(response!=null){
                    window.location.reload();
                }
            });
        }else{
            alert("Ingresa datos validos");
        }
    });



});

const createClass = (name,materia,grado,profId)=>{
    rq = {
        "name":name,
        "materia":materia,
        "grado":grado,
        "profId":profId
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