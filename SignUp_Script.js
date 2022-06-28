function validate(){
    var pesanError = "";

    pesanError += valUsername(signup_next.usrname.value);
    pesanError += valPassword(signup_next.pwd.value);
    pesanError += matchPassword(signup_next.pwd.value, signup_next.kpwd.value)

    if (pesanError == "") return true
    else {document.getElementById("pesanErrorBox").innerHTML=pesanError; return false}
}

function valUsername(field){
    if(/[^a-zA-Z0-9\.\_\-]/.test(field))
        return "Terdapat karakter yang tidak valid pada username <br>"
    else 
        return "";
}

function valPassword(field){
    if (field.length < 8)
        return "Password minimal 8 karakter <br>"
    else if(field.length>12)
        return "Password maksimal 12 karakter <br>"
    else if(/[^a-zA-Z0-9]/.test(field))
        return "Password hanya boleh berisi huruf dan angka <br> "
    else 
        return "";
}

function matchPassword(pwd1, pwd2) {
    if(pwd1 != pwd2)
        return "Password tidak sesuai <br>"
    else
        return ""
}