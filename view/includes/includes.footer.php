    <div id="modal-full" class="uk-modal-full" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
            <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                <div class="uk-background-cover" style="background-image: url('../view/assets/img/products/5.jpg');" uk-height-viewport></div>
                <div class="uk-padding-small">
                    <h1 class="text-center"><span>Fill Form With Product Info</span></h1>
                    <form class="request-preview" method="post" action="/controller/" enctype="multipart/form-data">
                      <input type="text" name="_method" value="_reqReview" hidden>
                      <fieldset class="uk-fieldset">
                          <div class="uk-margin-small uk-grid-small" uk-grid>
                            <div class="uk-width-2-3">
                              <div class="uk-grid">
                                <div class="uk-width-auto"><legend class="uk-legend">Product Name</legend></div>
                                <div class="uk-width-expand"><input class="uk-input uk-width-1-1" required name="name" type="text" placeholder=""></div>
                              </div>
                            </div>
                          </div>
                          <div class="uk-margin-small">
                            <div uk-grid>
                              <div class="uk-width-auto"><legend class="uk-legend"><label class="uk-button uk-button-primary uk-width-1-1" for="image">An image could go a long way</label></legend></div>
                              <input type="file" name="file" id="image" required accept="image/*" hidden>
                            </div>
                          </div>
                          <div class="uk-margin-small">
                            <textarea class="uk-textarea" required name="message" rows="3" placeholder="Anything else you wanna say?"></textarea>
                          </div>
                          <div class="uk-margin-small uk-align-right">
                            <button class="uk-button uk-button-primary uk-button-large uk-width-1-1" type="submit">Apply</button>
                            <!-- <a href="#mo-mo" class="uk-button  uk-button-primary uk-button-large" uk-toggle>Apply</a> -->
                          </div>
                      </fieldset>
                  </form>
                </div>
            </div>
        </div>
    </div>

    <!-- This is the modal with the outside close button -->
    <div id="modal-close-outside" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <button class="uk-modal-close-outside" type="button" uk-close></button>
            <h2 class="uk-modal-title uk-text-center"><span>Search By Product Name</span></h2>
            <div class="">
                <form class="uk-search uk-search-large">
                  <div class="uk-grid-small" uk-grid>
                    <div class="">
                      <span uk-search-icon></span>
                      <input class="uk-search-input" type="search" placeholder="Search...">
                    </div>
                    
                  </div>
                </form>
            </div>
        </div>
    </div>

    <!-- This is the modal with the outside close button -->
    <div id="modal-login" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <button class="uk-modal-close-outside" type="button" uk-close></button>
            <h2 class="uk-modal-title uk-text-center"><span>Sign Up</span></h2>
            <div class="">
                <form id="login">
                    <fieldset class="uk-fieldset">
                        <div class="uk-alert-success uk-hidden" uk-alert>
                            <a class="uk-alert-close" uk-close></a>
                            <p>Login Successful.</p>
                        </div>
                        <div class="uk-margin">
                            <input class="uk-input" type="text" id="name" name="name" required placeholder="Name">
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input" type="email" id="email" name="email" required placeholder="@email">
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input" type="password" id="password" name="password" required placeholder="Password">
                        </div>

                        <div class="uk-margin uk-margin-remove-right">
                          <button class="uk-button uk-align-right uk-margin-remove-right uk-button-primary" type="submit" id="signin_btn" name="signin_btn"><span uk-icon="icon: user"></span> Sign Up</button>
                          <a href="#"><small  class="uk-align-left">Existing User? Sign In</small></a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <div id="mo-mo" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <h2 class="uk-modal-title">Headline</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <button class="uk-button uk-button-primary" type="button">Save</button>
            </p>
        </div>
    </div>
    <div class="uk-padding-small"></div>
    <div class="uk-background-muted" style="background: #fff;">
      <div class="uk-padding-large">
        <p class="uk-text-center uk-text-bold" style="color: #000 !important;">&copy; Copyright ProReview</p>
      </div>
    </div>
    <!-- Optional JavaScript -->

    <script src="https://www.gstatic.com/firebasejs/5.6.0/firebase.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../view/assets/js/jquery.min.js"></script>
    <script src="../view/assets/js/jqueryForm.js"></script>
    <script src="../view/assets/js/index.js"></script>
    <script src="../view/assets/js/app.js"></script>
  </body>
</html> 