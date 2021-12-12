function validateUsn(field) {
    var usnTest = true;
    if (field == '') {
        document.getElementById('username').nextSibling.innerHTML = '  Username not entered.';
        document.brian.usn.focus();
    }
}

function validatePassword(field) {
    var usnTest = true;
    if (field == '') {
        document.getElementById('password').nextSibling.innerHTML = '  Password not entered.';
        document.brian.pwd.focus();
    }
}

function matchPasswords(pass1, pass2) {
    if (pass1 != pass2) {
        document.getElementById('pass').nextSibling.innerHTML = '  Passwords do not match.';
        document.brian.password2.focus();
    }
}

function createUser() {
    document.getElementById('tab-contents').innerHTML = 'delete user button clicked';

}

function deleteUser() {
    document.getElementById('tab-contents').innerHTML = 'delete user button clicked';
    //alert("delete user button clicked");
}

function editUser() {
    document.getElementById('tab-contents').innerHTML = 'edit user button clicked';
}