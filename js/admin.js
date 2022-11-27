(function($) {
  "use strict"; // Start of use strict

  // Toggle the side navigation
  $("#sidebarToggle").click(function(e) {
    e.preventDefault();
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($window.width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).scroll(function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    event.preventDefault();
  });




 
// loader
	var loader = function() {
		setTimeout(function() { 
			if($('#per-loader').length > 0) {
				$('#per-loader').removeClass('show');
			}
		}, 1);
	};
	loader();
	
//pwd change
/*
$('#change_button').click(function(){
    var currentPassword = $('#currentPassword').val();
    var newPassword = $('#newPassword').val();
    var confirmNewPassword = $('#confirmNewPassword').val();
    if (newPassword == confirmNewPassword) {
      $.ajax ({
        url:"include/user.data.change.inc.php",
        method:"POST",
        data:{currentPassword:currentPassword, newPassword:newPassword},
        success:function(data){
          alert(data);
          location.relode();
        }
      });
    }else{
      alert("Confirm Password is incorrect");
    }
  });
*/






})(jQuery); // End of use strict