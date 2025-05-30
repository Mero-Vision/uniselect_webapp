<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Preskool - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
    <meta name="author" content="Dreams technologies - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Create University</title>

    @include('admin.layout.header')
    <link rel="stylesheet" href="{{ url('assets/admin/richtexteditor/rte_theme_default.css') }}" />
    <script type="text/javascript" src="{{ url('assets/admin/richtexteditor/rte.js') }}"></script>
    <script type="text/javascript" src='{{ url('assets/>admin/richtexteditor/plugins/all_plugins.js') }}'></script>


</head>

<body>

    <div id="global-loader">
        <div class="page-loader"></div>
    </div>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        @include('admin.layout.nav')

        @include('admin.layout.sidebar')



        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content content-two">

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between mb-3">
                    <div class="my-auto mb-2">
                        <h3 class="mb-1">Add University</h3>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/dashboard')}}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ url('admin/university') }}">University</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Add University</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">

                    <div class="col-md-12">

                        <form action="{{ url('admin/university/create-university') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <!-- University Information -->
                            <div class="card">
                                <div class="card-header bg-light">
                                    <div class="d-flex align-items-center">
                                        <span class="bg-white avatar avatar-sm me-2 text-gray-7 flex-shrink-0">
                                            <i class="ti ti-info-square-rounded fs-16"></i>
                                        </span>
                                        <h4 class="text-dark">University Information</h4>
                                    </div>
                                </div>
                                <div class="card-body pb-1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="d-flex align-items-center flex-wrap row-gap-3 mb-3">
                                                <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border border-dashed me-2 flex-shrink-0 text-dark frames"
                                                    id="image-preview">
                                                    <i class="ti ti-photo-plus fs-16"></i>
                                                </div>
                                                <div class="profile-upload">
                                                    <div class="profile-uploader d-flex align-items-center">
                                                        <div class="drag-upload-btn mb-3">
                                                            Upload
                                                            <input type="file" class="form-control image-sign"
                                                                id="image-upload" name="university_image">
                                                        </div>
                                                    </div>
                                                    <p class="fs-12">Upload image size 2MB, Format JPG, PNG, SVG</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-cols-xxl-5 row-cols-md-6">

                                        <div class="col-xxl-4 col-xl-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">University Name</label>
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Phone No</label>
                                                <input type="number" class="form-control" name="phone">
                                            </div>
                                        </div>


                                        <div class="col-xxl-4 col-xl-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Country</label>
                                                <select class="select" name="country_id">
                                                    @foreach ($countries as $data)
                                                        <option value="{{$data->id}}">{{ $data->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-xl-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control" name="address">
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-xl-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">City</label>
                                                <input type="text" class="form-control" name="city">
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-xl-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Website</label>
                                                <input type="text" class="form-control" name="website">
                                            </div>
                                        </div>



                                        <div class="col-xxl-12 col-xl-12">
                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <input name="description" id="inp_htmlcode" type="hidden" />
                                                <div id="div_editor1" class="richtexteditor">
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /Personal Information -->










                            <div class="">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>
        <!-- /Page Wrapper -->



    </div>
    <!-- /Main Wrapper -->




    @include('admin.layout.footer')

   

    <script>
        var editor1 = new RichTextEditor(document.getElementById("div_editor1"));
        editor1.attachEvent("change", function () {
            document.getElementById("inp_htmlcode").value = editor1.getHTMLCode();
        });
    </script>

    <script>
        document.getElementById('image-upload').addEventListener('change', function(event) {
            const file = event.target.files[0]; // Get the selected file
            const previewContainer = document.getElementById('image-preview');

            if (file) {
                const reader = new FileReader(); // Create a FileReader to read the file

                reader.onload = function(e) {
                    // Create an image element and set its source to the uploaded file
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.maxWidth = '100%';
                    img.style.maxHeight = '100%';

                    // Clear the preview container and append the new image
                    previewContainer.innerHTML = '';
                    previewContainer.appendChild(img);
                };

                reader.readAsDataURL(file); // Read the file as a data URL
            } else {
                // If no file is selected, reset the preview container
                previewContainer.innerHTML = '<i class="ti ti-photo-plus fs-16"></i>';
            }
        });
    </script>


</body>

</html>
