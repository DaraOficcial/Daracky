<!-- Tambahkan di bagian CSS -->
<style>
    /* Popup Donasi Saat Masuk */
    .welcome-popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.95);
        z-index: 3000;
        align-items: center;
        justify-content: center;
    }

    .welcome-content {
        background: linear-gradient(135deg, #1a1a1a, #2d1b0f);
        border: 8px solid #FFD700;
        border-radius: 25px;
        padding: 40px;
        max-width: 600px;
        width: 90%;
        text-align: center;
        box-shadow: 0 0 80px rgba(255, 215, 0, 0.7);
        position: relative;
        animation: popupAppear 0.8s ease-out;
    }

    @keyframes popupAppear {
        0% { transform: scale(0.5); opacity: 0; }
        70% { transform: scale(1.05); opacity: 1; }
        100% { transform: scale(1); opacity: 1; }
    }

    .welcome-header {
        background: linear-gradient(45deg, #8B4513, #D2691E);
        padding: 30px;
        border-radius: 20px 20px 0 0;
        margin: -40px -40px 30px -40px;
    }

    .welcome-title {
        font-size: 2.5rem;
        color: #FFD700;
        text-shadow: 3px 3px 0 #000;
        margin-bottom: 15px;
        font-family: 'Papyrus', fantasy;
    }

    .welcome-subtitle {
        color: #fff;
        font-size: 1.3rem;
        line-height: 1.5;
    }

    .welcome-features {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin: 30px 0;
    }

    .welcome-feature {
        background: rgba(139, 69, 19, 0.3);
        border: 3px solid #D2691E;
        border-radius: 15px;
        padding: 25px;
        text-align: center;
    }

    .feature-icon {
        font-size: 3rem;
        margin-bottom: 15px;
    }

    .feature-title {
        font-size: 1.3rem;
        color: #FFD700;
        margin-bottom: 10px;
    }

    .feature-desc {
        color: #ccc;
        font-size: 0.9rem;
    }

    .welcome-buttons {
        display: flex;
        gap: 15px;
        justify-content: center;
        margin: 30px 0 20px 0;
    }

    .btn-welcome {
        padding: 15px 30px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        font-weight: bold;
        font-size: 1.1rem;
        transition: all 0.3s;
        text-transform: uppercase;
        letter-spacing: 1px;
        min-width: 150px;
    }

    .btn-donate-now {
        background: linear-gradient(45deg, #4CAF50, #45a049);
        color: white;
        border: 3px solid #FFD700;
    }

    .btn-play-now {
        background: linear-gradient(45deg, #2196F3, #1976D2);
        color: white;
        border: 3px solid #FFD700;
    }

    .btn-welcome:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(255, 215, 0, 0.4);
    }

    .support-email {
        margin-top: 25px;
        padding: 15px;
        background: rgba(33, 150, 243, 0.1);
        border: 2px solid #2196F3;
        border-radius: 10px;
    }

    .email-link {
        color: #4FC3F7;
        text-decoration: none;
        font-weight: bold;
    }

    .email-link:hover {
        text-decoration: underline;
    }

    /* Menu Hamburger */
    .hamburger-menu {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1000;
    }

    .hamburger-btn {
        background: linear-gradient(45deg, #8B4513, #D2691E);
        border: 3px solid #FFD700;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 4px;
        transition: all 0.3s;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }

    .hamburger-btn:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 20px rgba(255, 215, 0, 0.4);
    }

    .hamburger-line {
        width: 25px;
        height: 3px;
        background: #FFD700;
        border-radius: 2px;
        transition: all 0.3s;
    }

    .menu-content {
        position: absolute;
        top: 70px;
        right: 0;
        background: linear-gradient(135deg, #2c1b0f, #3d2814);
        border: 4px solid #D2691E;
        border-radius: 15px;
        padding: 20px;
        min-width: 280px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        display: none;
        animation: menuSlide 0.3s ease-out;
    }

    @keyframes menuSlide {
        0% { opacity: 0; transform: translateY(-20px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    .menu-item {
        padding: 15px 20px;
        margin: 8px 0;
        background: rgba(139, 69, 19, 0.3);
        border: 2px solid #D2691E;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s;
        display: flex;
        align-items: center;
        gap: 12px;
        color: #FFD700;
        font-weight: bold;
    }

    .menu-item:hover {
        background: rgba(210, 105, 30, 0.5);
        transform: translateX(-5px);
        border-color: #FFD700;
    }

    .menu-icon {
        font-size: 1.5rem;
        width: 30px;
        text-align: center;
    }

    /* Modal Cheat Code */
    .cheat-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        z-index: 2000;
        align-items: center;
        justify-content: center;
    }

    .cheat-content {
        background: linear-gradient(135deg, #1a1a1a, #2d1b0f);
        border: 5px solid #FFD700;
        border-radius: 20px;
        padding: 30px;
        max-width: 500px;
        width: 90%;
        text-align: center;
        box-shadow: 0 0 50px rgba(255, 215, 0, 0.5);
    }

    .cheat-input {
        width: 100%;
        padding: 15px;
        font-size: 1.2rem;
        background: rgba(0, 0, 0, 0.8);
        border: 3px solid #D2691E;
        border-radius: 8px;
        color: #FFD700;
        margin: 20px 0;
        text-align: center;
        text-transform: uppercase;
    }

    .cheat-input:focus {
        outline: none;
        border-color: #FFD700;
        box-shadow: 0 0 15px #FFD700;
    }

    .cheat-list {
        text-align: left;
        margin: 20px 0;
        background: rgba(139, 69, 19, 0.2);
        padding: 15px;
        border-radius: 8px;
        border: 2px solid #D2691E;
    }

    .cheat-item {
        margin: 10px 0;
        padding: 8px;
        background: rgba(255, 215, 0, 0.1);
        border-radius: 5px;
    }

    .cheat-code {
        font-family: monospace;
        background: #000;
        padding: 2px 6px;
        border-radius: 3px;
        color: #4CAF50;
    }

    /* Modal Kirim Ide/Bug */
    .feedback-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        z-index: 2000;
        align-items: center;
        justify-content: center;
    }

    .feedback-content {
        background: linear-gradient(135deg, #1a1a1a, #2d1b0f);
        border: 5px solid #2196F3;
        border-radius: 20px;
        padding: 30px;
        max-width: 500px;
        width: 90%;
        text-align: center;
    }

    .feedback-input, .feedback-textarea {
        width: 100%;
        padding: 15px;
        font-size: 1rem;
        background: rgba(0, 0, 0, 0.8);
        border: 3px solid #D2691E;
        border-radius: 8px;
        color: #FFD700;
        margin: 10px 0;
    }

    .feedback-textarea {
        height: 150px;
        resize: vertical;
        font-family: Arial, sans-serif;
    }

    .feedback-input:focus, .feedback-textarea:focus {
        outline: none;
        border-color: #2196F3;
        box-shadow: 0 0 15px #2196F3;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .welcome-features {
            grid-template-columns: 1fr;
        }
        
        .welcome-buttons {
            flex-direction: column;
        }
        
        .welcome-title {
            font-size: 2rem;
        }
        
        .menu-content {
            right: -10px;
        }
    }
</style>

<!-- Popup Welcome Saat Masuk -->
<div class="welcome-popup" id="welcomePopup">
    <div class="welcome-content">
        <div class="welcome-header">
            <div class="welcome-title">🎉 SELAMAT DATANG! 🎉</div>
            <div class="welcome-subtitle">Petualangan Indiana Jones Menantimu!</div>
        </div>

        <div class="welcome-features">
            <div class="welcome-feature">
                <div class="feature-icon">🏆</div>
                <div class="feature-title">5 Level Menantang</div>
                <div class="feature-desc">Teka-teki dari mudah sampai sulit</div>
            </div>
            <div class="welcome-feature">
                <div class="feature-icon">💎</div>
                <div class="feature-title">Harta Karun</div>
                <div class="feature-desc">Kumpulkan artifact langka</div>
            </div>
            <div class="welcome-feature">
                <div class="feature-icon">🛡️</div>
                <div class="feature-title">Sistem Nyawa</div>
                <div class="feature-desc">Tambah nyawa saat butuh</div>
            </div>
            <div class="welcome-feature">
                <div class="feature-icon">🌟</div>
                <div class="feature-title">Leaderboard</div>
                <div class="feature-desc">Bandingkan score dengan pemain lain</div>
            </div>
        </div>

        <div class="support-email">
            <strong>💡 Punya ide atau temukan bug?</strong><br>
            Email kami: <a href="mailto:darastoreof@gmail.com" class="email-link">darastoreof@gmail.com</a>
        </div>

        <div class="welcome-buttons">
            <button class="btn-welcome btn-donate-now" onclick="showDonationModal()">💝 Dukung Developer</button>
            <button class="btn-welcome btn-play-now" onclick="closeWelcomePopup()">🎮 Main Sekarang</button>
        </div>

        <div style="margin-top: 20px; font-size: 0.9rem; color: #ccc;">
            Game ini gratis! Donasi membantu pengembangan game lebih lanjut ❤️
        </div>
    </div>
</div>

<!-- Menu Hamburger -->
<div class="hamburger-menu">
    <div class="hamburger-btn" id="hamburgerBtn" onclick="toggleMenu()">
        <div class="hamburger-line"></div>
        <div class="hamburger-line"></div>
        <div class="hamburger-line"></div>
    </div>
    
    <div class="menu-content" id="menuContent">
        <div class="menu-item" onclick="showDonationModal()">
            <div class="menu-icon">💝</div>
            <div>Dukung Developer</div>
        </div>
        <div class="menu-item" onclick="showCheatModal()">
            <div class="menu-icon">🎮</div>
            <div>Cheat Code</div>
        </div>
        <div class="menu-item" onclick="showFeedbackModal()">
            <div class="menu-icon">💡</div>
            <div>Kirim Ide/Bug</div>
        </div>
        <div class="menu-item" onclick="resetGame()">
            <div class="menu-icon">🔄</div>
            <div>Reset Game</div>
        </div>
        <div class="menu-item" onclick="showLeaderboard()">
            <div class="menu-icon">🏆</div>
            <div>Leaderboard</div>
        </div>
    </div>
</div>

<!-- Modal Cheat Code -->
<div class="cheat-modal" id="cheatModal">
    <div class="cheat-content">
        <div class="ad-header">
            <div class="ad-title">🎮 CHEAT CODE</div>
            <div class="ad-subtitle">Masukkan kode rahasia untuk bonus!</div>
        </div>

        <input type="text" class="cheat-input" id="cheatInput" placeholder="Ketik kode di sini..." maxlength="20">

        <div class="cheat-list">
            <div class="cheat-item">
                <strong>INDIANAJONES</strong> - <span class="cheat-code">+10 Nyawa</span>
            </div>
            <div class="cheat-item">
                <strong>TEMPLEOFDOOM</strong> - <span class="cheat-code">+1000 Score</span>
            </div>
            <div class="cheat-item">
                <strong>ARKOFTHECOVENANT</strong> - <span class="cheat-code">Buka Semua Level</span>
            </div>
            <div class="cheat-item">
                <strong>DARAXZPOWER</strong> - <span class="cheat-code">+99 Nyawa & Score</span>
            </div>
        </div>

        <div style="display: flex; gap: 10px; margin-top: 20px;">
            <button class="btn-ad btn-watch" onclick="applyCheatCode()">🚀 Terapkan Cheat</button>
            <button class="btn-ad btn-close-ad" onclick="closeCheatModal()">✖ Tutup</button>
        </div>
    </div>
</div>

<!-- Modal Kirim Ide/Bug -->
<div class="feedback-modal" id="feedbackModal">
    <div class="feedback-content">
        <div class="ad-header">
            <div class="ad-title">💡 KIRIM IDE / LAPOR BUG</div>
            <div class="ad-subtitle">Bantu kami membuat game lebih baik!</div>
        </div>

        <input type="text" class="feedback-input" id="feedbackName" placeholder="Nama Anda (opsional)">
        <input type="email" class="feedback-input" id="feedbackEmail" placeholder="Email (opsional)">
        <select class="feedback-input" id="feedbackType">
            <option value="idea">💡 Ide Fitur Baru</option>
            <option value="bug">🐛 Lapor Bug</option>
            <option value="suggestion">🌟 Saran Perbaikan</option>
            <option value="other">📝 Lainnya</option>
        </select>
        <textarea class="feedback-textarea" id="feedbackMessage" placeholder="Jelaskan ide atau bug yang Anda temukan..."></textarea>

        <div style="display: flex; gap: 10px; margin-top: 20px;">
            <button class="btn-ad btn-donate" onclick="sendFeedback()">📧 Kirim</button>
            <button class="btn-ad btn-close-ad" onclick="closeFeedbackModal()">✖ Batal</button>
        </div>

        <div style="margin-top: 15px; font-size: 0.9rem; color: #ccc;">
            Atau email langsung ke: <a href="mailto:darastoreof@gmail.com" style="color: #4FC3F7;">darastoreof@gmail.com</a>
        </div>
    </div>
</div>

<script>
    // Variabel untuk fitur baru
    let welcomeShown = false;

    // Tampilkan popup welcome saat pertama kali masuk
    function showWelcomePopup() {
        // Cek localStorage untuk melihat apakah sudah pernah ditampilkan
        const hasSeenWelcome = localStorage.getItem('hasSeenWelcome');
        
        if (!hasSeenWelcome) {
            setTimeout(() => {
                document.getElementById('welcomePopup').style.display = 'flex';
                welcomeShown = true;
                localStorage.setItem('hasSeenWelcome', 'true');
            }, 1000);
        }
    }

    // Tutup popup welcome
    function closeWelcomePopup() {
        document.getElementById('welcomePopup').style.display = 'none';
        startGame(); // Mulai game
    }

    // Toggle menu hamburger
    function toggleMenu() {
        const menuContent = document.getElementById('menuContent');
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        
        if (menuContent.style.display === 'block') {
            menuContent.style.display = 'none';
            hamburgerBtn.style.transform = 'scale(1)';
        } else {
            menuContent.style.display = 'block';
            hamburgerBtn.style.transform = 'scale(1.1)';
        }
    }

    // Tutup menu saat klik di luar
    document.addEventListener('click', function(event) {
        const menuContent = document.getElementById('menuContent');
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        
        if (!hamburgerBtn.contains(event.target) && !menuContent.contains(event.target)) {
            menuContent.style.display = 'none';
            hamburgerBtn.style.transform = 'scale(1)';
        }
    });

    // Tampilkan modal cheat code
    function showCheatModal() {
        document.getElementById('cheatModal').style.display = 'flex';
        document.getElementById('cheatInput').value = '';
        document.getElementById('cheatInput').focus();
        toggleMenu(); // Tutup menu
    }

    // Tutup modal cheat code
    function closeCheatModal() {
        document.getElementById('cheatModal').style.display = 'none';
    }

    // Terapkan cheat code
    function applyCheatCode() {
        const cheatInput = document.getElementById('cheatInput');
        const code = cheatInput.value.trim().toUpperCase();
        
        switch(code) {
            case 'INDIANAJONES':
                lives += 10;
                showFeedback('🎉 +10 Nyawa! Cheat berhasil!', 'correct');
                break;
                
            case 'TEMPLEOFDOOM':
                score += 1000;
                showFeedback('🎉 +1000 Score! Cheat berhasil!', 'correct');
                break;
                
            case 'ARKOFTHECOVENANT':
                currentLevel = 5;
                currentQuestion = 0;
                showFeedback('🎉 Semua level terbuka! Cheat berhasil!', 'correct');
                break;
                
            case 'DARAXZPOWER':
                lives += 99;
                score += 9999;
                showFeedback('🎉 +99 Nyawa & +9999 Score! POWER UP!', 'correct');
                break;
                
            default:
                showFeedback('❌ Cheat code tidak valid!', 'incorrect');
                return;
        }
        
        updateDisplay();
        closeCheatModal();
    }

    // Tampilkan modal feedback/ide/bug
    function showFeedbackModal() {
        document.getElementById('feedbackModal').style.display = 'flex';
        document.getElementById('feedbackMessage').value = '';
        toggleMenu(); // Tutup menu
    }

    // Tutup modal feedback
    function closeFeedbackModal() {
        document.getElementById('feedbackModal').style.display = 'none';
    }

    // Kirim feedback
    function sendFeedback() {
        const name = document.getElementById('feedbackName').value;
        const email = document.getElementById('feedbackEmail').value;
        const type = document.getElementById('feedbackType').value;
        const message = document.getElementById('feedbackMessage').value;
        
        if (!message.trim()) {
            showFeedback('❌ Harap isi pesan terlebih dahulu!', 'incorrect');
            return;
        }
        
        // Simulasi pengiriman email
        const typeLabels = {
            'idea': 'Ide Fitur Baru',
            'bug': 'Lapor Bug', 
            'suggestion': 'Saran Perbaikan',
            'other': 'Lainnya'
        };
        
        const subject = `[Indiana Jones Game] ${typeLabels[type]}`;
        const body = `Nama: ${name || 'Tidak diisi'}\nEmail: ${email || 'Tidak diisi'}\nTipe: ${typeLabels[type]}\n\nPesan:\n${message}`;
        
        // Dalam implementasi nyata, ini akan mengirim ke backend
        // Untuk demo, kita tampilkan konfirmasi
        showFeedback('📧 Pesan terkirim! Terima kasih atas kontribusinya!', 'correct');
        
        // Reset form
        document.getElementById('feedbackName').value = '';
        document.getElementById('feedbackEmail').value = '';
        document.getElementById('feedbackMessage').value = '';
        
        setTimeout(closeFeedbackModal, 2000);
    }

    // Reset game
    function resetGame() {
        if (confirm('Apakah Anda yakin ingin mereset game? Semua progress akan hilang!')) {
            localStorage.removeItem('typingScores');
            localStorage.removeItem('hasSeenWelcome');
            localStorage.removeItem('gameProgress');
            
            currentLevel = 1;
            currentQuestion = 0;
            score = 0;
            lives = 3;
            
            updateDisplay();
            resetTest();
            showFeedback('🔄 Game telah direset!', 'correct');
        }
        toggleMenu();
    }

    // Tampilk
