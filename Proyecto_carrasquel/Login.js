const btnSingIn =document.getElementById("Sing-in"),
    btnSingUp =document.getElementById("Sing-up"),
    formRegister= document.querySelector(".register"),
    formLogin= document.querySelector(".login");

    btnSingIn.addEventListener("click",e=>{
        formRegister.classList.add("hide");
        formLogin.classList.remove("hide")
    })
    btnSingUp.addEventListener("click",e=>{
        formLogin.classList.add("hide");
        formRegister.classList.remove("hide")
    })
// De aqui para abajo hay que acomodar toda la parte de ingreso
    function registrarse(btnSingIn){
    let user=document.getElementById("usuario").value;
    let email=document.getElementById("correo").value;
    let password=document.getElementById("clave").value;
    if(user=="j")
    }

    function logear(btnSingUp){
        let user=document.getElementById("usuario").value;
        let password=document.getElementById("clave").value; 
    }
    