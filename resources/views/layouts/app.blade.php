<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="EduMind AI - Plateforme Intelligente de Gestion Pédagogique propulsée par l'IA">
    <meta name="author" content="Prof. NADIR MOHAMED ANOUAR">
    <title>@yield('title', 'EduMind AI — Plateforme IA Éducative')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top" id="main-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="fas fa-brain me-2"></i>EduMind AI
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="fas fa-bars" style="color:var(--text)"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link @yield('nav-home')" href="/">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link @yield('nav-dashboard')" href="/dashboard.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link @yield('nav-students')" href="/students/">Étudiants</a></li>
                    <li class="nav-item"><a class="nav-link @yield('nav-courses')" href="/courses/">Cours</a></li>
                    <li class="nav-item"><a class="nav-link @yield('nav-quiz')" href="/quiz/">Quiz IA</a></li>
                    <li class="nav-item ms-2">
                        <a class="btn-primary-custom btn-sm" href="/auth/login.php" style="padding:10px 24px;font-size:0.9rem">
                            <i class="fas fa-sign-in-alt me-1"></i> Connexion
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    @yield('content')

    <!-- CHATBOT -->
    <button class="chatbot-toggle" id="chatbot-toggle" title="Assistant IA">
        <i class="fas fa-robot"></i>
    </button>
    <div class="chatbot-window" id="chatbot-window">
        <div class="chatbot-header">
            <div style="width:40px;height:40px;background:rgba(255,255,255,0.2);border-radius:50%;display:flex;align-items:center;justify-content:center">
                <i class="fas fa-robot"></i>
            </div>
            <div>
                <h5>Assistant EduMind</h5>
                <span class="status"><i class="fas fa-circle" style="font-size:8px;color:#0ACF83"></i> En ligne</span>
            </div>
        </div>
        <div class="chatbot-messages" id="chatbot-messages"></div>
        <div class="chatbot-input">
            <input type="text" id="chatbot-input" placeholder="Écrivez votre message...">
            <button id="chatbot-send"><i class="fas fa-paper-plane"></i></button>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5><i class="fas fa-brain me-2" style="color:var(--primary)"></i>EduMind AI</h5>
                    <p style="color:var(--text-muted)">Plateforme intelligente de gestion pédagogique propulsée par l'Intelligence Artificielle.</p>
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
                    <h5>Navigation</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/">Accueil</a></li>
                        <li class="mb-2"><a href="/dashboard.php">Dashboard</a></li>
                        <li class="mb-2"><a href="/students/">Étudiants</a></li>
                        <li class="mb-2"><a href="/courses/">Cours</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
                    <h5>Ressources</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/quiz/">Quiz IA</a></li>
                        <li class="mb-2"><a href="#">Documentation</a></li>
                        <li class="mb-2"><a href="#">API</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 mb-4">
                    <h5>Contact</h5>
                    <p style="color:var(--text-muted);margin-bottom:5px"><i class="fas fa-user me-2"></i>Prof. NADIR MOHAMED ANOUAR</p>
                    <p style="color:var(--text-muted);margin-bottom:5px"><i class="fas fa-envelope me-2"></i>nadir.mohamed.anouar@edu.ma</p>
                    <p style="color:var(--text-muted)"><i class="fab fa-github me-2"></i>github.com/nadir-mohamed-anouar</p>
                </div>
            </div>
            <div class="footer-bottom text-center">
                <p>&copy; 2024-2026 EduMind AI — Développé par <strong>Prof. NADIR MOHAMED ANOUAR</strong></p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
