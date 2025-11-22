function checkAnswer() {
    const levelPuzzles = puzzles[`level${currentLevel}`];
    const puzzle = levelPuzzles[currentQuestion];
    const userAnswer = answerInput.value.trim().toLowerCase();
    
    // ✅ FIX: Support kedua format dengan pengecekan yang benar
    let isCorrect = false;
    
    if (puzzle.answers && Array.isArray(puzzle.answers)) {
        // Format array: ["jawaban1", "jawaban2", ...]
        isCorrect = puzzle.answers.some(correctAnswer => 
            userAnswer === correctAnswer.toLowerCase()
        );
    } else if (puzzle.answer && typeof puzzle.answer === 'string') {
        // Format string: "jawaban"
        isCorrect = userAnswer === puzzle.answer.toLowerCase();
    }
    
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
        showFeedback("❌ Salah! Coba lagi", "incorrect");
        
        if (lives <= 0) {
            setTimeout(gameOver, 1500);
        }
    }
    
    usedHints = 0;
    updateDisplay();
            }
