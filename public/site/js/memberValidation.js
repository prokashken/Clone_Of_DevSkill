function ValidateForm() {
    var fullNameElement = document.getElementById('fullName');
    var mobileElement = document.getElementById('mobile');

    if (fullNameElement.value.length == 0) {
        fullNameElement.classList.add('is-invalid');
        fullNameElement.classList.remove('is-valid');
    }
    else {
        fullNameElement.classList.add('is-valid');
        fullNameElement.classList.remove('is-invalid');
    }

    var mobileExpr = /^[0-9]{5,15}$/;
    if (!mobileExpr.test(mobileElement.value)) {
        mobileElement.classList.add('is-invalid');
        mobileElement.classList.remove('is-valid');
    }
    else {
        mobileElement.classList.add('is-valid');
        mobileElement.classList.remove('is-invalid');
    }
}