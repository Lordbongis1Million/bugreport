<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BugReport:Homepage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="css/style.css">
  </head>
<body>

<?php include 'header.php';
// Include the database configuration file
include 'setup.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  // Fetch the page details from the database
  $sql = "SELECT * FROM pages WHERE id=$id";
  $result = $conn->query($sql);
  // Check if the page exists
  if ($result->num_rows > 0) {
    $page = $result->fetch_assoc();
    
    // Assign the fields to variables
    $title1 = $page['title1'];
    $text1 = $page['text1'];
    $image1 = $page['image1'];
    $title2 = $page['title2'];
    $text2 = $page['text2'];
    $image2 = $page['image2'];
    $title3 = $page['title3'];
    $text3 = $page['text3'];
    $image3 = $page['image3'];
  } else {
    echo "Page not found.";
    exit;
  }
} else {
  echo "No page ID provided.";
  exit;
}

?>

// CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `text1` text DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `text2` text DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `title3` varchar(255) DEFAULT NULL,
  `text3` text DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `text1` text DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `text2` text DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `title3` varchar(255) DEFAULT NULL,
  `text3` text DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

// Put that stuff in database
    
<div class="header">
  <img id="logo" src="Assets/Zugbug.PNG" alt="Logo"/>
  <h1>Cosmara Bug Reporter</h1>
</div>

<div class="navbar">
  <button onclick="location.href='report.php'">REPORT BUG</button>
</div>

<div class="main-container">
  
  <div class="text-container">
    <p>The Cosmara Bug Reporter is a website created by the play-tester Chase Bowen He did this to assist the solo game developer Austin Bowen in reporting bugs for Cosmara. <br><br> This website as the name suggests, allows you to report bugs you encounter in-game, directly to Austin’s support email address so that he can review it and make a hot-fix. <br><br> This website also requires you to sign in, but that grants the benefit that it tracks how many reports you’ve made.</p>

  </div>
  <div class="main">
    <div class="container">
      <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <img src="Assets/1.png" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">2 / 6</div>
        <img src="Assets/2.png" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 6</div>
        <img src="Assets/3.png" style="width:100%">
      </div>
        
      <div class="mySlides">
        <div class="numbertext">4 / 6</div>
        <img src="Assets/4.png" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">5 / 6</div>
        <img src="Assets/5.png" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">6 / 6</div>
        <img src="Assets/6.png" style="width:100%">
      </div>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>

      <div class="caption-container">
        <p id="caption"></p>
      </div>

      <div class="row">
        <div class="column">
          <img class="demo cursor" src="Assets/1.png" style="width:100%" onclick="currentSlide(1)" alt="Loudout Equiping Error">
        </div>
        <div class="column">
          <img class="demo cursor" src="Assets/2.png" style="width:100%" onclick="currentSlide(2)" alt="Edge of Map Being Weird">
        </div>
        <div class="column">
          <img class="demo cursor" src="Assets/3.png" style="width:100%" onclick="currentSlide(3)" alt="Random Death Explosion">
        </div>
        <div class="column">
          <img class="demo cursor" src="Assets/4.png" style="width:100%" onclick="currentSlide(4)" alt="Music Volume Slider Not Functioning Properly">
        </div>
        <div class="column">
          <img class="demo cursor" src="Assets/5.png" style="width:100%" onclick="currentSlide(5)" alt="Random Death Explosion">
        </div>
        <div class="column">
          <img class="demo cursor" src="Assets/6.png" style="width:100%" onclick="currentSlide(6)" alt="Weird Blue Effect">
        </div>
      </div>
    </div>
  </div>
</div>


<div class="footer">
  <a href="login.php">Sign In</a>
  <a href="help.php" class="right">Help</a>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

</body>
</html>
