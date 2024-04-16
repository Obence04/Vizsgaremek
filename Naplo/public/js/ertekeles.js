function ertekelesReszlet(array) {
    document.getElementById('erttantargy').innerHTML = array.tant_nev;
    document.getElementById('ertjegy').innerHTML = array.ert_jegy;
    document.getElementById('ertszazalek').innerHTML = array.ert_szazalek;
    document.getElementById('ertdatum').innerHTML = array.ora_datum.replace(/-/g,". ") + " " + array.ora_szam + ". óra";
    document.getElementById('ertido').innerHTML = array.ido_nev;
    document.getElementById('erttip').innerHTML = array.tip_nev;
    document.getElementById('ertleiras').innerHTML = array.ert_leiras;
    document.getElementById('ertreszlet').style.display = "inherit";
}

