function d2O() {
    var b = document.getElementById("length").value;
    var f = 0;
    if (document.getElementById("Nosimilar").checked) {
        f = 1
    }
    var a = 0;
    if (document.getElementById("mSym").checked) {
        a = 1
    }
    var a6 = 0;
    if (document.getElementById("uSym").checked) {
        a6 = 1
    }
    var g = 0;
    if (document.getElementById("sLetters").checked) {
        g = 1
    }
    var b7 = 0;
    if (document.getElementById("selectPass").checked) {
        b7 = 1
    }
    var l = 0;
    if (document.getElementById("cLetters").checked) {
        l = 1
    }
    var p = 0;
    if (document.getElementById("numbers").checked) {
        p = 1
    }

    var o = Em0(b, f, g, l, p, a, a6);
    var k = cY_(o);
    document.getElementById("passRes").value = o;
    if (b > 50) k = "";
    document.getElementById("passHint").value = k;
    if (b7) s_('passRes');
}

function s_(a) {
    document.getElementById(a).focus();
    document.getElementById(a).select()
}

function Em0(r, k, l, m, o, c, x9) {
    var d = "abcdefghjkmnpqrstuvwxyz";
    var h = "ABCDEFGHJKLMNPQRSTUVWXYZ";
    var p = "23456789";
    var j = "!#$%&*+-=?@^_";
    if (!k) {
        d += "ilo";
        h += "IO";
        p += "01";
        j += "|"
    }
    var a = "";
    var g = 0;
    if (!x9) {
        j += "{}[]()\/'\"`~,;:.<>\\";
    }
    if (l == 1) {
        a += d;
        g++
    }
    if (m == 1) {
        a += h;
        g++
    }
    if (o == 1) {
        a += p;
        g++
    }
    if (c == 1) {
        a += j;
        g++
    }
    if (g == 0) {
        q = "You must select at least one character set!";
        return q
    }
    var n = a.length;
    var f = r - g;
    var q = "";
    for (var e = 0; e < f; e++) {
        var b = Math.floor(Math.random() * n);
        q += a.substring(b, b + 1)
    }
    if (m) {
        q = AY_(h, f, q);
        f++
    }
    if (l) {
        q = AY_(d, f, q);
        f++
    }
    if (o) {
        q = AY_(p, f, q);
        f++
    }
    if (c) {
        q = AY_(j, f, q)
    }
    return q
}

function AY_(a, f, b) {
    var d = Math.floor(Math.random() * a.length);
    var c = Math.floor(Math.random() * f);
    var e = b.substring(0, c) + a.substring(d, d + 1) + b.substring(c, f);
    b = e;
    return b
}


function cY_(e) {
    var a = ["anas", "book", "car", "do", "email", "far", "get", "hello", "impress", "juice", "kiss", "load", "mango", "nutella", "origin", "parachute", "quite", "role", "summer", "template", "uae", "video", "wise", "xmen", "youtube", "zara"];
    var d = "";
    for (var b = 0; b < e.length; b++) {
        var f = e.charCodeAt(b);
        if (65 <= f && f <= 90) {
            f -= 65;
            d += a[f].toUpperCase()
        } else {
            if (97 <= f && f <= 122) {
                f -= 97;
                d += a[f]
            } else {
                d += e.substring(b, b + 1)
            }
        }
        d += " "
    }
    return d
}
