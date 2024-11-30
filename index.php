<?php
      include('./assets/config.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title><?= SITE_TITLE.' - '.SITE_TAGLINE; ?></title>
      <meta name="description" content="<?= SITE_DESCRIPTION; ?>">
      <meta name="keywords" content="placeholder, <?= SITE_TITLE; ?>,placeholder css,placeholder color css,placeholder api,placehplder images,demo images api, images api, free placeholder api,free placeholder images">
      <meta name="author" content="<?= AUTHOR_NAME; ?>">
      <meta rel="canonical" href="<?= SITE_URL; ?>">
      <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "<?= SITE_TITLE; ?>",
        "alternateName" : "DV",
        "url": "<?= SITE_URL; ?>",
        "description": "<?= SITE_DESCRIPTION; ?>"  
      }
      </script>

      <meta property="og:title" content="<?= SITE_TAGLINE.' - '.SITE_TITLE; ?>">
      <meta property="og:type" content="website">
      <meta property="og:description" content="<?= SITE_DESCRIPTION; ?>">
      <meta property="og:image" content="<?= SITE_URL; ?>/assets/favicon/icon.png">
      <meta property="og:url" content="<?= SITE_URL; ?>">

      <meta name="twitter:card" content="summary_large_image">
      <meta property="twitter:domain" content="<?= SITE_URL ?>">
      <meta property="twitter:url" content="<?= SITE_URL; ?>">
      <meta name="twitter:title" content="<?= SITE_TAGLINE.' - '.SITE_TITLE; ?>">
      <meta name="twitter:description" content="<?= SITE_DESCRIPTION; ?>">
      <meta name="twitter:image" content="<?= SITE_URL; ?>/assets/favicon/icon.png">

      <meta name="google-site-verification" content="XokaOhrv2XQ8M-jO-Yl5yrvFEXDfZl825wLcNhmWzbQ" />

<link
    rel="preload"
    href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins&family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap"
    as="style"
    onload="this.onload=null;this.rel='stylesheet'"
/>
      <link rel="stylesheet" href="assets/css/base.css">
      <link rel="stylesheet" href="assets/css/main.css">


      <link rel="robots" href="/robots.txt">
  
     <link rel="icon" type="image/png" href="/assets/favicon/favicon-96x96.png" sizes="96x96" />
     <link rel="icon" type="image/svg+xml" href="/assets/favicon/favicon.svg" />
     <link rel="shortcut icon" href="/assets/favicon/favicon.ico" />
     <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png" />
     <meta name="apple-mobile-web-app-title" content="DevHolder" />
     <link rel="manifest" href="/assets/favicon/site.webmanifest" />
  
      <meta name="theme-color" content="#f50057">
     

   </head>
   <body>
      <div class="doc__bg"></div>
      <nav class="header">
         <span class="logo" style="margin: 10%;"><?= SITE_LOGO; ?></span>
            <ul style="margin-top: 6%;" class="menu">
            <li>
               <a title="Coder Sikarwar" target="_blank" href="<?= AUTHOR_URL; ?>" class="link link--dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
            </li>
           
         </ul>
      </nav>
      <div class="wrapper" style="text-align: justify;">
         <h1><?= SITE_LOGO; ?></h1>
         <p>Welcome to DevHolder! <br> <br>
            <?= SITE_DESCRIPTION; ?>
         </p>
      </div>
      <div class="wrapper">
         
         <article class="doc__content">
            <section class="js-section">
               <h2 class="section__title">Getting Started</h2>
               <p>
                  To enhance your projects with placeholder photos, follow these steps:
               </p>
            </section>
            <section class="js-section">
               <h3 class="section__title">Size</h3>
               <p>
         Specify the image's dimensions using the format width x height. For example:
               </p>
        <pre class="code code--block" style="overflow-x: scroll;padding: 0px 20px;">
          <code>
            <a target="_blank" class="link link--light" href="<?= SITE_URL; ?>/600x300?txt-size=70"><?= SITE_URL; ?>/600x300?txt-size=70</a>
          </code>
        </pre>
               <p>
                  Use the txt-size query string in the URL to adjust the text size. The default size is 70.
               </p>
               <hr />
            </section>
          
           
            <section class="js-section">
               <h3 class="section__title">Format</h3>
               <p>
                  <?= SITE_TITLE; ?> supports various formats such as SVG, JPG, and PNG. Specify the format as follows:
               </p>
    <pre class="code code--block" style="overflow-x: scroll;padding: 0px 20px;">
      <code>
        <?= SITE_URL; ?>/600x300/svg?txt-size=70
      </code>
    </pre>
    <pre class="code code--block" style="overflow-x: scroll;padding: 0px 20px;">
      <code>
        <?= SITE_URL; ?>/600x300/png?txt-size=70
      </code>
    </pre>
   <pre class="code code--block" style="overflow-x: scroll;padding: 0px 20px;">
      <code>
        <?= SITE_URL; ?>/600x300/jpg?txt-size=70
      </code>
    </pre>
               <p>
                  The default format is svg.
               </p>
               <hr />
            </section>
            <section class="js-section">
               <h3 class="section__title">Colour</h3>
               <p>
                 Specify colors using hex codes after the size for background and text respectively. For example:
               </p>
  <pre class="code code--block" style="overflow-x: scroll;padding: 0px 20px;">
    <code>
      <?= SITE_URL; ?>/600x300/jpg/C5C5C5/000000?txt-size=70
    </code>
  </pre>
               <hr />
            </section>
       

            <section class="js-section">
               <h3 class="section__title">Custom Text</h3>
               <p>
                Include custom text in the URL using the query string. Use '+' for spaces. For example:
               </p>
           
    <pre class="code code--block" style="overflow-x: scroll;padding: 0px 20px;">
      <code>
        <?= SITE_URL; ?>/600x300/jpg/C5C5C5/000000?txt=Hello+World&txt-size=70
      </code>
    </pre>
               <hr />
            </section>
                            

            <section class="js-section">
               <h3 class="section__title">Fonts</h3>
               <p>
                  Specify the font using the query string in the URL. Font names are case-sensitive.
               </p>
   <pre class="code code--block" style="overflow-x: scroll;padding: 0px 20px;">
      <code>
        <?= SITE_URL; ?>/600x300/jpg/C5C5C5/000000?txt=Hello+World&txt-size=70&font=Outfit
      </code>
    </pre>
               <p>
              Default font is Outfit. Available fonts:
               </p>
               <ul>
                  <li class="font-outfit">Outfit</li>
                  <li class="font-montserrat">Montserrat</li>
                  <li class="font-poppins">Poppins</li>
               </ul>
            
               <p>
                  Remember to capitalize the initial letter when specifying font names</p>
            </section>
         </article>
      </div>
      <footer class="footer">
         Copyright © 2024 <a  title="<?= AUTHOR_NAME; ?>" href="<?= AUTHOR_URL; ?>" class="link link--light"  target="_blank"><?= AUTHOR_NAME; ?></a>
      </footer>
    
</body>
</html>