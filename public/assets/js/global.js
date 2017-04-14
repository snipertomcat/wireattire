function toggleNextButton($state)
{
    if ($state == 'on') {
        $('#nextButton').removeClass('disabled');
        $('#nextButton').removeClass('btn-warning');
        $('#nextButton').addClass('btn-primary');
    }
    if ($state == 'off') {
        $('#nextButton').addClass('disabled');
        $('#nextButton').removeClass('btn-primary');
        $('#nextButton').addClass('btn-warning');
    }
}

function clearAllPanelBackgrounds()
{
    $('.col-xs-3.col-lg-3.col-md-3').removeClass('uk-background-primary uk-light uk-padding uk-panel');
    return false;
}

$(document).ready(function() {

    $('#input-size').change(function() {
        if ($('#input-size').val() !== '') {
            $('#products-row-main').css('display', 'block');
            clearAllPanelBackgrounds();
        } else {
            $('#products-row-main').css('display', 'none');
            toggleNextButton('off');
        }
        return false;
    });
});