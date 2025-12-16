<html>
    <head>
        <title> online voting System-registrasion</title>
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
    height: 100vh;
    animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

h1 {
    color: #000080;
    font-size: 34px;
    font-weight: bold;
    text-transform: uppercase;
    position: absolute;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    text-align: center;
}

form {
    background: #ffffff;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
    width: 400px;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 80px;
}

form:hover {
    transform: scale(1.05);
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.5);
}

.input-group {
    display: flex;
    gap: 10px;
    width: 100%;
}

.input-group input {
    width: 50%;
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
    margin-top: 18px;
    transition: color 0.3s, transform 0.2s;
}

a:hover {
    color: #ff9933;
    text-decoration: underline;
    transform: scale(1.05);
}

/* Responsive Design */
@media (max-width: 450px) {
    form {
        width: 90%;
    }
    h1 {
        font-size: 28px;
        top: 10px;
    }
    .input-group {
        flex-direction: column;
    }
    .input-group input {
        width: 100%;
    }
    .input-group {
    display: flex;
    gap: 10px;
    width: 100%;
}

.input-group input {
    width: 50%;
}
.sub-heading {
    margin-top: 50px; /* Adjusts the spacing below the main heading */
    text-align: center;
}

h3 {
    font-size: 24px;
    font-weight: bold;
    color: #000080;
    text-transform: uppercase;
    margin-bottom: 10px;
}
    

}   </style>

    </head>
<body>
    <h1>Online Voting System</h1>
    <div class="sub-heading">
     <h3>Registration</h3>
    </div>
    <form action="register.php" method="POST" enctype="multipart/form-data">
        <div class="input-group">
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="number" name="voter_id" placeholder="Enter your voter ID" required>
        </div>
        <div class="input-group">
            <input type="password" name="password" placeholder="Enter your password" required>
            <input type="password" name="cpassword" placeholder="Confirm your password" required>
        </div>
        <input type="text" name="address" placeholder="Enter your address" required>
        <label>Upload Image:</label>
        <input type="file" name="photo" required>
        <label>Select Role:</label>
        <select name="role" required>
            <option value="1">Voter</option>
            <option value="2">Group</option>
        </select>
        <button type="submit">Register</button>
        <br><br>
        Already a user? <a href="./index.php">Login here</a>
    </form>
</body>

</html>
