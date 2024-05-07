const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

document.getElementById('btnSignUp').addEventListener('click', function (e) {
    var name = document.getElementById('name');
    var email = document.getElementById('email');
    var password = document.getElementById('psw');
    if (name.value === '' && email.value === '' && password.value === '') {
        MessageError(name, "Data has not been entered");
        e.preventDefault;
    } else if (name.value === '') {
        MessageError(name, "Name has not been value");
        e.preventDefault;
    } else if (email.value === '') {
        MessageError(email, "Email has not been value");
        e.preventDefault;
    } else if (password.value === '') {
        MessageError(password, "Password has not been value");
        e.preventDefault;
    } else if (!isEmailAddress(email.value)) {
        MessageError(email, 'Email is not in correct format');
        e.preventDefault;
    } else {
        MessageError(password, "");
    }
})


function MessageError(id, notification) {
    var messageError = document.getElementById('messageError');
    messageError.style.color = 'red';
    messageError.style.justifyContent = 'flex-start';
    messageError.innerHTML = notification;
}

let isEmailAddress = val => {
    return /^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/.test(val) || /w+([-+.]w+)*@w+([-.]w+)*.w+([-.]w+)*/.test(val);
}