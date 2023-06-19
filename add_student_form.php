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
        table{
            width:100%;
            font-family: 'Ubuntu';
            font-style: normal;
            font-weight: 400;
            font-size: 3vw;
            color:white;
            background-color: rgb(43, 117, 117);
            text-align: center;
            border: 0px;
            padding: 0px;
            
        }
        .head{
            background-color:rgb(26, 71, 71) ;
            border: 0px;
            padding: 0px;
        }
        .view_button{
            
            background: #5d9c0a;
            cursor:pointer;
        }
        .side_text{
           
            font-family: 'Ubuntu';
            font-style: normal;
            font-weight: 400;
            font-size: 2vw;
            padding: 5px;
            color: #FFFFFF;
        }
        input{
            width:100%;
            height: 100%;
            font-family: 'Ubuntu';
            font-style: normal;
            font-weight: 400;
            font-size: 2vw;
            padding: 5px;
            color: rgb(33, 32, 32)
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
     if(isset($_POST['submit'])){
        
     $sql = "insert into student values('".$_POST['enroll']."',".$_POST['roll'].",'".$_POST['name']."',".$_POST['year'].",".$_POST['semester'].",'".$_POST['branch']."','".$_POST['section']."','".$_POST['branch'].$_POST['semester'].$_POST['section']."')";
     $conn->query($sql);
     $sql = "select students from class where class='".$_POST['branch'].$_POST['semester'].$_POST['section']."'";
     $result = $conn->query($sql);
     $row = $result->fetch_assoc();
     $students = $row['students'];
     $students++;
     $sql = "update class set students=".$students." where class='".$_POST['branch'].$_POST['semester'].$_POST['section']."'";
     $conn->query($sql);
     echo "<a href='https://termwork.000webhostapp.com' target='_top'>Go Back</a>";
     }
     
     
     ?>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table>
     
        <tr >
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr >
            <td>Year</td>
            <td><input type="text" name="year"></td>
        </tr>
        <tr >
            <td>Semester</td>
            <td><input type="text" name="semester"></td>
        </tr>
        <tr >
            <td>Branch</td>
            <td><input type="text" name="branch"></td>
        </tr>
        <tr >
            <td>Section</td>
            <td><input type="text" name="section"></td>
        </tr>
        <tr >
            <td>Roll</td>
            <td><input type="text" name="roll"></td>
        </tr>
        <tr >
            <td>Enrollment</td>
            <td><input type="text" name="enroll"></td>
        </tr>
       
        <tr >
            <td></td>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
        

       
    </table>
    
</form>
   

</body>
</html>