<!-- Kitthanya Teachanontkullawat (64050027) Mine -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRATUI</title>
    <!-- style with css -->
    <style> 
        input[type="reset"] {
            padding: 10px 20px;
            background-color: #F45050;
            color: #FFFFFF;
            border: none;
            border-radius: 5px;
            margin-right: 10px;
        }
        input[type="reset"]:hover {
            background-color: #FC3C3C;
        }
    </style>
</head>
<body bgcolor="#041562" text="EEEEEE">
    <center><font size="5">K R A T U I</font></center><br>
    
    <form method="post" action="Counter.php">
        <center>
            <textarea name="topic" placeholder=" หัวข้อกระทู้:" style="width: 50%; height: 50px"></textarea><br><br>
            <textarea name="message" placeholder=" เนื้อหา:" style="width: 80%; height: 150px"></textarea><br><br>
            โพสต์โดย: <input type="text" name="by"><br><br>
        <!-- style inline -->
            <input type="submit" value="โพสต์" 
                onmouseover="this.style.backgroundColor='#45a049'" 
                onmouseout="this.style.backgroundColor='#4CAF50'" 
                style="padding: 10px 20px; background-color: #4CAF50; color: #FFFFFF; border: none; border-radius: 5px; margin: 10px;">
            <input type="reset" value="ยกเลิก">
        </center>
    </form>
</body>
<?php 
    if (file_exists("CounterTopic.txt"))
        include 'TopTopic.php';
?>
</html>