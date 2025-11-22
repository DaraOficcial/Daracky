function checkAnswer() {
    const levelPuzzles = puzzles[`level${currentLevel}`];
    const puzzle = levelPuzzles[currentQuestion];
    const userAnswer = answerInput.value.trim().toLowerCase();
    
    console.log("User answer:", userAnswer); // Debug
    console.log("Puzzle data:", puzzle); // Debug
    
    // ✅ FIX: Cek dulu apakah ada property answers atau answer
    let isCorrect = false;
    
    if (puzzle.answers) {
        // Jika pakai array answers
        console.log("Using answers array:", puzzle.answers); // Debug
        isCorrect = puzzle.answers.some(correctAnswer => 
            userAnswer === correctAnswer.toLowerCase()
        );
    } else if (puzzle.answer) {
        // Jika pakai string answer  
        console.log("Using answer string:", puzzle.answer); // Debug
        isCorrect = userAnswer === puzzle.answer.toLowerCase();
    }
    
    console.log("Is correct?", isCorrect); // Debug
    
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
