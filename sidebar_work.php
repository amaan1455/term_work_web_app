<html>
<head>
    <title>Term Work</title>
      <?php 
    $server = "localhost";
    $username ="username";
    $password = "password";
    $dbname = "dbname";

    $conn = new mysqli($server,$username,$password,$dbname);
    if($conn->connect_error){
        echo "<div class='class_button'>
            <h1 class='side_text' style='padding-top:45px ;'>Connection error</h1> 
        </div>";
    }else{
        
    }

    
    
    ?>
    <style>
        body{
            margin: 0px;
            background-color: #7046c1;
        }
        .sideupper{
            position:absolute;
            width: 100%;
            height: 60%;
            top:0px;
            background: #0096FF;
        }
        .sidelower{
            position:absolute;
            width: 100%;
            height: 60%;
            top:60%;
            background: #0b75c0;
        }

     
      
        .side_text{
            position: relative;
            left: 5%;
            top: 5%;
            font-family: 'Ubuntu';
            font-style: normal;
            font-weight: 400;
            font-size: 6vw;
            line-height: 41px;
            color: #FFFFFF;
        }

    </style>
</head>
<body>
   <?php 
   $sql="select * from student where enroll='".$_GET['enroll']."'";
    $result = $conn->query($sql); 
    $row1 = $result->fetch_assoc();
    $sql="select work,marks from class where class='".$_GET['class']."'";
    $result = $conn->query($sql);
    $row2 = $result->fetch_assoc();
    $sql="select * from work_done where enroll='".$_GET['enroll']."'";
    $result = $conn->query($sql);
    $marks=0;
    $sub=0;
    while($row3=$result->fetch_assoc()){
            $marks = $marks + $row3['marks'];
            $sub++;
        }
    ?>
        <div class="sideupper">
            <h1 class="side_text">Name : <?php echo $row1['name'];?><br>Branch: <?php echo $row1['branch'];?><br>Year: <?php echo $row1['year'];?><br>Semester: <?php echo $row1['semester'];?><br>Enrollment: <?php echo $_GET['enroll'];?><br>Roll: <?php echo $row1['roll'];?><br>Class: <?php echo $row1['semester'];?> <?php echo $row1['section'];?></h1> 
        </div>
        <div class="sidelower">
            <h1 class="side_text">Total Term Work: <?php echo $row2['work'];?> <br> Total Submitted: <?php echo $sub;?><br> Max Marks: <?php echo $row2['marks'];?><br> Total Marks: <?php echo $marks;?><br> </h1> 
        </div>
       
   
      
    

</body>
</body>
</html>