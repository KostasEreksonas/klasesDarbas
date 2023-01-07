let lemposBusena = true;
function toggleLempute() {
    let img = document.getElementById("lempute");

    if (lemposBusena) {
        keistiAtributus(img, 'off');
    } else {
        keistiAtributus(img, 'on');
    }
    lemposBusena = !lemposBusena;
}

function keistiAtributus(img, param) {
    img.src = '../tmp/lempute-' + param + '.jpg';
    let alt = 'lemputė ' + param;
    img.setAttribute("alt", alt);
}