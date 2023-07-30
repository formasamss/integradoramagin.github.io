function generarTicket() {
    const formEntrega = document.getElementById('formEntrega');
    const horaEntrega = formEntrega.hora.value;
    const fechaEntrega = formEntrega.fecha.value;
    const cliente = formEntrega.cliente.value;
    const contacto = formEntrega.contacto.value;
    const prendas = formEntrega.prendas.value;
    const folio = formEntrega.folio.value;

    const horaEntregaEl = document.getElementById('horaEntrega');
    horaEntregaEl.textContent = horaEntrega;

    const fechaEntregaEl = document.getElementById('fechaEntrega');
    fechaEntregaEl.textContent = fechaEntrega;

    const clienteTicketEl = document.getElementById('clienteTicket');
    clienteTicketEl.textContent = cliente;

    const contactoTicketEl = document.getElementById('contactoTicket');
    contactoTicketEl.textContent = contacto;

    const folioTicketEl = document.getElementById('folioTicket');
    folioTicketEl.textContent = folio;

    const prendasEntregadasEl = document.getElementById('prendasEntregadas');
    prendasEntregadasEl.innerHTML = "";
    const prendasArray = prendas.split('\n');
    prendasArray.forEach((prenda) => {
        const li = document.createElement('li');
        li.textContent = prenda;
        prendasEntregadasEl.appendChild(li);
    });

    const ticketGenerado = document.getElementById('ticketGenerado');
    ticketGenerado.style.display = 'block';
}
