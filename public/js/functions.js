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
        var getData = function (request, response) {
            $.getJSON(
                "http://vestnik.test/tools/schools/" + request.term,
                function (data, err) {
                    if (err !== 'success') {
                        alert('Something went wrong: ' + err);
                    }

                    response($.map(data, function (item) {
                        return {
                            label: item['name'],
                            value: item['id']
                        }
                    }));
                });
        };

        var getDataRoles = function (request, response) {
            $.getJSON(
                "http://vestnik.test/tools/roles/" + request.term,
                function (data, err) {
                    if (err !== 'success') {
                        alert('Something went wrong: ' + err);
                    }

                    response($.map(data, function (item) {
                        return {
                            label: item['name'],
                            value: item['id']
                        }
                    }));
                });
        };

        var selectItem = function (event, ui) {
            $("#school").val(ui.item.label);
            $("#school_id").val(ui.item.value);
            return false;
        }

        var selectRole = function (event, ui) {
            var str = '<input id="role_id" name="role_id[]" class="std-input" type="hidden" value="' + ui.item.value + '">';
            $(".roles").append('<span class="label label-success">' + ui.item.label + '</span> ');
            $(".role_ids").append(str);
            $("#msdb-a").val('');
            return false;
        }

        $("#school").autocomplete({
            source: getData,
            select: selectItem,
            minLength: 2
        });
        $("#msdb-a").autocomplete({
            source: getDataRoles,
            select: selectRole,
            multiselect: false
        });
        // $('#school').selectinput({
        //     toggleText: 'Type option',
        //     toggleCaret: '<span class="caret"></span>',
        //     autocomplete: getData
        // });

        $('#class_name').selectinput({
            toggleText: 'Select option',
            toggleCaret: '<span class="caret"></span>'
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

$("document").ready(function(){
    setTimeout(function(){
        $("span.alert-success").remove();
    }, 5000 ); // 5 secs

});

