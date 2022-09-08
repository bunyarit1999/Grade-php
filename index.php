<?php
    require_once('grade.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
</head>
<body>

<div class="container"> <br>
<div class="card"> 
  <h5 class="card-header"> <i class="fa-solid fa-chart-pie"></i> เว็บไซต์ตัดเกรด</h5>
  <div class="card-body">

    <form action=" " method="POST">  

    <div class="form-group mb-3">
        <label for="practice_exam" class="form-label">สอบปฏิบัติ (30 คะแนน) </label>
        <input class="form-control" type="number" name="practice_exam" value="<?=$score1?>" placeholder="กรุณาใส่คะแนนสอบปฏิบัติไม่เกิน 30 คะแนน ..." required>
    </div>

    <div class="form-group mb-3">
        <label for="midterm_exam" class="form-label">สอบกลางภาค (30 คะแนน) </label>
        <input class="form-control" type="number" name="midterm_exam" value="<?=$score2?>" placeholder="กรุณาใส่คะแนนสอบกลางภาค 30 คะแนน ..." required>
    </div>

    <div class="form-group mb-3">
        <label for="final_exam" class="form-label">สอบปลายภาค (40 คะแนน) </label>
        <input class="form-control" type="number" name="final_exam" value="<?=$score3?>" placeholder="กรุณาใส่คะแนนสอบกลางภาค 40 คะแนน ..." required>
    </div> 

    <p style="color:red"> <?=$error?>  </p> 
        <span>คะแนนรวม : <?=$score?> </span> <br>
        <span>เกรด : <?=$grade?> </span> 

    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-success">คำนวณผลเกรด</button>
        <button class="btn btn-danger" name="Delect">ล้างข้อมูล</button>
    </div>

    </form>
    
  </div>

</body>
</html>