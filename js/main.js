document.addEventListener("DOMContentLoaded", function() {
    // Загрузка header.html
    fetch("header.html")
        .then(response => response.text())
        .then(data => {
            document.querySelector("#header").innerHTML = data;
            setActiveMenuItem();
        });
    // Загрузка footer.html
    fetch("footer.html")
        .then(response => response.text())
        .then(data => {
            document.querySelector("#footer").innerHTML = data;
        });
    // Загрузка email.html
    fetch("email.html")
        .then(response => response.text())
        .then(data => {
            document.querySelector("#email").innerHTML = data;
        });

    // Функция для добавления класса active текущему пункту меню
    function setActiveMenuItem() {
        let currentPath = window.location.pathname;
        let menuItems = document.querySelectorAll("nav ul li a");

        menuItems.forEach(item => {
            if (item.getAttribute("href") === currentPath) {
                item.parentElement.classList.add("active");
            }
        });
    }

    // Проверка валидности email
    function checkEmail() {
        let email = document.querySelector('#emailField').value;
        if (!email.includes('@')) alert("Введите корректный адрес электронной почты!")
        else if (!email.includes('.')) alert ("Введите корректный адрес электронной почты!")
        else alert("Подписка на рассылку успешно оформлена!")
    }
});