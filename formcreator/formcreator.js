var i = 0;

function addLineForm(type) {
    if (type == 'text') {
        $('.empty')
            .replaceWith('<div id="panel' + i + '" class="open-editPanel"><span class="star">*</span><label class="label-title">Text</label><span style="color: red" class="required-star"></span><br><input class="text-field" type="text"><span style="color:red;" class="remove-formPanel">remove</span></div>');
        var optionForm = '<div class="options" id="field-options' + i + '"><form onsubmit="return handleFormOption(' + i + ')" id="field-option-form"><span class="form-target">' + i + '</span><br><label>Label Name</label><br><input class="labelName' + i + '" type="text" name="label-name"><br><input type="checkbox" class="toggle-required">Required<br><input type="submit"></form></div>';
        $(optionForm).appendTo('#options-panel');
    }
    if (type == 'number') {
        $('.empty')
            .replaceWith('<div id="panel' + i + '" class="open-editPanel"><span class="star">*</span><label class="label-title">Number</label><span style="color: red" class="required-star"></span><br><input class="number-field" type="number"><span style="color:red;" class="remove-formPanel">remove</span></div>');
        var optionForm = '<div class="options" id="field-options' + i + '"><form onsubmit="return handleFormOption(' + i + ')" id="field-option-form"><span class="form-target">' + i + '</span><br><label>Label Name</label><br><input class="labelName' + i + '" type="text" name="label-name"><br><input type="checkbox" class="toggle-required">Required<br><input type="submit"></form></div>';
        $(optionForm).appendTo('#options-panel');
    }
    if (type == 'dropdown') {
        $('.empty')
            .replaceWith('<div id="panel' + i + '" class="open-editPanel"><span class="star">*</span><label class="label-title">Dropdown</label><span style="color: red" class="required-star"></span><br><select class="dropdown"><option value="option1">Option 1</option><option value="option2">Option 2</option><option value="option2">Option 3</option></select><span style="color:red;" class="remove-formPanel">remove</span></div>')
        var optionForm = '<div class="options" id="field-options' + i + '"><form onsubmit="return handleFormOption(' + i + ')" id="field-option-form"><span class="form-target">' + i + '</span><br><label>Label Name</label><br><input class="labelName' + i + '" type="text" name="label-name"><fieldset class="choices-panel' + i + '"><legend>Choices:</legend><a class="plus">+</a><ul class="choices-list"></ul></fieldset><input type="submit"></form></div>';
        $(optionForm).appendTo('#options-panel');
    }
    if (type == 'textarea') {
        $('.empty')
            .replaceWith('<div id="panel' + i + '" class="open-editPanel"><span class="star">*</span><label class="label-title">Text Area</label><span style="color: red" class="required-star"></span><br><textarea class="textarea-field"></textarea><span style="color:red;" class="remove-formPanel">remove</span></div>');
        var optionForm = '<div class="options" id="field-options' + i + '"><form onsubmit="return handleFormOption(' + i + ')" id="field-option-form"><span class="form-target">' + i + '</span><br><label>Label Name</label><br><input class="labelName' + i + '" type="text" name="label-name"><br><input type="checkbox" class="toggle-required">Required<br><input type="submit"></form></div>';
        $(optionForm).appendTo('#options-panel');
    }
    if (type == 'radio') {
        $('.empty')
            .replaceWith('<div id="panel' + i + '" class="open-editPanel"><span class="star">*</span><label class="label-title">Multiple Choice</label><span style="color: red" class="required-star"></span><br><ul class="multipleChoice"><li><input type="radio" name="radio" value="Radio1">Radio 1</li><li><input type="radio" name="radio" value="Radio2">Radio 2</li><li><input type="radio" name="radio" value="Radio3">Radio 3</li></ul><span style="color:red;" class="remove-formPanel">remove</span></div>')
        var optionForm = '<div class="options" id="field-options' + i + '"><form onsubmit="return handleFormOption(' + i + ')" id="field-option-form"><span class="form-target">' + i + '</span><br><label>Label Name</label><br><input class="labelName' + i + '" type="text" name="label-name"><fieldset class="choices-panel' + i + '"><legend>Choices:</legend><a class="plus">+</a><ul class="choices-list"></ul></fieldset><input type="submit"></form></div>';
        $(optionForm).appendTo('#options-panel');
    }
    if (type == 'checkbox') {
        $('.empty')
            .replaceWith('<div id="panel' + i + '" class="open-editPanel"><span class="star">*</span><label class="label-title">Checkbox</label><span style="color: red" class="required-star"></span><br><ul class="checkboxList"><li><input type="checkbox" value="checkbox1">Checkbox 1</li><li><input type="checkbox" value="checkbox2">Checkbox 2</li><li><input type="checkbox" value="checkbox3">Checkbox 3</li></ul><span style="color:red;" class="remove-formPanel">remove</span></div>')
        var optionForm = '<div class="options" id="field-options' + i + '"><form onsubmit="return handleFormOption(' + i + ')" id="field-option-form"><span class="form-target">' + i + '</span><br><label>Label Name</label><br><input class="labelName' + i + '" type="text" name="label-name"><fieldset class="choices-panel' + i + '"><legend>Choices:</legend><a class="plus">+</a><ul class="choices-list"></ul></fieldset><input type="submit"></form></div>';
        $(optionForm).appendTo('#options-panel');
    }
    i++;
    $('<input>')
        .attr('class', 'empty')
        .appendTo('#main-form');

    $('.open-editPanel').off().on('click', function () {
        $('.star').css('display', 'none');
        $('.remove-formPanel').css('display', 'none');
        $(this).children('.star').css('display', 'block');
        $(this).children('.remove-formPanel').css('display', 'block');
        var target = $(this).attr('id');
        target = target.substring(5, 6);
        $('.options').css('display', 'none');

        if ($('.labelName' + target).val().length == 0) {
            $('.labelName' + target).val($('#panel' + target + ' label').html());
        }

        if ($('.choices-panel' + target + ' input').length < 1) {
            var multipleChoice = $(this).children('.multipleChoice');
            if (multipleChoice.length > 0) {
                multipleChoice.children().each(function () {
                    var inputValue = $(this).children().val();
                    $('.choices-panel' + target + ' .choices-list').append('<li><input type="text" value="' + inputValue + '"><a class="minus">-</a></li>');
                });
            }
            var checkboxList = $(this).children('.checkboxList');
            if (checkboxList.length > 0) {
                checkboxList.children().each(function () {
                    var inputValue = $(this).children().val();
                    $('.choices-panel' + target + ' .choices-list').append('<li><input type="text" value="' + inputValue + '"><a class="minus">-</a></li>');
                });
            }
            var dropdown = $(this).children('.dropdown');
            if (dropdown.length > 0) {
                dropdown.children().each(function () {
                    var inputValue = $(this).html();
                    $('.choices-panel' + target + ' .choices-list').append('<li><input type="text" value="' + inputValue + '"><a class="minus">-</a></li>');
                });
            }
        }
        $('.plus')
            .off()
            .on('click', function () {
                $(this)
                    .next()
                    .append('<li><input type="text" value=""><a class="minus">-</a></li>');
                $('.minus').on('click', function () {
                    $(this)
                        .parent()
                        .remove();
                });
            });
        $('.minus').on('click', function () {
            $(this)
                .parent()
                .remove();
        });
        $('#field-options' + target).css('display', 'block');
    });
    $('.remove-formPanel').click(function () {
        $(this).parent().remove();
    });

    $("#main-form").sortable();
    $("#main-form").disableSelection();

    $('.save-form').css('display', 'block');
}

function handleFormOption(target) {
    var name = $(".labelName" + target).val();

    if ($('#field-options' + target + ' .toggle-required').is(':checked')) {
        $('#panel' + target + ' .required-star').html('*');
        $('#panel' + target + ' input').attr('required', true);
        $('#panel' + target + ' textarea').attr('required', true);
    } else {
        $('#panel' + target + ' .required-star').html('');
        $('#panel' + target + ' input').attr('required', false);
        $('#panel' + target + ' textarea').attr('required', false);
    }

    if ($('.choices-panel' + target).length > 0) {

        if ($('#panel' + target + ' .dropdown').length > 0) {
            $('#panel' + target + ' .dropdown option').remove();
            $('.choices-panel' + target + ' .choices-list input').each(function () {
                var dropvalue = $(this).val();
                $('#panel' + target + ' .dropdown').append('<option value="' + dropvalue + '">' + dropvalue + '</option>')
            });
        }
        if ($('#panel' + target + ' .multipleChoice').length > 0) {
            $('#panel' + target + ' .multipleChoice li').remove();
            $('.choices-panel' + target + ' .choices-list input').each(function () {
                var radiovalue = $(this).val();
                $('#panel' + target + ' .multipleChoice').append('<li><input type="radio" name="radio" value="' + radiovalue + '">' + radiovalue + '</li>')
            });
        }
        if ($('#panel' + target + ' .checkboxList').length > 0) {
            $('#panel' + target + ' .checkboxList li').remove();
            $('.choices-panel' + target + ' .choices-list input').each(function () {
                var checkboxvalue = $(this).val();
                $('#panel' + target + ' .checkboxList').append('<li><input type="checkbox" value="' + checkboxvalue + '">' + checkboxvalue + '</li>')
            });
        }
    }


    $('#panel' + target + ' .label').html(name);
    return false;
}

