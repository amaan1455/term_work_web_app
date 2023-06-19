<html>
<head>
    <title>Term Work</title>
    </style>
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
            height: 15%;
            top:0px;
            background: #0096FF;
        }
        .sidelower{
            position:absolute;
            width: 100%;
            height: 55%;
            top:15%;
            background: #0b75c0;
        }

     
        .add_student_button{
            position:absolute;
            width: 100%;
            height: 15%;
            top: 70%;
            background: #5d9c0a;
            cursor:pointer;
        }
        .side_text{
            position: relative;
            left: 5%;
            top: 5%;
            font-family: 'Ubuntu';
            font-style: normal;
            font-weight: 400;
            font-size: 6vw;
            line-height: 35px;
            color: #FFFFFF;
        }
        .add_work_button{
            position:absolute;
            width: 100%;
            height: 15%;
            top: 85%;
            background: #51830f;
            cursor:pointer;
        }

    </style>
</head>
<body>
   <?php 
   $sql="select * from class where class='".$_GET['class']."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
   ?>
        <div class="sideupper">
            <h1 class="side_text">Class : <?php echo $row['semester']." ".$row['section']; ?> </h1> 
        </div>
        <div class="sidelower">
            <h1 class="side_text">Branch: <?php echo $row['branch'];?><br>Year: <?php echo $row['year'];?><br>Semester: <?php echo $row['semester'];?><br>Section: <?php echo $row['section'];?><br>Total Student: <?php echo $row['students'];?><br>Total Work: <?php echo $row['work'];?></h1> 
        </div>
       
   
          <a href="add_student.html" target="_top">
        <div class="add_student_button">
            <h1 class="side_text">Click to add new Student ></h1> 
        </div></a>
        <a href="add_work.html" target="_top">
        <div class="add_work_button">
            <h1 class="side_text">Click to add term work ></h1> 
        </div></a>
    

</body>
</body>
</html>