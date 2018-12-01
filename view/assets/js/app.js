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
	    	$('.uk-alert-success').removeClass('uk-hidden').delay(700).fadeOut();
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
		//alert();
		firebase.database().ref('products/'+extension+'/comments/'+firebase.database().ref('products/'+extension+'/comments').push().key).update({user: $('#username').text(), comment: $('.cta').val()});
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
	    		clear();

	    	}
	    
	    },
	    error: function(xhr, statusText, err) {
	        console.log(xhr.responseText);
	    }
	});

    let usersRef = firebase.database().ref("Users");
    //Listen for form submit
    document.getElementById("login").addEventListener("submit", submitForm);
    //submit form
    // function to save messages to firebase
    function saveUser(name,email,password){
        let userRef = usersRef.push();
        userRef.set({
            name: name,
            email: email,
            password: password
        });
    }

    function submitForm(e){
        e.preventDefault();
        //Get values
        var name = $('[id="login"]').find('input[name="name"]').val();
        let email=document.getElementById('email').value;
        let password=document.getElementById('password').value;
        let hashedpass = CryptoJS.MD5(password);

        // save user data
        saveUser(name,email,hashedpass);

        // show alert
        //a////lert(name);
        $.ajax({
        	url: '/login_access',
        	data: 'n='+name,
        	method: 'post',
        	success: function (d) {
        		// body...
	        		console.log(d);
        		return false;
		        $('.uk-alert-success').removeClass('uk-hidden').delay(700).fadeOut();
		        setTimeout(function() {
		        	window.location.href='/home';
		        }, 800);
        	},
        	error: function() {
        		alert('error');
        	}
        });
        // document.querySelector("#snack_bar").style.display = "none";

        // Hide alert after 3 seconds
        // showSnackBar();

        document.getElementById("login").reset();

    }
    function showSnackBar() {
        let x = document.getElementById("snack_bar");
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", "");
            window.location="../index.php";
        }, 10000);

    }
});

function clear() {
	$('input, textarea').val('');
}

$('input[type="search"]').on('keyup', function() {
 	let _var = $(this).val();
 	if (window.location.href.indexOf('home') < 0) {
 		window.location.href = '/home';
 	} else {
 		$.each($('.populate-here').children('div'), function(i, v) {
 			if($(this).text().toLowerCase().indexOf(_var.toLowerCase()) < 0 ) {
 				$(this).addClass('uk-hidden');
 			} else {
 				$(this).removeClass('uk-hidden');
 			}
 		});
 	}
 });
	function populate() {
		firebase.database().ref('products/').on('child_added', snap => {
			// body
			ann_body_html = '<div>';
          ann_body_html += '<div class="uk-inline">';
           ann_body_html +=   ' <img src="'+snap.val().img+'" alt="">';
             ann_body_html +=  '<a href="product/'+snap.key+'" class="blog-info" style="opacity: 0;">';
             ann_body_html +=   ' <div class="uk-overlay-primary uk-position-cover"></div>';
              ann_body_html +=  ' <div class="uk-overlay uk-position-center uk-light">';
               ann_body_html +=     ' <h3>'+snap.val().name+'</h3>';
               ann_body_html +=    '  <p class="uk-text-truncate">'+snap.val().description+'...<hr class="uk-hr"Read / Do More...</p>';
              ann_body_html +=  ' </div>';
              ann_body_html += '</a>';
        ann_body_html +=  ' </div>';
      ann_body_html += ' </div>';

      $('.products').prepend('<tr><td>'+snap.val().name+'</td><td>'+''+'</td></tr>');

			$('.populate-here').prepend(ann_body_html);
		});
		firebase.database().ref('requests/').on('child_added', snap => {
			// body
	  		$('.requests').prepend('<tr><td>'+snap.val().name+'</td><td>'+snap.val().message+'</td></tr>');
		});
	}

	let productRef = firebase.database().ref("products/");

    productRef.on("child_added", snapshot => {
        let obj = snapshot.val();
        let productName=obj.name;
        document.getElementById("product").value = productName;

        $.each(obj.comments, function(i, v) {
            let name=v.user;
             let comment=v.comment;
             console.log(rating);

             document.getElementById("name").value = name;
             document.getElementById("cusname").value = name;
             document.getElementById("cusfeed").value = comment;
        });

        $.each(obj.ratings,function (i,v) {
            let rating=v.rating;
            document.getElementById("rating").value = rating;

        });