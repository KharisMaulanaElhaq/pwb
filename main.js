$('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
 });
 
 function closeNotification() {
    const notification = document.getElementById('lang-notification');
    if (notification) {
        notification.style.display = 'none';
    }
}

window.onload = function() {
    const notification = document.getElementById('lang-notification');
    if (notification) {
        setTimeout(() => {
            notification.style.display = 'none';
        }, 5000);
    }
}