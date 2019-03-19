$(document).on("click", "#search", function () {
    $('#input_search').css('display', 'block');
    $("#input_search").focus();
});

$('body').click(function(evt){
    if(evt.target.id == "input_search"){
        return;
    }
    
    $('#input_search').css('display', 'none');
    $('#input_search').val('');
});