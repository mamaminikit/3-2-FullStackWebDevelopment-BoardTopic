<!-- Kitthanya Teachanontkullawat (64050027) Mine -->
<hr><br><center><font size='4' color='EEEEEE'>T O P K R A T U I</font></center>
<?php
    $filename = "comment.txt";
    /* sort comment */
    $lines = file($filename, FILE_IGNORE_NEW_LINES);
    $lines = array_slice($lines, 1);
    $size = sizeof($lines);
    $sort = $lines;
    rsort($sort);

    /* show top */
    foreach ($sort as $sorted) {
        for ($i = 0; $i < $size; $i++) {
            $file = $i + 1;
            if ($sorted == $lines[$i] and file_exists("$file.txt")) {
                $top = file("$file.txt");
                echo "<div style='margin: 2%; padding: 1%; border: 3px solid #ccc; background-color: #f8f8f8; border-radius: 5px; font-size: 95%'>";
                    echo "<div style='text-align: right; color: #000000'> <strong>วันเวลา: </strong>" . $top[0] . "</div> <br>";
                    echo "<div style='text-align: center; font-size: 150%; font-weight: bold; color: #000000'>" . $top[1] . "</div>";
                    echo "<p style='text-indent: 5%; color: #000000'>" . $top[2] . "</p>";
                    echo "<p style='color: #000000'><strong>โพสต์โดย: </strong>" . $top[3] . "</p>";
                    echo "<form method='get' action='showkratui.php'>";
                        echo "<input type='hidden' name='id' value=" .$file. ">";
                        echo "<input type='submit' value='อ่านกระทู้'";
                            echo "style='padding: 5px 20px; background-color: #4CAF50; color: #FFFFFF; border: none; border-radius: 5px; margin-left: 90%; margin-top: -20%'>";
                    echo "</form>";
                echo "</div> <hr style='display: flex; align-items: center; width:70%; color: #000000'>";
            }
        }
    }
    
?>
<br><br>
</body>