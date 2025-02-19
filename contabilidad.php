<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BREXA Industrial - Contabilidad de Obra</title>
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/conta.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="dashboard">
    <nav class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <img src="img/BREXA Industrial 01.png" alt="BREXA Logo" class="logo">
                <button id="toggle-sidebar" class="toggle-btn">
                    <i class="fas fa-chevron-left"></i>
                </button>
            </div>
            
            <div class="sidebar-menu">
            <a href="inicio.php" class="menu-item active">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
                <a href="contabilidad.php" class="menu-item">
                    <i class="fa fa-credit-card-alt"></i>
                    <span>Contabilidad</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-chart-bar"></i>
                    <span>Analiticas</span>
                </a>
                <a href="registro.php" class="menu-item">
                    <i class="fas fa-box"></i>
                    <span>Empleados</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-users"></i>
                    <span>Clientes</span>
                </a>
                <a href="index.php" class="menu-item">
                    <i class="fa fa-sign-out"></i>
                    <span>Salir</span>
                </a>
            </div>
        </nav>
        <main class="main-content" id="main">
            <header class="top-bar">
                <button id="mobile-toggle" class="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </button>
                <h1>Registro de Gastos de Obra</h1>
            </header>

            <div class="content">
                <div class="expense-container">
                    <div class="table-actions">
                        <button type="button" class="btn-add" id="addRow">
                            <i class="fas fa-plus"></i>
                            Agregar Fila
                        </button>
                    </div>
                    
                    <div class="table-container">
                        <table class="expense-table" id="expenseTable">
                            <thead>
                                <tr>
                                    <th>Obra</th>
                                    <th>Fecha</th>
                                    <th>Concepto</th>
                                    <th>Monto</th>
                                    <th>IVA</th>
                                    <th>Factura</th>
                                    <th>Notas</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="expenseTableBody">
                                <tr class="expense-row">
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
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn-submit" id="saveAll">
                            <i class="fas fa-save"></i>
                            Guardar Todo
                        </button>
                        <button type="button" class="btn-reset" id="clearAll">
                            <i class="fas fa-undo"></i>
                            Limpiar Todo
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="js/conta.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>