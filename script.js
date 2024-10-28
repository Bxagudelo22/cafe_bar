function validateForm() {
    const password=document.getElementById("pass_registro").value;
    const confirmPassword=document.getElementById("corfim_pass").value;
    if(password!==confirmPassword){
        alert("Las contraseñas no coinciden");
        return false;
    }
}