let a=-5, b=0, c=-4, d=4, x, y;

if (a < b || c < d) {
    // Sankirta tarp elementų c ir b
    if (c >= a && c <= b && d > b) {
        x = c;
        y = b;
        console.log('Rėžių [' + a + ';' + b + '] ir [' + c + ';' + d + '] sankirta yra: [' + x + ';' + y + ']')
    }
    // Intervalas [c;d] pilnai įeina į intervalą [a;b]
    else if (c >= a && c <= b && d < b) {
        x = c;
        y = d;
        console.log('Rėžių [' + a + ';' + b + '] ir [' + c + ';' + d + '] sankirta yra: [' + x + ';' + y + ']')
    }
    // Sankirta tarp elementų a ir d
    else if (c < a && d >= a && d <= b) {
        x = a;
        y = d;
        console.log('Rėžių [' + a + ';' + b + '] ir [' + c + ';' + d + '] sankirta yra: [' + x + ';' + y + ']')
    }
    // Intervalas [a;b] pilnai įeina į intervalą [c;d]
    else if (c <= a && d >= b) {
        x = a;
        y = b;
        console.log('Rėžių [' + a + ';' + b + '] ir [' + c + ';' + d + '] sankirta yra: [' + x + ';' + y + ']')
    }
    // Nesant aukščiau apibrėžtų sąlygų, sankirtos tarp intervalų nėra
    else {
        console.log('Sankirta tarp duotų intervalų neegzistuoja');
    }
}
else {
    console.log('Rėžių nėra')
}