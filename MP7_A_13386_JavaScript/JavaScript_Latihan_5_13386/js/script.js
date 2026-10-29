//function fn_ValForm()
function fn_ValForm(){
    var sMsg;

    if(document.getElementById("nama").value == ""){
        sMsg += ("\n* Anda Belum mengisikan nama");
    }
    if(document.getElementById("email").value == ""){
        sMsg += ("\n* Anda Belum Mengisikan Email");
    }
    if(document.getElementById("umut").value == ""){
        sMsg += ("\n* Anda Belum Mengisikan Umur");
    }

    if(sMsg != ""){
        alert("Peringatan:\n" + sMsg);
        return false;
    } else {
        return true;
    }
}


//If-Else Umur
var sInfo;

if(document.getElementById("umur").value <= 14){
    sInfo = "Kategori Junior";
} else {
    sInfo = "Kategori Senior";
}

//Switch-Case
var sPilihan;
var Pilihan

sPilihan = document.getElementById("kategori");

switch (sPilihan){
    case "C":
        Pilihan = "Cerdas Cermat";
        break;
    case "P":
        Pilihan = "Puisi";
        break;
    case "D":
        Pilihan = "Design Poster";
        break;
    default:
        alert("Manu tidak Valid");
}