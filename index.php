<!DOCTYPE html>
<html>
<head>
  <title>Basic HTML with External CSS and JS</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
    <h1 id="rameezline"><?php echo "Adva Web Services";  ?></h1>
  </header>



  <main>
    <section>
      <h2>About Us</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </section>

   <!-- this is an html comment -->
    <section>
      <h2>Our Services</h2>
      <div class="services">

        <?php for($i= 1; $i <=3 ; $i++){ ?> 
        <div class="service">
          <p>Service <?php echo $i ; ?></p>
        </div>
        <?php } ?>

      </div>
    </section>


    <?php $services = array('HR','IT','Recruitment'); ?>

    <section>
      <h2>Our Services</h2>
      
      <div class="services">

        <?php foreach ($services as $service) { ?>

        <div class="service">
          <p><?php echo $service ?></p>
        </div>

        <?php } ?>
        

      </div>
    </section>





  </main>

  <footer>
    <p>&copy; 2023 My Company. All rights reserved.</p>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>