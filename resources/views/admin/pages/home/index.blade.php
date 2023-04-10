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
 
  //  function codeAddress() {
  //       $(document).ready(function() {
  //       toastr.options.positionClass = 'toast-top-center';
  //       toastr.options.closeButton = true;
  //       toastr.options.progressBar = true;
  //       toastr.options.timeOut = 30000;
  //       toastr.success('Footer Updated', '');
  //   });
  //       }

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
                      <label>File upload</label>
                      <input type="file" name="slider_img" class="file-upload-default" value="">
                      <div class="input-group col-xs-12">
                        <input type="text" name="slider_img" class="form-control file-upload-info" disabled value="" placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    <p class="form-info">For best result, image height should be 810px</p>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Caption</label>
                      <input type="text" name="caption" class="form-control" id="exampleInputUsername1" value="" placeholder="Caption" maxlength="50">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Description</label>
                      <textarea id='edit' name="desc" style="margin-top: 30px;"  placeholder="Type some text">
                      Placehoder
                    </textarea>
                    <p class="form-info">For best result, keep description under 600 characters</p>
                    </div>


                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" id="donate_checkbox" class="form-check-input" onclick="disableDonateBtn()"> 
                              Donate Button
                            </label>
                          </div>
                        </div>
                      </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="form-check">
                          <label class="form-check-label">
                              <input type="checkbox" id="video_checkbox" class="form-check-input" onclick="disableVideoLink()">
                            Video Button
                          </label>
                        </div>
                      </div>
                    </div>
                    </div>

                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Donation Cause</label>
                    <select class="form-control form-control-lg" name="donation_cause" id="donate_btn" disabled>
                      @foreach ($causesData as $causes)
                    <option value="{{ $causes->id }}">{{ $causes->caption }}</option>
                    @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                      <label for="exampleInputUsername1">Youtube URL</label>
                      <input type="text" name="video_link" class="form-control" id="video_link" placeholder="Youtube URL" disabled>
                  </div>

                    <button type="submit" name="submit" value="submit_home_header" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Homepage Slides</h4>
                  <p class="card-description">
                    <!-- Add class <code>.table-hover</code> -->
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Image Link</th>
                          <th>Donate Button</th>
                          <th>Video Button</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      @foreach ($headersData as $header)
                      <tbody>
                          <tr id="{{ $header->id }}">
                          <td class="py-1">
                            <img src="../../admin_assets/images/uploads/homeHeaders/{{ $header->home_slider_img }}" alt="image"/>
                          </td>
                          @if ($header->video_link == null)
                            <td class="text-danger"><i class="mdi mdi-close"></i></td>
                            @else
                            <td class="text-success"><i class="mdi mdi-check"></i></td>
                          @endif

                          @if ($header->donation_cause == null)
                          <td class="text-danger"><i class="mdi mdi-close"></i></td>
                          @else
                          <td class="text-success"><i class="mdi mdi-check"></i></td>
                          @endif
                          


                          <td>
                            <button type="button" onclick="deleteHeader()" class="btn btn-inverse-danger btn-icon">
                            <i class="mdi mdi-delete"></i>
                            </button>
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
    let apiName = 'header/deleteHeader';
    document.getElementById("row"+headerID).remove();
    $.get("../../ClassLib/deleteHeader.php", {headerID: headerID, apiName: apiName}, 
    function(){
        toastr.options.positionClass = 'toast-top-center';
        toastr.options.closeButton = true;
        toastr.options.progressBar = true;
        toastr.options.timeOut = 30000;
        toastr.success('Header Deleted', 'Success');
    });
  }
}

  </script>

</body>

</html>
