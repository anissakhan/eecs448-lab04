<?php
//access the global array called $_POST to get the values from the text fields
$Q1 = $_POST["Q1"];
$Q2 = $_POST["Q2"];
$Q3 = $_POST["Q3"];
$Q4 = $_POST["Q4"];
$Q5 = $_POST["Q5"];

echo "<strong>Question 1:</strong> What do kids say on Halloween?<br>";
if($Q1=="first")
{
   echo "<strong>You answered:</strong> You snooze you lose<br>";
   echo "<strong>Correct answer:</strong> Trick or treat<br><br>";
}
else if($Q1=="second")
{
   echo "<strong>You answered:</strong> Trick or treat<br>";
   echo "<strong>Correct answer:</strong> Trick or treat<br><br>";
}
else if($Q1=="third")
{
   echo "<strong>You answered:</strong> Eat my shorts<br>";
   echo "<strong>Correct answer:</strong> Trick or treat<br><br>";
}
else if($Q1=="fourth")
{
   echo "<strong>You answered:</strong> Give me candy<br>";
   echo "<strong>Correct answer:</strong> Trick or treat<br><br>";
}
else
{
   echo "Unanswered<br><br>";
}


echo "<strong>Question 2:</strong> Which activity does not typically happen on Halloween?<br>";
if($Q2=="first")
{
   echo "<strong>You answered:</strong> Trick or treating<br>";
   echo "<strong>Correct answer:</strong> Fishing<br><br>";
}
else if($Q2=="second")
{
   echo "<strong>You answered:</strong> Bobbing for apples<br>";
   echo "<strong>Correct answer:</strong> Fishing<br><br>";
}
else if($Q2=="third")
{
   echo "<strong>You answered:</strong> Fishing<br>";
   echo "<strong>Correct answer:</strong> Fishing<br><br>";
}
else if($Q2=="fourth")
{
   echo "<strong>You answered:</strong> Dressing in costumes<br>";
   echo "<strong>Correct answer:</strong> Fishing<br><br>";
   
}
else
{
   echo "Unanswered<br><br>";
}

echo "<strong>Question 3:</strong> Where did Halloween originate?<br>";
if($Q3=="first")
{
   echo "<strong>You answered:</strong> US<br>";
   echo "<strong>Correct answer:</strong> Ireland<br><br>";
}
else if($Q3=="second")
{
   echo "<strong>You answered:</strong> France<br>";
   echo "<strong>Correct answer:</strong> Ireland<br><br>";
}
else if($Q3=="third")
{
   echo "<strong>You answered:</strong> England<br>";
   echo "<strong>Correct answer:</strong> Ireland<br><br>";
}
else if($Q3=="fourth")
{
   echo "<strong>You answered:</strong> Ireland<br>";
   echo "<strong>Correct answer:</strong> Ireland<br><br>";
   
}
else
{
   echo "Unanswered<br><br>";
}

echo "<strong>Question 4:</strong> When did Halloween arrive in North America?<br>";
if($Q4=="first")
{
   echo "<strong>You answered:</strong> 1509<br>";
   echo "<strong>Correct answer:</strong> 1607<br><br>";
}
else if($Q4=="second")
{
   echo "<strong>You answered:</strong> 1607<br>";
   echo "<strong>Correct answer:</strong> 1607<br><br>";
}
else if($Q4=="third")
{
   echo "<strong>You answered:</strong> 1850<br>";
   echo "<strong>Correct answer:</strong> 1607<br><br>";
}
else if($Q4=="fourth")
{
   echo "<strong>You answered:</strong> 1720<br>";
   echo "<strong>Correct answer:</strong> 1607<br><br>";
   
}
else
{
   echo "Unanswered<br><br>";
}

echo "<strong>Question 5:</strong> What did the first celebrators of Halloween call 'dressing up in costume'?<br>";
if($Q5=="first")
{
   echo "<strong>You answered:</strong> costuming<br>";
   echo "<strong>Correct answer:</strong> guising<br><br>";
}
else if($Q5=="second")
{
   echo "<strong>You answered:</strong> dressing up<br>";
   echo "<strong>Correct answer:</strong> guising<br><br>";
}
else if($Q5=="third")
{
   echo "<strong>You answered:</strong> guising<br>";
   echo "<strong>Correct answer:</strong> guising<br><br>";
}
else if($Q5=="fourth")
{
   echo "<strong>You answered:</strong> hiding<br>";
   echo "<strong>Correct answer:</strong> guising<br><br>";
   
}
else
{
   echo "Unanswered<br><br>";
}


//echo "Question 1: " . $Q1 . "<br>";
//echo "Question 2: " . $Q2 . "<br>";
//echo "Question 3: " . $Q3 . "<br>";
//echo "Question 4: " . $Q4 . "<br>";
//echo "Question 5: " . $Q5 . "<br>";

?>
