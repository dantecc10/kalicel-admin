
function changeText(idsql, estado) {
    switch (estado) {
        case 'pendiente':
            var span = document.getElementById('status-' + idsql);
            span.textContent = "Listo";
            span.setAttribute("onmouseout", "restaurarValor()");
            break;
        case 'listo':
            var span = document.getElementById('status-' + idsql);
            span.textContent = "Entregado";
            break;
        case 'entregado':
            var span = document.getElementById('status-' + idsql);
            span.textContent = "Pendiente";
            break;

        default:
            break;
    }
}
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

function restore_animation(element) {
    span = element.querySelector('span');
    (span.classList.contains("status-pendiente")) ? span.textContent = "Pendiente" : (span.classList.contains("status-listo")) ? span.textContent = "Listo" : /*(element.classList.contains("entregado")) ? */span.textContent = "Entregado";
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