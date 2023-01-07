$(function () {
    let elementas = $('#demo');

    elementas.hide();

    m1 = $('body > button:first-of-type');
    m2 = $('body > button:last-of-type');
    console.log(m1);
    console.log(m2);

    m1.click(function() {
        elementas.slideToggle('slow');
    })
    //m2.click(function() {
    //    elementas.show();
    //})
})
/*
function rodyti() {
    let divas = document.querySelector('#demo');
    let element = document.querySelector('body > button:last-of-type');
    element.addEventListener("click", function () {
        divas.style.display = 'block';
    })
}*/