
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
        if (xhr.readyState == 4 && xhr.status == 200) {
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
                        alert("La orden de reparación #" + target_id + " vuelve a estar pendiente.");
                    }
                }
            }
        }
    }

    // Enviar la solicitud con los parámetros
    xhr.send(params);
}

function notify(element) {
    var marca = element.closest('tr').querySelectorAll('td')[1].querySelectorAll('span')[0].textContent;
    var modelo = element.closest('tr').querySelectorAll('td')[1].querySelectorAll('span')[1].textContent;
    var mobile = element.closest('tr').querySelectorAll('td')[3].querySelector('.col .text-nowrap a')[1].textContent;
    alert("El número es: " + mobile);
    "https://wa.me/?text=Estimado%20cliente%2C%20le%20informamos%20que%20hemos%20recibido%20su%20%F0%9F%93%B1%20_OPPO%20*Reno7*_%20para%20darle%20servicio%20por%20*pantalla%20rota*.%0A%0A%C2%A1Gracias%20por%20su%20preferencia!%0A_Kalicel%3A%20*Nosotros%20reparamos*_%F0%9F%9B%A0%EF%B8%8F"
}