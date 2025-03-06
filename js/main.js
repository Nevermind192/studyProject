document.addEventListener("DOMContentLoaded", function() {
    // Функция для добавления класса active текущему пункту меню
    function setActiveMenuItem() {
        let currentPath = window.location.pathname;
        let menuItems = document.querySelectorAll("nav ul li a");

        if(currentPath === '/contacts.php') {
            return;
        }
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

    // Кнопка для видео на Services
    document.getElementById("play-button").addEventListener("click", function () {
        let video = document.getElementById("main-video");
        video.play();
        this.style.display = "none";
    });
});