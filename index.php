<?php $pageName ='Home' ?>

<!DOCTYPE html>
<html lang="en">

<?php include ('includes/meta.php') ?>

<body>
  <header>
    <h1 id="title">Home - INFO 2300</h1>

    <?php include ('includes/nav.php') ?>
  </header>

  <main>
    <h2>INFO/CS 2300; NBA 5301</h2>

    <p>This website is rendered server-side in PHP.</p>


    <p>You're running PHP version: <strong><?php echo phpversion();?></strong>. </p>
  </main>



  <?php include 'includes/footer.php'; ?>

</body>

</html>
