function checkForms(){
    $('#form-selector').ready(function () {
        $.ajax({
            url: '/grav-admin/formcreator/formhandler.php',
            success: function (data) {
                $('#form-selector').html(data);
            }
        });
    });
}
var i = 0;
checkForms();
function addLineForm(type) {
    if (type == 'text') {
        $('.empty')
            .replaceWith('<div style="display: none" id="panel' + i + '" class="open-editPanel"><span class="remove-formPanel"><img class="remove-img" src="/grav-admin/formcreator/custom/delete.png"></span><img class="sortable-img" src="/grav-admin/formcreator/custom/sortable.png"><span class="star">*</span><label class="label-title">Text</label><span style="color: red" class="required-star"></span><br><input class="text-field" type="text"></div>');
        var optionForm = '<div class="options" id="field-options' + i + '"><form onsubmit="return handleFormOption(' + i + ')" class="field-option-form"><span class="form-target">' + i + '</span><label>Label Name</label><input class="labelName' + i + '" type="text" name="label-name"><input type="checkbox" class="toggle-required">Required<br><input type="submit"></form></div>';
        $(optionForm).appendTo('#field-options');
        $('#panel'+i).fadeIn(900);
        animateHeight(90);
    }
    if (type == 'number') {
        $('.empty')
            .replaceWith('<div style="display: none" id="panel' + i + '" class="open-editPanel"><span class="remove-formPanel"><img class="remove-img" src="/grav-admin/formcreator/custom/delete.png"></span><img class="sortable-img" src="/grav-admin/formcreator/custom/sortable.png"><span class="star">*</span><label class="label-title">Number</label><span style="color: red" class="required-star"></span><br><input class="number-field" type="number"></div>');
        var optionForm = '<div class="options" id="field-options' + i + '"><form onsubmit="return handleFormOption(' + i + ')" class="field-option-form"><span class="form-target">' + i + '</span><label>Label Name</label><input class="labelName' + i + '" type="text" name="label-name"><input type="checkbox" class="toggle-required">Required<br><input type="submit"></form></div>';
        $(optionForm).appendTo('#field-options');
        $('#panel'+i).fadeIn(900);
        animateHeight(90);
    }
    if (type == 'dropdown') {
        $('.empty')
            .replaceWith('<div style="display: none" id="panel' + i + '" class="open-editPanel"><span class="remove-formPanel"><img class="remove-img" src="/grav-admin/formcreator/custom/delete.png"></span><img class="sortable-img" src="/grav-admin/formcreator/custom/sortable.png"><span class="star">*</span><label class="label-title">Dropdown</label><span style="color: red" class="required-star"></span><br><select class="dropdown"><option value="option1">Option 1</option><option value="option2">Option 2</option><option value="option2">Option 3</option></select></div>')
        var optionForm = '<div class="options" id="field-options' + i + '"><form onsubmit="return handleFormOption(' + i + ')" class="field-option-form"><span class="form-target">' + i + '</span><label>Label Name</label><input class="labelName' + i + '" type="text" name="label-name"><fieldset class="choices-panel' + i + '"><legend>Choices:</legend><a class="plus"><img class="add-img" src="/grav-admin/formcreator/custom/insert.png"></a><ul class="choices-list"></ul></fieldset><input type="submit"></form></div>';
        $(optionForm).appendTo('#field-options');
        $('#panel'+i).fadeIn(900);
        animateHeight(90);
    }
    if (type == 'textarea') {
        $('.empty')
            .replaceWith('<div style="display: none" id="panel' + i + '" class="open-editPanel"><span class="remove-formPanel"><img class="remove-img" src="/grav-admin/formcreator/custom/delete.png"></span><img class="sortable-img" src="/grav-admin/formcreator/custom/sortable.png"><span class="star">*</span><label class="label-title">Text Area</label><span style="color: red" class="required-star"></span><br><textarea class="textarea-field"></textarea></div>');
        var optionForm = '<div class="options" id="field-options' + i + '"><form onsubmit="return handleFormOption(' + i + ')" class="field-option-form"><span class="form-target">' + i + '</span><label>Label Name</label><input class="labelName' + i + '" type="text" name="label-name"><input type="checkbox" class="toggle-required">Required<br><input type="submit"></form></div>';
        $(optionForm).appendTo('#field-options');
        $('#panel'+i).fadeIn(900);
        animateHeight(90);
    }
    if (type == 'radio') {
        $('.empty')
            .replaceWith('<div style="display: none" id="panel' + i + '" class="open-editPanel"><span class="remove-formPanel"><img class="remove-img" src="/grav-admin/formcreator/custom/delete.png"></span><img class="sortable-img" src="/grav-admin/formcreator/custom/sortable.png"><span class="star">*</span><label class="label-title">Multiple Choice</label><span style="color: red" class="required-star"></span><br><ul class="multipleChoice"><li><input type="radio" name="radio" value="Radio1">Radio 1</li><li><input type="radio" name="radio" value="Radio2">Radio 2</li><li><input type="radio" name="radio" value="Radio3">Radio 3</li></ul></div>')
        var optionForm = '<div class="options" id="field-options' + i + '"><form onsubmit="return handleFormOption(' + i + ')" class="field-option-form"><span class="form-target">' + i + '</span><label>Label Name</label><input class="labelName' + i + '" type="text" name="label-name"><fieldset class="choices-panel' + i + '"><legend>Choices:</legend><a class="plus"><img class="add-img" src="/grav-admin/formcreator/custom/insert.png"></a><ul class="choices-list"></ul></fieldset><input type="submit"></form></div>';
        $(optionForm).appendTo('#field-options');
        $('#panel'+i).fadeIn(900);
        animateHeight(90);
    }
    if (type == 'checkbox') {
        $('.empty')
            .replaceWith('<div style="display: none" id="panel' + i + '" class="open-editPanel"><span class="remove-formPanel"><img class="remove-img" src="/grav-admin/formcreator/custom/delete.png"></span><img class="sortable-img" src="/grav-admin/formcreator/custom/sortable.png"><span class="star">*</span><label class="label-title">Checkbox</label><span style="color: red" class="required-star"></span><br><ul class="checkboxList"><li><input type="checkbox" value="checkbox1">Checkbox 1</li><li><input type="checkbox" value="checkbox2">Checkbox 2</li><li><input type="checkbox" value="checkbox3">Checkbox 3</li></ul></div>')
        var optionForm = '<div class="options" id="field-options' + i + '"><form onsubmit="return handleFormOption(' + i + ')" class="field-option-form"><span class="form-target">' + i + '</span><label>Label Name</label><input class="labelName' + i + '" type="text" name="label-name"><fieldset class="choices-panel' + i + '"><legend>Choices:</legend><a class="plus"><img class="add-img" src="/grav-admin/formcreator/custom/insert.png"></a><ul class="choices-list"></ul></fieldset><input type="submit"></form></div>';
        $(optionForm).appendTo('#field-options');
        $('#panel'+i).fadeIn(900);
        animateHeight(90);
    }
    i++;
    $('<input>')
        .attr('class', 'empty')
        .appendTo('#main-form');
    initialiseForm();

}

function initialiseForm() {
    $('.title-bar').css('display', '-webkit-box');
    $('.title-bar').click(function () {
        var currentName = $(this).children('#form-title').html();
        var form_name = prompt("Please enter a name for this form:", currentName + "");
        if (form_name == null || form_name == ""){
            return false;
        } else {
            $(this).children('#form-title').html(form_name);
        }
    });

    $('.open-editPanel').off().on('click', function () {
        $('.star').css('display', 'none');
        $('.open-editPanel').css('outline', '');
        $(this).css('outline', '1px dashed #d4d4d4');
        $('.remove-formPanel').css('display', 'none');
        $(this).children('.star').css('display', 'block');
        $(this).children('.remove-formPanel').css('display', 'block');
        var target = $(this).attr('id');
        target = target.substring(5);
        $('.options').css('display', 'none');

        if ($('.labelName' + target).val().length == 0) {
            $('.labelName' + target).val($('#panel' + target + ' label').html());
        }

        if ($('.choices-panel' + target + ' input').length < 1) {
            var multipleChoice = $(this).children('.multipleChoice');
            if (multipleChoice.length > 0) {
                multipleChoice.children().each(function () {
                    var inputValue = $(this).children().val();
                    $('.choices-panel' + target + ' .choices-list').append('<li><input type="text" value="' + inputValue + '"><a class="minus"><img class="minus-img" src="/grav-admin/formcreator/custom/delete.png"></a></li>');
                });
            }
            var checkboxList = $(this).children('.checkboxList');
            if (checkboxList.length > 0) {
                checkboxList.children().each(function () {
                    var inputValue = $(this).children().val();
                    $('.choices-panel' + target + ' .choices-list').append('<li><input type="text" value="' + inputValue + '"><a class="minus"><img class="minus-img" src="/grav-admin/formcreator/custom/delete.png"></a></li>');
                });
            }
            var dropdown = $(this).children('.dropdown');
            if (dropdown.length > 0) {
                dropdown.children().each(function () {
                    var inputValue = $(this).html();
                    $('.choices-panel' + target + ' .choices-list').append('<li><input type="text" value="' + inputValue + '"><a class="minus"><img class="minus-img" src="/grav-admin/formcreator/custom/delete.png"></a></li>');
                });
            }
        }
        $('.plus')
            .off()
            .on('click', function () {
                $(this)
                    .next()
                    .append('<li><input type="text" value=""><a class="minus"><img class="minus-img" src="/grav-admin/formcreator/custom/delete.png"></a></li>');
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
    $('.form-message').remove();
    $('.save-form').css('display', 'block');
}

function handleFormOption(target) {
    var name = $(".labelName" + target).val();
    $('#panel' + target + ' input').attr('name', name);
    $('#panel' + target + ' textarea').attr('name', name);
    $('#panel' + target + ' select').attr('name', name);

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
                $('#panel' + target + ' .dropdown').append('<option name="'+dropvalue+'" value="' + dropvalue + '">' + dropvalue + '</option>')
            });
        }
        if ($('#panel' + target + ' .multipleChoice').length > 0) {
            $('#panel' + target + ' .multipleChoice li').remove();
            $('.choices-panel' + target + ' .choices-list input').each(function () {
                var radiovalue = $(this).val();
                $('#panel' + target + ' .multipleChoice').append('<li><input type="radio" name="'+name+'" value="' + radiovalue + '">' + radiovalue + '</li>')
            });
        }
        if ($('#panel' + target + ' .checkboxList').length > 0) {
            $('#panel' + target + ' .checkboxList li').remove();
            $('.choices-panel' + target + ' .choices-list input').each(function () {
                var checkboxvalue = $(this).val();
                $('#panel' + target + ' .checkboxList').append('<li><input name="'+checkboxvalue+'" type="checkbox" value="' + checkboxvalue + '">' + checkboxvalue + '</li>')
            });
        }
    }

    $('#panel' + target + ' .label-title').html(name);
    return false;
}
function animateHeight(constant){
    var newHeight = $("#main-form").height() + constant;
    $("#form-panel").animate({
        height: newHeight,
    }, 100);
}
function saveForm() {
    var name = $('#form-title').html();
    $('.save-form').html('Please Wait...');
    var formcheck = confirm("Save form as: "+ name + "?");
    if (formcheck == false){
        alert('Form must have a name!');
        $('.save-form').html('Save');
        return false;
    }
    var form = $('#main-form').html();
    var editOptions = $('#field-options').html();
    $.ajax({
        type: 'POST',
        data: {
            'form':form,
            'formOptions': editOptions,
            'formname': name
        },
        url: '/grav-admin/formcreator/formcreator.php',
        success: function (msg) {
            $('.save-form').html('Save');
            checkForms();
            $('#form-added').html('Form Added!');
        }
    });
    return false;
}
function editForm() {
    var formedit = $('#form-selector').val();
    if (formedit == null || formedit == ''){
        return false;
    }
    if (confirm("You will lose your current form, are you sure you want to edit: " + formedit)) {
        $.ajax({
            type: 'POST',
            url: '/grav-admin/formcreator/formedit.php',
            data: {
                'page': formedit
            },
            success: function (data) {
                data = JSON.parse(data);
                $('#main-form').html(data.form);
                $('#field-options').html('');
                $('#field-options').append(data.options);
                initialiseForm();
                $('#form-title').html(formedit);
                var target2 = 0;
                $('.open-editPanel').each(function() {
                    var max = this.id.substring(5);
                    target2 = Math.max(target2, max);
                });
                i = target2 + 1;
                animateHeight(90);
            }
        });
        return false;
    } else {
        return false;
    }
}
function deleteForm() {
    var formdelete = $('#form-selector').val();
    if (formdelete == null || formdelete == ''){
        return false;
    }
    if (confirm("Are you sure you want to delete this form: " + formdelete)) {
        $.ajax({
            type: 'POST',
            url: '/grav-admin/formcreator/formdelete.php',
            data: {
                'page': formdelete
            },
            success: function (data) {
                checkForms();
                $('#form-added').html(data);

            }
        });
        return false;
    } else {
        return false;
    }
}
function importForm() {
    var formadd = $('#form-selector').val();
    if (formadd == null || formadd == ''){
        return false;
    }
    var target_url = $('.target-page').html();
    if (confirm("Are you sure you want to use this form: " + formadd + '\nIf this form already exists on this page it will be updated')) {
        $.ajax({
            type: 'POST',
            url: '/grav-admin/formcreator/formadd.php',
            data: {
                'formFile': formadd,
                'target_url': target_url
            },
            success: function (data) {
                checkForms();
                $('#form-added').html(data);
            }
        });
        window.location.reload();
        return true;
    } else {
        return false;
    }
}