$(document).ready(function() {

    var code = $('.highlight')[0];
    var editor = CodeMirror.fromTextArea(code, {

        lineNumbers: true,
        lineWrap: true,
        styleActiveLine: true,
        autoCloseBrackets: true,
        autoCloseTags: true,
        matchBrackets: true,

        matchTags: {
            bothTags: true
        },
        extraKeys: {
            "Ctrl-J": "toMatchingTag",
            "Alt-F": "findPersistent",
            "Ctrl-F": "find",
            "Ctrl-Space": "autocomplete",
            "F11": function(cm) {
                cm.setOption("fullScreen", !cm.getOption("fullScreen"))
            },
            "Esc": function(cm) {
                if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false)
            }
        }
    });
    //language change
    $('#language').on('change', function() {

        var language = document.forms["input_form"]["language"].value;
        if (language == 'text/html') {
            window.location = 'html.php';
        } else {
            editor.setOption("mode", this.value);
            editor.setValue("");
        }



    });
    //theme change
    $('#theme').on('change', function() {

        var theme = this.value;
        var style1 = '<link rel="stylesheet" href="codemirror-5.16.0\\theme\\' + theme + '.css">';

        $('head').append(style1);

        editor.setOption("theme", this.value);



    });
    // user jquery
    $("#custom_textarea").hide();

    $("#custom_input").click(function() {
        if ($(this).is(":checked")) {
            $("#custom_textarea").val('');
            $("#custom_textarea").fadeIn(1000);

        } else {

            $("#custom_textarea").fadeOut(1000);
        }
    });

    $("#submit").click(function() {
        $("#custom_input").removeAttr('checked');

        var language = document.forms["input_form"]["language"].value;

        var code = editor.getValue();


        if (language == "" || code == "") {
            alert("All fields are mandatory");
            document.forms["input_form"]["language"].focus();
            return false;
        } else {

            $("#custom_textarea").fadeOut(1000);

            document.getElementById("output").style = "border:2px dashed grey; height:300px;";
        }

    });


});