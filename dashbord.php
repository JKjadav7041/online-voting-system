<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(to bottom, orange, white, green);
}

#mainSection {
    width: 80%;
    margin: auto;
    background: white;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border: none;
}

#headerSection {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: transparent;
    color: black;
    padding: 10px 20px;
    position: relative;
    border-bottom: none;
}

#headerSection h1 {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    margin: 0;
}

.backButton {
    position: absolute;
    left: 10px;
}

.logoutButton {
    position: absolute;
    right: 10px;
}

.backButton button, .logoutButton button {
    background: linear-gradient(to bottom, orange, white, green);
    color: black;
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.4s ease-in-out;
    border-radius: 8px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
}

.backButton button:hover, .logoutButton button:hover {
    background: linear-gradient(to bottom, white, orange, green);
    color: white;
    transform: scale(1.2);
    box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.4);
}

#Profile {
    width: 30%;
    float: left;
    background: white;
    padding: 20px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
    border-radius: 10px;
    text-align: center;
    margin-right: 5%; /* Profile और Group के बीच Space */
}
#Profile:hover {
    transform: scale(1.05);
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

#Profile img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    display: block;
    margin: 0 auto 10px;
}

#Group {
    flex: 2;
    background: white;
    padding: 10px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
    border-radius: 10px;
    max-height: 800px;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    gap: 20px;
    width: 60%;
}



#Group div {
    width: 90%;
    border: 1px solid #ddd;
    padding: 15px;
    margin-bottom: 15px;
    display: flex;
    flex-direction: row; /* लेफ्ट-राइट अलाइनमेंट */
    justify-content: space-between; /* स्पेस बनाएगा */
    align-items: center; /* सेंटर अलाइन करेगा */
    text-align: left; /* टेक्स्ट लेफ्ट में रहेगा */
    transition: all 0.3s ease-in-out;
    border-radius: 15px;
}


#Group img {
    width: 120px;
    height: 120px;
    margin-left: 20px; /* इमेज और टेक्स्ट में गैप */
}



.voted {
    color: green;
    font-weight: bold;
}

.not-voted {
    color: red;
    font-weight: bold;
}

form {
    margin-top: 10px;
}

button {
    background: green;
    color: white;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
}

button:disabled {
    background: grey;
}

</style>
<?php
session_start();
if (!isset($_SESSION['userdata'])) {
    header("location:index.php");
    exit();
}
$userdata = $_SESSION['userdata'];
$groupesdata = $_SESSION['groupesdata'];
 if ($_SESSION["userdata"]["status"] == 0) 
 {
    $status = "Not voted";
 }
 else
 {
    $status = "Voted";
 }
 


$image_path = "images/" . $userdata['photo'];
?>

<html>
<head>
    <title>Online Voting System - Dashbord</title>
</head>
<body>
    <div id="mainSection">
        <div id="headerSection">
        <div class = "backButton">
            <a href="front.php"><button>Back</button"></a>
        </div>
        <div class = "logoutButton">
            <a href="index.php"><button>Logout</button></a>
        </div>
            <h1>Online Voting System - Dashbord </h1>
        </div>
    </div>

    <hr>
    <div id="Profile">
        <img src="<?php echo htmlspecialchars($image_path); ?>" onerror="this.onerror=null; this.src='images/default.png';">
        <hr>
        <b>Name :</b> <?php echo htmlspecialchars($userdata['name']); ?><br><br>
        <b>Voter ID :</b> <?php echo htmlspecialchars($userdata['voter_id']); ?><br><br>
        <b>Address :</b> <?php echo htmlspecialchars($userdata['address']); ?><br><br>
        <b>Status :</b> <?php echo $status; ?><br><br>
    </div>
    <div id ="Group">
        <?php
        if($_SESSION["groupesdata"])
        {
          for($i = 0; $i < count($groupesdata); $i++)
          {
            ?>
             <div>
                <img src="images/<?php echo htmlspecialchars($groupesdata[$i]['photo']); ?>" onerror="this.onerror=null; this.src='images/default.png';">
                <b>Group-Name : <?php echo htmlspecialchars($groupesdata[$i]['name']); ?></b><br>
                <form action="vote.php" method="POST">
                    <input type="hidden" name="gvotes" value  = "<?php echo htmlspecialchars($groupesdata[$i]['votes']); ?>">
                    <input type="hidden" name="gid" value = "<?php echo htmlspecialchars($groupesdata[$i]['id']); ?>">
                    <?php
                    if ($_SESSION["userdata"]["status"] == 0) {
                        ?>
                        <button type="submit" name="votebtn" id="votebtn">Vote</button>
                        <?php
                    } else {
                        ?>
                        <button disabled type="button" name="votebtn" id="votebtn">Voted</button>
                        <?php
                    }
                    
                    ?>
                </form>
             </div>
            <?php
          }  
        }
        else
        {
            echo "No group found";
        }
        ?>
    </div>
</body>
</html>
