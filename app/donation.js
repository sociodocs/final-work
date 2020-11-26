const donationForm = document.getElementById('donation-form-submit');

donationForm.addEventListener('submit', (e) => {
    
    var d_fn = document.getElementById('d-fn');
    var d_ln = document.getElementById('d-ln');
    var d_em = document.getElementById('d-em');
    var d_mb = document.getElementById('d-mb');
    var d_pan = document.getElementById('d-pan');

    if(!ValidateName(d_fn)){
        d_fn.value = '';
        d_fn.placeholder = "Invalid Name";
        d_fn.style.outline = "1px solid red";
        e.preventDefault();
    }else
        d_fn.style.outline = "none";

    if(!ValidateName(d_ln)){
        d_ln.value = '';
        d_ln.placeholder = "Invalid Name";
        d_ln.style.outline = "1px solid red";
        e.preventDefault();
    }else
        d_ln.style.outline = "none";

    if(!ValidateEmail(d_em)){
        d_em.value = '';
        d_em.placeholder = "Invaild Email";
        d_em.style.outline = "1px solid red";
        e.preventDefault();
    }else
        d_em.style.outline = "none";

    if(!ValidateMobile(d_mb)){
        d_mb.value = '';
        d_mb.placeholder = "Invaild Mobile";
        d_mb.style.outline = "1px solid red";
        e.preventDefault();
    }else
        d_mb.style.outline = "none";
    
    if(!ValidatePAN(d_pan)){
        d_pan.value = '';
        d_pan.placeholder = "Invaild PAN";
        d_pan.style.outline = "1px solid red";
        e.preventDefault();
    }else
        d_pan.style.outline = "none";
});