window.bootstrap = require('bootstrap/dist/js/bootstrap.bundle.js');

window.addSpinerAndDisable = function(buttonId, message) {
    let button = document.querySelector(buttonId);
    button.innerHTML = `<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>${message}...`;
    setTimeout(function () {
        button.classList.add('disabled')
    }, 1);
}
