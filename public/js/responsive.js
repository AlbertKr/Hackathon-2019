$(document).on("click", "#search", function () {
    
    $('#div_input_search').css('display', 'flex');
    $("#input_search").focus();
});

$('body').click(function(evt){
    
    if(evt.target.id == "input_search" || evt.target.id == "img_search" ){
        return;
    }
    
    $('#div_input_search').css('display', 'none');
    $('#input_search').val('');
});