function programarEntrega() {
    const formRecepcion = document.getElementById('formRecepcion');
    const horaRecepcion = formRecepcion.hora.value;
    const fechaRecepcion = formRecepcion.fecha.value;
    const cliente = formRecepcion.cliente.value;
    const contacto = formRecepcion.contacto.value;
    const prendas = formRecepcion.prendas.value;
    const nota = formRecepcion.nota.value;

    const horaProgramadaEl = document.getElementById('horaRecepcionProgramada');
    horaProgramadaEl.textContent = horaRecepcion;

    const fechaProgramadaEl = document.getElementById('fechaRecepcionProgramada');
    fechaProgramadaEl.textContent = fechaRecepcion;

    const clienteProgramadoEl = document.getElementById('clienteProgramado');
    clienteProgramadoEl.textContent = cliente;

    const contactoProgramadoEl = document.getElementById('contactoProgramado');
    contactoProgramadoEl.textContent = contacto;

    const prendasProgramadasEl = document.getElementById('prendasProgramadas');
    prendasProgramadasEl.innerHTML = "";
    const prendasArray = prendas.split('\n');
    prendasArray.forEach((prenda) => {
        const li = document.createElement('li');
        li.textContent = prenda;
        prendasProgramadasEl.appendChild(li);
    });

    const notaProgramadaEl = document.getElementById('notaProgramada');
    notaProgramadaEl.textContent = nota;

    // Calcular y mostrar fecha y hora de entrega (3 días después)
    const fechaEntrega = new Date(fechaRecepcion);
    fechaEntrega.setDate(fechaEntrega.getDate() + 3);

    const fechaEntregaProgramadaEl = document.getElementById('fechaEntregaProgramada');
    fechaEntregaProgramadaEl.textContent = fechaEntrega.toISOString().slice(0, 10);

    const horaEntregaProgramadaEl = document.getElementById('horaEntregaProgramada');
    horaEntregaProgramadaEl.textContent = horaRecepcion;

    const programacionEntrega = document.getElementById('programacionEntrega');
    programacionEntrega.style.display = 'block';
}
