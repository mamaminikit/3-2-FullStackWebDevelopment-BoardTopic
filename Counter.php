<?php  /* Kitthanya Teachanontkullawat (64050027) Mine */
    /* count the number of topic */
    $filename="CounterTopic.txt";
    if (file_exists($filename)) {
        $fp = fopen($filename, "r");
        $counter = fgets($fp, 99);
        fclose($fp);
    } else {
        $fc = fopen("comment.txt", "a");
        fputs($fc, "comment");
        fclose($fc);
        $counter = 0;
    }
    $fp = fopen($filename, "w");
    $counter += 1;
    fwrite($fp, $counter);
    fclose($fp);

    /* create topic file */
    $fs = fopen("$counter.txt", "a");
    fputs($fs, "".date("Y-M-d"). "\n");
    fputs($fs, "".htmlspecialchars($_POST['topic']). "\n");
    fputs($fs, "".htmlspecialchars($_POST['message']). "\n");
    fputs($fs, "".htmlspecialchars($_POST['by']). "\n");
    fclose($fs);

    /* create count comment */
    $fc = fopen("comment.txt", "a");
    fputs($fc, "\n0");
    fclose($fc);

    header("Location: showkratui.php?id=" . urlencode($counter));
    exit;
?>