<!doctype html>
<html lang="en">
  <head>
      <title>ProView | Dashboard</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
      <link rel="shortcut icon" type="image/png" href="../view/../view/assets/img/favicon.png"/>
      <link rel="stylesheet" href="../view/assets/css/uikit.min.css" />
      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300|Lato:300" rel="stylesheet">
      <script src="../view/assets/js/uikit.min.js"></script>
      <script src="../view/assets/js/uikit-icons.min.js"></script>
      <style>
        * {
          font-family: 'Lato', sans-serif;
        }
        /** {
          font-family: 'Josefin Sans', sans-serif;
        }*/
      </style>
  </head>
  <body>
    <nav class="uk-navbar-container uk-padding-large uk-padding-remove-bottom uk-padding-remove-top" uk-navbar>
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="#offcanvas-usage" uk-toggle><span uk-icon="icon: home"></span></a></li>
            </ul>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="#product" uk-toggle><span uk-icon="icon: plus"></span></a></li>
                <!-- <li class="uk-active"><a href="#offcanvas-usage" uk-toggle><span uk-icon="icon: menu"></span></a></li> -->
            </ul>
        </div>
    </nav>

    <div class="uk-background-default uk-offcanvas-content">
        <div id="offcanvas-usage" uk-offcanvas="overlay: true; mode: push">
            <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close" type="button" uk-close></button>
                <ul class="uk-nav uk-nav-default">
                    <li class="uk-nav-header">Header</li>
                    <li class="uk-nav-divider"></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: table"></span> Item</a></li>
                    <li class="uk-nav-divider"></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Item</a></li>
                    <li class="uk-nav-divider"></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> Item</a></li>
                    <li class="uk-nav-divider"></li>
                </ul>
            </div>
        </div>
    </div>

    <section class="uk-container uk-margin-top">
      <div>
        <h2 class="uk-heading-bullet uk-padding-small"><span class="uk-text-bold">PRODUCTS DASHBOARD</span></h2>
        <hr class="uk-hr uk-margin-small">
      </div>
      <!-- <div class="uk-grid-medium uk-child-width-1-4@m uk-padding-small" uk-grid>
        <div>
          <div class="uk-light uk-background-secondary uk-card uk-card-default uk-card-body text">
              <h3 class="uk-card-title uk-text-muted">Default</h3>
              <p>Lorem ipsum sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <p class="uk-margin"><button class="uk-button uk-button-default">Default</button></p>
          </div>
        </div>
        <div>
          <div class="uk-light uk-background-primary uk-card uk-card-default uk-card-body text">
              <h3 class="uk-card-title">Default</h3>
              <p>Lorem ipsum sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <p class="uk-margin"><button class="uk-button uk-button-default">Default</button></p>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-default uk-card-body text">
              <h3 class="uk-card-title">Default</h3>
              <p>Lorem ipsum sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <p class="uk-margin"><button class="uk-button uk-button-default">Default</button></p>
          </div>
        </div>
        <div>
          <div class="uk-background-muted uk-card uk-card-default uk-card-body text">
              <h3 class="uk-card-title">Default</h3>
              <p>Lorem ipsum sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <p class="uk-margin"><button class="uk-button uk-button-default">Default</button></p>
          </div>
        </div>
      </div> -->
    </section>

    <section class="uk-container uk-margin-large-top uk-background-muted">
      <div>
        <h2 class="uk-heading-bullet uk-padding-small"><span class="uk-text-bold">Recent Products</span></h2>
        <hr class="uk-hr uk-margin-small">
      </div>
      <div class="uk-margin">
        <table class="uk-table uk-table-striped uk-table-hover uk-table-divider">
          <thead>
              <tr>
                  <th>Table Heading</th>
                  <th>Table Heading</th>
                  <th>Table Heading</th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td><a href="#modal-example" uk-toggle uk-icon="icon: info"></a> <a href="#" uk-icon="icon: check"></a> <a href="#" uk-icon="icon: trash"></a></td>
              </tr>
              <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td><a href="#modal-example" uk-toggle uk-icon="icon: info"></a> <a href="#" uk-icon="icon: check"></a> <a href="#" uk-icon="icon: trash"></a></td>
              </tr>
              <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td><a href="#modal-example" uk-toggle uk-icon="icon: info"></a> <a href="#" uk-icon="icon: check"></a> <a href="#" uk-icon="icon: trash"></a></td>
              </tr>
          </tbody>
        </table>
      </div>
    </section>

    <div class="uk-background-muted uk-margin-large-top">
      <div class="uk-padding-large">
        <p class="uk-text-center">&copy; Copyright ProView</p>
      </div>
    </div>

    <div id="modal-example" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <h2 class="uk-modal-title">Headline</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <button class="uk-button uk-button-primary" type="button">Save</button>
            </p>
        </div>
    </div>

    <div id="product" uk-modal class="">
        <div class="uk-modal-dialog uk-modal-body">
            <h2 class="uk-modal-title">Add Product</h2>
            <form class="form" method="post" action="/controller/" enctype="multipart/form-data">
                <fieldset class="uk-fieldset">

                    <legend class="uk-legend">Legend</legend>

                    <div class="uk-margin">
                        <input class="uk-input" name="name" type="text" placeholder="Product Name">
                    </div>


                    <div class="uk-margin">
                        <textarea class="uk-textarea" name="description" rows="5" placeholder="Textarea"></textarea>
                    </div>

                    <div class="uk-margin">
                        <div uk-form-custom>
                            <input type="file" name="file" id="file" accept="image/*">
                            <button class="uk-button uk-button-default uk-button-primary" type="button" tabindex="-1">Select Image</button>
                        </div>
                    </div>
                    <input type="text" name="_method" value="_addProduct" hidden>
                    <p class="uk-align-right"> 
                        <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                        <button class="uk-button uk-button-primary" type="submit">Save</button>
                    </p>
                </fieldset>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <script src="https://www.gstatic.com/firebasejs/5.6.0/firebase.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="../view/assets/js/jqueryForm.js"></script>
    <script src="../view/assets/js/index.js"></script>
    <script src="../view/assets/js/app.js"></script>
  </body>
</html>