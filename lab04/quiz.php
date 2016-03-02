<?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "B") { $totalCorrect++; }
            if ($answer3 == "B") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5== "C") { $totalCorrect++; }
            
            
           echo "Question 1: What planet did Princess Leia grow up on? <br> You answered: $answer1 <br> The correct answer is: C <br><br>";
           
           echo "Question 2: What planet is Chewbacca from? <br> You answered: $answer2 <br> The correct answer is: B <br><br>";
           
           echo "Question 3: Who did Han Solo shoot in the cantina on Tattoine? <br> You answered: $answer3 <br> The correct answer is: B <br><br>";
           
           echo "Question 4: Who brought Han Solo to Jaba the Hutt after he was frozen in carbonite? <br> You answered: $answer4 <br> The correct answer is: A <br><br>";
           
           echo "Question 5: Who built C3PO? <br> You answered: $answer5 <br> The correct answer is: C <br><br>";
            
           $percentile = ($totalCorrect/5)*100;
               
           echo "<div id='results'>$totalCorrect / 5 correct</div><br>";
           
           echo "Your scored %$percentile";
            
 ?>
