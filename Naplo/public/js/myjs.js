{
    let datum = new Date();
    let Ev = datum.getFullYear();
    let Ho = datum.getMonth();
    let Nap = datum.getDate();
    let NapSorsz = datum.getDay();

    function Szokoev(Ev){
        AzE = false;
        if((Ev%4 == 0) && (Ev%100 != 0)){
            AzE = true;
        } else if(Ev%400 == 0){
            AzE = true;
        }
        return AzE;
    }

    function Honev(Ho){
        let Month = ["Január", "Február", "Március", "Április", "Május", "Június", "Július",
        "Augusztus", "Szeptember", "Október", "November", "December"];
        return Month[Ho];
    }

    function Week(Day){
        let HetNapjai = ["Vasárnap","Hétfő","Kedd","Szerda","Csütörtök","Péntek","Szombat"];
        return HetNapjai[Day];
    }

    document.getElementById("datumnagy").innerHTML =  Ev + ". " + Honev(Ho) + " " + Nap + ".";
    document.getElementById("datumkicsi").innerHTML =  Ev + ". " + ("0"+(Ho+1)).slice(-2) + ". " + Nap + ".";
}
