/* ============================================
   EduMind AI — Main JavaScript
   Prof. NADIR MOHAMED ANOUAR
   ============================================ */

document.addEventListener('DOMContentLoaded', function() {
    initNavbar();
    initChatbot();
    initCounters();
    initCharts();
    initQuiz();
    initFadeAnimations();
});

/* === NAVBAR SCROLL === */
function initNavbar() {
    const navbar = document.querySelector('.navbar-custom');
    if (!navbar) return;
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 50);
    });
}

/* === CHATBOT IA === */
function initChatbot() {
    const toggle = document.getElementById('chatbot-toggle');
    const window_ = document.getElementById('chatbot-window');
    const input = document.getElementById('chatbot-input');
    const send = document.getElementById('chatbot-send');
    const messages = document.getElementById('chatbot-messages');
    if (!toggle) return;

    const responses = {
        'bonjour': 'Bonjour ! 👋 Je suis l\'assistant IA d\'EduMind. Comment puis-je vous aider ?',
        'salam': 'Wa alaikum salam ! 🌟 Je suis là pour vous aider. Posez-moi vos questions !',
        'cours': 'Nous proposons des cours en Informatique, Mathématiques, Physique et IA. Quel domaine vous intéresse ?',
        'aide': 'Je peux vous aider avec : 📚 Cours, 📝 Quiz, 👨‍🎓 Inscription, 📊 Notes. Que souhaitez-vous ?',
        'quiz': 'Les quiz IA sont générés automatiquement ! Allez dans la section Quiz pour commencer un test adaptatif.',
        'note': 'Consultez vos notes dans le Dashboard. Je peux aussi analyser vos performances !',
        'inscription': 'Pour vous inscrire, cliquez sur "S\'inscrire" en haut de la page et remplissez le formulaire.',
        'ia': 'EduMind utilise l\'IA pour : génération de quiz, correction automatique, recommandations personnalisées et analytics prédictifs.',
        'merci': 'De rien ! 😊 N\'hésitez pas si vous avez d\'autres questions.',
        'contact': 'Contactez le Prof. NADIR MOHAMED ANOUAR pour toute question administrative.',
        'default': 'Je suis encore en apprentissage ! 🤖 Essayez : "cours", "quiz", "aide", "note" ou "inscription".'
    };

    toggle.addEventListener('click', () => {
        window_.classList.toggle('open');
        if (window_.classList.contains('open') && messages.children.length === 0) {
            addMessage('bot', 'Bienvenue sur EduMind AI ! 🧠 Je suis votre assistant intelligent. Comment puis-je vous aider ?');
        }
    });

    function sendMessage() {
        const text = input.value.trim();
        if (!text) return;
        addMessage('user', text);
        input.value = '';
        setTimeout(() => {
            const key = Object.keys(responses).find(k => text.toLowerCase().includes(k));
            addMessage('bot', responses[key] || responses['default']);
        }, 800);
    }

    if (send) send.addEventListener('click', sendMessage);
    if (input) input.addEventListener('keypress', e => { if (e.key === 'Enter') sendMessage(); });

    function addMessage(type, text) {
        const div = document.createElement('div');
        div.className = 'chat-message ' + type;
        div.textContent = text;
        messages.appendChild(div);
        messages.scrollTop = messages.scrollHeight;
    }
}

/* === COUNTER ANIMATION === */
function initCounters() {
    const counters = document.querySelectorAll('[data-count]');
    if (!counters.length) return;
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = parseInt(el.dataset.count);
                let current = 0;
                const step = target / 60;
                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) { current = target; clearInterval(timer); }
                    el.textContent = Math.floor(current).toLocaleString() + (el.dataset.suffix || '');
                }, 25);
                observer.unobserve(el);
            }
        });
    }, { threshold: 0.5 });
    counters.forEach(c => observer.observe(c));
}

/* === CHARTS (Chart.js) === */
function initCharts() {
    if (typeof Chart === 'undefined') return;

    const perfCtx = document.getElementById('performanceChart');
    if (perfCtx) {
        new Chart(perfCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun'],
                datasets: [{
                    label: 'Taux de réussite (%)',
                    data: [65, 72, 78, 82, 88, 92],
                    borderColor: '#6C5CE7',
                    backgroundColor: 'rgba(108,92,231,0.1)',
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: '#6C5CE7',
                    pointBorderWidth: 2,
                    pointRadius: 5
                }, {
                    label: 'Participation (%)',
                    data: [70, 68, 80, 85, 90, 95],
                    borderColor: '#00D2FF',
                    backgroundColor: 'rgba(0,210,255,0.1)',
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: '#00D2FF',
                    pointBorderWidth: 2,
                    pointRadius: 5
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { labels: { color: '#E8E8F0', font: { family: 'Inter' } } }
                },
                scales: {
                    x: { ticks: { color: '#9999B3' }, grid: { color: 'rgba(255,255,255,0.05)' } },
                    y: { ticks: { color: '#9999B3' }, grid: { color: 'rgba(255,255,255,0.05)' }, min: 0, max: 100 }
                }
            }
        });
    }

    const distCtx = document.getElementById('distributionChart');
    if (distCtx) {
        new Chart(distCtx, {
            type: 'doughnut',
            data: {
                labels: ['Informatique', 'Mathématiques', 'Physique', 'IA & ML'],
                datasets: [{
                    data: [35, 25, 20, 20],
                    backgroundColor: ['#6C5CE7', '#00D2FF', '#0ACF83', '#FF6B6B'],
                    borderWidth: 0,
                    hoverOffset: 10
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'bottom', labels: { color: '#E8E8F0', padding: 15, font: { family: 'Inter' } } }
                },
                cutout: '65%'
            }
        });
    }
}

/* === QUIZ IA === */
function initQuiz() {
    const quizContainer = document.getElementById('quiz-container');
    if (!quizContainer) return;

    const questions = [
        {
            q: "Quel algorithme est utilisé pour la classification supervisée ?",
            options: ["K-Means", "Random Forest", "DBSCAN", "PCA"],
            correct: 1
        },
        {
            q: "Quelle est la complexité temporelle du tri rapide (Quick Sort) en moyenne ?",
            options: ["O(n)", "O(n²)", "O(n log n)", "O(log n)"],
            correct: 2
        },
        {
            q: "Quel framework PHP est le plus populaire pour le développement web ?",
            options: ["Django", "Laravel", "Spring Boot", "Express.js"],
            correct: 1
        },
        {
            q: "En HTML5, quelle balise est utilisée pour la navigation ?",
            options: ["<div>", "<section>", "<nav>", "<header>"],
            correct: 2
        },
        {
            q: "Quel type de réseau de neurones est optimal pour le traitement d'images ?",
            options: ["RNN", "CNN", "GAN", "Transformer"],
            correct: 1
        }
    ];

    let current = 0, score = 0;

    function renderQuestion() {
        if (current >= questions.length) {
            const pct = Math.round((score / questions.length) * 100);
            quizContainer.innerHTML = `
                <div class="quiz-card text-center">
                    <h2 style="font-size:3rem;margin-bottom:10px;">${pct >= 80 ? '🎉' : pct >= 50 ? '👍' : '💪'}</h2>
                    <h3>Résultat : ${score}/${questions.length}</h3>
                    <p class="mt-2" style="color:var(--text-muted)">Taux de réussite : ${pct}%</p>
                    <div class="progress-custom mt-3 mb-3"><div class="bar bar-purple" style="width:${pct}%"></div></div>
                    <p style="color:var(--text-muted)">${pct >= 80 ? 'Excellent travail !' : pct >= 50 ? 'Bon effort, continuez !' : 'Révisez et réessayez !'}</p>
                    <button class="btn-primary-custom mt-3" onclick="location.reload()">🔄 Recommencer</button>
                </div>`;
            return;
        }

        const q = questions[current];
        let html = `<div class="quiz-card fade-in">
            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">
                <span class="badge-custom badge-info">Question ${current + 1}/${questions.length}</span>
                <span style="color:var(--text-muted)">Score: ${score}</span>
            </div>
            <h4 style="margin-bottom:20px;">${q.q}</h4>`;
        q.options.forEach((opt, i) => {
            html += `<div class="quiz-option" data-index="${i}" onclick="selectAnswer(this, ${q.correct})">
                <span style="width:30px;height:30px;border-radius:50%;background:var(--dark-4);display:flex;align-items:center;justify-content:center;margin-right:12px;font-weight:600;font-size:0.85rem">${String.fromCharCode(65 + i)}</span>
                <span>${opt}</span>
            </div>`;
        });
        html += '</div>';
        quizContainer.innerHTML = html;
    }

    window.selectAnswer = function(el, correct) {
        if (el.parentElement.querySelector('.selected')) return;
        const idx = parseInt(el.dataset.index);
        el.classList.add('selected');
        if (idx === correct) {
            el.classList.add('correct');
            score++;
        } else {
            el.classList.add('wrong');
            el.parentElement.querySelectorAll('.quiz-option')[correct].classList.add('correct');
        }
        setTimeout(() => { current++; renderQuestion(); }, 1200);
    };

    renderQuestion();
}

/* === FADE ANIMATIONS === */
function initFadeAnimations() {
    const els = document.querySelectorAll('.animate-on-scroll');
    if (!els.length) return;
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    els.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s ease';
        observer.observe(el);
    });
}

/* === DELETE CONFIRM === */
function confirmDelete(name) {
    return confirm(`Êtes-vous sûr de vouloir supprimer "${name}" ?`);
}
