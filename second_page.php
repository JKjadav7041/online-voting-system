<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Online Voting System - Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      background: linear-gradient(to bottom, orange, white, green);
      display: flex;
      align-items: center;
      justify-content: center;
      overflow-x: hidden;
    }

    .main-box {
      background-color: white;
      padding: 50px 60px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      text-align: center;
      width: 100%;
      max-width: 800px;
      animation: fadeSlideIn 0.8s ease;
    }

    h1 {
      margin-bottom: 25px;
      color: #2c3e50;
      font-size: 2rem;
      font-weight: 600;
      letter-spacing: 1px;
    }

    .btn {
      display: block;
      width: 100%;
      padding: 15px;
      margin: 15px 0;
      font-size: 18px;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .btn-admin {
      background-color: #007bff;
      color: white;
    }

    .btn-admin:hover {
      background-color: #0056b3;
    }

    .btn-vote {
      background-color: #28a745;
      color: white;
    }

    .btn-vote:hover {
      background-color: #1e7e34;
    }

    /* Fade-in animation */
    @keyframes fadeSlideIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Tablet Responsive */
    @media (max-width: 768px) {
      .main-box {
        padding: 40px 30px;
        max-width: 90%;
      }

      h1 {
        font-size: 1.8rem;
      }

      .btn {
        font-size: 16px;
        padding: 12px;
      }
    }

    /* Mobile Responsive */
    @media (max-width: 480px) {
      body {
        padding: 10px;
      }

      .main-box {
        padding: 25px 15px;
        border-radius: 15px;
      }

      h1 {
        font-size: 1.5rem;
        margin-bottom: 20px;
      }

      .btn {
        font-size: 15px;
        padding: 10px;
      }
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

  <div class="main-box">
    <h1>Online Voting System</h1>
    <a href="admin_login.php">
      <button class="btn btn-admin">Admin Side</button>
    </a>
    <a href="result.php">
      <button class="btn btn-vote">Show Results</button>
    </a>
    <a href="index.php">
      <button class="btn btn-vote">Vote Now</button>
    </a>
  </div>

</body>
</html>
