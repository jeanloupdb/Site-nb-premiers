function list2() {

    var saisie = document.getElementById("list").value;
    document.getElementById("rep").textContent = "Liste des nombres premiers jusqu'à " + saisie + " : ";
    document.getElementById("rep").style.color = "green";
    if (saisie != null) {
        res = list_prem2(saisie)
        i = 0;
        /*while (i < res.length) {
            let k = " ; ";
            let l = res[i];
            let stri = l + k;

            document.getElementById("rep2").textContent += stri;
            i++;
        }*/
        document.getElementById("rep2").style.border = "5px solid rgb(178,34,34)";
        document.getElementById("rep2").style.borderRadius = "10px";
        document.getElementById("rep2").style.padding = "2%";
        document.getElementById("rep2").style.backgroundColor = "rgb(230,230,230)";
    } else {
        document.getElementById("rep2").textContent = "Vous devez cliquer sur Afficher.";
    }
}

function list_prem2(x) {

    x = parseInt(x);
    n = 2;
    l_prem = [2];
    res = true;
    k = 2;
    document.getElementById("rep2").textContent = n;
    while (k != x & x > 1) {
        n += 1;
        i = 0;
        while ((n % l_prem[i] != 0) & (l_prem[i] <= parseInt(Math.sqrt(n)))) {
            res = true;
            i += 1;
        }
        if (n % l_prem[i] == 0) {
            res = false;
        }
        if (res) {
            let k = " ; ";
            let stri = k + n;
            document.getElementById("rep2").textContent += stri;
            l_prem.push(n);
        }
        k += 1;
    }
    if (x < 2) {
        l_prem = []
    }
    return l_prem;
}