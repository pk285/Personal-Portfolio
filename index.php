<!doctype html>
<html>

<!-- Header -->
<?php require 'head.php'; ?>

<!-- Parallex Scrolling -->
<body>
    <!-- Education -->
    <section id="plx">
        <div class="bgI first"></div>
         <div class="frame">
                <?php require 'education.php'; ?>
            </div>
        <!-- Experience -->
        <div class="bgI second"></div>
            <div class="frame">
                <?php require 'experience.php'; ?>
            </div>
        <!-- Portfolio -->
        <div class="bgI third"></div>
            <div class="frame">
                <?php require "portfolio.php" ?>
            </div>
        <!-- Contact -->
        <div class="bgI fourth"></div>
            <div class="frame">
                <?php require "contact.php" ?>
            </div>
    </section>
      
    <br>
    <!-- Footer -->
    <?php require 'footer.php'; ?>
   
</body>
</html>
