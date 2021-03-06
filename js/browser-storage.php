<?php include '../parts/functions.php'; ?>
<?php $title=' Browser storage examples'; ?>
<?php $cssArr= [$domain.'/styles/js/browser-storage.css'];  ?>
<?php
  $jsArr= [
     // $domain.'/javascript/browser-storage/dataStorage.js',
      $domain.'/javascript/browser-storage/browser-storage-1.js'
  ];
 ?>
<?php include '../parts/html-header.php'; ?>
    <!-- Add example here -->
    <div id="content">
                 <article class="article">
                   <header>
                      <h1>Browser storage examples</h1>
                   </header>
                   <p>
                     Displaying Browser storage examples in the section below
                   </p>
                </article>
                <aside class="aside">
                  <h3>Browser storage links</h3>
                    <ul>
                        <li></li>
                    </ul>
                </aside>
              </div>
              <section id="grid">
                <div class="container">
                    <div id="container-1">
                       <p> This example is straight JavaScript</p>
                       <ul id="container-1-ul">

                       </ul>
                        <form id="container-1-form">
                            <input type='text' name="container-1-input" id="container-1-input" />
                            <input type='submit' name="container-1-submit" id="container-1-submit" />
                        </form>
                    </div>
                </div>
                <div class="container">
                    <div id="container-2">2</div>
                </div>
                <div class="container">
                    <div id="container-3">3</div>
                </div>
                <div class="container">
                    <div id="container-4">4</div>
                </div>
                <div class="container">
                    <div id="container-5">5</div>
                </div>
                <div class="container">
                    <div id="container-6">6</div>
                </div>
             </section>
  <!-- End examples -->
<?php include '../parts/html-footer.php'; ?>
