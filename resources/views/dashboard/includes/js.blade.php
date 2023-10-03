<script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
<script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="admin/assets/js/off-canvas.js"></script>
<script src="admin/assets/js/hoverable-collapse.js"></script>
<script src="admin/assets/js/misc.js"></script>
<script src="admin/assets/js/settings.js"></script>
<script src="admin/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="admin/assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
<script>
    $(document).ready(function(){
      // Add a timeout function to hide the alert after 2 seconds
      setTimeout(function(){
        $("#myAlert").alert('close');
      }, 4000);
    });
    </script>
    
<script>
  $( '#prepend-text-multiple-field' ).select2( {
      theme: "bootstrap-5",
      width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
      placeholder: $( this ).data( 'placeholder' ),
      closeOnSelect: false,
  } );
  // Get references to the input and image elements
  const fileInput = document.getElementById('image');
  const previewImage = document.getElementById('previewImage');
  
  // Add an event listener to the file input
  fileInput.addEventListener('change', function () {
      // Check if a file is selected
      if (fileInput.files && fileInput.files[0]) {
          // Create a FileReader object
          const reader = new FileReader();
  
          // Set up the onload event handler
          reader.onload = function (e) {
              // Set the src attribute of the image element to the loaded data URL
              previewImage.src = e.target.result;
              // Display the image
              previewImage.style.display = 'block';
          };
  
          // Read the selected file as a Data URL
          reader.readAsDataURL(fileInput.files[0]);
      }
  });
  
  </script>
  