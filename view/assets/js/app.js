$().ready(function() {  // Initialize Firebase
	var config = {
		apiKey: "AIzaSyDifosjRCBcjpYTotNr12dONXZUF-4eAdY",
		authDomain: "proview-71488.firebaseapp.com",
		databaseURL: "https://proview-71488.firebaseio.com",
		projectId: "proview-71488",
		storageBucket: "proview-71488.appspot.com",
		messagingSenderId: "561359942073"
	};
	firebase.initializeApp(config);
	var products = firebase.database().ref('products/');
	var requests = firebase.database().ref('requests/');
	// console.log(products);
	var _form;
	$('.form').on('submit', function(e) {
		_form = $(this);
	});
	
	$('.request-preview').on('submit', function(e) {
		_form = $(this);
	});
	
	$('.form').ajaxForm({
	    beforeSend: function() {
	    },
	    uploadProgress: function(event, position, total, percentComplete) {
	    },
	    success: function(d, statusText, xhr) {
	    	products.push().set({
			    name: _form.find('input[name="name"]').val(),
			    description: _form.find('textarea[name="description"]').val(),
			    img : d[0]
			  });
	    },
	    error: function(xhr, statusText, err) {
	        console.log(xhr.responseText);
	    }
	});
	populate();

	var _url = window.location.href;
	var extension;
	if (_url.indexOf('product') > 0 ) {
		extension = _url.substr(_url.indexOf('/product/')+9, _url.length);
		firebase.database().ref("products/"+extension).once("value")
		  .then(function(snapshot) {
		  	// console.log(snapshot.val());
		  	$('div[id="test-target"]').css('background-image', 'url('+snapshot.val().img+')');
		  	$('#pname').text(snapshot.val().name);
		  	$('#desc').text(snapshot.val().description);
		  });
	}

	$('.comment').on('submit', function(e) {
		e.preventDefault();
		alert();
		firebase.database().ref('products/'+extension+'/comments/'+firebase.database().ref('products/'+extension+'/comments').push().key).update({user: 'username', comment: $('.cta').val()});
	});

	$('.rate').on('change', function(e) {
		e.preventDefault();
		var _val = $(this).val();
		$('[id="rate-val"]').text(_val);
		firebase.database().ref('products/'+extension+'/ratings/'+firebase.database().ref('products/'+extension+'/ratings').push().key).update({value: _val});
	});

	firebase.database().ref('products/'+extension+'/comments').on('child_added', snap => {
		// body
		ann_body_html = '<li><div class="uk-card uk-card-default"><div class="uk-card-body uk-margin-remove"><h5 class="uk-card-title uk-margin-remove"><span>'+snap.val().user+'</span></h5><hr class="uk-hr"><p>'+snap.val().comment+'.</p></div></div></li>';

		$('.clist').prepend(ann_body_html);
	});
	$('.request-preview').ajaxForm({
	    beforeSend: function() {
	    	// alert()
	    },
	    uploadProgress: function(event, position, total, percentComplete) {
	    },
	    success: function(d, statusText, xhr) {
	    	console.log(d);
	    	if (d[0] == "rejected") {
	    		alert('your image contains explicit content');
	    		return false;
	    	} else {
	    		firebase.database().ref('requests/').push().set({
			    name: _form.find('input[name="name"]').val(),
			    message: _form.find('textarea[name="message"]').val(),
			    img : d[0]
			  });
	    	}
	    
	    },
	    error: function(xhr, statusText, err) {
	        console.log(xhr.responseText);
	    }
	});

});
	function populate() {
		firebase.database().ref('products/').on('child_added', snap => {
			// body
			ann_body_html = '<div>';
          ann_body_html += '<div class="uk-inline">';
           ann_body_html +=   ' <img src="../view/assets/img/products/2.jpg" alt="">';
             ann_body_html +=  '<a href="product/'+snap.key+'" class="blog-info" style="opacity: 0;">';
             ann_body_html +=   ' <div class="uk-overlay-primary uk-position-cover"></div>';
              ann_body_html +=  ' <div class="uk-overlay uk-position-center uk-light">';
               ann_body_html +=     ' <h3>Product Name Here</h3>';
               ann_body_html +=    '  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod';
               ann_body_html +=     ' tempor incididunt ut labore et dolore magna...<hr class="uk-hr">Click read more...</p>';
              ann_body_html +=  ' </div>';
              ann_body_html += '</a>';
        ann_body_html +=  ' </div>';
      ann_body_html += ' </div>';

			$('.populate-here').prepend(ann_body_html);
		});
	}