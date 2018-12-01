<?php $title = 'About Us'; ?>
<?php require_once('includes/alt-header.php'); ?>
    <section class="uk-section-large uk-padding">
      <div class="uk-container uk-text-center">
        <h2>Contact Us</h2>
        <hr class="uk-hr">
      </div>
      <div class="uk-grid-divider uk-child-width-1-2@m uk-padding" uk-grid>
        <div>
          <!-- <h3 class="uk-text-bold"><span>Title</span></h3> -->
          <ul class="uk-list uk-position-center">
            <li><a href="#"><h3><span uk-icon="receiver"></span> <span>  1234-567-890</span></h3></a></li>
            <li><a href="#"><h3><span uk-icon="whatsapp"></span> <span> 0123-456-789</span></h3></a></li>
            <li><a href="#"><h3><span uk-icon="mail"></span> <span> george_padmore@research.library</span></h3></a></li>
            <li><a href="#"><h3><span uk-icon="facebook"></span> <span> george_padmore</span></h3></a></li>
            <li><a href="#"><h3><span uk-icon="twitter"></span> <span> @george_padmore</span></h3></a></li>
          </ul>
        </div>
        <div>
          <!-- <h3 class="uk-text-bold"><span>Reach Us Here</span></h3> -->
            <form>
              <fieldset class="uk-fieldset">

                  <legend class="uk-legend">Fill The Form</legend>

                  <div class="uk-margin">
                      <input class="uk-input" type="text" placeholder="Name" >
                  </div>

                  <div class="uk-margin">
                      <input class="uk-input" type="text" placeholder="Email">
                  </div>

                  <div class="uk-margin">
                      <textarea class="uk-textarea" rows="5" placeholder="Message"></textarea>
                  </div>

                  <div class="uk-margin">
                    <button class="uk-button uk-button-primary uk-button-large" type="submit">Send Your Message</button>
                  </div>
              </fieldset>
            </form>
        </div>
    </section>
    <section class="uk-section-muted uk-align-center uk-padding-small">
      <div class="mapouter">
        <div class="gmap_canvas">
          <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=george%20padmore%20research%20library&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          <a href="https://www.pureblack.de"></a>
        </div>
        <style>
        .mapouter{text-align:center;height:500px;}
        .gmap_canvas {overflow:hidden;background:none!important;height:500px;width:95vw;}
        #gmap_canvas {width: 1000px;height: inherit;align-self: center;}
        </style>
      </div>
    </section>
<?php require_once('includes/includes.footer.php'); ?>