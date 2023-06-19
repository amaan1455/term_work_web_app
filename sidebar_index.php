<html>
<head>
    <title>Term Work</title>
    <style>
        body{
            margin: 0px;
            background-color: #7046c1;
        }
        .sideupper{
            position:absolute;
            width: 100%;
            height: 40%;
            top:0px;
            background: #0096FF;
        }

        .add_class_button{
            position:absolute;
            width: 100%;
            height: 20%;
            top: 40%;
            background: #7DCE13;
            cursor:pointer;
        }
        .add_student_button{
            position:absolute;
            width: 100%;
            height: 20%;
            top: 60%;
            background: #5d9c0a;
            cursor:pointer;
        }
        .add_work_button{
            position:absolute;
            width: 100%;
            height: 20%;
            top: 80%;
            background: #51830f;
            cursor:pointer;
        }
        .side_text{
            position: relative;
            left: 5%;
            top: 15%;
            font-family: 'Ubuntu';
            font-style: normal;
            font-weight: 400;
            font-size: 6vw;
            line-height: 41px;
            color: #FFFFFF;
        }

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
</head>
<body>
     <?php 
   $sql="select students from class";
    $result = $conn->query($sql);
    $sum =0;
    $class = $result->num_rows;
    if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
            $sum = $sum + $row['students'];
        }

    }else{
       $sum =0;
    }
  ?>
        <div class="sideupper">
            <h1 class="side_text">Total Student: <?php echo $sum; ?> <br> Total Class: <?php echo $class; ?></h1> 
        </div>
       <a href="add_class.html" target="_top">
        <div class="add_class_button">
            <h1 class="side_text">Click to add new class ></h1> 
        </div></a>
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