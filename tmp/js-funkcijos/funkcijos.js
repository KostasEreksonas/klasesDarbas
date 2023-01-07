// Pirma užduotis
// ---------------------------------------------------------------------------------------------------------
let studentas_arr = ["Kostas", "Ereksonas", 1, "CodeAcademy", [6, 7, 8]];

function isvedimas(arr) {
    return arr[0] + ' ' + arr[1] + ', mokosi ' + arr[3] + ', ' + arr[2] + ' kurse, jo pažymiai: ' + arr[4];
}

document.getElementById("pirma").innerHTML = isvedimas(studentas_arr);
// ---------------------------------------------------------------------------------------------------------
// Antra užduotis
// ---------------------------------------------------------------------------------------------------------
function tipai(arr) {
    let ats = '';
    for (let i = 0; i < arr.length; i++) {
        ats += 'Parametro \'' + arr[i] + '\' tipas yra \'' + typeof arr[i] + '\'<br>\n';
    }
    return ats;
}

document.getElementById("antra").innerHTML = tipai(studentas_arr);
// ---------------------------------------------------------------------------------------------------------
// Trečia - penkta užduotys
// ---------------------------------------------------------------------------------------------------------
function objArray() {
    let Kostas = {vardas: "Kostas", pavarde: "Ereksonas", kursas: 1, istaiga: "CodeAcademy", pazymiai: [6, 7, 8]};
    let Petras = {vardas: "Petras", pavarde: "Petraitis", kursas: 2, istaiga: "KU", pazymiai: [7, 8, 9, 10]};
    let Jonas = {vardas: "Jonas", pavarde: "Jonaitis", kursas: 3, istaiga: "KTU", pazymiai: [4, 5]};
    let Mantas = {vardas: "Mantas", pavarde: "Mantaitis", kursas: 4, istaiga: "VU", pazymiai: [5, 6, 7, 8]};
    vardai = [];
    studentai = [Kostas, Petras, Jonas, Mantas];
    for (let i = 0; i < studentai.length; i++) {
        vardai.push(' ' + studentai[i].vardas);
    }
    console.log(studentai);
    return vardai;
}
document.getElementById("trecia").innerHTML = 'Dalyvaujantys studentai yra ' + objArray() + ', o papildomi duomenys apie juos yra konsolėje.';
// ---------------------------------------------------------------------------------------------------------
// Septinta užduotis
// ---------------------------------------------------------------------------------------------------------
function isvedimas_dot(arr) {
    let x = '';
    for (let i = 0; i < arr.length; i++) {
        x += arr[i].vardas + ' ' + arr[i].pavarde + ', mokosi ' + arr[i].istaiga + ', ' + arr[i].kursas + ' kurse, jo pažymiai: ' + arr[i].pazymiai + '<br>';
    }
    return x;
}

function isvedimas_bracket(arr) {
    let x = '';
    for (let i = 0; i < arr.length; i++) {
        x += arr[i]["vardas"] + ' ' + arr[i]["pavarde"] + ', mokosi ' + arr[i]["istaiga"] + ', ' + arr[i]["kursas"] +
            ' kurse, jo pažymiai: ' + arr[i]["pazymiai"] + '<br>';
    }
    return x;
}

document.getElementById("septinta_dot").innerHTML = isvedimas_dot(studentai);
document.getElementById("septinta_bracket").innerHTML = isvedimas_bracket(studentai);
// ---------------------------------------------------------------------------------------------------------
// Aštunta užduotis
// ---------------------------------------------------------------------------------------------------------
function pazymiai(arr) {
    let ats = '';
    for (let i = 0; i < arr.length; i++) {
        let kiekis = arr[i].pazymiai.length;
        ats += 'Studento ' + arr[i].vardas + ' pažymiai yra: ';
        for (let j = 0; j < kiekis; j++) {
            if (j === kiekis - 1) {
                ats += arr[i].pazymiai[j] + '.';
            } else {
                ats += arr[i].pazymiai[j] + ', ';
            }
        }
        ats += '<br>';
    }
    return ats;
}

document.getElementById("astunta").innerHTML = pazymiai(studentai);
// ---------------------------------------------------------------------------------------------------------
// Devinta užduotis
// ---------------------------------------------------------------------------------------------------------
function kelimas(arr) {
    let ats = '';
    for (let i = 0; i < arr.length; i++) {
        let kiekis = arr[i].pazymiai.length;
        ats += 'Pakelti studento ' + arr[i].vardas + ' pažymiai yra: ';
        for (let j = 0; j < kiekis; j++) {
            if (arr[i].pazymiai[j] < 10 && j !== kiekis - 1) {
                ats += arr[i].pazymiai[j] + 1 + ', ';
            } else if (arr[i].pazymiai[j] < 10 && j === kiekis - 1) {
                ats += arr[i].pazymiai[j] + 1 + '.';
            } else if (arr[i].pazymiai[j] === 10 && j !== kiekis - 1) {
                ats += arr[i].pazymiai[j] + ', ';
            } else if (arr[i].pazymiai[j] === 10 && j === kiekis - 1) {
                ats += arr[i].pazymiai[j] + '.';
            }
        }
        ats += '<br>';
    }
    return ats;
}

document.getElementById("devinta").innerHTML = kelimas(studentai);
// ---------------------------------------------------------------------------------------------------------
// Dešimta užduotis
// ---------------------------------------------------------------------------------------------------------
function pazymiuSuma(arr) {
    let ats = '';
    for (let i = 0; i < arr.length; i++) {
        let sum = 0;
        // Min 3 elementai duotame masyve, jei mažiau - tuščios vietos užpildomos nuliais
        if (arr[i].pazymiai.length < 3) {
            while (arr[i].pazymiai.length !== 3) {
                arr[i].pazymiai.push(0);
            }
        }
        for (j = 0; j < 3; j++) {
            sum += arr[i].pazymiai[j];
        }
        ats += 'Studento ' + arr[i].vardas + ' pirmų trijų pažymių suma yra: ' + sum + '.<br>';
    }
    return ats;
}

document.getElementById("desimta").innerHTML = pazymiuSuma(studentai);
// ---------------------------------------------------------------------------------------------------------
// Vienuolikta užduotis
// ---------------------------------------------------------------------------------------------------------
function sandauga(arr) {
    let ats = '';
    for (let i = 0; i < arr.length; i++) {
        let mult = 1;
        for (let j = 0; j < 2; j++) {
            mult *= arr[i].pazymiai[j];
        }
        ats += 'Studento ' + arr[i].vardas + ' pirmų dviejų pažymių sandauga yra: ' + mult + '.<br>';
    }
    return ats;
}

document.getElementById('vienuolikta').innerHTML = sandauga(studentai);
// ---------------------------------------------------------------------------------------------------------
// Dvylikta užduotis
// ---------------------------------------------------------------------------------------------------------
function typeCheck(arr) {
    let ats = '';
    for (let i = 0; i < arr.length; i++){
        if (typeof arr[i].kursas === "number") {
            ats += 'Kursanto ' + arr[i].vardas + ' kurso numeris ' + arr[i].kursas + ' yra numeral tipo.<br>';
        } else {
            ats += 'Kursanto ' + arr[i].vardas + ' kurso numeris ' + arr[i].kursas + ' nėra numeral tipo.<br>';
        }
    }
    return ats;
}

document.getElementById("dvylikta").innerHTML = typeCheck(studentai);
// ---------------------------------------------------------------------------------------------------------
// Trylikta užduotis
// ---------------------------------------------------------------------------------------------------------
function check(arr) {
    let ats = '';
    for (let i = 0; i < arr.length; i++) {
        if (arr[i].kursas === 4 && typeof arr[i].kursas === "number") {
            ats += 'Studentas ' + arr[i].vardas + ' mokosi 4 kurse, o kurso reikšmė yra numeral tipo.<br>';
        } else if (arr[i].kursas !== 4 && typeof arr[i].kursas === "number") {
            ats += 'Studentas ' + arr[i].vardas + ' mokosi ne 4, o ' + arr[i].kursas + ' kurse, o kurso reikšmė yra numeral tipo.<br>';
        } else if (arr[i].kursas === 4 && typeof arr[i].kursas !== "number") {
            ats += 'Studentas ' + arr[i].vardas + ' mokosi 4 kurse, o kurso reikšmė yra ne numeral, o ' + typeof arr[i].kursas + ' tipo.<br>';
        } else if (arr[i].kursas === 4 && typeof arr[i].kursas !== "number") {
            ats += 'Studentas ' + arr[i].vardas + ' mokosi ne 4, o ' + arr[i].kursas + ' kurse, o kurso reikšmė yra ne numeral, o ' + typeof arr[i].kursas + ' tipo.<br>';
        }
    }
    return ats;
}

document.getElementById("trylikta").innerHTML = check(studentai);
// ---------------------------------------------------------------------------------------------------------
// Keturiolikta užduotis
// ---------------------------------------------------------------------------------------------------------
function paskutinis(arr) {
    let ats = '';
    for (let i = 0; i < arr.length; i++) {
        if (arr[i].kursas === 4) {
            ats += 'Studentas ' + arr[i].vardas + ' ' + arr[i].pavarde + ' yra abiturientas.<br>';
        } else {
            ats += 'Studentui ' + arr[i].vardas + ' ' + arr[i].pavarde + ' dar toli iki mokslų baigimo.<br>';
        }
    }
    return ats;
}

document.getElementById("keturiolikta").innerHTML = paskutinis(studentai);
// ---------------------------------------------------------------------------------------------------------
// Penkiolikta užduotis
// ---------------------------------------------------------------------------------------------------------
function suma(a, b) {
    return a + b;
}

document.getElementById("penkiolikta").innerHTML = 'Skaičių 1 ir 2 suma yra: ' + suma(1, 2);
// ---------------------------------------------------------------------------------------------------------
// Šešiolikta užduotis
// ---------------------------------------------------------------------------------------------------------
function suma100() {
    let ats = 0;
    for (let i = 1; i <= 100; i += 2) {
        ats += suma(i, i + 1);
    }
    return ats;
}

document.getElementById("sesiolikta").innerHTML = 'Skaičių nuo 1 iki 100 suma yra: ' + suma100() + '.';
// ---------------------------------------------------------------------------------------------------------
// Septyniolikta užduotis
// ---------------------------------------------------------------------------------------------------------
function elementuSuma(arr, numType) { //even || odd
    let sum = 0;
    if (numType === "even") {
        for (let i = 0; i < arr.length; i++) {
            if (arr[i] % 2 === 0) {
                sum += arr[i];
            }
        }
    } else if (numType === "odd") {
        for (let i = 0; i < arr.length; i++) {
            if (arr[i] % 2 !== 0) {
                sum += arr[i];
            }
        }
    }
    return sum;
}

let A = [1, 3, 6, 5, 7, 2, 2, 4, 4, 8];
document.getElementById("septyniolikta_even").innerHTML = 'Lyginių skaičių suma yra: ' + elementuSuma(A, "even") + '.';
document.getElementById("septyniolikta_odd").innerHTML = 'Nelyginių skaičių suma yra: ' + elementuSuma(A, "odd") + '.';
// ---------------------------------------------------------------------------------------------------------
// Aštuoniolikta užduotis
// ---------------------------------------------------------------------------------------------------------
function indexSuma(arr, numType) { //even || odd
    let sum = 0;
    if (numType === "even") {
        for (let i = 0; i < arr.length; i++) {
            if (i % 2 === 0) {
                sum += arr[i];
            }
        }
    } else if (numType === "odd") {
        for (let i = 0; i < arr.length; i++) {
            if (i % 2 !== 0) {
                sum += arr[i];
            }
        }
    }
    return sum;
}

document.getElementById("astuoniolikta_even").innerHTML = 'Lyginių indeksų suma yra: ' + indexSuma(A, "even") + '.';
document.getElementById("astuoniolikta_odd").innerHTML = 'Nelyginių indeksų suma yra: ' + indexSuma(A, "odd") + '.';
// ---------------------------------------------------------------------------------------------------------
// Devyniolikta užduotis
// ---------------------------------------------------------------------------------------------------------
function randomNumGen(num) {
    let x = 0;
    let numbers = [];
    for (let i = 0; i < num; i++) {
        x = Math.floor((Math.random() * 100) + 1);
        numbers.push(x);
    }
    return numbers;
}

document.getElementById("devyniolikta").innerHTML = randomNumGen(5);
// ---------------------------------------------------------------------------------------------------------
// Dvidešimta užduotis
// ---------------------------------------------------------------------------------------------------------
function randomChar(num) {
    const chars ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    letters = [];
    for (let i = 0; i < num; i++) {
        letters.push(chars.charAt(Math.floor(Math.random() * chars.length)));
    }
    return letters;
}

document.getElementById("dvidesimta").innerHTML = randomChar(5);
// Dvidešimtpirma užduotis
// ---------------------------------------------------------------------------------------------------------
document.getElementById("dvidesimtpirma").value = isvedimas(studentas_arr);
// ---------------------------------------------------------------------------------------------------------