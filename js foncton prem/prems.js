function afficher() {
    var saisie = document.getElementById("premier").value;
    is_prem(saisie);
}

function list_prem(x) {

    x = parseInt(x);
    n = 2;
    l_prem = [2];
    res = true;
    k = 2;
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
            l_prem.push(n);
        }
        k += 1;
    }
    if (x < 2) {
        l_prem = []
    }
    return l_prem;
}

function is_prem(x) {
    if (x != null | x != 0) {
        if (x >= 5) {
            prem = list_prem(Math.sqrt(x));
        } else {
            prem = list_prem(x)
        }

        res = null;
        i = 0;
        res = true;
        while ((prem.length != 0) & (x % prem[i] != 0) & (i < prem.length - 1)) {
            res = true;
            i += 1;
        }
        if ((prem.length == 0) | (x % prem[i] == 0 & prem[i] != x)) {
            res = false;
        }


        if (res) {
            str = "OUI ";
            document.getElementById("reponse").textContent = str.concat(x, " EST PREMIER.");
            document.getElementById("reponse").style.color = "green";
        } else {
            if (res == false) {
                str2 = "NON ";
                document.getElementById("reponse").textContent = str2.concat(x, " N'EST PAS PREMIER.");
                document.getElementById("reponse").style.color = "red";
            }
        }
    }

}