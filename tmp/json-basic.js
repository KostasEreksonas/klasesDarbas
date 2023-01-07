let adresai = [
	{
		salis: "Lietuva",
		miestas: "Kaunas",
		gatve: "Vytauto pr.",
		namoNr: 24,
		papildoma: "Duru kodas 1234"
	},
	{
		rajonas: "Vilniaus raj."
	}
];

let asmuo = {
	vardas: "Jonas",
	pavarde: "Jonaitis",
	kodas: "61212120001",
	adresas: adresai[0],
	papildoma: null
}

console.log(asmuo.vardas); // Jonas
console.log(typeof asmuo.adresas); // Object
console.log(asmuo.adresas.miestas); // Kaunas

let str = '{"salis":"Lietuva", "miestas":"Vilnius"}';
console.log(typeof str);
// console.log(str.salis) // undefined
let obj = JSON.parse(str);
console.log(typeof obj);
console.log(obj);
console.log(obj.salis);
console.log(obj.miestas);
let str2 = JSON.stringify(obj);
console.log(str2);
