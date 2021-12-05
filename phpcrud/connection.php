<!--    Aquino, Bea Nichole T.
    Dizon, Maycee G.
    Quizon, Megan Rae L. 
    CS401       6ASI        September 9, 2021 -->

    
<!-- Testing Connection -->

<?php
 $db = mysqli_connect('localhost', 'root', '') or
        die ('[ UNABLE TO CONNECT: Please check your connection parameters. ]');
        mysqli_select_db($db, 'peopledb' ) or die(mysqli_error($db));
?>

<!-- Display if no connection -->