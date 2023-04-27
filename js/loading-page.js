const loaderWrapper = document.querySelector('.loader-wrapper');
const loadingTime = 2000;

setTimeout(() => {
    loaderWrapper.style.opacity = '0';
    setTimeout(() => {
        window.location.href = '../php/main.php';
    }, 200);
}, loadingTime);

