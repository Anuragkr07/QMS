<?php
  $con=mysqli_connect("localhost","root","","qms");
  if(!$con)
  {
  echo "error";
  }
  session_start();
  $qno=$_POST['qno'];
  $ques=$_POST['ques'];
  $correct_answer=$_POST['correct_answer'];
  $opt1=$_POST['opt1'];
  $opt2=$_POST['opt2'];
  $opt3=$_POST['opt3'];
  $opt4=$_POST['opt4'];
  $code=$_SESSION['code'];
  $sql="INSERT INTO questions(qno,question,correctanswer,qid,opt1,opt2,opt3,opt4) values('$qno','$ques',$correct_answer','$code',$opt1','$opt2','$opt3','$opt4')";
  $result=mysqli_query($con,$sql);
  header("refresh:0;url=addquestions.html");
    ?>