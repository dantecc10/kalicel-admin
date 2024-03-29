
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
    var id = element.closest('tr').querySelectorAll('td')[0].innerHTML; //var fila = element.closest('tr'); //console.log("El id de reparación de esa fila es: " + id);
    return id;
}

function update_status(element) {
    var target_id = get_service_id(element);

    var xhr = new XMLHttpRequest();
    var url = "php scripts/status-ajax-updater.php";
    var params = ("target_id=" + target_id);
    xhr.open("POST", url, true);

    // Cabecera para indicar que se está enviando información de formulario
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200 && xhr.responseText == "success") {
            // La solicitud ha sido completada y la respuesta está lista
            if (element.querySelector('span').classList.contains('status-pendiente')) {
                element.querySelector('span').classList.remove('status-pendiente');
                element.querySelector('span').classList.add('status-listo');
                alert("¡Éxito! La orden de reparación #" + target_id + " se marcó como lista.");
            } else {
                if (element.querySelector('span').classList.contains('status-listo')) {
                    element.querySelector('span').classList.remove('status-listo');
                    element.querySelector('span').classList.add('status-entregado');
                    alert("¡Éxito! La orden de reparación #" + target_id + " se entregó.");
                } else {
                    if (element.querySelector('span').classList.contains('status-entregado')) {
                        element.querySelector('span').classList.remove('status-entregado');
                        element.querySelector('span').classList.add('status-pendiente');
                        alert("¡Correcto! La orden de reparación #" + target_id + " vuelve a estar pendiente.");
                    }
                }
            }
        } else {
            alert("Se produjo un error al intentar actualizar el status de la reparación.");
        }
        console.log(xhr.responseText);
    }

    // Enviar la solicitud con los parámetros
    xhr.send(params);

}