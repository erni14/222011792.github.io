function validate(){
    var pesanError = "";

    pesanError += valNama(registrasi.nama.value);
    pesanError += valEmail(registrasi.email.value);

    if (pesanError == "") return true
    else {document.getElementById("pesanErrorBox").innerHTML=pesanError; return false}
}

function valNama(field){
    if(/[^a-zA-Z\ ]/.test(field))
        return "Nama hanya boleh berisi huruf <br>"
    else 
        return "";
}

function valEmail(field){
    if(/[^a-zA-Z0-9\.\@\_\-]/.test(field))
        return "Terdapat karakter yang tidak valid pada email <br>"
    else 
        return "";
}