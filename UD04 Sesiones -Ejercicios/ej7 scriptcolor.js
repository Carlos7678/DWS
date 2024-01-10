document.addEventListener('DOMContentLoaded', function () {
    var backgroundColor = getCookieValue('backgroundColor');

    if (backgroundColor) {
        var colorDisplay = document.getElementById('colorDisplay');
        colorDisplay.style.backgroundColor = backgroundColor;
        colorDisplay.innerHTML = `<p>Color seleccionado: ${backgroundColor}</p>`;
    }
});

function getCookieValue(cookieName) {
    var name = cookieName + '=';
    var decodedCookie = decodeURIComponent(document.cookie);
    var cookieArray = decodedCookie.split(';');
    
    for (var i = 0; i < cookieArray.length; i++) {
        var cookie = cookieArray[i].trim();
        if (cookie.indexOf(name) == 0) {
            return cookie.substring(name.length, cookie.length);
        }
    }
    
    return '';
}