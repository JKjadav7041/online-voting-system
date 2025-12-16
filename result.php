<?php
// db connection
$conn = new mysqli("localhost", "root", "", "voting"); // change "voting_db" to your DB name

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user" . " WHERE role='2'"; // Assuming role '2' is for users
// You can change this to your specific role if needed
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>result Dashboard - All Groupe</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #ff9933, #ffffff, #138808);
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        .status-voted {
            color: green;
            font-weight: bold;
        }

        .status-not-voted {
            color: red;
            font-weight: bold;
        }
        .back{
            cursor: pointer;
            position: absolute;
            margin-top: 10px;
            margin-right: 1150px;
        }
        .back button{
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
        .back button:hover {
            background: linear-gradient(135deg, #138808, #ff9933);
            transform: scale(1.05);
        }
        .result{
            position: absolute;
            margin-top: 10px;
            margin-left: 1150px;
        }
        .result button{
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
        .result button:hover {
            background: linear-gradient(135deg, #138808, #ff9933);
            transform: scale(1.05);
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }


    </style>
</head>
<body>

    <h1>result Panel - groupe List</h1>

    <table>
        <tr>
            <th>Photo</th>
            <th>Name</th>
            <th>Votes </th>
        </tr>
        <div class="back">
        <a href="second_page.php">
            <button>Back</button>
        </a>
        </div>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $photo = !empty($row['photo']) ? $row['photo'] : 'default.png';
                echo "<tr>
                    <td><img src='images/{$photo}' onerror=\"this.src='images/default.png';\"></td>
                    <td>{$row['name']}</td>
                    <td>{$row['votes']}</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No users found</td></tr>";
        }
        $conn->close();
        ?>
    </table>

</body>
</html>
