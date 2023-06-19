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
         a{
            text-decoration: none;
        }
     
     

    </style>
</head>
<body>
<?php echo $_GET['class'];?>
<?php 

echo " <table>
        <tr class='head'>
            <th>Roll</th>
            <th>Name</th>
            <th>Details</th>
        </tr>";
        
        $sql = "select roll,name,enroll from student where class='".$_GET['class']."'";
        $result = $conn->query($sql);
        while($row=$result->fetch_assoc()){
            echo " <tr>
            <td>".$row['roll']."</td>
            <td>".$row['name']."</td>
            <td><a href='work.php?enroll=".$row['enroll']."&class=".$_GET['class']."' target='_top'><div class='view_button'>
                <h1 class='side_text'>View</h1> 
            </div></a>
            </td>
        </tr>";
        }

?>
   
       
  
    </table>
   

</body>
</html>