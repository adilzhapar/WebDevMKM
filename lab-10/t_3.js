let register = document.querySelector('.btn-register');
let login = document.querySelector('.btn-login');

function CheckPassword(inputtxt) {
    var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    if (inputtxt.match(passw)) {
        return true;
    }else {
        return false;
    }
}

register.addEventListener('click', () => {
    let username = document.querySelector('.login').value;
    let password = document.querySelector('.password').value;

    if(username === "" || password === "") {
        alert("fill each field");
    }else if(CheckPassword(password)){
        window.localStorage.setItem(username, password);
        location.replace("./logged.html");
    }else{
        alert("Your password must include at least one Uppercase, lowercase and digit");

    }

})

login.addEventListener('click', () => {
    let username = document.querySelector('.login').value;
    let password = document.querySelector('.password').value;
    let logged = window.localStorage.getItem(username);
    if(username === "" || password === "") {
        alert("fill each field");
    }
    else if (logged === password) {
        location.replace("./logged.html")
    } else {
        alert("wrong credentials");
    }
});
