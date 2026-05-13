<?php
/**
 * EduMind AI — Gestion des Cours
 * @author Prof. NADIR MOHAMED ANOUAR
 */

$courses = [
    ['id'=>1,'title'=>'Introduction à l\'Intelligence Artificielle','category'=>'IA & ML','instructor'=>'Prof. NADIR MOHAMED ANOUAR','students'=>45,'duration'=>'36h','level'=>'Intermédiaire','color'=>'#6C5CE7','icon'=>'fas fa-brain','progress'=>75],
    ['id'=>2,'title'=>'Programmation PHP & Laravel','category'=>'Développement Web','instructor'=>'Prof. NADIR MOHAMED ANOUAR','students'=>60,'duration'=>'48h','level'=>'Avancé','color'=>'#00D2FF','icon'=>'fab fa-php','progress'=>88],
    ['id'=>3,'title'=>'Bases de Données Avancées','category'=>'Data Engineering','instructor'=>'Prof. NADIR MOHAMED ANOUAR','students'=>38,'duration'=>'30h','level'=>'Intermédiaire','color'=>'#0ACF83','icon'=>'fas fa-database','progress'=>62],
    ['id'=>4,'title'=>'Deep Learning & Réseaux de Neurones','category'=>'IA & ML','instructor'=>'Prof. NADIR MOHAMED ANOUAR','students'=>32,'duration'=>'42h','level'=>'Avancé','color'=>'#FF6B6B','icon'=>'fas fa-network-wired','progress'=>45],
    ['id'=>5,'title'=>'Développement Frontend — HTML5, CSS3, Bootstrap','category'=>'Développement Web','instructor'=>'Prof. NADIR MOHAMED ANOUAR','students'=>55,'duration'=>'40h','level'=>'Débutant','color'=>'#FECA57','icon'=>'fab fa-html5','progress'=>92],
    ['id'=>6,'title'=>'Algorithmes & Structures de Données','category'=>'Fondamentaux','instructor'=>'Prof. NADIR MOHAMED ANOUAR','students'=>50,'duration'=>'36h','level'=>'Intermédiaire','color'=>'#A29BFE','icon'=>'fas fa-code','progress'=>80],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours — EduMind AI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="index.php"><i class="fas fa-brain me-2"></i>EduMind AI</a>
            <div class="d-flex align-items-center gap-3">
                <div class="avatar" style="background:linear-gradient(135deg,var(--primary),var(--secondary))">NM</div>
            </div>
        </div>
    </nav>

    <div class="dashboard-layout">
        <aside class="sidebar">
            <div style="padding:0 24px 20px;border-bottom:1px solid var(--glass-border);margin-bottom:20px">
                <div style="font-size:0.75rem;text-transform:uppercase;color:var(--text-muted);letter-spacing:1px">Menu</div>
            </div>
            <a href="dashboard.php" class="sidebar-link"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="students.php" class="sidebar-link"><i class="fas fa-users"></i> Étudiants</a>
            <a href="courses.php" class="sidebar-link active"><i class="fas fa-book"></i> Cours</a>
            <a href="quiz.php" class="sidebar-link"><i class="fas fa-question-circle"></i> Quiz IA</a>
            <a href="index.php" class="sidebar-link"><i class="fas fa-home"></i> Accueil</a>
        </aside>

        <main class="main-content">
            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
                <div>
                    <h2 style="font-weight:800;margin-bottom:4px">Gestion des Cours</h2>
                    <p style="color:var(--text-muted);margin:0"><?php echo count($courses); ?> cours disponibles</p>
                </div>
                <button class="btn-primary-custom" style="padding:10px 24px;font-size:0.9rem">
                    <i class="fas fa-plus me-2"></i>Nouveau Cours
                </button>
            </div>

            <!-- CATEGORY FILTERS -->
            <div class="d-flex gap-2 mb-4 flex-wrap">
                <span class="badge-custom badge-info" style="cursor:pointer;padding:8px 16px">Tous</span>
                <span class="badge-custom" style="cursor:pointer;padding:8px 16px;background:var(--dark-3);color:var(--text-muted)">IA & ML</span>
                <span class="badge-custom" style="cursor:pointer;padding:8px 16px;background:var(--dark-3);color:var(--text-muted)">Développement Web</span>
                <span class="badge-custom" style="cursor:pointer;padding:8px 16px;background:var(--dark-3);color:var(--text-muted)">Data Engineering</span>
                <span class="badge-custom" style="cursor:pointer;padding:8px 16px;background:var(--dark-3);color:var(--text-muted)">Fondamentaux</span>
            </div>

            <!-- COURSES GRID -->
            <div class="row g-4">
                <?php foreach ($courses as $c): ?>
                <div class="col-md-6 col-xl-4">
                    <div class="glass-card h-100" style="padding:0;overflow:hidden">
                        <div style="height:6px;background:<?php echo $c['color']; ?>"></div>
                        <div style="padding:24px">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div style="width:50px;height:50px;border-radius:14px;background:<?php echo $c['color']; ?>20;display:flex;align-items:center;justify-content:center;color:<?php echo $c['color']; ?>;font-size:1.3rem">
                                    <i class="<?php echo $c['icon']; ?>"></i>
                                </div>
                                <div>
                                    <span class="badge-custom" style="background:<?php echo $c['color']; ?>20;color:<?php echo $c['color']; ?>;font-size:0.75rem"><?php echo $c['category']; ?></span>
                                </div>
                            </div>
                            <h5 style="font-weight:700;margin-bottom:12px;line-height:1.3"><?php echo $c['title']; ?></h5>
                            <p style="color:var(--text-muted);font-size:0.85rem;margin-bottom:16px">
                                <i class="fas fa-chalkboard-teacher me-1"></i> <?php echo $c['instructor']; ?>
                            </p>
                            <div class="d-flex gap-3 mb-3" style="font-size:0.85rem;color:var(--text-muted)">
                                <span><i class="fas fa-users me-1"></i> <?php echo $c['students']; ?></span>
                                <span><i class="fas fa-clock me-1"></i> <?php echo $c['duration']; ?></span>
                                <span><i class="fas fa-signal me-1"></i> <?php echo $c['level']; ?></span>
                            </div>
                            <div style="margin-bottom:8px;display:flex;justify-content:space-between;font-size:0.85rem">
                                <span style="color:var(--text-muted)">Progression</span>
                                <span style="font-weight:700;color:<?php echo $c['color']; ?>"><?php echo $c['progress']; ?>%</span>
                            </div>
                            <div class="progress-custom">
                                <div class="bar" style="width:<?php echo $c['progress']; ?>%;background:<?php echo $c['color']; ?>"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
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
