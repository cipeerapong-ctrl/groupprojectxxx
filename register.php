<?php 
      session_start();
      include('server.php'); 
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #5c5c5cff, #000000ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: rgba(255,255,255,0.95);
            padding: 40px;
            border-radius: 20px;
            width: 350px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            animation: fadeIn 1s ease-in-out;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .input-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #555;
        }
        input {
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.3s;
        }
        input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 8px rgba(59,130,246,0.5);
        }
        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            background: #000000ff;
            color: white;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn:hover {
            background: #2b2b2bff;
            transform: scale(1.05);
        }
        .error {
            background: #fee2e2;
            color: #b91c1c;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 10px;
            animation: shake 0.3s;
        }
        p {
            text-align: center;
            margin-top: 15px;
        }
        a {
            color: #9333ea;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes shake {
            0% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            50% { transform: translateX(5px); }
            75% { transform: translateX(-5px); }
            100% { transform: translateX(0); }
        }
    </style>
</head>
<body>
   <div class="container">
      <h2>สมัครสมาชิก</h2>
      <form action="register_db.php" method="post">
          <?php include('errors.php'); ?>

          <?php if (isset($_SESSION['error'])) : ?>
              <div class="error">
                  <?php
                      echo $_SESSION['error'];
                      unset($_SESSION['error']);                
                  ?>
              </div>
          <?php endif ?>

          <div class="input-group">
              <label for="username">ชื่อผู้ใช้</label>
              <input type="text" name="username" required>
          </div>
          <div class="input-group">
              <label for="email">อีเมล</label>
              <input type="email" name="email" required>
          </div>
          <div class="input-group">
              <label for="password_1">รหัสผ่าน</label>
              <input type="password" name="password_1" required>
          </div>
          <div class="input-group">
              <label for="password_2">ยืนยันรหัสผ่าน</label>
              <input type="password" name="password_2" required>
          </div>
          <div class="input-group">
              <button type="submit" name="reg_user" class="btn">สมัครสมาชิก</button>
          </div>
          <p>เป็นสมาชิกแล้ว? <a href="login.php">เข้าสู่ระบบ</a></p>
      </form>
   </div>
</body>
</html>
