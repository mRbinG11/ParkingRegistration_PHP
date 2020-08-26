var website = "http://localhost/lol/";
var homeurl = website + "index.php";
var searchurl = website + "search.php";
var updateurl = website + "update.php";
var deleteurl = website + "delete.php";

window.history.forward();
function noBack() { window.history.forward(); }

(function ($) {
    "use strict";

    /*==================================================================
    [ Focus Contact2 ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })


    /*==================================================================
    [ Validate after type ]*/
    $('.validate-input .input100').each(function(){
        $(this).on('blur', function(){
            if(validate(this) == false){
                showValidate(this);
            }
            else {
                $(this).parent().addClass('true-validate');
            }
        })    
    })

    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
           $(this).parent().removeClass('true-validate');
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }

})(jQuery);

function del() {
    window.location.replace(deleteurl);
}

function update() {
    window.location.replace(updateurl);
}

function search() {
    window.location.replace(searchurl);
}

function home() {
    window.location.replace(homeurl);
}

function veh(x) {
    if (x == 1) {
        document.getElementById('vno').style.display = 'block';
        document.getElementById('ivno').required = true;
    } else {
        document.getElementById('vno').style.display = 'none';
        document.getElementById('ivno').required = false;
    }
}

function rad(x) {
    if (x == 0) {
        var disp = document.getElementById("cuid");
        var req = document.getElementById("uid");
    } else if (x == 1) {
        var disp = document.getElementById("cname");
        var req = document.getElementById("name");
    } else if (x == 2) {
        var disp = document.getElementById("crfid");
        var req = document.getElementById("rfid");
    } else if (x == 3) {
        var disp = document.getElementById("cvno");
        var req = document.getElementById("vno");
    }
    document.getElementById("cuid").style.display = "none";
    document.getElementById("cname").style.display = "none";
    document.getElementById("crfid").style.display = "none";
    document.getElementById("cvno").style.display = "none";
    document.getElementById("uid").required = false;
    document.getElementById("name").required = false;
    document.getElementById("rfid").required = false;
    document.getElementById("vno").required = false;
    disp.style.display = "block";
    req.required = true;
}

function chb(x) {
    if (x == 0) {
        var checkBox = document.getElementById("cbname");
        var disp = document.getElementById("cname");
        var req = document.getElementById("name");
    } else if (x == 1) {
        var checkBox = document.getElementById("cbmail");
        var disp = document.getElementById("cmail");
        var req = document.getElementById("mail");
    } else if (x == 2) {
        var checkBox = document.getElementById("cbphno");
        var disp = document.getElementById("cphno");
        var req = document.getElementById("phno");
    } else if (x == 3) {
        var checkBox = document.getElementById("cbrfid");
        var disp = document.getElementById("crfid");
        var req = document.getElementById("rfid");
    } else if (x == 4) {
        var checkBox = document.getElementById("cbvno");
        var disp = document.getElementById("cvno");
        var req = document.getElementById("vno");
    }
    if (checkBox.checked == true) {
        disp.style.display = "block";
        req.required = true;
    } else {
        disp.style.display = "none";
        req.required = false;
    }
}