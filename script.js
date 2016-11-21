function validate() {

    var language = document.forms["input_form"]["language"].value;
    var code = document.forms["input_form"]["code"].value;


    if (language != "text/x-csrc" || language == null || language == "") {
        alert("Currently we are supporting C language");
        return false;
    } else if (code == "" || code == null) {
        alert("Please enter your code to run in the editor");
        return false;
    } else {
        document.getElementById("output").style = "border:2px dashed grey; height:200px;";
    }
}
}