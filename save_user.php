function checkAnswer() {
    const levelPuzzles = puzzles[`level${currentLevel}`];
    const puzzle = levelPuzzles[currentQuestion];
    
    // ✅ FIX: Normalisasi input user - hapus spasi ekstra dan ubah ke lowercase
    const userAnswer = answerInput.value.trim().toLowerCase().replace(/\s+/g, ' ');
    
    console.log("User menjawab:", userAnswer);
    console.log("Data soal:", puzzle);
    
    let isCorrect = false;
    
    // Cek format array dulu
    if (puzzle.answers && Array.isArray(puzzle.answers)) {
        console.log("Menggunakan answers array:", puzzle.answers);
        isCorrect = puzzle.answers.some(correctAnswer => {
            // ✅ FIX: Normalisasi jawaban yang benar juga
            const normalizedCorrect = correctAnswer.toLowerCase().trim();
            console.log("Bandingkan:", userAnswer, "dengan", normalizedCorrect);
            return userAnswer === normalizedCorrect;
        });
    } 
    // Cek format string
    else if (puzzle.answer && typeof puzzle.answer === 'string') {
        console.log("Menggunakan answer string:", puzzle.answer);
        // ✅ FIX: Normalisasi jawaban yang benar juga
        const normalizedCorrect = puzzle.answer.toLowerCase().trim();
        console.log("Bandingkan:", userAnswer, "dengan", normalizedCorrect);
        isCorrect = userAnswer === normalizedCorrect;
    }
    
    console.log("Jawaban benar?", isCorrect);
    
    if (isCorrect) {
        // Correct answer
        score += 10;
        if (usedHints === 0) {
            score += 5;
        }
        
        showFeedback("✅ Benar! +" + (usedHints === 0 ? "15" : "10") + " points", "correct");
        currentQuestion++;
        
        if (currentQuestion >= levelPuzzles.length) {
            setTimeout(completeLevel, 1500);
        } else {
            setTimeout(nextQuestion, 1500);
        }
    } else {
        // Wrong answer
        lives--;
        // ✅ TAMPILKAN JAWABAN YANG BENAR UNTUK DEBUG
        const correctAnswers = puzzle.answers || [puzzle.answer];
        showFeedback(`❌ Salah! Coba lagi\nJawaban yang diterima: ${correctAnswers.join(', ')}`, "incorrect");
        
        if (lives <= 0) {
            setTimeout(gameOver, 1500);
        }
    }
    
    usedHints = 0;
    updateDisplay();
            }
