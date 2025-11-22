function checkAnswer() {
    const levelPuzzles = puzzles[`level${currentLevel}`];
    const puzzle = levelPuzzles[currentQuestion];
    const userAnswer = answerInput.value.trim().toLowerCase();
    
    // Cek apakah jawaban user ada dalam array answers
    const isCorrect = puzzle.answers.some(correctAnswer => 
        userAnswer === correctAnswer.toLowerCase()
    );
    
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
