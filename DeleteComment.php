<?php /* Kitthanya Teachanontkullawat (64050027) Mine */
    /* receive data */
    $id = $_POST['id'];
    //echo $id;
    $remove = $_POST['remove'];
    //echo $remove;
    $lines = file("$id.txt");
    $last = sizeof($lines);
    //echo $lines[$last-1];
    $start = $remove * 4;
    //echo $start;
    $stop = ($remove * 4) + 3;
    // echo $lines[$start];
    // echo $lines[$stop];

    /* delete data */
    for ($i = $start; $i <= $stop; $i++) {
        unset($lines[$i]);
    }
    $newLines = array_values($lines);
    file_put_contents("$id.txt", implode('', $lines));

    header("Location: showkratui.php?id=" . urlencode($id));
    exit;
?>