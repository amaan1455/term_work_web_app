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
</head>
<body>
    <?php 
    echo $_GET['id'].$_GET['enroll'].$_GET['sub'];
    $sql = "select * from work where id='".$_GET['id']."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if($_GET['sub']==0){
        $submittedon="";
        
    }else{
        $sql = "select submitted from work_done where id='".$_GET['id']."' AND enroll='".$_GET['enroll']."'";
    $result = $conn->query($sql);
    $row2 = $result->fetch_assoc();
    $submittedon=$row2['submitted'];
    
    }
   
    ?>
    
<form method="post" action="update_marks_function.php">
    <table>
     
        <tr >
            <td>Title</td>
            <td><?php echo $row['title']; ?></td>
        </tr>
        <tr >
            <td>Given on</td>
            <td><?php echo $row['given']; ?></td>
        </tr>
      
        <tr >
            <td>Max Marks</td>
            <td><?php echo $row['max']; ?></td>
        </tr>
        <tr >
            <td>Update Marks</td>
            <td><input type="text" name="marks"></td>
        </tr>
         <tr >
            <td>Submitted on</td>
            <td><input type="text" name="submitted" value=<?php echo $submittedon; ?>></td>
        </tr>
        <tr >
            <td>Update</td>
            <td><input type="Submit" value="Submit"></td>
        </tr>
        

       
    </table>
    <input style="display: none;" type="text" name="sub" value=<?php echo $_GET['sub'];?> >
    <input style="display: none;" type="text" name="id" value=<?php echo $_GET['id'];?>>
    <input style="display: none;" type="text" name="enroll" value=<?php echo $_GET['enroll'];?>>
</form>
   

</body>
</html>