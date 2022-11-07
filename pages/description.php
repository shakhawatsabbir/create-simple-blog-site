<?php include 'pages/header.php'?>


<?php foreach ($blogs as $blog) { ?>
    <div class="div1">
        <h3>Description /  <?php echo $blog['title']; ?></h3>
        <hr/>
        <img src="assets/img/<?php echo $blog['image']; ?>" alt="" class="center">
        <p><?php echo $blog['description']; ?></p>
    </div>
<?php } ?>

<?php include 'pages/footer.php'?>