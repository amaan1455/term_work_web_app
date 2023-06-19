<html>
<head>
    <title>Term Work</title>
    <style>
        .class_button{
            
            width: 100%;
            height: 30%;
           margin: 0px;
            background: #7DCE13;
            cursor:pointer;
        }
       
        .side_text{
            font-family: 'Ubuntu';
            font-style: normal;
            font-weight: 400;
            font-size: 3vw;
            color: #FFFFFF;
            
            text-align: center;
        }
         a{
            text-decoration: none;
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
   $sql="select branch,semester,section,class from class";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
            echo "<a href='class.php?class=".$row['class']."' target='_top'><div class='class_button'>
                <h1 class='side_text' style='padding-top:45px ;'>Class ".$row['semester']." ".$row['section']." ".$row['branch']." <br> Click to open</h1> 
            </div></a>";
        }

    }else{
        echo "<div class='class_button'>
            <h1 class='side_text' style='padding-top:45px ;'>Please add new class</h1> 
        </div>";
    }
  ?>
   

</body>
</html>