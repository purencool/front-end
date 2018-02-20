<!--[if lte IE 9]>
   <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<?php if($lightVersion == false){ ?>
<header>
  <nav>
     <ul>
        <li><a href="<?php echo $domain; ?>/index.php" title="home">Home</a></li>
        <li>
           <a href="#" title="CSS">CSS</a>
            <ul class="sub-nav" >
              <li> <a href="<?php echo $domain; ?>/css/grid.php" title="CSS Grid">CSS Grid</a></li>
              <li> <a href="<?php echo $domain; ?>/css/flex.php" title="CSS Flex">CSS Flex</a></li>
              <li> <a href="<?php echo $domain; ?>/css/animation.php" title="CSS Flex">CSS Animations</a></li>
            </ul>
        </li>
        <li>
           <a href="#" title="JS">JS</a>
            <ul class="sub-nav" >
              <li> <a href="<?php echo $domain; ?>/js/browser-storage.php" title="Browser storage">Browser storage</a></li>
            </ul>
        </li>
     </ul>
  </nav>
</header>
<?php } ?>
