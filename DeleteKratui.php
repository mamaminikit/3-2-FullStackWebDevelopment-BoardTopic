<?php /* Kitthanya Teachanontkullawat (64050027) Mine */
    /* receive data */
    echo "delete";
    $id = $_POST['id'];
    //echo $id;
    $filename = "$id.txt";
    //echo $filename;

    /* delete file */
    unlink($filename);

    header("Location: Delete.html");
    exit;
?>