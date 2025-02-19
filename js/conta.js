document.addEventListener('DOMContentLoaded', function() {
    const expenseTable = document.getElementById('expenseTableBody');
    const addRowBtn = document.getElementById('addRow');
    const saveAllBtn = document.getElementById('saveAll');
    const clearAllBtn = document.getElementById('clearAll');

    // Función para crear una nueva fila
    function createRow() {
        const row = document.createElement('tr');
        row.className = 'expense-row';
        row.innerHTML = `
            <td>
                <select class="table-select">
                    <option value="">Seleccionar Obra</option>
                    <option value="obra1">Obra 1</option>
                    <option value="obra2">Obra 2</option>
                    <option value="obra3">Obra 3</option>
                </select>
            </td>
            <td>
                <input type="date" class="table-input">
            </td>
            <td>
                <input type="text" class="table-input" placeholder="Concepto del gasto">
            </td>
            <td>
                <div class="monto-container">
                    <span class="currency">$</span>
                    <input type="number" class="table-input monto" step="0.01" min="0">
                </div>
            </td>
            <td>
                <select class="table-select">
                    <option value="no">No</option>
                    <option value="si">Sí</option>
                </select>
            </td>
            <td>
                <div class="file-upload">
                    <input type="file" class="file-input" accept=".pdf,.jpg,.jpeg,.png">
                    <button type="button" class="btn-upload">
                        <i class="fas fa-upload"></i>
                    </button>
                </div>
            </td>
            <td>
                <input type="text" class="table-input" placeholder="Notas...">
            </td>
            <td>
                <button type="button" class="btn-delete">
                    <i class="fas fa-trash"></i>
                </button>
            </td>
        `;
        return row;
    }

    // Agregar nueva fila
    addRowBtn.addEventListener('click', function() {
        const newRow = createRow();
        expenseTable.appendChild(newRow);
        initializeRowEvents(newRow);
    });

    // Inicializar eventos para una fila
    function initializeRowEvents(row) {
        // Manejo del botón de eliminar
        const deleteBtn = row.querySelector('.btn-delete');
        deleteBtn.addEventListener('click', function() {
            if (expenseTable.children.length > 1) {
                row.remove();
            } else {
                alert('Debe mantener al menos una fila en la tabla');
            }
        });

        // Manejo del botón de subir archivo
        const fileInput = row.querySelector('.file-input');
        const uploadBtn = row.querySelector('.btn-upload');
        
        uploadBtn.addEventListener('click', function() {
            fileInput.click();
        });

        fileInput.addEventListener('change', function() {
            if (this.files.length > 0) {
                uploadBtn.innerHTML = '<i class="fas fa-check"></i>';
                uploadBtn.style.backgroundColor = '#28a745';
            }
        });

        // Formateo de montos
        const montoInput = row.querySelector('.monto');
        montoInput.addEventListener('input', function() {
            if (this.value.includes('.')) {
                let parts = this.value.split('.');
                if (parts[1].length > 2) {
                    this.value = parseFloat(this.value).toFixed(2);
                }
            }
        });
    }

    document.querySelectorAll('.expense-row').forEach(row => {
        initializeRowEvents(row);
    });

    // Guardar todos los datos
    saveAllBtn.addEventListener('click', function() {
        const rows = document.querySelectorAll('.expense-row');
        const data = [];

        rows.forEach(row => {
            const rowData = {
                obra: row.querySelector('select').value,
                fecha: row.querySelector('input[type="date"]').value,
                concepto: row.querySelector('input[placeholder="Concepto del gasto"]').value,
                monto: row.querySelector('.monto').value,
                iva: row.querySelectorAll('select')[1].value,
                notas: row.querySelector('input[placeholder="Notas..."]').value
            };
            data.push(rowData);
        });

        console.log('Datos a guardar:', data);
        alert('Datos guardados exitosamente');
    });

    // Limpiar toda la tabla
    clearAllBtn.addEventListener('click', function() {
        if (confirm('¿Está seguro de que desea limpiar todos los datos?')) {
            const firstRow = createRow();
            expenseTable.innerHTML = '';
            expenseTable.appendChild(firstRow);
            initializeRowEvents(firstRow);
        }
    });
});