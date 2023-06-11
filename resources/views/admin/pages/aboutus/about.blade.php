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
  {{-- <link rel="stylesheet" href="{{ asset('admin_assets/css/style.css') }}"> --}}
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
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  {{-- <a href="{{ url()->previous() }}"> 
                   <button style="margin-bottom:5%;" class="btn btn-primary mr-2"><i class="icon-arrow-left"></i> Back</button>
                  </a> --}}
                  <h4 class="card-title">Update About Desc. Image</h4>
                  <form 
                  action="{{ route('aboutus.UpdateDescImg') }}"
                  method="POST"
                  enctype="multipart/form-data"
                  class="forms-sample">
                  @csrf
                  <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="image" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" name="image" class="form-control file-upload-info" disabled value="" placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                      </span>
                    </div>
                  <p class="form-info">For best result, image height should be 810px.</p>
                  </div>

                    <button type="submit" name="submit" value="submit_home_header" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body image-container">
                  <h4 class="card-title">Current About Desc Image</h4>
                  <a href="{{ asset($aboutus[0]->aboutus_desc_img) }}" target="_block">
                  <img src="{{ asset($aboutus[0]->aboutus_desc_img) }}" alt="{{ request('page') }}">
                  </a>
                </div>
              </div>
            </div>



            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Default form</h4>
                  <p class="card-description">
                    Basic form layout
                  </p>
                  <form 
                  action="{{ route('home.UploadHeader') }}"
                  method="POST"
                  enctype="multipart/form-data"
                  class="forms-sample">
                  @csrf

                    <div class="form-group">
                      <label for="exampleInputUsername1">Caption</label>
                      <input type="text" name="caption" class="form-control" id="exampleInputUsername1" value="" placeholder="Caption" maxlength="50">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Description</label>
                      <textarea id='edit' name="description" style="margin-top: 30px;"  placeholder="Type some text">
                    </textarea>
                    <p class="form-info">For best result, keep description under 600 characters</p>
                    </div>


                    <button type="submit" name="submit" value="submit_home_header" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>


            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Default form</h4>
                  <p class="card-description">
                    Basic form layout
                  </p>
                  <form 
                  action="{{ route('home.UploadHeader') }}"
                  method="POST"
                  enctype="multipart/form-data"
                  class="forms-sample">
                  @csrf

                    <div class="form-group">
                      <label for="exampleInputUsername1">Caption</label>
                      <input type="text" name="caption" class="form-control" id="exampleInputUsername1" value="" placeholder="Caption" maxlength="50">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Description</label>
                      <textarea id='edit' name="description" style="margin-top: 30px;"  placeholder="Type some text">
                    </textarea>
                    <p class="form-info">For best result, keep description under 600 characters</p>
                    </div>


                    <button type="submit" name="submit" value="submit_home_header" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>


            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Default form</h4>
                  <p class="card-description">
                    Basic form layout
                  </p>
                  <form 
                  action="{{ route('home.UploadHeader') }}"
                  method="POST"
                  enctype="multipart/form-data"
                  class="forms-sample">
                  @csrf

                    <div class="form-group">
                      <label for="exampleInputUsername1">Caption</label>
                      <input type="text" name="caption" class="form-control" id="exampleInputUsername1" value="" placeholder="Caption" maxlength="50">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Description</label>
                      <textarea id='edit' name="description" style="margin-top: 30px;"  placeholder="Type some text">
                    </textarea>
                    <p class="form-info">For best result, keep description under 600 characters</p>
                    </div>


                    <button type="submit" name="submit" value="submit_home_header" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                  </form>
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
</body>

</html>
