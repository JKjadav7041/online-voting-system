<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Vote Now</title>
  <style>
 body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  overflow: hidden;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #000
  overflow: hidden;
  overflow-x: hidden;
  overflow-y: auto;
}
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100vw;
  min-height: 100vh;
  object-fit: cover;
  z-index: -1;
  filter: brightness(0.6);
}

.content-container {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  width: 90%;
  max-width: 800px;
  background: rgba(255, 255, 255, 0.92);
  padding: 20px 20px;
  border-radius: 20px;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
  backdrop-filter: blur(6px);
  animation: fadeIn 1s ease-in-out;
}

/* Left Content */
.content {
  padding: 0;
  margin-bottom: 15px;
}


.content h2 {
  font-size: 2.8rem;
  color: #dc3545;
  margin-bottom: 20px;
  font-weight: 700;
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
}

.content p {
  font-size: 1.3rem;
  color: #333;
  margin-bottom: 30px;
  line-height: 1.6;
}

.vote-button {
  padding: 14px 32px;
  font-size: 1.1rem;
  background: linear-gradient(135deg, #ff9933, #138808);
  color: white;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
}

.vote-button:hover {
  transform: scale(1.05);
  background: linear-gradient(135deg, #138808, #ff9933);
}

/* Right Image Section */
.image-container {
  width: 280px;
  height: 280px;
  border-radius: 50%;
  overflow: hidden;
  border: 6px solid #fff;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
  flex-shrink: 0;
}

.image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Typing Effect */
.typewriter {
  overflow: hidden;
  white-space: nowrap;
  border-right: 3px solid rgba(0, 0, 0, 0.75);
  width: fit-content;
  animation: typing 3s steps(30) 1 normal both;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes typing {
  from { width: 0; }
  to { width: 100%; }
}

/* Media Queries - Tablet */
@media (max-width: 800px) {
  .content-container {
    flex-direction: column;
    padding: 30px 20px;
    text-align: center;
  }

  .content {
    padding: 0;
    margin-bottom: 25px;
  }

  .content h2 {
    font-size: 2.4rem;
  }

  .content p {
    font-size: 1.2rem;
  }

  .image-container {
    width: 220px;
    height: 220px;
  }
}

/* Mobile Devices */
@media (max-width: 576px) {
  .content-container {
    padding: 20px 15px;
    max-height: 90vh;
    overflow-y: auto;
  }

  .content h2 {
    font-size: 1.6rem;
  }

  .content p {
    font-size: 0.95rem;
  }

  .vote-button {
    font-size: 0.95rem;
    padding: 10px 18px;
  }

  .image-container {
    width: 150px;
    height: 150px;
  }

  .typewriter {
    font-size: 1.2rem;
  }
}



  </style>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

<!-- Background Video -->
<video autoplay muted loop id="myVideo">
<source src="backvoting.webm" type="video/webm">
  Your browser does not support the video tag.
</video>

<!-- Main Content -->
<div class="content-container">
  <div class="content">
    <h2 class="typewriter" id="main-heading"></h2>
    <p>Make a difference. Cast your vote today and shape the future.</p>
    <a href="second_page.php">
      <button class="vote-button ripple">Vote Now</button>
    </a>
  </div>
  <div class="image-container">
    <img src="images/voting.jpg" alt="Voting Image" />
  </div>
</div>

<script>
  // Typing Effect
  const text = "Your Vote, Your Voice";
  let index = 0;
  function typeWriter() {
    if (index < text.length) {
      document.getElementById("main-heading").innerHTML += text.charAt(index);
      index++;
      setTimeout(typeWriter, 100);
    }
  }
  window.onload = () => {
    typeWriter();
  };
</script>

</body>
</html>
