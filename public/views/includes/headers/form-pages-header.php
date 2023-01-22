<?php
  include_once(__DIR__ . "/../../../../config.php");
?>

<?php //Just to can understand file as .php ?>
  
  <meta charset="UTF-8">
  <script src="<?php echo '/' . ROOT_PATH . '/public/src/js/utils/admin-access/header-manipulation.js'?>" defer></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DocWebox - Find your Doctor!</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap" rel="stylesheet">
  <link rel="icon" href="<?php echo '/' . ROOT_PATH . '/public/resources/favicon/the-icon.ico'?>" />
</head>
<body>
<header>
  <nav>
    <a onclick="history.back()" style="cursor:pointer;"><img src="<?php echo '/' . ROOT_PATH . '/public/resources/logos/logo-back-btn-transparent.png'?>" alt="DocWebox logo back" class="nav__logo" id="logo" /></a>
    <a href="<?php echo '/' . ROOT_PATH . '/public/views/forms-views/dw-admin.php'?>" title="Move to admin panel"><img src="<?php echo '/' . ROOT_PATH . '/public/resources/logos/admin-login-button-transparent.png'?>" alt="DocWebox logo back" id="admin-login" id="logo" /></a>
  </nav>
</header>