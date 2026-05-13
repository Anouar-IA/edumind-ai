<?php
/**
 * EduMind AI — Authentification (Login)
 * @author Prof. NADIR MOHAMED ANOUAR
 */
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    if ($email === 'admin@edumind.ai' && $password === 'admin123') {
        header('Location: dashboard.php');
        exit;
    }
    $error = 'Email ou mot de passe incorrect.';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion — EduMind AI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="auth-page">
        <div class="auth-card">
            <div style="text-align:center;margin-bottom:30px">
                <div style="width:70px;height:70px;border-radius:20px;background:linear-gradient(135deg,var(--primary),var(--secondary));margin:0 auto 16px;display:flex;align-items:center;justify-content:center;font-size:1.8rem;color:white">
                    <i class="fas fa-brain"></i>
                </div>
                <h2>Connexion</h2>
                <p class="subtitle">Accédez à votre espace EduMind AI</p>
            </div>

            <?php if ($error): ?>
            <div style="background:rgba(255,107,107,0.1);border:1px solid rgba(255,107,107,0.3);border-radius:var(--radius-sm);padding:12px 16px;margin-bottom:20px;color:var(--danger);font-size:0.9rem">
                <i class="fas fa-exclamation-circle me-2"></i><?php echo $error; ?>
            </div>
            <?php endif; ?>

            <form method="POST">
                <div class="mb-3">
                    <label class="form-label-custom">Adresse Email</label>
                    <div style="position:relative">
                        <i class="fas fa-envelope" style="position:absolute;left:16px;top:50%;transform:translateY(-50%);color:var(--text-muted)"></i>
                        <input type="email" name="email" class="form-control-custom" placeholder="admin@edumind.ai" style="padding-left:44px" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label-custom">Mot de passe</label>
                    <div style="position:relative">
                        <i class="fas fa-lock" style="position:absolute;left:16px;top:50%;transform:translateY(-50%);color:var(--text-muted)"></i>
                        <input type="password" name="password" class="form-control-custom" placeholder="••••••••" style="padding-left:44px" required>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <label style="display:flex;align-items:center;gap:8px;color:var(--text-muted);font-size:0.9rem;cursor:pointer">
                        <input type="checkbox" style="accent-color:var(--primary)"> Se souvenir
                    </label>
                    <a href="#" style="color:var(--primary);font-size:0.9rem;text-decoration:none">Mot de passe oublié ?</a>
                </div>
                <button type="submit" class="btn-primary-custom w-100 mb-3" style="text-align:center">
                    <i class="fas fa-sign-in-alt me-2"></i>Se connecter
                </button>
                <p style="text-align:center;color:var(--text-muted);font-size:0.9rem">
                    Pas de compte ? <a href="register.php" style="color:var(--primary);text-decoration:none;font-weight:600">S'inscrire</a>
                </p>
            </form>

            <div style="margin-top:20px;padding-top:20px;border-top:1px solid var(--glass-border);text-align:center">
                <p style="color:var(--text-muted);font-size:0.8rem;margin-bottom:8px">Démo : admin@edumind.ai / admin123</p>
                <a href="index.php" style="color:var(--text-muted);font-size:0.85rem;text-decoration:none"><i class="fas fa-arrow-left me-1"></i> Retour à l'accueil</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
