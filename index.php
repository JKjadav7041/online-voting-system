<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online Voting Login Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #ff9933, #ffffff, #138808);
      text-align: center;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h1 {
      color: #000080;
      font-size: 2.2rem;
      font-weight: 600;
      margin-top: 20px;
    }

    form {
      background: #ffffff;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
      width: 100%;
      max-width: 450px;
      margin-top: 30px;
      transition: transform 0.3s ease-in-out, box-shadow 0.3s;
      display: flex;
      flex-direction: column;
      animation: fadeIn 1s ease-in-out;
    }

    form:hover {
      transform: scale(1.03);
      box-shadow: 0 12px 34px rgba(0, 0, 0, 0.5);
    }

    input, select {
      width: 100%;
      padding: 14px;
      margin: 10px 0;
      border: 2px solid #d1d1d1;
      border-radius: 10px;
      background-color: #f9f9f9;
      color: #333;
      font-size: 16px;
      transition: border-color 0.3s ease-in-out, box-shadow 0.3s;
    }

    input:focus, select:focus {
      border-color: #138808;
      outline: none;
      box-shadow: 0 0 10px rgba(19, 136, 8, 0.5);
    }

    button {
      background: linear-gradient(135deg, #ff9933, #138808);
      color: white;
      border: none;
      padding: 14px 24px;
      cursor: pointer;
      border-radius: 10px;
      font-size: 18px;
      font-weight: bold;
      width: 100%;
      transition: background 0.3s ease-in-out, transform 0.2s;
    }

    button:hover {
      background: linear-gradient(135deg, #138808, #ff9933);
      transform: scale(1.05);
    }

    a {
      color: #000080;
      text-decoration: none;
      font-weight: bold;
      display: inline-block;
      margin-top: 15px;
      transition: color 0.3s, transform 0.2s;
    }

    a:hover {
      color: #ff9933;
      text-decoration: underline;
      transform: scale(1.05);
    }

    /* Responsive Design */
    @media (max-width: 480px) {
      h1 {
        font-size: 1.6rem;
      }

      form {
        padding: 25px 20px;
        max-width: 90%;
        border-radius: 15px;
      }

      input, select, button {
        font-size: 15px;
        padding: 12px;
      }
    }
  </style>
</head>
<body>

  <h1>Online Voting Login Page</h1>

  <form action="login.php" method="POST">
    <h3 style="margin-bottom: 20px; color: #2c3e50;">Login</h3>

    <input type="number" name="voter_id" id="voter_id" placeholder="Enter your voter ID" required />
    
    <input type="password" name="password" id="password" placeholder="Enter your password" required />

    <select name="role" required>
      <option value="1">Voter</option>
      <option value="2">Group</option>
    </select>

    <button type="submit">Login</button>

    <p style="margin-top: 20px;">New User? <a href="./registration.php">Register now</a></p>
  </form>

</body>
</html>
