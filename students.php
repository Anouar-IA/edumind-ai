<?php
/**
 * EduMind AI — Gestion des Étudiants (CRUD)
 * @author Prof. NADIR MOHAMED ANOUAR
 */

// Simulated database
session_start();
if (!isset($_SESSION['students'])) {
    $_SESSION['students'] = [
        ['id'=>1,'name'=>'Ahmed Bennani','email'=>'ahmed.b@edu.ma','filiere'=>'Génie Informatique','niveau'=>'GI2','phone'=>'0661234567','status'=>'Actif','avg'=>16.5,'created'=>'2024-09-15'],
        ['id'=>2,'name'=>'Fatima Zahra El Amrani','email'=>'fatima.z@edu.ma','filiere'=>'Génie Informatique','niveau'=>'GI1','phone'=>'0662345678','status'=>'Actif','avg'=>14.8,'created'=>'2024-09-15'],
        ['id'=>3,'name'=>'Youssef Tazi','email'=>'youssef.t@edu.ma','filiere'=>'IRISI','niveau'=>'IRISI3','phone'=>'0663456789','status'=>'Actif','avg'=>15.2,'created'=>'2024-09-16'],
        ['id'=>4,'name'=>'Khadija Moussaoui','email'=>'khadija.m@edu.ma','filiere'=>'Génie Informatique','niveau'=>'GI2','phone'=>'0664567890','status'=>'Absent','avg'=>12.0,'created'=>'2024-09-16'],
        ['id'=>5,'name'=>'Omar Chraibi','email'=>'omar.c@edu.ma','filiere'=>'IRISI','niveau'=>'IRISI2','phone'=>'0665678901','status'=>'Actif','avg'=>17.3,'created'=>'2024-09-17'],
        ['id'=>6,'name'=>'Sara Idrissi','email'=>'sara.i@edu.ma','filiere'=>'Génie Informatique','niveau'=>'GI1','phone'=>'0666789012','status'=>'Actif','avg'=>15.9,'created'=>'2024-09-17'],
        ['id'=>7,'name'=>'Hamza El Fassi','email'=>'hamza.f@edu.ma','filiere'=>'IRISI','niveau'=>'IRISI1','phone'=>'0667890123','status'=>'Actif','avg'=>13.7,'created'=>'2024-10-01'],
        ['id'=>8,'name'=>'Imane Berrada','email'=>'imane.b@edu.ma','filiere'=>'Génie Informatique','niveau'=>'GI3','phone'=>'0668901234','status'=>'Diplômé','avg'=>18.2,'created'=>'2024-10-01'],
    ];
}

// Handle actions
$message = '';
$messageType = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action'] === 'add') {
            $newId = max(array_column($_SESSION['students'], 'id')) + 1;
            $_SESSION['students'][] = [
                'id' => $newId,
                'name' => htmlspecialchars($_POST['name']),
                'email' => htmlspecialchars($_POST['email']),
                'filiere' => htmlspecialchars($_POST['filiere']),
                'niveau' => htmlspecialchars($_POST['niveau']),
                'phone' => htmlspecialchars($_POST['phone']),
                'status' => 'Actif',
                'avg' => 0,
                'created' => date('Y-m-d')
            ];
            $message = "Étudiant ajouté avec succès !";
            $messageType = "success";
        } elseif ($_POST['action'] === 'delete' && isset($_POST['id'])) {
            $_SESSION['students'] = array_values(array_filter($_SESSION['students'], fn($s) => $s['id'] != $_POST['id']));
            $message = "Étudiant supprimé.";
            $messageType = "danger";
        }
    }
}

$students = $_SESSION['students'];
$search = isset($_GET['search']) ? strtolower($_GET['search']) : '';
if ($search) {
    $students = array_filter($students, fn($s) => str_contains(strtolower($s['name']), $search) || str_contains(strtolower($s['email']), $search));
}
$colors = ['#6C5CE7','#00D2FF','#0ACF83','#FF6B6B','#FECA57'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Étudiants — EduMind AI</title>
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
            <a href="students.php" class="sidebar-link active"><i class="fas fa-users"></i> Étudiants</a>
            <a href="courses.php" class="sidebar-link"><i class="fas fa-book"></i> Cours</a>
            <a href="quiz.php" class="sidebar-link"><i class="fas fa-question-circle"></i> Quiz IA</a>
            <a href="index.php" class="sidebar-link"><i class="fas fa-home"></i> Accueil</a>
        </aside>

        <main class="main-content">
            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
                <div>
                    <h2 style="font-weight:800;margin-bottom:4px">Gestion des Étudiants</h2>
                    <p style="color:var(--text-muted);margin:0"><?php echo count($students); ?> étudiants enregistrés</p>
                </div>
                <button class="btn-primary-custom" data-bs-toggle="modal" data-bs-target="#addModal" style="padding:10px 24px;font-size:0.9rem">
                    <i class="fas fa-plus me-2"></i>Ajouter
                </button>
            </div>

            <?php if ($message): ?>
            <div class="alert alert-<?php echo $messageType; ?> alert-dismissible fade show" style="background:var(--dark-3);border:1px solid var(--glass-border);color:var(--text);border-radius:var(--radius-sm)">
                <i class="fas fa-<?php echo $messageType==='success'?'check-circle':'trash'; ?> me-2"></i><?php echo $message; ?>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
            </div>
            <?php endif; ?>

            <!-- SEARCH -->
            <div class="glass-card mb-4" style="padding:16px 20px">
                <form method="GET" class="d-flex gap-2">
                    <input type="text" name="search" class="form-control-custom" placeholder="🔍 Rechercher un étudiant..." value="<?php echo htmlspecialchars($search); ?>" style="flex:1">
                    <button type="submit" class="btn-primary-custom" style="padding:10px 24px">Rechercher</button>
                </form>
            </div>

            <!-- TABLE -->
            <div class="glass-card">
                <div class="table-responsive">
                    <table class="table-custom">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Étudiant</th>
                                <th>Email</th>
                                <th>Filière</th>
                                <th>Niveau</th>
                                <th>Statut</th>
                                <th>Moyenne</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($students as $i => $s): ?>
                            <tr>
                                <td style="color:var(--text-muted)"><?php echo $s['id']; ?></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar" style="background:<?php echo $colors[$i%5]; ?>;width:35px;height:35px;font-size:0.75rem">
                                            <?php echo strtoupper(substr($s['name'],0,1)); ?>
                                        </div>
                                        <strong><?php echo $s['name']; ?></strong>
                                    </div>
                                </td>
                                <td style="color:var(--text-muted)"><?php echo $s['email']; ?></td>
                                <td><?php echo $s['filiere']; ?></td>
                                <td><span class="badge-custom badge-info"><?php echo $s['niveau']; ?></span></td>
                                <td>
                                    <?php
                                    $bc = $s['status']==='Actif'?'badge-success':($s['status']==='Diplômé'?'badge-info':'badge-danger');
                                    ?>
                                    <span class="badge-custom <?php echo $bc; ?>"><?php echo $s['status']; ?></span>
                                </td>
                                <td style="font-weight:700"><?php echo number_format($s['avg'],1); ?>/20</td>
                                <td>
                                    <form method="POST" style="display:inline" onsubmit="return confirmDelete('<?php echo $s['name']; ?>')">
                                        <input type="hidden" name="action" value="delete">
                                        <input type="hidden" name="id" value="<?php echo $s['id']; ?>">
                                        <button type="submit" style="background:rgba(255,107,107,0.15);color:var(--danger);border:none;padding:8px 12px;border-radius:8px;cursor:pointer;transition:var(--transition)">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <!-- ADD MODAL -->
    <div class="modal fade" id="addModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background:var(--dark-2);border:1px solid var(--glass-border);border-radius:var(--radius)">
                <div class="modal-header border-0">
                    <h5 class="modal-title" style="font-weight:700"><i class="fas fa-user-plus me-2" style="color:var(--primary)"></i>Nouvel Étudiant</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <form method="POST">
                    <input type="hidden" name="action" value="add">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label-custom">Nom complet</label>
                            <input type="text" name="name" class="form-control-custom" placeholder="Ex: Ahmed Bennani" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label-custom">Email</label>
                            <input type="email" name="email" class="form-control-custom" placeholder="Ex: ahmed@edu.ma" required>
                        </div>
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label class="form-label-custom">Filière</label>
                                <select name="filiere" class="form-control-custom" required>
                                    <option value="Génie Informatique">Génie Informatique</option>
                                    <option value="IRISI">IRISI</option>
                                    <option value="Génie Civil">Génie Civil</option>
                                    <option value="Génie Mécanique">Génie Mécanique</option>
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label-custom">Niveau</label>
                                <input type="text" name="niveau" class="form-control-custom" placeholder="Ex: GI2" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label-custom">Téléphone</label>
                            <input type="text" name="phone" class="form-control-custom" placeholder="Ex: 0661234567">
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn-secondary-custom" data-bs-dismiss="modal" style="padding:10px 20px">Annuler</button>
                        <button type="submit" class="btn-primary-custom" style="padding:10px 24px">
                            <i class="fas fa-save me-2"></i>Enregistrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
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
