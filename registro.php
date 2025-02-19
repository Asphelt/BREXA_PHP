<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BREXA Industrial - Registro de Trabajador</title>
    <link rel="stylesheet" href="/css/registro.css">
    <link rel="stylesheet" href="/css/inicio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <nav class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <img src="/img/BREXA Industrial 01.png" alt="BREXA Logo" class="logo">
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
                <a href="#" class="menu-item">
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

        <!-- Main Content -->
        <main class="main-content" id="main">
            <header class="top-bar">
                <button id="mobile-toggle" class="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </button>
                <h1>Registro de Trabajador</h1>
            </header>

            <div class="content">
                <div class="form-container">
                    <form class="worker-form" id="workerForm">
                        <div class="form-grid">
                            <!-- Datos Personales -->
                            <div class="form-section">
                                <h2>Datos Personales</h2>
                                <div class="form-group">
                                    <label for="nombre">Nombre(s)</label>
                                    <input type="text" id="nombre" name="nombre" required maxlength="45">
                                </div>
                                <div class="form-group">
                                    <label for="apellidoP">Apellido Paterno</label>
                                    <input type="text" id="apellidoP" name="apellidoP" required maxlength="45">
                                </div>
                                <div class="form-group">
                                    <label for="apellidoM">Apellido Materno</label>
                                    <input type="text" id="apellidoM" name="apellidoM" required maxlength="45">
                                </div>
                            </div>

                            <!-- Documentación -->
                            <div class="form-section">
                                <h2>Documentación</h2>
                                <div class="form-group">
                                <label for="CURP">CURP</label>
                                    <label for="CURP" class="file-label">
                                        <i class="fas fa-upload"></i>
                                        Subir Archivo
                                    </label>
                                </div>
                                <div class="form-group">
                                <label for="RFC">RFC</label>
                                    <label for="RFC" class="file-label">
                                        <i class="fas fa-upload"></i>
                                        Subir Archivo
                                    </label>
                                </div>
                                <div class="form-group">
                                <label for="NSS">Número de seguro social</label>
                                    <label for="NSS" class="file-label">
                                        <i class="fas fa-upload"></i>
                                        Subir Archivo
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="actaNacimiento">Acta de Nacimiento</label>
                                    <div class="file-input-container">
                                        <input type="file" id="actaNacimiento" name="actaNacimiento"
                                            accept=".pdf,.jpg,.jpeg,.png">
                                        <label for="actaNacimiento" class="file-label">
                                            <i class="fas fa-upload"></i>
                                            Subir Archivo
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn-submit">
                                <i class="fas fa-save"></i>
                                Guardar
                            </button>
                            <button type="reset" class="btn-reset">
                                <i class="fas fa-undo"></i>
                                Limpiar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <script src="/js/registro.js"></script>
    <script src="/js/scripts.js"></script>
</body>

</html>