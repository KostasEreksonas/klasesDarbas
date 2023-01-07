let sheets = document.getElementsByClassName('sheet');

function changeTab(tabId) {
    for (let i = 0; sheets.length > i; i++) {
        sheets[i].style.display = 'none';
    }
    document.getElementById(tabId).style.display = 'block';
}
