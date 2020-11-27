const val_con = document.getElementById('contact-form-submit');

val_con.addEventListener('submit', (e) => {

    e.preventDefault();
    var cfname  = document.getElementById('cfname');
    var clname  = document.getElementById('clname');
    var cemail  = document.getElementById('cemail');
    var cmobile = document.getElementById('cmobile');

    var cfn_span = document.getElementById('cfn-span');
    var cln_span = document.getElementById('cln-span');
    var cem_span = document.getElementById('cem-span');
    var cmb_span = document.getElementById('cmb-span');

    var flag = true;

    if(!ValidateName(cfname)){
        
        cfn_span.innerHTML = "First Name is Invalid";
        cfn_span.style.color = "red";
        flag = false;
    }else{

        cfn_span.innerHTML = "First Name";
        cfn_span.style.color = "#000";
    }
    
    if(!ValidateName(clname)){
        
        cln_span.innerHTML = "Last Name is Invalid";
        cln_span.style.color = "red";
        flag = false;
    }else{

        cln_span.innerHTML = "Last Name";
        cln_span.style.color = "#000";
    }

    if(!ValidateName(cemail)){

        cem_span.innerHTML = "Email is Invalid";
        cem_span.style.color = "red";
        flag = false;
    }else{

        cem_span.innerHTML = "Email Address";
        cem_span.style.color = "#000";
    }

    if(!ValidateMobile(cmobile)){

        cmb_span.innerHTML = "Mobile is Invalid";
        cmb_span.style.color = "red";
        flag = false;
    }else{
        
        cmb_span.innerHTML = "Mobile Number";
        cmb_span.style.color = "#000";
    }

    if(flag)
        succ_sent();
});

function succ_sent() {

    var data = new FormData();
        data.append("first-name", document.getElementById('cfname').value);
        data.append("last-name", document.getElementById('clname').value);
        data.append("email", document.getElementById('cemail').value);
        data.append("mobile", document.getElementById('cmobile').value);
        data.append("cmsg", document.getElementById('cmsg').value);

        // (B) AJAX
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "php/contact.php", true);

        // What to do when server responds
        xhr.onload = function(){
            console.log(this.response);  
        };

        xhr.send(data);
        
        contactPopUp();
}

function contactPopUp(){

    document.getElementById("success-popup-msg").innerHTML = "Message Sent";
    document.getElementById("success-button").innerHTML = "Okay";
    success_button.style.background = "green";
    
    success_toggle();
}