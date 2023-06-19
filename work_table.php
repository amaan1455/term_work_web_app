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

    <table>
        <tr class="head">
            <th>Sr</th>
            <th>Title</th>
            <th>Given</th>
            <th>Submitted</th>
            <th>Max Marks</th>
            <th>Marks</th>
            <th>Update</th>
        </tr>
        <?php 
   $sql="select * from work where class='".$_GET['class']."'";
    $result = $conn->query($sql);
    $sr=0;
  
        while($row=$result->fetch_assoc()){
            $sr++;
            $sql="select * from work_done where enroll='".$_GET['enroll']."' AND id='".$row['id']."'";
            $result2 = $conn->query($sql);
            if($result2->num_rows>0){
                $row2=$result2->fetch_assoc();
                $submitted = $row2['submitted'];
                $marks = $row2['marks'];
                $sub=1;
                
            }else{
                 $submitted = "-";
                $marks = "-";
                $sub=0;
            }
                
            
            
            echo "<tr >
            <td>".$sr."</td>
            <td>".$row['title']."</td>
            <td>".$row['given']."</td>
            <td>".$submitted."</td>
            <td>".$row['max']."</td>
            <td>".$marks."</td>
            <td><a href='update_marks.php?enroll=".$_GET['enroll']."&id=".$row['id']."&sub=".$sub."'><div class='view_button'>
                <h1 class='side_text'>Update</h1> 
            </div>
        </td>
        </tr>";
        }

   
  ?>
        
       
    </table>
   

</body>
</html>