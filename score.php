<?php

// $scoreList = [100, 90, 60, 40, 50, 80];
$scoreList = Array(100, 90, 60, 40, 50, 80);

$viewModel = [];
foreach($scoreList as $score){
    $student = (object)["score" => $score, "style" => "pass"];

    if($score < 60){
        $student->style = "fail";
    }

    if($score == 100){
        $student->style = "well";
    }

    $viewModel[] = $student;
}

// $obj = (object)[ "firstName" => "Jimmy", "lastName" => "Lian" ];
// echo $obj->lastName;

?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .fail{
            color : red;
            font-weight : 200;
        }

        .pass{
            color : green;
        }

        .well{
            color : gold;
            font-weight : 900;
        }
    </style>
</head>
<body>
    <ul>

        <?php foreach($viewModel as $student) { ?>
            <li class="<?= $student->style ?>"><?= $student->score ?></li>
        <?php } ?>
    </ul>
</body>
</html>