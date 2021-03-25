// Class definition

var controls = {
    leftArrow: '<i class="fal fa-angle-left" style="font-size: 1.25rem"></i>',
    rightArrow: '<i class="fal fa-angle-right" style="font-size: 1.25rem"></i>'
}

var runDatePicker = function()
{
    // minimum setup
    $('#datepicker-1').datepicker(
        {
            todayHighlight: true,
            orientation: "bottom left",
            templates: controls,
            endDate: '+0d',
            autoclose: true,
            clearBtn: true,
            format: 'yyyy-mm-dd'
        });

    // input group layout
    $('#datepicker-2').datepicker(
        {
            todayHighlight: true,
            orientation: "bottom left",
            templates: controls,
            autoclose: true,
            clearBtn: true,
            format: 'yyyy-mm-dd'
        });

    // input group layout for modal demo
    $('#datepicker-modal-2').datepicker(
        {
            todayHighlight: true,
            orientation: "bottom left",
            templates: controls
        });

    // enable clear button
    $('#datepicker-3').datepicker(
        {
            todayBtn: "linked",
            clearBtn: true,
            todayHighlight: true,
            templates: controls
        });

    // enable clear button for modal demo
    $('#datepicker-modal-3').datepicker(
        {
            todayBtn: "linked",
            clearBtn: true,
            todayHighlight: true,
            templates: controls
        });

    // orientation
    $('#datepicker-4-1').datepicker(
        {
            orientation: "top left",
            todayHighlight: true,
            templates: controls
        });

    $('#datepicker-4-2').datepicker(
        {
            orientation: "top right",
            todayHighlight: true,
            templates: controls
        });

    $('#datepicker-4-3').datepicker(
        {
            orientation: "bottom left",
            todayHighlight: true,
            templates: controls
        });

    $('#datepicker-4-4').datepicker(
        {
            orientation: "bottom right",
            todayHighlight: true,
            templates: controls
        });

    // range picker
    $('#datepicker-5').datepicker(
        {
            todayHighlight: true,
            templates: controls
        });

    // inline picker
    $('#datepicker-6').datepicker(
        {
            todayHighlight: true,
            templates: controls
        });
}

$(document).ready(function()
{
    runDatePicker();
});