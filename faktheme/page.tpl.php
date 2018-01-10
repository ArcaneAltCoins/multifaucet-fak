<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-68778887-4"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-XXXXXXXX-X');
  </script>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="<?php echo theme_dir(); ?>css/default.css" type="text/css" />
=======
>>>>>>> a655a86d80b035c44d1e56875b7b603f2cc7ebe7

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Linus & Kalle Lilja" />
  <meta name="description" content="Got blueballs? Need FAK?" />
  <meta name="rating" content="General">

  <title><?= $title; ?></title>

  <link rel="stylesheet" href="<?= theme_dir(); ?>css/default.css" type="text/css" />

</head>
<body>

  <div class="app">

    <div class="content">

    <h1><?= $title; ?></h1>

    <?= $content; ?>

    <?php if(get_setting('donation_address')) { ?>

      <div class="donate">
        <p>Please consider donating: <strong class="address"></strong></p>
        <button class="btn copy">
          <svg class="copy-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
            <title>copy</title>
            <path d="M20 8v-8h-14l-6 6v18h12v8h20v-24h-12zM6 2.828v3.172h-3.172l3.172-3.172zM2 22v-14h6v-6h10v6l-6 6v8h-10zM18 10.828v3.172h-3.172l3.172-3.172zM30 30h-16v-14h6v-6h10v20z"></path>
          </svg>
          Copy
        </button>
        <textarea class="copy-select"><?= get_setting('donation_address'); ?></textarea>
      </div>

    <?php } ?>

    </div>

    <div class="powered-by">
      <a href="http://cur.lv/99zcp" title="http://www.unibia.net/crypto-faucet" target="_blank">MultiFaucet Beta v. 0.8.3</a>
    </div>

    <?php if(isset($stats)) { ?>

      <div class="stats">
        <p><?= translate('average_payout'); ?>: <?= $stats['average_payout']; ?></p>
        <p><?= $stats['number_of_payouts']; ?> <?= translate('payouts'); ?></p>
      </div>

    <?php } ?>

  </div>
  
  <!-- javascripts -->
  <script type="text/javascript" src="js/main.js"></script>
</body>
</html>