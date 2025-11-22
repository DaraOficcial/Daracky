// Database teka-teki Indiana Jones (75 soal - 5 level x 15 soal)
const puzzles = {
    level1: [
        {
            question: "Aku selalu ada di depanmu tapi tidak bisa dilihat. Apa aku?",
            answers: ["masa depan", "hari esok", "waktu depan", "masa yang akan datang", "future"],
            hint: "Berhubungan dengan waktu"
        },
        {
            question: "Semakin banyak diambil, semakin besar aku menjadi. Apa aku?",
            answer: "lubang",
            hint: "Di tanah"
        },
        {
            question: "Bisa berbicara semua bahasa tapi tidak punya mulut. Apa aku?",
            answers: ["gema", "echo", "pantulan suara", "gaung"],
            hint: "Suara yang memantul"
        },
        {
            question: "Aku punya kota tapi tidak punya rumah, punya hutan tapi tidak punya pohon. Apa aku?",
            answer: "peta",
            hint: "Petunjuk jalan"
        },
        {
            question: "Apa yang punya tangan tapi tidak bisa bertepuk?",
            answers: ["jam", "arloji", "jam dinding", "penunjuk waktu", "watch"],
            hint: "Penunjuk waktu"
        },
        {
            question: "Aku punya kepala dan ekor tapi tidak punya tubuh. Apa aku?",
            answers: ["koin", "uang logam", "coin", "mata uang", "receh"],
            hint: "Alat pembayaran"
        },
        {
            question: "Apa yang harus dipecahkan sebelum digunakan?",
            answers: ["telur", "egg", "cangkang telur", "butir telur"],
            hint: "Sumber protein"
        },
        {
            question: "Aku menjadi basah saat dikeringkan. Apa aku?",
            answers: ["handuk", "towel", "kain lap", "sapu tangan", "serbet"],
            hint: "Alat mandi"
        },
        {
            question: "Apa yang berjalan naik turun tapi tidak bergerak?",
            answers: ["tangga", "stairs", "anak tangga", "undakan", "staircase"],
            hint: "Alat naik ke lantai atas"
        },
        {
            question: "Semakin banyak kamu menghitung, semakin sedikit yang tersisa. Apa itu?",
            answers: ["umur", "usia", "age", "lifetime", "masa hidup"],
            hint: "Berhubungan dengan waktu hidup"
        },
        {
            question: "Apa yang punya kunci tapi tidak bisa membuka pintu?",
            answers: ["piano", "keyboard", "alat musik", "pianoforte"],
            hint: "Alat musik"
        },
        {
            question: "Aku punya sungai tapi tidak ada air, punya jalan tapi tidak ada mobil. Apa aku?",
            answers: ["peta", "map", "denah", "atlas", "gambar wilayah"],
            hint: "Gambar wilayah"
        },
        {
            question: "Apa yang bisa dibawa ke ruangan tapi tidak bisa dipindahkan?",
            answers: ["cahaya", "light", "sinar", "penerangan", "lampu"],
            hint: "Sumber penerangan"
        },
        {
            question: "Apa yang punya wajah tapi tidak bisa tersenyum?",
            answers: ["gunung", "mountain", "bukit", "tebing", "cliff"],
            hint: "Permukaan bumi yang tinggi"
        },
        {
            question: "Aku selalu lapar dan harus diberi makan, jari akan berdarah jika disentuh. Apa aku?",
            answers: ["api", "fire", "nyala", "kobaran", "blaze"],
            hint: "Sumber energi dan panas"
        }
    ],
    level2: [
        {
            question: "Dalam kuil Mesir kuno, apa yang selalu datang tetapi tidak pernah tiba?",
            answer: "besok",
            hint: "Berhubungan dengan waktu"
        },
        {
            question: "Aku mulai dengan 'T', berakhir dengan 'T', dan penuh dengan 'T'. Apa aku?",
            answer: "teko",
            hint: "Wadah untuk air"
        },
        {
            question: "Apa yang punya mata tapi tidak bisa melihat?",
            answer: "angin topan",
            hint: "Fenomena alam"
        },
        {
            question: "Aku punya daun tapi bukan pohon, punya sampul tapi bukan buku. Apa aku?",
            answer: "meja",
            hint: "Perabotan rumah"
        },
        {
            question: "Apa yang bisa dipotong tetapi tidak pernah disatukan kembali?",
            answer: "kartu",
            hint: "Untuk bermain game"
        },
        {
            question: "Aku punya kaki tapi tidak bisa berjalan. Apa aku?",
            answer: "kursi",
            hint: "Tempat duduk"
        },
        {
            question: "Apa yang punya satu suara tetapi menjadi empat?",
            answer: "gema",
            hint: "Suara yang memantul"
        },
        {
            question: "Semakin tinggi aku, semakin sedikit yang kamu lihat. Apa aku?",
            answer: "kegelapan",
            hint: "Tidak ada cahaya"
        },
        {
            question: "Apa yang punya mulut tetapi tidak bisa makan?",
            answer: "sungai",
            hint: "Aliran air"
        },
        {
            question: "Aku punya tangan tapi tidak bisa memegang. Apa aku?",
            answer: "jam",
            hint: "Penunjuk waktu"
        },
        {
            question: "Apa yang penuh dengan lubang tetapi masih menampung air?",
            answer: "spons",
            hint: "Alat mandi"
        },
        {
            question: "Aku punya kota tapi tidak ada bangunan, punya gunung tapi tidak ada batu. Apa aku?",
            answer: "peta",
            hint: "Petunjuk geografi"
        },
        {
            question: "Apa yang harus kamu simpan setelah memberi kepada orang lain?",
            answer: "janji",
            hint: "Komitmen"
        },
        {
            question: "Aku punya kepala seperti kucing dan ekor seperti kucing, tapi aku bukan kucing. Apa aku?",
            answer: "kucing betina",
            hint: "Jenis kelamin hewan"
        },
        {
            question: "Apa yang berat di depan tetapi tidak di belakang?",
            answer: "berat",
            hint: "Kata yang sama dengan pertanyaannya"
        }
    ]
    // ... level lainnya bisa ditambahkan
};

// Variabel game
let currentLevel = 1;
let currentQuestion = 0;
let score = 0;
let lives = 3;
let usedHints = 0;

// DOM Elements
const puzzleText = document.getElementById('puzzleText');
const hintText = document.getElementById('hintText');
const answerInput = document.getElementById('answerInput');
const startBtn = document.getElementById('startBtn');
const submitBtn = document.getElementById('submitBtn');
const hintBtn = document.getElementById('hintBtn');
const nextBtn = document.getElementById('nextBtn');
const levelDisplay = document.getElementById('levelDisplay');
const scoreDisplay = document.getElementById('scoreDisplay');
const questionDisplay = document.getElementById('questionDisplay');
const livesDisplay = document.getElementById('livesDisplay');
const levelTitle = document.getElementById('levelTitle');
const progressBar = document.getElementById('progressBar');
const progressText = document.getElementById('progressText');
const artifact = document.getElementById('artifact');
const artifactText = document.getElementById('artifactText');
const feedback = document.getElementById('feedback');
const feedbackText = document.getElementById('feedbackText');

// Level titles
const levelTitles = {
    1: "🏛️ Kuil Pemula",
    2: "🏺 Piramida Mesir", 
    3: "🌋 Gunung Berapi",
    4: "🏰 Kastil Eropa",
    5: "👑 Makam Firaun"
};

// Artifacts for each level
const artifacts = {
    1: "💎 Kristal Kuno",
    2: "🏺 Vas Mesir",
    3: "🔥 Batu Lava", 
    4: "⚔️ Pedang Knight",
    5: "👑 Mahkota Firaun"
};

// Start game
startBtn.addEventListener('click', startGame);
submitBtn.addEventListener('click', checkAnswer);
hintBtn.addEventListener('click', showHint);
nextBtn.addEventListener('click', nextQuestion);

function startGame() {
    currentLevel = 1;
    currentQuestion = 0;
    score = 0;
    lives = 3;
    usedHints = 0;
    
    updateDisplay();
    loadQuestion();
    
    startBtn.disabled = true;
    submitBtn.disabled = false;
    hintBtn.disabled = false;
    answerInput.disabled = false;
    answerInput.focus();
}

function loadQuestion() {
    const levelPuzzles = puzzles[`level${currentLevel}`];
    const puzzle = levelPuzzles[currentQuestion];
    
    puzzleText.textContent = puzzle.question;
    hintText.textContent = "Tekan 'Minta Petunjuk' untuk bantuan";
    
    answerInput.value = "";
    updateDisplay();
}

// ✅ FIX: FUNGSI checkAnswer YANG BARU DAN PASTI BERHASIL
function checkAnswer() {
    const levelPuzzles = puzzles[`level${currentLevel}`];
    const puzzle = levelPuzzles[currentQuestion];
    const userAnswer = answerInput.value.trim().toLowerCase();
    
    // Debug di console
    console.log("User menjawab:", userAnswer);
    console.log("Data soal:", puzzle);
    
    // ✅ FIX: Cek kedua format dengan benar
    let isCorrect = false;
    
    // Cek format array dulu
    if (puzzle.answers && Array.isArray(puzzle.answers)) {
        console.log("Menggunakan answers array:", puzzle.answers);
        isCorrect = puzzle.answers.some(correctAnswer => 
            userAnswer === correctAnswer.toLowerCase()
        );
    } 
    // Cek format string
    else if (puzzle.answer && typeof puzzle.answer === 'string') {
        console.log("Menggunakan answer string:", puzzle.answer);
        isCorrect = userAnswer === puzzle.answer.toLowerCase();
    }
    
    console.log("Jawaban benar?", isCorrect);
    
    if (isCorrect) {
        // Correct answer
        score += 10;
        if (usedHints === 0) {
            score += 5; // Bonus for no hints
        }
        
        showFeedback("✅ Benar! +" + (usedHints === 0 ? "15" : "10") + " points", "correct");
        currentQuestion++;
        
        if (currentQuestion >= levelPuzzles.length) {
            // Level completed
            setTimeout(completeLevel, 1500);
        } else {
            setTimeout(nextQuestion, 1500);
        }
    } else {
        // Wrong answer
        lives--;
        showFeedback("❌ Salah! Coba lagi", "incorrect");
        
        if (lives <= 0) {
            setTimeout(gameOver, 1500);
        }
    }
    
    usedHints = 0;
    updateDisplay();
}

function showHint() {
    const levelPuzzles = puzzles[`level${currentLevel}`];
    const puzzle = levelPuzzles[currentQuestion];
    
    hintText.textContent = `💡 Petunjuk: ${puzzle.hint}`;
    usedHints++;
    hintBtn.disabled = true;
    
    setTimeout(() => {
        hintBtn.disabled = false;
    }, 3000);
}

function nextQuestion() {
    loadQuestion();
    nextBtn.disabled = true;
}

function completeLevel() {
    score += 50; // Level completion bonus
    
    if (currentLevel < 5) {
        showFeedback(`🎉 Level ${currentLevel} Selesai! +50 points\nHarta karun ditemukan: ${artifacts[currentLevel]}`, "correct");
        currentLevel++;
        currentQuestion = 0;
        
        setTimeout(() => {
            loadQuestion();
            updateDisplay();
        }, 2000);
    } else {
        // Game completed
        showFeedback(`🏆 SELAMAT! Anda menyelesaikan semua level!\nScore akhir: ${score}`, "correct");
        setTimeout(() => {
            if (confirm(`Game Selesai! Score akhir: ${score}\nMain lagi?`)) {
                startGame();
            }
        }, 2000);
    }
}

function gameOver() {
    showFeedback(`💀 Game Over! Score akhir: ${score}`, "incorrect");
    setTimeout(() => {
        if (confirm(`Game Over! Score akhir: ${score}\nMain lagi?`)) {
            startGame();
        }
    }, 2000);
}

function showFeedback(message, type) {
    feedbackText.textContent = message;
    feedback.className = `feedback ${type}`;
    feedback.style.display = 'block';
}

function closeFeedback() {
    feedback.style.display = 'none';
}

function updateDisplay() {
    levelDisplay.textContent = currentLevel;
    scoreDisplay.textContent = score;
    questionDisplay.textContent = `${currentQuestion + 1}/15`;
    livesDisplay.textContent = lives;
    
    levelTitle.textContent = levelTitles[currentLevel];
    
    const progress = ((currentQuestion) / 15) * 100;
    progressBar.style.width = `${progress}%`;
    progressText.textContent = `${Math.round(progress)}% Selesai`;
    
    artifact.textContent = getArtifactEmoji(currentLevel);
    artifactText.textContent = artifacts[currentLevel];
    
    // Enable/disable buttons
    nextBtn.disabled = currentQuestion === 0;
    hintBtn.disabled = false;
}

function getArtifactEmoji(level) {
    const emojis = ["💎", "🏺", "🔥", "⚔️", "👑"];
    return emojis[level - 1] || "💎";
}

// Allow Enter key to submit answer
answerInput.addEventListener('keypress', function(e) {
    if (e.key === 'Enter' && !submitBtn.disabled) {
        checkAnswer();
    }
});

// Initialize
updateDisplay();
