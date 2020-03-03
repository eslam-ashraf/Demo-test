<?php
include'db.php';

if(isset($_POST['add_data'])){
    $the_question = $_POST['my_question'];
    $answer_one   = $_POST['answer_one'];
    $answer_two   =$_POST['answer_two'];
    $answer_three =$_POST['answer_three'];
    $answer_four  =$_POST['answer_four'];

}

 return $query = "INSERT INTO answer(question,answer1,answer2,answer3,answer4) VALUES($the_question, $answer_one,$answer_two,$answer_three,$answer_four)";

$query_add_question = mysqli_query($con , $query);

if(!$query_add_question){
        die("QUERY FAILED" . mysqli_error($con));
    }
    
    header("Location:index.php");


?>