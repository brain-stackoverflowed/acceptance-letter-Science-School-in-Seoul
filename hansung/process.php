<?php
    $boo = rand(1, 9);
    $na = $_POST['txtStuKorName'];
    $no = $_POST['txtSuhumNo'];
    if ($boo <= 2 or $no == 3306 or $no == 3329){ 
        echo '<form method="post" name="choice" action="pass.php">';
    } else {
        echo '<form method="post" name="choice" action="fail.php">';
    }
    echo '<input type="hidden" name="txtStuKorName" value="'.$na.'">';
    echo '<input type="hidden" name="txtSuhumNo" value="'.$no.'">';
    echo '</form>'
?>

<script>document.choice.submit();</script>