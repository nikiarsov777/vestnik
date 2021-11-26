$(function() {
    var USStates = [
        "Alabama",
        "Alaska",
        "Arizona",
        "Arkansas",
        "California",
        "Colorado",
        "Delaware",
        "Florida",
        "Georgia",
        "Hawaii",
        "Idaho",
        "Illinois",
        "Indiana",
        "Kansas",
        "Kentucky",
        "Louisiana",
        "Maine",
        "Maryland",
        "Massachusetts",
        "Michigan",
        "Minnesota",
        "Mississippi",
        "Missouri",
        "Montana",
        "Nebraska",
        "Nevada",
        "New Hampshire",
        "New Jersey",
        "New Mexico",
        "New York",
        "North Carolina",
        "North Dakota",
        "Washington",
        "West Virginia",
        "Wisconsin",
        "Wyoming"
    ];
    $( "#USstate" ).autocomplete({
        source: USStates
    });

    $( "#button-school" ).autocomplete({
        source: USStates
    });
});


$(function(){
    $(".dropdown-menu li a").click(function(){

        var idName = $(this).closest('ul').attr('id');
        idName = idName.substr(idName.indexOf('-') + 1);
        $("#button-" + idName).text($(this).text());
        $("#button-" + idName).val($(this).text()).change();
        $('#' + idName).val($(this).attr('id'));
        toggleClick(idName);
    });



    $(document).ready(function () {

        $('#selectinput1').selectinput({
            toggleText: 'Select option',
            toggleCaret: '<span class="caret"></span>'
        });

        $('#selectinput2').selectinput({
            toggleText: 'Select option',
            toggleCaret: '<span class="caret"></span>'
        });

        $('#selectinput3').selectinput({
            toggleText: 'Type option',
            toggleCaret: '<span class="caret"></span>',
            autocomplete: '/js/selectinput/examples/data.json'
        });

        $('#selectinput4').selectinput({
            toggleText: 'Select option',
            toggleCaret: '<span class="caret"></span>',
            autocomplete: '/js/selectinput/examples/data.json'
        });

    });

});

function toggleClick(idName) {
    // get the clock
    var group = document.getElementById('menu-' + idName);

    // get the current value of the clock's display property
    var displaySetting = group.style.display;

    // also get the clock button, so we can change what it says
    var groupButton = document.getElementById(idName);

    // now toggle the clock and the button text, depending on current state
    if (displaySetting == 'block') {
        // clock is visible. hide it
        group.style.display = 'none';
        // change button text
    }
    else {
        // clock is hidden. show it
        group.style.display = 'block';
        // change button text
    }
}
