<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="EduMind AI - Plateforme Intelligente de Gestion Pédagogique propulsée par l'IA. Développée par Prof. NADIR MOHAMED ANOUAR">
    <meta name="author" content="Prof. NADIR MOHAMED ANOUAR">
    <meta name="keywords" content="education, IA, Laravel, PHP, plateforme pédagogique, quiz, chatbot">
    <title>EduMind AI — Plateforme IA Éducative | Prof. NADIR MOHAMED ANOUAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top" id="main-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"><i class="fas fa-brain me-2"></i>EduMind AI</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="fas fa-bars" style="color:var(--text)"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="students.php">Étudiants</a></li>
                    <li class="nav-item"><a class="nav-link" href="courses.php">Cours</a></li>
                    <li class="nav-item"><a class="nav-link" href="quiz.php">Quiz IA</a></li>
                    <li class="nav-item ms-2">
                        <a class="btn-primary-custom" href="login.php" style="padding:10px 24px;font-size:0.9rem">
                            <i class="fas fa-sign-in-alt me-1"></i> Connexion
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="animate-on-scroll">
                        <span class="badge-custom badge-info mb-3" style="display:inline-block">🚀 Propulsé par l'Intelligence Artificielle</span>
                        <h1 class="hero-title">
                            Transformez<br>l'Éducation avec<br><span class="gradient-text">EduMind AI</span>
                        </h1>
                        <p class="hero-subtitle">
                            Une plateforme pédagogique intelligente qui utilise l'IA pour personnaliser l'apprentissage, automatiser les évaluations et analyser les performances en temps réel.
                        </p>
                        <div class="d-flex gap-3 flex-wrap">
                            <a href="dashboard.php" class="btn-primary-custom"><i class="fas fa-rocket me-2"></i>Commencer</a>
                            <a href="#features" class="btn-secondary-custom"><i class="fas fa-play me-2"></i>Découvrir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-visual mt-5 mt-lg-0">
                    <div class="floating-card" style="max-width:420px;margin:auto">
                        <div style="display:flex;align-items:center;gap:12px;margin-bottom:20px">
                            <div style="width:45px;height:45px;border-radius:12px;background:linear-gradient(135deg,var(--primary),var(--secondary));display:flex;align-items:center;justify-content:center">
                                <i class="fas fa-brain" style="color:white;font-size:1.2rem"></i>
                            </div>
                            <div>
                                <div style="font-weight:700">Analyse IA</div>
                                <div style="font-size:0.8rem;color:var(--text-muted)">En temps réel</div>
                            </div>
                        </div>
                        <div style="background:var(--dark-3);border-radius:12px;padding:15px;margin-bottom:12px">
                            <div style="display:flex;justify-content:space-between;margin-bottom:8px">
                                <span style="font-size:0.85rem">Taux de réussite</span>
                                <span style="font-weight:700;color:var(--accent)">92%</span>
                            </div>
                            <div class="progress-custom"><div class="bar bar-green" style="width:92%"></div></div>
                        </div>
                        <div style="background:var(--dark-3);border-radius:12px;padding:15px;margin-bottom:12px">
                            <div style="display:flex;justify-content:space-between;margin-bottom:8px">
                                <span style="font-size:0.85rem">Engagement</span>
                                <span style="font-weight:700;color:var(--primary)">87%</span>
                            </div>
                            <div class="progress-custom"><div class="bar bar-purple" style="width:87%"></div></div>
                        </div>
                        <div style="display:flex;gap:10px;margin-top:15px">
                            <div style="flex:1;background:rgba(108,92,231,0.15);border-radius:10px;padding:10px;text-align:center">
                                <div style="font-size:1.3rem;font-weight:800;color:var(--primary)">248</div>
                                <div style="font-size:0.75rem;color:var(--text-muted)">Étudiants</div>
                            </div>
                            <div style="flex:1;background:rgba(10,207,131,0.15);border-radius:10px;padding:10px;text-align:center">
                                <div style="font-size:1.3rem;font-weight:800;color:var(--accent)">36</div>
                                <div style="font-size:0.75rem;color:var(--text-muted)">Cours</div>
                            </div>
                            <div style="flex:1;background:rgba(0,210,255,0.15);border-radius:10px;padding:10px;text-align:center">
                                <div style="font-size:1.3rem;font-weight:800;color:var(--secondary)">1.2K</div>
                                <div style="font-size:0.75rem;color:var(--text-muted)">Quiz</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS SECTION -->
    <section style="padding:60px 0;background:var(--dark-2)">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3"><div class="stat-card animate-on-scroll"><div class="stat-number" data-count="1500" data-suffix="+">0</div><div class="stat-label">Étudiants Actifs</div></div></div>
                <div class="col-6 col-md-3"><div class="stat-card animate-on-scroll"><div class="stat-number" data-count="50" data-suffix="+">0</div><div class="stat-label">Cours Disponibles</div></div></div>
                <div class="col-6 col-md-3"><div class="stat-card animate-on-scroll"><div class="stat-number" data-count="5000" data-suffix="+">0</div><div class="stat-label">Quiz Générés par IA</div></div></div>
                <div class="col-6 col-md-3"><div class="stat-card animate-on-scroll"><div class="stat-number" data-count="95" data-suffix="%">0</div><div class="stat-label">Satisfaction</div></div></div>
            </div>
        </div>
    </section>

    <!-- FEATURES SECTION -->
    <section class="features-section" id="features">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Fonctionnalités <span class="gradient-text">Intelligentes</span></h2>
            <p class="section-subtitle animate-on-scroll">Découvrez comment l'IA révolutionne votre expérience pédagogique</p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 animate-on-scroll">
                    <div class="glass-card feature-card h-100">
                        <div class="feature-icon icon-purple"><i class="fas fa-robot"></i></div>
                        <h4>Chatbot IA</h4>
                        <p>Assistant intelligent disponible 24/7 pour répondre aux questions des étudiants et fournir un support personnalisé.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 animate-on-scroll">
                    <div class="glass-card feature-card h-100">
                        <div class="feature-icon icon-blue"><i class="fas fa-chart-line"></i></div>
                        <h4>Analytics Prédictifs</h4>
                        <p>Tableau de bord intelligent avec analyse des performances et prédictions de réussite basées sur l'IA.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 animate-on-scroll">
                    <div class="glass-card feature-card h-100">
                        <div class="feature-icon icon-green"><i class="fas fa-magic"></i></div>
                        <h4>Quiz Auto-Générés</h4>
                        <p>L'IA génère automatiquement des quiz adaptatifs basés sur le contenu des cours et le niveau de l'étudiant.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 animate-on-scroll">
                    <div class="glass-card feature-card h-100">
                        <div class="feature-icon icon-red"><i class="fas fa-users-cog"></i></div>
                        <h4>Gestion Étudiants</h4>
                        <p>CRUD complet avec profils détaillés, historique académique et suivi de progression individuel.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 animate-on-scroll">
                    <div class="glass-card feature-card h-100">
                        <div class="feature-icon icon-yellow"><i class="fas fa-book-open"></i></div>
                        <h4>Gestion des Cours</h4>
                        <p>Organisez vos cours par catégorie, assignez-les aux étudiants et suivez leur avancement en temps réel.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 animate-on-scroll">
                    <div class="glass-card feature-card h-100">
                        <div class="feature-icon icon-purple"><i class="fas fa-shield-alt"></i></div>
                        <h4>Sécurité Avancée</h4>
                        <p>Authentification sécurisée avec gestion des rôles, protection CSRF et middleware personnalisés.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT / AUTHOR -->
    <section style="padding:100px 0;background:var(--dark-2)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 animate-on-scroll">
                    <span class="badge-custom badge-info mb-3" style="display:inline-block">👨‍🏫 À propos du développeur</span>
                    <h2 style="font-size:2.2rem;font-weight:800;margin-bottom:1rem">Prof. NADIR<br><span class="gradient-text">MOHAMED ANOUAR</span></h2>
                    <p style="color:var(--text-muted);margin-bottom:1.5rem">Enseignant-Chercheur passionné par l'intersection entre l'éducation et l'intelligence artificielle. EduMind AI est le fruit de cette passion — une plateforme qui met la technologie au service de l'apprentissage.</p>
                    <div class="row g-3 mb-4">
                        <div class="col-4">
                            <div style="background:rgba(108,92,231,0.1);border-radius:12px;padding:15px;text-align:center">
                                <div style="font-size:1.5rem;font-weight:800;color:var(--primary)">10+</div>
                                <div style="font-size:0.8rem;color:var(--text-muted)">Ans d'expérience</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div style="background:rgba(10,207,131,0.1);border-radius:12px;padding:15px;text-align:center">
                                <div style="font-size:1.5rem;font-weight:800;color:var(--accent)">5K+</div>
                                <div style="font-size:0.8rem;color:var(--text-muted)">Étudiants formés</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div style="background:rgba(0,210,255,0.1);border-radius:12px;padding:15px;text-align:center">
                                <div style="font-size:1.5rem;font-weight:800;color:var(--secondary)">15+</div>
                                <div style="font-size:0.8rem;color:var(--text-muted)">Publications</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn-secondary-custom" style="padding:10px 20px"><i class="fab fa-github me-2"></i>GitHub</a>
                        <a href="#" class="btn-secondary-custom" style="padding:10px 20px"><i class="fab fa-linkedin me-2"></i>LinkedIn</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0 animate-on-scroll">
                    <div class="glass-card" style="text-align:center">
                        <div style="width:120px;height:120px;border-radius:50%;background:linear-gradient(135deg,var(--primary),var(--secondary));margin:0 auto 20px;display:flex;align-items:center;justify-content:center;font-size:3rem;color:white;font-weight:800">
                            NM
                        </div>
                        <h3 style="font-weight:700">NADIR MOHAMED ANOUAR</h3>
                        <p style="color:var(--primary);font-weight:600">Enseignant-Chercheur en Informatique</p>
                        <hr style="border-color:var(--glass-border);margin:20px 0">
                        <div class="row text-start">
                            <div class="col-12 mb-2"><i class="fas fa-laptop-code me-2" style="color:var(--primary)"></i> PHP, Laravel, Python, JavaScript</div>
                            <div class="col-12 mb-2"><i class="fas fa-brain me-2" style="color:var(--secondary)"></i> Machine Learning, Deep Learning</div>
                            <div class="col-12 mb-2"><i class="fas fa-database me-2" style="color:var(--accent)"></i> MySQL, MongoDB, PostgreSQL</div>
                            <div class="col-12"><i class="fas fa-cloud me-2" style="color:var(--warning)"></i> Cloud Computing, DevOps</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CHATBOT -->
    <button class="chatbot-toggle" id="chatbot-toggle" title="Assistant IA"><i class="fas fa-robot"></i></button>
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
                        <li class="mb-2"><a href="index.php">Accueil</a></li>
                        <li class="mb-2"><a href="dashboard.php">Dashboard</a></li>
                        <li class="mb-2"><a href="students.php">Étudiants</a></li>
                        <li class="mb-2"><a href="courses.php">Cours</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
                    <h5>Ressources</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="quiz.php">Quiz IA</a></li>
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
                <p>&copy; 2024-<?php echo date('Y'); ?> EduMind AI — Développé par <strong>Prof. NADIR MOHAMED ANOUAR</strong></p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/app.js"></script>
</body>
</html>
