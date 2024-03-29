
function resetText(idsql, estado) {
    switch (estado) {
        case 'pendiente':
            var span = document.getElementById('status' + idsql);
            span.textContent = "Pendiente";
            break;
        case 'listo':
            var span = document.getElementById('status' + idsql);
            span.textContent = "Listo";
            break;
        case 'entregado':
            var span = document.getElementById('status' + idsql);
            span.textContent = "Entregado";
            break;

        default:
            break;
    }
}

function change_text(element) {
    span = element.querySelector('span');
    (span.classList.contains("status-pendiente")) ? span.innerHTML = "Listo" : (span.classList.contains("status-listo")) ? span.innerHTML = "Entregado" : /*(element.classList.contains("entregado")) ? */span.innerHTML = "Pendiente";
}
function restore_animation(element) {
    span = element.querySelector('span');
    (span.classList.contains("status-pendiente")) ? span.innerHTML = "Pendiente" : (span.classList.contains("status-listo")) ? span.innerHTML = "Listo" : /*(element.classList.contains("entregado")) ? */span.innerHTML = "Entregado";
}

function get_service_id(element) {
    var position = -1;
    buttons = document.querySelectorAll('btn.btn-status');
    for (var i = 0; i < buttons.length; i++) {
        if (buttons[i] == element) {
            position = i;
            break;
        }
    }
    console.log("El id de reparación de esa fila es: " + document.getElementsByClassName('id-container')[i].outerHTML);
}