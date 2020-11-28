const donationForm = document.getElementById('donation-form-submit');

donationForm.addEventListener('submit', (e) => {
    
    e.preventDefault();
    var d_fn = document.getElementById('d-fn');
    var d_ln = document.getElementById('d-ln');
    var d_em = document.getElementById('d-em');
    var d_mb = document.getElementById('d-mb');
    var d_pan = document.getElementById('d-pan');
    var amount = document.getElementById('amount');
    var add_note = document.getElementById('add-note');
    var country = document.getElementById('country');

    var flag = true;

    if(!ValidateName(d_fn)){
        d_fn.value = '';
        d_fn.placeholder = "Invalid Name";
        d_fn.style.outline = "1px solid red";
        flag = false;
    }else{
        d_fn.style.outline = "none";
        d_fn.placeholder = "";
    }

    if(!ValidateName(d_ln)){
        d_ln.value = '';
        d_ln.placeholder = "Invalid Name";
        d_ln.style.outline = "1px solid red";
        flag = false;
    }else{
        d_ln.style.outline = "none";
        d_ln.placeholder = "";
    }

    if(!ValidateEmail(d_em)){
        d_em.value = '';
        d_em.placeholder = "Invaild Email";
        d_em.style.outline = "1px solid red";
        flag = false;
    }else{
        d_em.style.outline = "none";
        d_em.placeholder = "";
    }

    if(!ValidateMobile(d_mb)){
        d_mb.value = '';
        d_mb.placeholder = "Invaild Mobile";
        d_mb.style.outline = "1px solid red";
        flag = false;
    }else{
        d_mb.style.outline = "none";
        d_mb.placeholder = "";
    }
    
    if(d_pan.value.length < 1){
        d_pan.value = '';
        d_pan.placeholder = "ID is Empty";
        d_pan.style.outline = "1px solid red";
        flag = false;
    }else{
        d_pan.style.outline = "none";
        d_pan.placeholder = "";
    }

    if(amount.value < 1){
        amount.value = '';
        amount.placeholder = "You forgot Amount";
        amount.style.outline = "1px solid red";
        flag = false;
    }else{
        amount.style.outline = "none";
        amount.placeholder = "";
    }

    if(add_note.value.length > 25 ){
        add_note.value = '';
        add_note.placeholder = "Less Characters Please!";
        add_note.style.outline = "1px solid red";
        flag = false;
    }else{
        add_note.style.outline = "none";
        add_note.placeholder = "";
    }

    if(flag){

        if(add_note.value.length == 0 ){
            add_note.value = "NA";   
        }

        succ_don();
    }
});

function succ_don() {

    var data = new FormData();
        data.append("first-name", document.getElementById('d-fn').value);
        data.append("last-name", document.getElementById('d-ln').value);
        data.append("email", document.getElementById('d-em').value);
        data.append("mobile", document.getElementById('d-mb').value);
        data.append("pan", document.getElementById('d-pan').value);

        data.append("country", document.getElementById('country').value);
        data.append("add-note", document.getElementById('add-note').value);
        data.append("amount", document.getElementById('amount').value);
        data.append("org_name", document.getElementById('org_name').value);

        var once = document.getElementById('once');
        var monthly = document.getElementById('monthly');

        if(once.checked)
            data.append("don-type", once.value);
        else
            data.append("don-type", monthly.value);

        // (B) AJAX
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "php/donate.php", true);

        // What to do when server responds
        xhr.onload = function(){
            console.log(this.response);  
        };

        xhr.send(data);
        
        donatePopUp();
}

function donatePopUp(){

    document.getElementById("success-popup-msg").innerHTML = "DONATION DONE";
    document.getElementById("success-button").innerHTML = "Okay";
    success_button.style.background = "green";
    
    success_toggle();
}