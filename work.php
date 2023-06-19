<html>
<head>
    <title>Term Work</title>
    <link rel="stylesheet" href="style.css">
</head>
<frameset frameborder="0" rows="20% , 80%">
    <frame src="header.html">
  
    <frameset frameborder="0" cols="70%,30%">
        <frame  src="work_table.php?enroll=<?php echo $_GET['enroll']."&class=".$_GET['class']; ?>">
        <frame src="sidebar_work.php?enroll=<?php echo $_GET['enroll']."&class=".$_GET['class']; ?>">
    </frameset>
</frameset>
  
</body>
</html>