<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lgm College</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500&family=Raleway:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nav-container">
            <nav class="nav-bar">
            <span class="logo" >LGM</span>
            <div class="links"> 
                <a href="index.php">Home</a>
                <a href="login.php">login</a>
                <a href="index.php#form">Contact</a>
            </div>
            </nav>
        </div>

  <section class = "head">
    <header>
      <h2><a href="#" data-content="Lgm College of Engineering" class="lgm-link">Lgm College of Engineering</a></h2>
    </header>
  </section>

    <section class = "main">
        <img src="eduford_img/certificate.jpg" alt="" srcset="">
        <h1>Achievements</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem dolores sint modi nobis fugit placeat aut laboriosam error recusandae excepturi. Id possimus ipsa porro quas, illum laudantium minima esse labore similique harum a ratione voluptates animi, fuga corrupti vitae reprehenderit. Perspiciatis dolor rerum maiores ipsam nihil doloremque saepe numquam. Optio modi soluta iste eveniet similique consectetur debitis deserunt, maxime laborum.</p>
    </section>
 
    
<div class="row">
<h1>Our Location</h1>
  <div class="column">
  <h2>London</h2>
    <img src="eduford_img/london.png" alt="london" style="width:100%">
  </div>
  <div class="column">
  <h2>Newyork</h2>
    <img src="eduford_img/newyork.png" alt="newyork" style="width:100%">
  </div>
  <div class="column">
  <h2>washington</h2>
    <img src="eduford_img/washington.png" alt="washington" style="width:100%">
  </div>
</div>

<div id = "form">
    <h1>Contact Us</h1>
    <p>Get in touch with us to get your admission done.</p>
<div class="container">
<form method="POST" action="action_page.php">


    <label for="name">Name</label>
    <input type="text" id="name"  name="name" placeholder="Your name..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your last name..">

    <label for="city">City</label>
    <select id="city" name="city">
      <option value="london">London</option>
      <option value="washington">Washington</option>
      <option value="newyork">Newyork</option>
    </select>

    <label for="course">Course</label>
    <select id="course" name="course">
      <option value="Betech">BE/BTECH</option>
      <option value="bsc">BSC</option>
      <option value="bcom">BCOM</option>
    </select>

    <input type="submit" value="Submit">

  </form>
</div>
</div>

<footer>
    <p> Copyrighted &copy; 2023</p>
</footer>

</body>
</html>
</html>