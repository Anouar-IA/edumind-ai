<?php
/**
 * EduMind AI — Quiz IA (Auto-Generated)
 * @author Prof. NADIR MOHAMED ANOUAR
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz IA — EduMind AI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="index.php"><i class="fas fa-brain me-2"></i>EduMind AI</a>
            <div class="avatar" style="background:linear-gradient(135deg,var(--primary),var(--secondary))">NM</div>
        </div>
    </nav>

    <div class="dashboard-layout">
        <aside class="sidebar">
            <div style="padding:0 24px 20px;border-bottom:1px solid var(--glass-border);margin-bottom:20px">
                <div style="font-size:0.75rem;text-transform:uppercase;color:var(--text-muted);letter-spacing:1px">Menu</div>
            </div>
            <a href="dashboard.php" class="sidebar-link"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="students.php" class="sidebar-link"><i class="fas fa-users"></i> Étudiants</a>
            <a href="courses.php" class="sidebar-link"><i class="fas fa-book"></i> Cours</a>
            <a href="quiz.php" class="sidebar-link active"><i class="fas fa-question-circle"></i> Quiz IA</a>
            <a href="index.php" class="sidebar-link"><i class="fas fa-home"></i> Accueil</a>
        </aside>

        <main class="main-content">
            <div class="mb-4">
                <h2 style="font-weight:800;margin-bottom:4px"><i class="fas fa-brain me-2" style="color:var(--primary)"></i>Quiz IA</h2>
                <p style="color:var(--text-muted);margin:0">Questions générées automatiquement par l'Intelligence Artificielle</p>
            </div>

            <div class="row g-4 mb-4">
                <div class="col-md-4">
                    <div class="dash-stat bg-gradient-purple">
                        <div class="icon-box" style="background:rgba(108,92,231,0.3);color:var(--primary)"><i class="fas fa-question"></i></div>
                        <div><h3>5</h3><p>Questions</p></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dash-stat bg-gradient-green">
                        <div class="icon-box" style="background:rgba(10,207,131,0.3);color:var(--accent)"><i class="fas fa-clock"></i></div>
                        <div><h3>10 min</h3><p>Durée estimée</p></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dash-stat bg-gradient-blue">
                        <div class="icon-box" style="background:rgba(0,210,255,0.3);color:var(--secondary)"><i class="fas fa-robot"></i></div>
                        <div><h3>IA</h3><p>Auto-Généré</p></div>
                    </div>
                </div>
            </div>

            <div class="glass-card mb-3" style="padding:16px 24px;display:flex;align-items:center;gap:12px">
                <i class="fas fa-info-circle" style="color:var(--secondary);font-size:1.2rem"></i>
                <span style="color:var(--text-muted);font-size:0.9rem">Les questions sont générées par notre moteur IA. Cliquez sur une réponse pour vérifier. Bonne chance !</span>
            </div>

            <div id="quiz-container"></div>
        </main>
    </div>

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
