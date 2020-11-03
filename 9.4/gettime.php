<?php
include('message.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $value = $_POST['time-selection'];
    $message = getMessage($value);
}

?>
<html>
    <body>
        <h1>What time of day is it?</h1>
        
        <form name="theForm" action="" method="post">
            <select name="time-selection">
                <option value="0">Morning</option>
                <option value="1">Afternoon</option>
                <option value="2">Evening</option>
            </select>
            <input type="submit" value="Submit" />
        </form>
        <p><?=$message; ?></p>
    </body>
</html>