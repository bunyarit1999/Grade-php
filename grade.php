<?php
    $grade = " ";
    $score = " ";
    $score1 = " ";
    $score2 = " ";
    $score3 = " ";
    $error = " ";
 
    if (isset($_POST["practice_exam"])) 
    {
        $score1 = $_POST["practice_exam"];
        $score2 = $_POST["midterm_exam"];
        $score3 = $_POST["final_exam"];

        if (($score1 > 30 ) or ($score2 > 30 ) or ($score3 > 40 ))
        {
            $error = "กรุณากรอกคะแนนใหม่";
        }

         else{
                $score = $score1 + $score2 + $score3;
                if($score <= 49)
                $grade = 'F';
            else if($score <= 54)
                $grade = 'D';
            else if($score <= 59)
                $grade = 'D+';
            else if($score <= 64)
                $grade = 'C';
            else if($score <= 69)
                $grade = 'C+';
            else if($score <= 74)
                $grade = 'B';
            else if($score <= 79)
                $grade = 'B+';
            else if($score <= 100)
                $grade = 'A';
            }
    } 
    if (isset($_POST["Delect"])) 
    {
        $grade = " ";
        $score = " ";
        $score1 = " ";
        $score2 = " ";
        $score3 = " ";
        $error = " ";
    }
?>