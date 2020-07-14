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

    <div style="width:90%;max-width:730px;margin: 30px auto;">
        <div class="card">
            <div class="card-body">
                <form action="result.php" method="post">
                    <div class="text-center">
                        <h3 class="text-secondary font-weight-bold">Corona Virus Disease 2019 (COVID-19) Online Test</h3>
                        <h6 class="font-weight-bold">severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2)</h6>
                        
                    </div>
                    <br>
                    <div class="alert alert-info">
                        <b>!Important</b>
                        <br>
                        <p>This Test can't Identify you are positive or not. This test only to check your Health Risk level. This is not a real test. May be result is wrong.</p>
                    </div>
                    <br>
                    <!-- questions set -->
                    <ul>
                        <li class="my-4 card p-3">
                            <p><b>1. Are You experiencing any of the following symptoms?</b></p>
                            <ul style="list-style: none !important;">
                                <li class="my-2"><input value="1" name="q1" type="radio" required> Caugh </li>
                                <li class="my-2"><input value="5" name="q1" type="radio" required> Fever </li>
                                <li class="my-2"><input value="5" name="q1" type="radio" required> Difficulty in Breathing </li>
                                <li class="my-2"><input value="1" name="q1" type="radio" required> Loss of senses of smell and taste </li>
                                <li class="my-2"><input value="0" name="q1" type="radio" required> None of the Above</li>
                            </ul>
                        </li>
                        <li class="my-4 card p-3">
                            <p><b>2. Have You ever had any of the following:</b></p>
                            <ul style="list-style: none !important;">
                                <li class="my-2"><input value="5" name="q2" type="radio" required> Diabetes </li>
                                <li class="my-2"><input value="5" name="q2" type="radio" required> Hypertension </li>
                                <li class="my-2"><input value="10" name="q2" type="radio" required> Lung Disease </li>
                                <li class="my-2"><input value="10" name="q2" type="radio" required> Heart Disease</li>
                                <li class="my-2"><input value="5" name="q2" type="radio" required> Kidney Disorder</li>
                                <li class="my-2"><input value="0" name="q2" type="radio" required> None of the Above</li>
                            </ul>
                        </li>
                        <li class="my-4 card p-3">
                            <p><b>3. Have You Traveled anyware <i>Internationally</i> in the last 28 to 45 days?:</b></p>
                            <ul style="list-style: none !important;">
                                <li class="my-2"><input value="5" name="q3" type="radio" required> Yes </li>
                                <li class="my-2"><input value="0" name="q3" type="radio" required> No</li>
                            </ul>
                        </li>
                        <li class="my-4 card p-3">
                            <p><b>4. Which of the following apply to you?</b></p>
                            <ul style="list-style: none !important;">
                                <li class="my-2"><input value="10" name="q4" type="radio" required> I have recently interacted with someone who has tested positive for COVID -19 </li>
                                <li class="my-2"><input value="10" name="q4" type="radio" required> I had Lived with someone who has tested positive for COVID -19 </li>
                                <li class="my-2"><input value="0" name="q4" type="radio" required> None of the Above</li>
                            </ul>
                        </li>
                    </ul>
                    <!-- ./questions set -->
                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-secondary px-5">Submit</button>
                    </div>
                    <br>
                    <span style="font-size:12px; display:block;">&#x1F4A0; This is only for educational purpose. Do not Trust this report. It's may be wrong. </span>
                    <span style="font-size:12px; display:block;">&copy;Copyright 2020 - Amit's Projects</span>
                    <br>
                </form>
            </div>
        </div>
    </div>


</body>
</html>