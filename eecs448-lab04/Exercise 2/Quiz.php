<?php
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$score = 0;
if($q1 == "42")
  $score++;
if($q2 == "Toby Flenderson")
  $score++;
if($q3 == "all of the above")
  $score++;
if($q4 == "KU")
  $score++;
if($q5 == "dyin")
  $score++;

$percent = $score*20;
echo"	Question 1: What is the meaning of life?<br>You answered: $q1<br>Correct answer: 42<br><br>Question 2: Who is the worst?<br>You answered: $q2<br>Correct answer: Toby Flenderson<br><br>Question 3: Who is the best?<br>You answered: $q3<br>Correct answer: all of the above<br><br>Question 4: Who won the 2008 National Championship in basketball?<br>You answered: $q4<br>Correct answer: KU<br><br>Question 5: Get busy livin, or get busy ______?<br>You answered: $q5<br>Correct answer: dyin<br><br>";
echo"You got $score/5<br>That is $percent%"
?>
