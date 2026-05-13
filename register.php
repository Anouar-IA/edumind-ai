<?php
/**
 * EduMind AI — Inscription
 * @author Prof. NADIR MOHAMED ANOUAR
 */
$success = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $success = true;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription — EduMind AI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="auth-page">
        <div class="auth-card" style="max-width:480px">
            <div style="text-align:center;margin-bottom:30px">
                <div style="width:70px;height:70px;border-radius:20px;background:linear-gradient(135deg,var(--primary),var(--secondary));margin:0 auto 16px;display:flex;align-items:center;justify-content:center;font-size:1.8rem;color:white">
                    <i class="fas fa-user-plus"></i>
                </div>
                <h2>Inscription</h2>
                <p class="subtitle">Créez votre compte EduMind AI</p>
            </div>

            <?php if ($success): ?>
            <div style="background:rgba(10,207,131,0.1);border:1px solid rgba(10,207,131,0.3);border-radius:var(--radius-sm);padding:16px;margin-bottom:20px;color:var(--accent);text-align:center">
                <i class="fas fa-check-circle me-2" style="font-size:1.2rem"></i><br>
                <strong>Inscription réussie !</strong><br>
                <a href="login.php" style="color:var(--primary)">Se connecter maintenant</a>
            </div>
            <?php endif; ?>

            <form method="POST">
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="form-label-custom">Prénom</label>
                        <input type="text" name="firstname" class="form-control-custom" placeholder="Mohamed" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label-custom">Nom</label>
                        <input type="text" name="lastname" class="form-control-custom" placeholder="Anouar" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label-custom">Email</label>
                    <input type="email" name="email" class="form-control-custom" placeholder="votre.email@edu.ma" required>
                </div>
                <div class="mb-3">
                    <label class="form-label-custom">Rôle</label>
                    <select name="role" class="form-control-custom">
                        <option value="student">Étudiant</option>
                        <option value="teacher">Enseignant</option>
                        <option value="admin">Administrateur</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label-custom">Mot de passe</label>
                    <input type="password" name="password" class="form-control-custom" placeholder="Min. 8 caractères" required>
                </div>
                <div class="mb-4">
                    <label class="form-label-custom">Confirmer le mot de passe</label>
                    <input type="password" name="password_confirm" class="form-control-custom" placeholder="Retapez le mot de passe" required>
                </div>
                <button type="submit" class="btn-primary-custom w-100 mb-3" style="text-align:center">
                    <i class="fas fa-user-plus me-2"></i>S'inscrire
                </button>
                <p style="text-align:center;color:var(--text-muted);font-size:0.9rem">
                    Déjà inscrit ? <a href="login.php" style="color:var(--primary);text-decoration:none;font-weight:600">Se connecter</a>
                </p>
            </form>

            <div style="margin-top:20px;padding-top:20px;border-top:1px solid var(--glass-border);text-align:center">
                <a href="index.php" style="color:var(--text-muted);font-size:0.85rem;text-decoration:none"><i class="fas fa-arrow-left me-1"></i> Retour à l'accueil</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
