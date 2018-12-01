<!doctype html>
<html lang="en">
  <head>
      <title><?php echo (isset($title)) ? $title : 'Home'; ?> | ProView</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="shortcut icon" type="image/jpg" href="/favicon.jpg"/>
      <link rel="shortcut icon" type="image/jpg" href="../view/assets/img/pp.jpg"/>
      <link rel="stylesheet" href="../view/assets/css/uikit.min.css" />
      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300|Lato:300" rel="stylesheet">
      <script src="../view/assets/js/uikit.min.js"></script>
      <script src="../view/assets/js/uikit-icons.min.js"></script>
      <style>
        /** {
          font-family: 'Lato', sans-serif;
        }*/
        * {
          font-family: 'Josefin Sans', sans-serif;
        }
        .uk-background-primary, .uk-section-primary {
          background: #00AAC1;
        }
        .uk-background-secondary, .uk-section-secondary {
          color: #fff !important;
        }
        .uk-overlay, .uk-overlay-primary {
          opacity: 1 !important;
          background: #2e2e2e;
        }
      </style>
  </head>
  <body style="display: none;">
    <div class="uk-container uk-padding uk-padding-remove-bottom uk-margin-small-bottom uk-text-center">
      <div class="uk-margin-large-top"></div>
      <h3 class="uk-heading-primary uk-text-primary uk-text-bold">ProView</h3>
      <!-- <img src="../view/assets/img/logo.jpg" class="uk-align-center uk-margin-large-top"> -->
    </div>
    <nav class="uk-navbar-container uk-navbar-transparent uk-margin-medium uk-margin-remove-top" style="background: #fff;" uk-navbar uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
        <div class="uk-navbar-center">
          <ul class="uk-navbar-nav">
              <!-- <li class="uk-active"><a href="home">Home</a></li> -->
              <li><a class="uk-text-primary" href="/home" uk-icon="icon: home" uk-tooltip="title: Home; pos: left"></a></li>
              <li><a class="uk-text-primary" href="#modal-close-outside" uk-toggle uk-icon="icon: search" uk-tooltip="title: Search; pos: left"></a></li>
              <li><a class="uk-text-primary" href="#modal-close-outside" uk-toggle uk-icon="icon: sign-in" uk-tooltip="title: Sign In; pos: left"></a></li>
              <li><a class="uk-text-primary" href="home#" uk-icon="icon: sign-out" uk-tooltip="title: Sign Out; pos: left"></a></li>
              <li><a class="uk-text-primary" href="#modal-full" uk-toggle>Request a product review</a></li>
          </ul>
        </div>
    </nav>
