<?
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BREXA Industrial - Dashboard</title>
    <link rel="stylesheet" href="/css/inicio.css">
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
                <h1>Dashboard</h1>
            </header>

            <div class="content">
                <div class="stats-grid">
                    <div class="stat-card">
                        <h3>Ingresos</h3>
                        <div class="stat-value">
                            <span class="value">$54,239</span>
                            <span class="change positive">+12.5%</span>
                        </div>
                        <div class="stat-chart"></div>
                    </div>
                    <div class="stat-card">
                        <h3>Proyectos activos</h3>
                        <div class="stat-value">
                            <span class="value">3</span>
                            <span class="change positive">Por finalizar: 2</span>
                        </div>
                        <div class="stat-chart"></div>
                    </div>
                    <div class="stat-card">
                        <h3>Nuevos clientes</h3>
                        <div class="stat-value">
                            <span class="value">321</span>
                            <span class="change positive">+8.1%</span>
                        </div>
                        <div class="stat-chart"></div>
                    </div>
                </div>

                <div class="chart-section">
                    <h2>Informes</h2>
                    <div class="chart-container">
                        <span>Noticias</span>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="/js/scripts.js"></script>
</body>
</html>