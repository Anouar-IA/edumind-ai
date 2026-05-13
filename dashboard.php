<?php
/**
 * EduMind AI — Dashboard Analytique
 * @author Prof. NADIR MOHAMED ANOUAR
 */

$stats = [
    ['icon' => 'fas fa-users', 'value' => '1,248', 'label' => 'Étudiants', 'class' => 'bg-gradient-purple', 'color' => '#6C5CE7'],
    ['icon' => 'fas fa-book', 'value' => '36', 'label' => 'Cours Actifs', 'class' => 'bg-gradient-blue', 'color' => '#00D2FF'],
    ['icon' => 'fas fa-check-circle', 'value' => '92%', 'label' => 'Taux Réussite', 'class' => 'bg-gradient-green', 'color' => '#0ACF83'],
    ['icon' => 'fas fa-brain', 'value' => '5,420', 'label' => 'Quiz IA Générés', 'class' => 'bg-gradient-red', 'color' => '#FF6B6B'],
];

$recentStudents = [
    ['name' => 'Ahmed Bennani', 'email' => 'ahmed.b@edu.ma', 'filiere' => 'GI', 'status' => 'Actif', 'avg' => '16.5'],
    ['name' => 'Fatima Zahra El Amrani', 'email' => 'fatima.z@edu.ma', 'filiere' => 'GI', 'status' => 'Actif', 'avg' => '14.8'],
    ['name' => 'Youssef Tazi', 'email' => 'youssef.t@edu.ma', 'filiere' => 'IRISI', 'status' => 'Actif', 'avg' => '15.2'],
    ['name' => 'Khadija Moussaoui', 'email' => 'khadija.m@edu.ma', 'filiere' => 'GI', 'status' => 'Absent', 'avg' => '12.0'],
    ['name' => 'Omar Chraibi', 'email' => 'omar.c@edu.ma', 'filiere' => 'IRISI', 'status' => 'Actif', 'avg' => '17.3'],
];

$colors = ['#6C5CE7','#00D2FF','#0ACF83','#FF6B6B','#FECA57'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard — EduMind AI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="index.php"><i class="fas fa-brain me-2"></i>EduMind AI</a>
            <div class="d-flex align-items-center gap-3">
                <span style="color:var(--text-muted);font-size:0.9rem"><i class="fas fa-bell me-1"></i></span>
                <div class="avatar" style="background:linear-gradient(135deg,var(--primary),var(--secondary))">NM</div>
            </div>
        </div>
    </nav>

    <div class="dashboard-layout">
        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div style="padding:0 24px 20px;border-bottom:1px solid var(--glass-border);margin-bottom:20px">
                <div style="font-size:0.75rem;text-transform:uppercase;color:var(--text-muted);letter-spacing:1px;margin-bottom:10px">Menu Principal</div>
            </div>
            <a href="dashboard.php" class="sidebar-link active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="students.php" class="sidebar-link"><i class="fas fa-users"></i> Étudiants</a>
            <a href="courses.php" class="sidebar-link"><i class="fas fa-book"></i> Cours</a>
            <a href="quiz.php" class="sidebar-link"><i class="fas fa-question-circle"></i> Quiz IA</a>
            <div style="padding:0 24px;margin-top:30px;margin-bottom:10px">
                <div style="font-size:0.75rem;text-transform:uppercase;color:var(--text-muted);letter-spacing:1px">Système</div>
            </div>
            <a href="login.php" class="sidebar-link"><i class="fas fa-cog"></i> Paramètres</a>
            <a href="index.php" class="sidebar-link"><i class="fas fa-home"></i> Accueil</a>
        </aside>

        <!-- MAIN CONTENT -->
        <main class="main-content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 style="font-weight:800;margin-bottom:4px">Dashboard</h2>
                    <p style="color:var(--text-muted);margin:0">Bienvenue, Prof. NADIR MOHAMED ANOUAR 👋</p>
                </div>
                <div>
                    <span style="color:var(--text-muted);font-size:0.9rem"><i class="far fa-calendar me-1"></i> <?php echo date('d/m/Y'); ?></span>
                </div>
            </div>

            <!-- STAT CARDS -->
            <div class="row g-4 mb-4">
                <?php foreach ($stats as $s): ?>
                <div class="col-md-6 col-xl-3">
                    <div class="dash-stat <?php echo $s['class']; ?>">
                        <div class="icon-box" style="background:<?php echo $s['color']; ?>20;color:<?php echo $s['color']; ?>">
                            <i class="<?php echo $s['icon']; ?>"></i>
                        </div>
                        <div>
                            <h3><?php echo $s['value']; ?></h3>
                            <p><?php echo $s['label']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- CHARTS -->
            <div class="row g-4 mb-4">
                <div class="col-lg-8">
                    <div class="glass-card">
                        <h5 style="font-weight:700;margin-bottom:20px"><i class="fas fa-chart-line me-2" style="color:var(--primary)"></i>Performances</h5>
                        <canvas id="performanceChart" height="120"></canvas>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="glass-card">
                        <h5 style="font-weight:700;margin-bottom:20px"><i class="fas fa-chart-pie me-2" style="color:var(--secondary)"></i>Répartition</h5>
                        <canvas id="distributionChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- RECENT STUDENTS TABLE -->
            <div class="glass-card">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 style="font-weight:700;margin:0"><i class="fas fa-users me-2" style="color:var(--accent)"></i>Étudiants Récents</h5>
                    <a href="students.php" class="btn-primary-custom" style="padding:8px 20px;font-size:0.85rem">Voir tout</a>
                </div>
                <div class="table-responsive">
                    <table class="table-custom">
                        <thead>
                            <tr>
                                <th>Étudiant</th>
                                <th>Email</th>
                                <th>Filière</th>
                                <th>Statut</th>
                                <th>Moyenne</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($recentStudents as $i => $s): ?>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar" style="background:<?php echo $colors[$i % 5]; ?>;width:35px;height:35px;font-size:0.8rem">
                                            <?php echo strtoupper(substr($s['name'],0,1).substr(strstr($s['name'],' '),1,1)); ?>
                                        </div>
                                        <?php echo $s['name']; ?>
                                    </div>
                                </td>
                                <td style="color:var(--text-muted)"><?php echo $s['email']; ?></td>
                                <td><span class="badge-custom badge-info"><?php echo $s['filiere']; ?></span></td>
                                <td><span class="badge-custom <?php echo $s['status']==='Actif' ? 'badge-success' : 'badge-danger'; ?>"><?php echo $s['status']; ?></span></td>
                                <td style="font-weight:700"><?php echo $s['avg']; ?>/20</td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <!-- CHATBOT -->
    <button class="chatbot-toggle" id="chatbot-toggle"><i class="fas fa-robot"></i></button>
    <div class="chatbot-window" id="chatbot-window">
        <div class="chatbot-header">
            <div style="width:40px;height:40px;background:rgba(255,255,255,0.2);border-radius:50%;display:flex;align-items:center;justify-content:center"><i class="fas fa-robot"></i></div>
            <div><h5>Assistant EduMind</h5><span class="status"><i class="fas fa-circle" style="font-size:8px;color:#0ACF83"></i> En ligne</span></div>
        </div>
        <div class="chatbot-messages" id="chatbot-messages"></div>
        <div class="chatbot-input">
            <input type="text" id="chatbot-input" placeholder="Écrivez votre message...">
            <button id="chatbot-send"><i class="fas fa-paper-plane"></i></button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/app.js"></script>
</body>
</html>
