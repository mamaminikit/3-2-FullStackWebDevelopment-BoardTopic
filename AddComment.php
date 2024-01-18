<?php /* Kitthanya Teachanontkullawat (64050027) Mine */
    /* receive data */
    $count = $_POST['count'];
    $id = $_POST['id'];
    //echo $count;
    $filename = "comment.txt";
    $lines = file($filename);

    /* add data */
    $lines[$id] = $count;
    //echo $lines[$id];
    file_put_contents($filename, implode('', $lines));
    $fs = fopen("$id.txt", "a++");
    fputs($fs, $count. "\n");
    fputs($fs, "" .htmlspecialchars($_POST['cmessage']) ."\n");
    fputs($fs, "" .htmlspecialchars($_POST['cby']) . "\n" );
    fputs($fs, "" . date("Y-M-d") ."\n");
    fclose($fs);

    header("Location: showkratui.php?id=" . urlencode($id));
    exit;
?>