<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Preskool - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
    <meta name="author" content="Dreams technologies - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>View Student Application</title>

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
                        <h3 class="mb-1">View Application</h3>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('admin/dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">View Application</li>
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
                                        <h4 class="text-dark">Student Application Data</h4>
                                    </div>
                                </div>
                                <div class="card-body pb-1">

                                    <div class="row row-cols-xxl-5 row-cols-md-6">

                                        <div class="col-xxl-12 col-xl-12  col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title">Application Documents</h5>
                                                </div>
                                                <div class="card-body">
                                                    <ul
                                                        class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified mb-3">
                                                        <li class="nav-item"><a class="nav-link active"
                                                                href="#solid-rounded-justified-tab1"
                                                                data-bs-toggle="tab">Passport</a></li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="#solid-rounded-justified-tab2"
                                                                data-bs-toggle="tab">Offer Letter</a></li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="#solid-rounded-justified-tab3"
                                                                data-bs-toggle="tab">Transcript Certificate</a></li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="#solid-rounded-justified-tab4"
                                                                data-bs-toggle="tab">Language Test Score</a></li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="#solid-rounded-justified-tab5"
                                                                data-bs-toggle="tab">Bank Statement</a></li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="#solid-rounded-justified-tab6"
                                                                data-bs-toggle="tab">Tuition Fee Payment</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane show active"
                                                            id="solid-rounded-justified-tab1">
                                                            <label class="form-label">Passport</label>
                                                            <div class="mb-3">
                                                                <img src="{{ $application->getFirstMediaUrl('passport') }}"
                                                                    class="img img-fluid" style="max-width: 450px">
                                                            </div>
                                                            @if (isset($passportExtractedText))
                                                                <div class="alert alert-info">
                                                                    <h5>Extracted Text:</h5>
                                                                    <pre class="bg-light p-3 rounded">{{ $passportExtractedText }}</pre>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="tab-pane" id="solid-rounded-justified-tab2">
                                                            <label class="form-label">Offer Letter</label>
                                                            <div class="mb-3">
                                                                <img src="{{ $application->getFirstMediaUrl('offer_letter') }}"
                                                                    class="img img-fluid" style="max-width: 450px">
                                                            </div>
                                                            @if (isset($offerLetterExtractedText))
                                                                <div class="alert alert-info">
                                                                    <h5>Extracted Text:</h5>
                                                                    <pre class="bg-light p-3 rounded">{{ $offerLetterExtractedText }}</pre>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="tab-pane" id="solid-rounded-justified-tab3">
                                                            <label class="form-label">Transcript Certificate</label>
                                                            <div class="mb-3">
                                                                <img src="{{ $application->getFirstMediaUrl('transcript_certificate') }}"
                                                                    class="img img-fluid" style="max-width: 450px">
                                                            </div>
                                                            @if (isset($transcriptCertificateExtractedText))
                                                                <div class="alert alert-info">
                                                                    <h5>Extracted Text:</h5>
                                                                    <pre class="bg-light p-3 rounded">{{ $transcriptCertificateExtractedText }}</pre>
                                                                </div>
                                                            @endif
                                                        </div>

                                                        <div class="tab-pane" id="solid-rounded-justified-tab4">
                                                            <label class="form-label">Transcript Certificate</label>
                                                            <div class="mb-3">
                                                                <img src="{{ $application->getFirstMediaUrl('language_test_score') }}"
                                                                    class="img img-fluid" style="max-width: 450px">
                                                            </div>
                                                            @if (isset($languageTestScoreExtractedText))
                                                                <div class="alert alert-info">
                                                                    <h5>Extracted Text:</h5>
                                                                    <pre class="bg-light p-3 rounded">{{ $languageTestScoreExtractedText }}</pre>
                                                                </div>
                                                            @endif
                                                        </div>

                                                        <div class="tab-pane" id="solid-rounded-justified-tab5">
                                                            <label class="form-label">Bank Statement</label>
                                                            <div class="mb-3">
                                                                <img src="{{ $application->getFirstMediaUrl('bank_statement') }}"
                                                                    class="img img-fluid" style="max-width: 450px">
                                                            </div>
                                                            @if (isset($bankStatementExtractedText))
                                                                <div class="alert alert-info">
                                                                    <h5>Extracted Text:</h5>
                                                                    <pre class="bg-light p-3 rounded">{{ $bankStatementExtractedText }}</pre>
                                                                </div>
                                                            @endif
                                                        </div>

                                                        <div class="tab-pane" id="solid-rounded-justified-tab6">
                                                            <label class="form-label">Tuition Fees Payment</label>
                                                            <div class="mb-3">
                                                                <img src="{{ $application->getFirstMediaUrl('tuition_fee_payment') }}"
                                                                    class="img img-fluid" style="max-width: 450px">
                                                            </div>
                                                            @if (isset($tuitionFeePaymentExtractedText))
                                                                <div class="alert alert-info">
                                                                    <h5>Extracted Text:</h5>
                                                                    <pre class="bg-light p-3 rounded">{{ $tuitionFeePaymentExtractedText }}</pre>
                                                                </div>
                                                            @endif
                                                        </div>




                                                    </div>
                                                </div>
                                            </div>
                                        </div>







                                        <div class="col-xxl-4 col-xl-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Passport</label>
                                                <img src="{{ $application->getFirstMediaUrl('passport') }}">
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






</body>

</html>
