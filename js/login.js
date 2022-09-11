document.getElementById("showPwd")?.addEventListener("click", ()=>{
    if(document.getElementById("login_password").type=="password"){
        document.getElementById("login_password").type = "text"
    }else{
        document.getElementById("login_password").type = "password"
    }
})