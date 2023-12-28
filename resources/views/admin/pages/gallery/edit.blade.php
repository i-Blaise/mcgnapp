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
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Upload Gallery Image</h4>
                  <p class="card-description">
                    One at a time - for now
                  </p>
                  <form 
                  action="{{ route('upload.gallery.image') }}"
                  method="POST"
                  enctype="multipart/form-data"
                  class="forms-sample">
                  @csrf
                  <input type="text" name="category" class="form-control" value="{{ isset($galleryCat[0]) ? $galleryCat[0]->category : '' }}" hidden>
                  <input type="text" name="category_id" class="form-control" value="{{ isset($galleryCat[0]) ? $galleryCat[0]->category_id : '' }}" hidden>
                    <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="image" class="file-upload-default" value="">
                      <div class="input-group col-xs-12">
                        <input type="text" name="image" class="form-control file-upload-info" disabled value="" placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    <p class="form-info">For best result, image height should be 810px </p>
                    </div>

                    <button type="submit" name="submit" value="submit_home_header" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>


            {{-- <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Gallery {{ ucwords($galleries[0]->category) }} Images</h4>
                  <p class="card-description">
                    <!-- Add class <code>.table-hover</code> -->
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Image</th>
                          <th>Image Album</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      @foreach ($galleries as $gallery)
                      <tbody>
                          <tr id="{{ $gallery->id }}">
                          <td class="py-1">
                            <a href="../../admin_assets/images/uploads/galleryImages/{{ $gallery->image }}" target="_block"> 
                            <img src="../../admin_assets/images/uploads/galleryImages/{{ $gallery->image }}" alt="image"/> </a>
                          </td>
                          <td>
                            <b>{{ $gallery->category }}</b>
                          </td>
                          <td>
                            <form id="logout-form" action="{{ route('delete.image') }}" method="POST">
                              @csrf
                              <input type="text" name="id" value="{{ $gallery->id }}" hidden>
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
            </div> --}}


          </div>


          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title">Num of Images:</h1>
                  <h2 class="card-description">
                   {{ $numOfImages }}
                  </h2>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            @foreach ($galleries as $gallery )
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body image-container">
                <h4 class="card-title">Gallery {{ ucwords($galleries[0]->category) }} Images</h4>
                <a href="../../admin_assets/images/uploads/galleryImages/{{ $gallery->image }}" target="_block">
                <img src="../../admin_assets/images/uploads/galleryImages/{{ $gallery->image }}" alt="{{ request('page') }}">
                </a>
                <form id="logout-form" action="{{ route('delete.image') }}" method="POST" style="margin: 10px"> 
                    @csrf
                    <input type="text" name="id" value="{{ $gallery->id }}" hidden>
                    <button type="submit" class="btn btn-danger btn-icon-text">
                        <i class="mdi mdi-delete btn-icon-prepend"></i>                                                    
                        Delete Image
                      </button>
                  </form>
              </div>
            </div>
          </div>
          @endforeach
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
