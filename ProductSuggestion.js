function showHint(str) {
    if (str.length == 0) { 
        return;
    }
    
    xhttp = new XMLHttpRequest();
    var keyword = document.getElementById("txt1");
    var tabel_anggota = document.getElementById("tabel_anggota");    
   xhttp.onreadystatechange = function() {
       if(xhttp.readyState == 4 && xhttp.status == 200) {

           tabel_anggota.innerHTML = xhttp.responseText;
       }
   }
    xhttp.open("GET", "ProductHint.php?keyword="+str, true);
    xhttp.send(); 
   }
   