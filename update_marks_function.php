<html>
    <head>
        <style>
              .add_class_button{
            position:absolute;
            width: 50%;
            height: auto;
            
            
            background: #7DCE13;
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

 if($_POST['sub']==0){
    
     $sql ="insert into work_done values(".$_POST['id'].",'".$_POST['enroll']."','".$_POST['submitted']."',".$_POST['marks'].")";
     $conn->query($sql);
 }else{
    
    $sql ="update work_done set marks =".$_POST['marks']." where id='".$_POST['id']."' AND enroll='".$_POST['enroll']."'";
    $conn->query($sql);
 }

 $sql ="select class from student where enroll='".$_POST['enroll']."'";
    $result =  $conn->query($sql);
    $row = $result->fetch_assoc();

 
 

?>
    </head>


<body>
    
<a href="work_table.php?enroll=<?php echo $_POST['enroll']."&class=".$row['class']; ?>"><div class="add_class_button">
            <h1 class="side_text">Click to go back ></h1> 
        </div></a>
        </body>
        </html>