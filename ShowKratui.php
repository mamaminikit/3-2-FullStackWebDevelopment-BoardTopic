<!-- Kitthanya Teachanontkullawat (64050027) Mine -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRATUI</title>
</head>
<body bgcolor="#041562" text="#000000">
    <!-- handle file -->
    <?php
        $id = $_GET['id'];
        if (!(file_exists("$id.txt"))) { /* go to delete page */
            header("Location: Delete.html");
            exit;
        } 
        $lines = file("$id.txt");
        $linescom = file("comment.txt");
        $counter = $linescom[$id];
    ?>

    <!-- show topic -->
    <div style='margin: 2%; padding: 1%; border: 3px solid #ccc; background-color: #f8f8f8; border-radius: 5px; font-size: 95%'> 
        <div style='text-align: right;'> <strong>วันเวลา: </strong> <?php echo $lines[0]?> </div> <br>
        <div style='text-align: center; font-size: 150%; font-weight: bold'> <?php echo $lines[1] ?> </div>
        <p style='text-indent: 5%;'> <?php echo $lines[2] ?></p>
        <p><strong>โพสต์โดย: </strong> <?php echo $lines[3] ?></p>
        <form method='post' action='DeleteKratui.php'>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="ลบโพสต์"
                onmouseover="this.style.backgroundColor='#FC3C3C'" 
                onmouseout="this.style.backgroundColor='#F45050'" 
                style='padding: 5px 20px; background-color: #F45050; color: #FFFFFF; border: none; border-radius: 5px; margin-left: 90%; margin-top: -20%'>
        </form>
    </div> <hr>
    <br><center><font size='3' color='EEEEEE'>C O M M E N T S</font></center>
    
    <!-- show comment -->
    <?php 
        if ($counter != 0) {
            $data = $id;
            include 'ShowComment.php';
        }
    ?>

    <!-- add comment -->
    <div style='margin: 2%; padding: 1%; border: 2px solid #FFE194; background-color: #f8f8f8; font-size: 95%'>
    <form method='post' action='AddComment.php'>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="count" value="<?php echo $counter+1; ?>">
        ชื่อ: <input type="text" size = 30 name="cby"><br><br>
        ข้อความ: <input type="text" size = 70 name="cmessage"><br><br>
        <input type="submit" value="ส่ง"
            onmouseover="this.style.backgroundColor='#45a049'" 
            onmouseout="this.style.backgroundColor='#4CAF50'" 
            style="padding: 5px 20px; background-color: #4CAF50; color: #FFFFFF; border: none; border-radius: 5px; margin-right: 10px;">
        <input type="reset" value="ยกเลิก"
            onmouseover="this.style.backgroundColor='#FC3C3C'" 
            onmouseout="this.style.backgroundColor='#F45050'" 
            style="padding: 5px 20px; background-color: #F45050; color: #FFFFFF; border: none; border-radius: 5px; margin-right: 10px;">
    </form>
    </div><hr style='display: flex; align-items: center; width:70%'>
    <form method='get' action='index.php'>
    <center> <input type='submit' value='กลับหน้าหลัก'
            style='padding: 10px 20px; background-color: #4CAF50; color: #FFFFFF; border: none; border-radius: 5px; margin: 2%'>
    </center>
    </form>
</body>
</html>