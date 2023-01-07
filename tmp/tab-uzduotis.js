$(document).ready(function(){
    function assignClass(className, element) {
        $('.tabai > a').removeClass(className);
        $(element).addClass(className);
    }
    function changeTab(id) {
        $('.sheet').hide();
        $(id).show();
    }
    $('.tabai > a').click(function(e){
        changeTab($(this).attr('href'));
        assignClass('active', this);
        e.preventDefault();
    })
})