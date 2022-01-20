<?php
    $con=mysqli_connect("localhost","root","","qms");
    if(!$con)
    {
    echo "error";
    }
    session_start();
    $qname=$_POST['qname'];
    $num=$_POST['num'];
    $marks=$_POST['marks'];
    $tid=$_SESSION['tid'];
    $code = rand(1,100000);
    $sql="INSERT INTO quiz(qname,num,marks,tid,code) values('$qname','$num','$marks','$tid','$code')";
    $result= mysqli_query($con,$sql);
    $_SESSION['code']=$code;
    header("refresh:0;url=addquestions.html");
    // for($i=1;$i<=$num;$i++)
    // {
    // echo
    //   '<!DOCTYPE html>
    //   <html>
    //   <head>
    //     <link rel="stylesheet" href="styleqms.css">
    //     <style>
    //         body{  

    //       background-repeat: no-repeat;
    //       background-size: cover;
    //     }
    //     </style>
    //   </head>
    //   <body>
      
    //   <ul>
        
    //     <li><a href="">Log out</a></li>
    //     <li><a href="welcome-teacher.html" style="border-left: 2px solid #bbb">Dashboard</a></li>
    //     <li style="float:left "><a  href="homepage.html"><b>QMS</b></a></li>
    //   </ul>
      
    //   <form action="addquestion.php" method="post">
    //     <div class="container" style="margin-bottom:10%">
    //       <h1>Add Questions</h1>
    //       <hr>
    //       <label for="qno"><b>Question number</b></label>
    //       <input type="text" placeholder="Enter Question number" name="qno" id="qno" required>
          
    //       <label for="ques"><b>Question</b></label>
    //       <input type="text" placeholder="Enter Question" name="ques" id="ques" required>
      
    //       <label for="correct_answer"><b>Correct answer</b></label>
    //       <input type="text" placeholder="Enter correct answer" name="correct_answer" id="correct_answer" required>
          
    //       <label for="opt1"><b>A</b></label>
    //       <input type="text" placeholder="Enter option A" name="opt1" id="opt1" required>

    //       <label for="opt2"><b>B</b></label>
    //       <input type="text" placeholder="Enter option B" name="opt2" id="opt2" required>

    //       <label for="opt3"><b>C</b></label>
    //       <input type="text" placeholder="Enter option C" name="opt3" id="opt3" required>

    //       <label for="opt4"><b>D</b></label>
    //       <input type="text" placeholder="Enter option D" name="opt4" id="opt4" required>
      
          
    //       <button type="submit" class="registerbtn" style="margin:0 0">Create</button>
    //     </div>
    //   </form>
      
      
    //   </body>
    //   </html>';
    // }
    // echo $code;
?>

