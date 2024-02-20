
function Kivalasztas(kategoria){

    document.getElementsByName("feltolt").forEach(Atszinez);

    document.getElementsByName("formok").forEach(Elrejtes);

    switch (kategoria) {
        case "osztaly":
            FormMegjelenit("osztalyfelvetel");
            document.getElementById("osztfelv").classList.replace("btn-secondary", "btn-primary");
            break;
        case "tanulo":
            FormMegjelenit("tanulfelvetel");
            document.getElementById("tanulfelv").classList.replace("btn-secondary", "btn-primary");
            break;
        case "tanar":
            FormMegjelenit("tanarfelvetel");
            document.getElementById("tanarfelv").classList.replace("btn-secondary", "btn-primary");
            break;
        case "tanitott":
            FormMegjelenit("tanitottfelvetel");
            document.getElementById("tanitottfelv").classList.replace("btn-secondary", "btn-primary");
            break;
        case "orarend":
            FormMegjelenit("orarendfelvetel");
            document.getElementById("orafelv").classList.replace("btn-secondary", "btn-primary");
            break;
        case "tantargy":
            FormMegjelenit("tantargyfelvetel");
            document.getElementById("tantargyfelv").classList.replace("btn-secondary", "btn-primary");
            break;
        default:
            break;
    }
}

function Elrejtes(elem){
    elem.style.display="none";
}

function FormMegjelenit(id){
    document.getElementById(id).style.display="";
}

function Atszinez(elem){
    elem.classList.replace("btn-primary", "btn-secondary");
}



Kivalasztas('osztaly');

//document.querySelector("#osztfelv").addEventListener("click", Felvetel_Osztaly());


