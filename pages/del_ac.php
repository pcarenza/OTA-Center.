<?php

$id = $_GET['id'];

$stmt = $db->stmt_init();
$stmt->prepare('SELECT `id`, `userid` FROM `roms` WHERE `id` = ?');
$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($romid, $userid);
$stmt->fetch();
$stmt->close();

if (isset($_SESSION['user_id'])) {
    // update data in mysql database
    if (isset($romid)) {
        if ($userid == $_SESSION['user_id'] || $_SESSION['user_status'] == 1) {
            $stmt = $db->stmt_init();
            $stmt->prepare('DELETE FROM `roms` WHERE `id` = ?');
            $stmt->bind_param('i', $id);

            // if successfully updated.
            if ($stmt->execute()) {
                echo 'Deleted Successfully';
                echo '<br />';
                echo '<a href="?page=list-roms">View result</a>';
            } else {
                echo 'ERROR';
            }
            $stmt->close();
        } else {
            //echo "You have no permission to delete roms added by anyone else";
            header("Location: ?page=list-roms");
            exit();
        }
    } else {
        //echo "This rom does not exist.";
        header("Location: ?page=list-roms");
        exit();
    }
} else {
    //echo "You are not logged in...";
    header("Location: ?page=denied");
    exit();
}
?>
