function add(num1,num2) {
    return num1 + num2;
}

function sub(num1,num2) {
    return num1 - num2;
}

function div(num1,num2) {
    return num1 / num2;
}

function mult(num1,num2) {
    return num1 * num2;
}

let arr1 = [1,2,3,4,5];
let arr2 = [6,7,8,9,10];
let add_ats = 0;
let sub_ats = 0;
let div_ats = 0;
let mult_ats = 0;
for (let i = 0; i < arr1.length; i++) {
    add_ats += add(arr1[i],arr2[i]);
    sub_ats -= sub(arr2[i],arr1[i]);
    div_ats /= div(arr2[i],arr1[i]);
    mult_ats *= mult(arr1[i],arr2[i]);
    document.getElementById("ats").innerHTML = 'Sudėties rezultatas yra: ' + add_ats + '; Atimties rezultatas yra: ' + sub_ats +
        '; Dalybos rezultatas yra: ' + div_ats + '; Daugybos rezultatas yra: ' + mult_ats;
}