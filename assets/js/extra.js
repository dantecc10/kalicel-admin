
function changeText(idsql, estado) {
    switch (estado) {
        case 'pendiente':
            var span = document.querySelector('#status' + idsql + '.btn-status .status-pendiente');
            span.textContent = "Listo";
            break;
        case 'listo':
            var span = document.querySelector('#status' + idsql + '.btn-status .status-pendiente');
            span.textContent = "Entregado";
            break;
        case 'entregado':
            var span = document.querySelector('#status' + idsql + '.btn-status .status-pendiente');
            span.textContent = "Pendiente";
            break;

        default:
            break;
    }
}
function resetText(idsql, estado) {
    switch (estado) {
        case 'pendiente':
            var span = document.querySelector('#status' + idsql + '.btn-status .status-pendiente');
            span.textContent = "Pendiente";

        case 'listo':
            var span = document.querySelector('#status' + idsql + '.btn-status .status-pendiente');
            span.textContent = "Listo";
            break;
        case 'entregado':
            var span = document.querySelector('#status' + idsql + '.btn-status .status-pendiente');
            span.textContent = "Entregado";
            break;

        default:
            break;
    }
}