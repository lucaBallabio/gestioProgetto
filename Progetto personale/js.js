var vettQuantità = [];
var vettAlimenti = [];
var vettCosto = [];
numEl = 0;
var c=0;

function aggiungiTabella() {
    for (var i = 0; i < numEl; i++) {
        if (vettAlimenti[i] == a) {
            vettQuantità[i] = vettQuantità[i] + 1;
            c=1;
        }
    }

    if (c=0) {
        vettAlimenti[numEl] = a;
        vettCosto[numEl] = b;
        vettQuantità[numEl] = 1;
        numEl++;
        alert("ciao");
    }

    for (var i = 0; i < numEl; i++) {
        tab += "<tr><td>" + vettAlimenti[i] + "</td><td>" + vettCosto[i] + "</td><td>" + vettQuantità[i] + "</td></tr>";
    }

    document.getElementById("tabella").innerHTML = tab;
    
}