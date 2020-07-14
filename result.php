<?php

if(isset($_POST['q1']) && isset($_POST['q1']) && isset($_POST['q1']) && isset($_POST['q1'])){

    $marks_1 = $_POST['q1'];
    $marks_2 = $_POST['q2'];
    $marks_3 = $_POST['q3'];
    $marks_4 = $_POST['q4'];

    $overall_marks = $marks_1 + $marks_2 + $marks_3 + $marks_4;
    $status = 0;
    $msg = "";

    if($overall_marks < 5){
        $status = 0;
        $msg = "Low Risk";
    }else if($overall_marks >= 5 && $overall_marks < 10){
        $status = 1;
        $msg = "Medium Risk";
    }elseif($overall_marks >= 10 ){
        $status = 2;
        $msg = "High Risk";
    }



}else{
    header('location:index.php');exit;
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Bootstrap 5 Alpha css link -->
    <link rel="stylesheet" href="css/mdb.min.css">
</head>
<body>

    <div style="width:90%;max-width:700px;margin: 30px auto;">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <h4 class="text-secondary font-weight-bold">Corona Virus Disease 2019 (COVID-19) Online Test</h4>
                    <h6 class="font-weight-bold">severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2)</h6>
                    <br>
                    <div class="alert alert-info text-left">
                        <b>!Important</b>
                        <br>
                        <p>This Test can't Identify you are positive or not. This test only to check your Health Risk level. This is not a real test. May be result is wrong.</p>
                    </div>
                    <br>
                    <h4 class="text-warning font-weight-bold">Result</h4>
                </div>
                <br>

                <div class="alert p-5 <?php if($status == 0): echo "alert-success"; elseif($status == 1): echo "alert-warning"; elseif($status == 2): echo "alert-danger"; endif; ?>">
                    Your Are in <b><?= $msg ?>.</b>
                    
                </div>
                <a href="index.php" class="btn btn-warning px-3">Back</a>
                <br><br>
               <b> Tested On <?= date('Y-M-d (l)')?></b>
               <br>
                <span style="font-size:12px; display:block;">&#x1F4A0; This is only for educational purpose. Do not Trust this report. It's may be wrong. </span>
                <span style="font-size:12px; display:block;">&copy;Copyright 2020 - Amit's Projects</span>
               <br>
            </div>
        </div>
    </div>


</body>
</html>