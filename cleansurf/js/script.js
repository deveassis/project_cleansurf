const email = document.querySelector('#email');
const password = document.querySelector('#password');
const btnlogin = document.querySelector('#btn-login');
const btnreset = document.querySelector('#btn-reset')

btnreset.addEventListener('click', function(e){
    e.preventDefault();
    const emailValue = email.value;

    if(emailValue === ""){
        alert("Favor preencher o email e clicar novamente");
        email.style.background = "rgb(243, 83, 83)";
    }else{
        console.log(emailValue);
        email.style.background = "rgb(152, 255, 255)";
    }
})

btnlogin.addEventListener('click', function(e){
    e.preventDefault();

    const emailValue = email.value;
    const passwordValue = password.value;
    //console.log(emailValue, '-', passwordValue);

    if (emailValue === "") {
        alert("Favor preencher o email");
        email.style.background = "rgb(243, 83, 83)";
    } else if (passwordValue === "") {
        alert("Favor preencher a senha");
        password.style.background = "rgb(243, 83, 83)";
    } else {
        if (emailValue !== "" && passwordValue !== "") {
            
            email.style.background = "rgb(152, 255, 255)";
            password.style.background = "rgb(152, 255, 255)";
        }
    }
    
});