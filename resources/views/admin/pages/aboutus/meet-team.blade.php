<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
  <title>Home Header</title>
  <link href="../../admin_assets/vendors/froala/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="../../admin_assets/vendors/froala/froala_editor.pkgd.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <!-- base:css -->
  <link rel="stylesheet" href="../../admin_assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../admin_assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="../../admin_assets/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../admin_assets/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../admin_assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../admin_assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../admin_assets/images/favicon.png" />


    	<!-- Notification -->
	<!-- jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Toastr -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>





  <script src="../../admin_assets/vendor/tinymce/tinymce/tinymce.min.js" referrerpolicy="origin"></script>    
  <script>
      tinymce.init({
        selector: '#edit',
        plugins: 'wordcount',
        toolbar: 'wordcount',
        init_instance_callback: function (editor) {
      $(editor.getContainer()).find('button.tox-statusbar__wordcount').click();  // if you use jQuery
   }
      });


      tinymce.init({
      selector: '#edit',
      plugins: 'advlist autolink lists link image charmap preview anchor pagebreak code visualchars wordcount',
      toolbar: 'wordcount',
	  setup: function(editor) {
	  	var max = 200;
	    editor.on('submit', function(event) {
		  var numChars = tinymce.activeEditor.plugins.wordcount.body.getCharacterCount();
		  if (numChars > max) {
            alert("Only a maximum " + max + " characters are allowed.");
			event.preventDefault();
			return false;
		  }
		});
	  }
   });
  </script>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    @include('admin.pages.includes.topnav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
    @include('admin.pages.includes.sidebar')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Upload Team form</h4>
                  <p class="card-description">
                    New Team Member
                  </p>
                  <form 
                  action="{{ route('aboutus.uploadTeam') }}"
                  method="POST"
                  enctype="multipart/form-data"
                  class="forms-sample">
                  @csrf
                    <div class="form-group">
                      <label>Image</label>
                      <input type="file" name="image" class="file-upload-default" value="">
                      <div class="input-group col-xs-12">
                        <input type="text" name="image" class="form-control file-upload-info" disabled value="" placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    <p class="form-info">For best result, image height should be 400px </p>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Full Name</label>
                      <input type="text" name="full_name" class="form-control" id="exampleInputUsername1" value="{{ old('fullname') }}" placeholder="Full Name">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Job Title</label>
                      <input type="text" name="job_title" class="form-control" id="exampleInputUsername1" value="{{ old('caption') }}" placeholder="Job Title">
                    </div>

                    <div class="form-group row">
                      <div class="col">
                          <p class="mb-2"><img src="{{ asset('img/fb-24.png') }}"></p>
                        <label class="toggle-switch toggle-switch-success">
                          <input name="sm_facebook" type="checkbox" id="fb-toggle">
                          <span class="toggle-slider round"></span>
                        </label>                      
                      </div>
                      <div class="col">
                          <p class="mb-2"><img src="{{ asset('img/li-24.png') }}"></p>
                        <label class="toggle-switch toggle-switch-success">
                          <input name="sm_twitter" type="checkbox" id="li-toggle">
                          <span class="toggle-slider round"></span>
                        </label>                      
                      </div>
                      <div class="col">
                          <p class="mb-2"><img src="{{ asset('img/in-24.png') }}"></p>
                        <label class="toggle-switch toggle-switch-success">
                          <input name="sm_linkedin" type="checkbox" id="in-toggle">
                          <span class="toggle-slider round"></span>
                        </label>                      
                      </div>
                      <div class="col">
                        <p class="mb-2"><img src="{{ asset('img/tw-24.png') }}"></p>
                      <label class="toggle-switch toggle-switch-success">
                        <input name="instagram" type="checkbox" id="tw-toggle">
                        <span class="toggle-slider round"></span>
                      </label>                      
                    </div>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Facebook Link</label>
                      <input type="text" name="facebook" class="form-control" id="fb-link" value="{{ old('facebook') }}" disabled>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">LinkedIn Link</label>
                      <input type="text" name="linkedin" class="form-control" id="li-link" value="{{ old('linkedin') }}" disabled>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Instagram Link</label>
                      <input type="text" name="instagram" class="form-control" id="in-link" value="{{ old('instagram') }}" disabled>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Twitter Link</label>
                      <input type="text" name="twitter" class="form-control" id="tw-link" value="{{ old('twitter') }}" disabled>
                    </div>

                    <button type="submit" name="submit" value="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Team</h4>
                  <p class="card-description">
                    <!-- Add class <code>.table-hover</code> -->
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Job Title</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      @foreach ($teams as $team)
                      <tbody>
                          <tr id="row{{ $team->id }}">
                            <td class="py-1">
                              <b> {{ $team->name }} </b>
                            </td>
                          <td class="py-1">
                            <a href="{{ asset($team->team_img) }}" target="_block"> <img src="{{ asset($team->team_img) }}" alt="image"/> </a>
                          </td>
                          <td class="py-1">
                            <b> {{ $team->position }} </b>
                          </td>
                          <td>
                            <form id="logout-form" action="{{ route('aboutus.deleteTeam') }}" method="POST">
                              @csrf
                              <input type="text" name="id" value="{{ $team->id }}" hidden>
                              <button type="submit"  class="btn btn-inverse-danger btn-icon">
                              <i class="mdi mdi-delete"></i>
                              </button>
                            </form>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
      <!-- FOOTER STARTS HERE  -->

      @include('admin.pages.includes.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../admin_assets/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../admin_assets/js/off-canvas.js"></script>
  <script src="../../admin_assets/js/hoverable-collapse.js"></script>
  <script src="../../admin_assets/js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="../../admin_assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../admin_assets/vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="../../admin_assets/js/file-upload.js"></script>
  <script src="../../admin_assets/js/typeahead.js"></script>
  <script src="../../admin_assets/js/select2.js"></script>
  <!-- End custom js for this page-->


  <script>
    @if($errors->any())
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true,
        "showDuration": "300",
        "timeOut": "20000"
    }
    @foreach ( $errors->all() as $error)
            toastr.error("{{ $error }}");
    @endforeach
    @endif

    @if(session()->has('success'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true,
        "showDuration": "300",
        "timeOut": "20000"
    }
    toastr.error("{{ $success }}");
    @elseif (session()->has('failed'))
    toastr.error("{{ $failed }}");
    @endif
  </script>

  <script>
  function disableDonateBtn() {
  var donate_btn = document.getElementById("donate_checkbox");

  if(donate_btn.checked == true){
  document.getElementById("donate_btn").disabled = false;
  } else {
  document.getElementById("donate_btn").disabled = true;
  }
}


  function disableVideoLink() {
  var video_link = document.getElementById("video_checkbox");

  if(video_link.checked == true){
  document.getElementById("video_link").disabled = false;
  } else {
  document.getElementById("video_link").disabled = true;
  }
  }



function deleteHeader(headerID){
    let text = "Are you sure you want to delete this Header? \n This action can't be undone.";
    if (confirm(text) == true) {
    // let apiName = 'header/deleteHeader';
    document.getElementById("row"+headerID).remove();
    // $.get("../../ClassLib/deleteHeader.php", {headerID: headerID, apiName: apiName}, 
    // function(){
    //     toastr.options.positionClass = 'toast-top-center';
    //     toastr.options.closeButton = true;
    //     toastr.options.progressBar = true;
    //     toastr.options.timeOut = 30000;
    //     toastr.success('Header Deleted', 'Success');
    // });
  }
}

  </script>

</body>

<script>
  // var fbToggle = false;
$("#fb-toggle").on('change', function() {
    if ($(this).is(':checked')) {
        document.getElementById("fb-link").disabled = false;
    }
    else {
       document.getElementById("fb-link").disabled = true;
    }
});


$("#tw-toggle").on('change', function() {
    if ($(this).is(':checked')) {
        document.getElementById("tw-link").disabled = false;
    }
    else {
       document.getElementById("tw-link").disabled = true;
    }
});

$("#li-toggle").on('change', function() {
    if ($(this).is(':checked')) {
        document.getElementById("li-link").disabled = false;
    }
    else {
       document.getElementById("li-link").disabled = true;
    }
});

$("#in-toggle").on('change', function() {
    if ($(this).is(':checked')) {
        document.getElementById("in-link").disabled = false;
    }
    else {
       document.getElementById("in-link").disabled = true;
    }
});

$("#yt-toggle").on('change', function() {
    if ($(this).is(':checked')) {
        document.getElementById("yt-link").disabled = false;
    }
    else {
       document.getElementById("yt-link").disabled = true;
    }
});

$("#flb-toggle").on('change', function() {
    if ($(this).is(':checked')) {
        document.getElementById("flb-link").disabled = false;
    }
    else {
       document.getElementById("flb-link").disabled = true;
    }
});

$("#tk-toggle").on('change', function() {
    if ($(this).is(':checked')) {
        document.getElementById("tk-link").disabled = false;
    }
    else {
       document.getElementById("tk-link").disabled = true;
    }
});
</script>

</html>
