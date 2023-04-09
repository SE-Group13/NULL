<?php
session_start();




$data =  json_decode( file_get_contents('.\..\Data\jobs.json', true));
$count = count($data);
$data[] = $_SESSION['data'];


file_put_contents('.\..\Data\jobs.json', json_encode($data))
?>




<html> 
    <body>
        <?php echo $data["id"]?>
        <img src="<?php echo $newImageAddress ?>" alt="pet image">
    </body>
</html>