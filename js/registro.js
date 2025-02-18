// Añade esto al script.js existente

document.addEventListener('DOMContentLoaded', function() {
    const workerForm = document.getElementById('workerForm');
    
    // Validación de formulario
    workerForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Aquí puedes añadir la lógica para enviar los datos
        console.log('Formulario enviado');
        
        // Ejemplo de recolección de datos
        const formData = new FormData(workerForm);
        const workerData = Object.fromEntries(formData);
        console.log(workerData);
        
        // Mostrar mensaje de éxito
        alert('Trabajador registrado exitosamente');
        
        // Opcional: limpiar el formulario
        workerForm.reset();
    });

    // Validación en tiempo real de CURP
    const curpInput = document.getElementById('curp');
    curpInput.addEventListener('input', function() {
        this.value = this.value.toUpperCase();
    });

    // Validación en tiempo real de RFC
    const rfcInput = document.getElementById('rfc');
    rfcInput.addEventListener('input', function() {
        this.value = this.value.toUpperCase();
    });

    // Validación en tiempo real de NSS
    const nssInput = document.getElementById('nss');
    nssInput.addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    // Mostrar nombre del archivo seleccionado
    const actaInput = document.getElementById('actaNacimiento');
    actaInput.addEventListener('change', function() {
        const fileName = this.files[0]?.name;
        const fileLabel = this.nextElementSibling;
        if (fileName) {
            fileLabel.textContent = fileName;
        }
    });
});