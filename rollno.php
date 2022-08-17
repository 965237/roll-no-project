<hmtl>
  <body>
    <form action="" method="post">
      Name : <input type="text" name="name"> <br> <br>
      <input type ="submit" name="submit">
</body>
</html>



<?php
if(isset($_POST['submit'])){
  $Rollno = $_POST['name'];

  switch($Rollno){
    case "ayush varma":
      echo "<p style='color:red; border:solid maroon 2px; background-color:lightpink;'> $Rollno your Roll No is 1</p>";
    break;
     
    case "pankaj yadav":
      echo "<p style='color:black; border:solid pink 2px; background-color:pink;'> $Rollno your Roll No is 2</p>";
    break;

    case "hitesh sha":
      echo "<p style='color:black; border:solid pink 2px; background-color:lightblue;'> $Rollno your Roll No is 3</p>";
    break;

    case "shubham gupta":
       echo "<p style='color:black; border:solid pink 2px; background-color:lightgreen;'> $Rollno your Roll No is 4</p>";
    break;

    case "":
       echo "<p style='color:black; border:solid pink 2px; background-color:aqua;'> $Rollno enter some text</p>";
    break;            

  }
}



?>
