
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