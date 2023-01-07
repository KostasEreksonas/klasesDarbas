// Regex
// ---------------------------------------------------------------------------------------------------------
let string = '[ 1 2 a 3 p 5 asd 6 xcvbn \'';
let regex = /[0-9]/g;
let skaiciai = string.match(regex);
console.log(skaiciai);
