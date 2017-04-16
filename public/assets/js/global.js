function toggleNextButton($state)
{
    if ($state == 'on') {
        $('#nextButton').removeClass('disabled');
        $('#nextButton').removeClass('btn-warning');
        $('#nextButton').addClass('btn-success');
        $('#nextButton').attr('disabled', false);
    }
    if ($state == 'off') {
        $('#nextButton').addClass('disabled');
        $('#nextButton').removeClass('btn-success');
        $('#nextButton').addClass('btn-warning');
    }
}

function clearAllPanelBackgrounds()
{
    //@todo need to refactor this--too easy to break by changing the template
    $('.clearBackground').removeClass('uk-background-primary uk-light uk-padding uk-panel');
    toggleNextButton('off');
    return false;
}

function setInput(name, value)
{

    //clear any prior selection backgrounds:
    clearAllPanelBackgrounds();
    $('#input-'+name).val(value);
    $('#modal-'+value).modal('hide');
    //add background back to new selection:
    $('#product-panel-'+value).addClass('uk-background-primary uk-light uk-padding uk-panel');
    toggleNextButton('on');
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
