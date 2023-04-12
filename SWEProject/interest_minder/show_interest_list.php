<?php include("../path.php") ?>
<?php require ("../login.php") ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/design.css" />
    <link rel="stylesheet" href="../CSS/jobs.css" />
    <script defer src="../JS/show_interest.js"></script>
    <title>View details</title>
</head>

<body>
<script>
    function confirmA(user, job) {
        if(confirm("Confirm choose Minder "+user+" for job"+job+"? ")){
            // transfer confirmation here
            alert("Confirmed.");
            window.close();
        }
    }
</script>
<div class="container content cont">
    <div class="intro">
        <h1 class="title">Interest Minder List</h1>
        <h2 class="subtitle">Everything you need to know about this pet sitting job</h2>
    </div>
    <?php
        $minders_list = json_decode(file_get_contents(ROOT . "../Data/interested_minders.json"), true);
        $user_list = json_decode(file_get_contents(ROOT."../Data/users.json"), true);
        // Add the new message to the messages array
        for($i=0;$i<count($minders_list);$i++) {
            $message=$minders_list[$i];
            $name="";
            for($ii=0;$ii<count($user_list);$ii++){
                $user = $user_list[$ii];
                if(strcmp($message['user_id'],$user['id'])) {
                    $name=$user['username'];
                }
            }
            if(!strcmp($message['job_id'], $_GET['id'])){
                echo "<div class='job-details-container' onclick='confirmA(".$message['user_id'].", ".$message['job_id'].")'>".'<h2 class="job-title">' . $name . '</h2>'."<p>".$message['content']."</p>"."</div><br>";
            }
        }
    ?>


</div>

<?php include ROOT . "../PHP Scripts/footer.php" ?>
</body>

</html>