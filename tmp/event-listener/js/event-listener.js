// Pirma užduotis
function changeField() {
    let msg = document.getElementById('Hello');
    msg.value = 'Labas, pasauli!';
}
let button1 = document.getElementById('button1');
button1.addEventListener('click', changeField);

// Antra užduotis
function displayForm() {
    let form = document.getElementById('forma');
    form.style.display = 'block';
}
let button2 = document.getElementById('button2');
button2.addEventListener('click', displayForm);

// Trečia užduotis
function addRow() {
    let gamintojas = document.getElementById("gamintojas").value;
    let modelis = document.getElementById("modelis").value;
    let metai = document.getElementById("metai").value;
    let salis = document.getElementById("salis").value;

    let table = document.getElementById('lentele');
    let row = document.createElement('tr');

    let data = [gamintojas, modelis, metai, salis];
    for (let i = 0; i < data.length; i++) {
        let cell = document.createElement('td');
        cell.innerHTML = data[i];
        row.appendChild(cell);
    }
    table.appendChild(row);
}

let button3 = document.getElementById('button3');
button3.addEventListener('click', addRow);

/*function addRow() {
    let gamintojas = document.getElementById("gamintojas").value;
    let modelis = document.getElementById("modelis").value;
    let metai = document.getElementById("metai").value;
    let salis = document.getElementById("salis").value;
    document.getElementById('lentele').innerHTML += '<tr><td>' + gamintojas + '</td><td>' + modelis +
        '</td><td>' + metai + '</td><td>' + salis + '</td></tr>';
}
let button3 = document.getElementById('button3');
button3.addEventListener('click', addRow);*/

// Ketvirta užduotis
function realTime() {
    let value = document.getElementById('text').value;
    document.getElementById('realtime').innerHTML = value;
}

document.getElementById('text').addEventListener('keyup', realTime);