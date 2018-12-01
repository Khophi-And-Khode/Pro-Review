<!doctype html>
<html lang="en">
  <head>
      <title><?php echo (isset($title)) ? $title : 'Home'; ?> | George Padmore Research Library</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
      <link rel="shortcut icon" type="image/png" href="../view/../view/assets/img/favicon.png"/>
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
      </style>
  </head>
  <body style="display: none;">
    <div class="uk-container uk-padding">
      <img src="../view/assets/img/logo.jpg" class=" uk-align-center">
    </div>
    <div class="uk-position-relative">
      <div class="uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="../view/assets/img/bg.jpg" uk-img>
      </div>
      <div class="uk-position-top">
          <nav class="uk-navbar-container uk-background-primary uk-navbar-transparent uk-margin-small" uk-navbar uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
              <div class="uk-navbar-left">
                  <ul class="uk-navbar-nav">
                      <li class="uk-active"><a href="home" style="color: #fff;">Home</a></li>
                  </ul>
              </div>
              <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li><a style="color: #fff;" href="#modal-close-outside" uk-toggle uk-icon="icon: search"></a></li>
                    <li class="uk-active"><a style="color: #fff;" href="#modal-full" uk-toggle>Apply</a></li>
                    <li class="uk-active"><a style="color: #fff;" href="catalogue">Catalogue</a></li>
                    <li class="uk-active"><a style="color: #fff;" href="blog">Blog</a></li>
                    <li class="uk-active"><a style="color: #fff;" href="about-us">About Us</a></li>
                    <li class="uk-active"><a style="color: #fff;" href="contact-us">Contact Us</a></li>
                    <li>
                        <a style="color: #fff;" href="#">More</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">For</a></li>
                                <li><a href="#">More</a></li>
                                <li><a href="#">Items</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
              </div>
          </nav>
      </div>
    </div>