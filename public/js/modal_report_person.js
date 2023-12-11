const exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget

    // RECEIVE DATA-INFO
    const recipientPersonId = button.getAttribute('data-bs-idPer')
    const recipientContratoId = button.getAttribute('data-bs-idCon')
    const recipientNombre = button.getAttribute('data-bs-nombre')
    const recipientTelefono = button.getAttribute('data-bs-telefono')
    const recipientArea = button.getAttribute('data-bs-id_area')
    const recipientCargo = button.getAttribute('data-bs-id_cargo')
    const recipientHora = button.getAttribute('data-bs-hora_entr')

    // REFERENCE THROUGH ID
    const modalTitle = exampleModal.querySelector('.modal-title')
    const modalBodyInputPersonId = exampleModal.querySelector('#recipient-person-id')
    const modalBodyInputContratoId = exampleModal.querySelector('#recipient-contrato-id')
    const modalBodyInputNombre = exampleModal.querySelector('#recipient-name')
    const modalBodyInputTelefono = exampleModal.querySelector('#recipient-telefono')
    const modalBodyInputArea = exampleModal.querySelector('#recipient-area')
    const modalBodyInputCargo = exampleModal.querySelector('#recipient-cargo')
    const modalBodyInputHora = exampleModal.querySelector('#recipient-hora-entrada')

    // ASSIGN VALUE MODAL
    modalTitle.textContent = `Actualizar Datos de ${recipientNombre}`
    modalBodyInputPersonId.value = recipientPersonId
    modalBodyInputContratoId.value = recipientContratoId
    modalBodyInputNombre.value = recipientNombre
    modalBodyInputTelefono.value = recipientTelefono
    modalBodyInputArea.value = recipientArea
    modalBodyInputCargo.value = recipientCargo
    modalBodyInputHora.value = recipientHora
})