<?php /* Kitthanya Teachanontkullawat (64050027) Mine */
    /* recive data */
    $id =  $data;
    $lines = file("$id.txt");
    $last = sizeof($lines);
    //echo $last;

    /* show comment new to old */
    for ($i = $last-1; $i >= 3; $i--) {
        if ($i%4 == 0) {
            //echo $i;
            $remove = $i / 4;
            //echo $remove;
            echo "<div style='margin: 2%; padding: 1%; border-radius: 5px; background-color: #f8f8f8; font-size:80%'>";
                echo "<strong> ความคิดเห็นที่ " .$lines[$i]. "</strong>";
                echo "<p style='text-indent: 5%;'>" .$lines[$i+1]. "</p>";
                echo "<strong>โพสต์โดย: </strong>" .$lines[$i+2]. "<strong style='margin-left: 5%;'>วันเวลา: </strong>" .$lines[$i+3];
                echo "<form method='post' action='Deletecomment.php'>";
                    echo "<input type='hidden' name='id' value=" .$id. ">";
                    echo "<input type='hidden' name='remove' value=" .$remove. ">";
                    echo "<input type='submit' value='ลบความคิดเห็น' ";
                        echo "style='padding: 5px 20px; background-color: #F45050; color: #FFFFFF; border: none; border-radius: 5px; margin-left: 88%; margin-top: -20%'>";
                echo "</form>";
            echo "</div>";
        }
    }
?>