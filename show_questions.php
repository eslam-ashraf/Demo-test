<?php

include'db.php';

    $query = "SELECT * FROM answer";
    $query_answer_info = mysqli_query($con , $query);


    if(!$query_answer_info){
        die("QUERY FAILED" . mysqli_error($con));
    }
    
    while($row = mysqli_fetch_array($query_answer_info)){
        $answer_id = $row['id'];
        $title = $row['question'];
        $answer_one = $row['answer1'];
        $answer_two = $row['answer2'];
        $answer_three = $row['answer3'];
        $answer_four = $row['answer4'];
        
        
        
        echo "<h2>{$title}</h2>";
        echo "<p>{$answer_one}</p>";
        echo "<p>{$answer_two}</p>";
        echo "<p>{$answer_three}</p>";
        echo "<p>{$answer_four}</p>";
        
    }



?>