<?php include './parts/domain.php'; ?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
    <title>Home</title>
    <?php include './parts/head.php'; ?>
        <link rel="stylesheet" href="<?php echo $domain; ?>/styles/main.css">
    </head>
    <body>
        <?php include './parts/navigation.php'; ?>
        <main>
            <!-- Add css example here -->
            <article>
              <h1>Examples of html5, CSS, JS</h1>
              <p>Displays examples front-end development. This has page has been tested by the following</p>
              <ul>
                  <li><a href="https://validator.w3.org/nu/#textarea" title="HTML5 validator">HTML5 validator</a></li>
              </ul>
            </article>
            <!-- End css examples -->
        </main>
        <?php include './parts/footer.php'; ?>
        <?php include './parts/js.php'; ?>
        <script src="<?php echo $domain; ?>/js/main.js"></script>
    </body>
</html>
