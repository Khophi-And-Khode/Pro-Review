<?php $title = 'Product'; ?>
<?php require_once('includes/includes.header.php'); ?>
    <section class="">
      <div id="test-target" class="uk-height-large uk-background-cover uk-light uk-flex uk-flex-top" uk-parallax="bgy: 200" >
        <!-- <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="target: #test-target; y: 100,0">Headline</h1> -->
      </div>
      <div class="uk-container-small uk-align-center">
        <h1 class="uk-heading-primary uk-text-primary" id="pname">Product Name</h1>
        <hr class="uk-divider-icon">
        <p id="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris</p>
        <!-- <ul uk-accordion="collapsible: false">
            <li>
                <a class="uk-accordion-title" href="#">Item 1</a>
                <div class="uk-accordion-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </li>
            <li>
                <a class="uk-accordion-title" href="#">Item 2</a>
                <div class="uk-accordion-content">
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                </div>
            </li>
            <li>
                <a class="uk-accordion-title" href="#">Item 3</a>
                <div class="uk-accordion-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                </div>
            </li>
        </ul> -->
        <div class="">
          <form class="rate-form">
              <fieldset class="uk-fieldset">

                  <legend class="uk-legend">Rate this product <span id="rate-val"></span></legend>

                  <div class="uk-margin uk-width-small">
                      <input class="uk-range uk-text-primary rate" type="range" value="1" min="1" max="5" step="0.1">
                  </div>

              </fieldset>
          </form>
        </div>
        <div class="">
          <form class="comment">
              <fieldset class="uk-fieldset">

                  <div class="uk-margin">
                      <textarea class="uk-textarea cta" rows="2" placeholder="Comment on this product"></textarea>
                  </div>
                  <button class="uk-align-right uk-button uk-button-secondary comment" type="submit">Comment</button>

              </fieldset>
          </form>
        </div>
        <h3>Comments</h3>
        <ul class="uk-list clist">
        </ul>
        <div class="uk-padding-large uk-text-right uk-padding-remove-horizontal">
          <a href="home" class="uk-button uk-button-large uk-button-primary"><span uk-icon="arrow-left"></span> Go Back</a>
        </div>
      </div>
    </section>
<?php require_once('includes/includes.footer.php'); ?>