/* 
 * @author Waruna Oshan Wisumperuma
 * @contact warunaoshan@gmail.com
 */

$(document).ready(function() {
    $.get("getCat", function(data) {
        var items = JSON.parse(data);
        $.each(items, function(index, value) {
            $('#cat').append('<option>' + value.CATCODE + '</option>');
        });
    });
});


function auto() {
    $('#sub').autocomplete({
        source: 'getItm?cat=' + $('#cat').val(),
        autoFocus: true,
        minLength: 1,
        select: function(event, ui) {
            $('#DESCRIPTION').val(ui.item.DESCRIPTION);
        }
    });
}

$(document).ajaxStart(function() {
    $('#bar').show();
});

$(document).ajaxStop(function() {
    $('#bar').hide();
});