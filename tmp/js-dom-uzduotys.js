// Pirma užduotis
let pirmas = document.getElementsByTagName('img');
console.log(pirmas.length);

// Antra užduotis
document.getElementById('uuid').innerHTML = 'Šiame puslapyje yra ' + pirmas.length + ' paveikslėliai.';

// Trečia užduotis
//document.getElementsByTagName('button').onclick = window.alert(pirmas.length);

// Ketvirta užduotis
let alt = 'testas';
for (let i = 0; i < pirmas.length; i += 2) {
    //document.getElementsByTagName('img')[i].setAttribute("alt", alt);
    let elementas = pirmas[i];
    elementas.alt = alt;
}

// Penkta užduotis
let penkta = document.getElementById('uuid');
penkta.style = 'font-size 24px; background-color: green; width: 200px; height: 200px';
//penkta.style.fontSize = '24px';
//penkta.style.backgroundColor = 'green';
//penkta.style.width = '200px';
//penkta.style.height = '200px';