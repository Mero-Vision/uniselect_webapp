<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Student Test Score</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @include('students.layouts.header')

</head>

<body>
    <div class="wrapper">
        @include('students.layouts.top_nav')
        @include('students.layouts.nav')
        <div class="page-wrapper">
            <div class="page-body">
                <div class="container-xl">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="card">
                                <h3 class="text-center p-2">Upload Application Documents</h3>
                                <div class="card-body">
                                    <form action="{{ url('student/upload-documents') }}" id="form" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{$application->id}}" name="application_id"/>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">Passport Image</div>
                                                <input type="file" name="passport"
                                                    class="form-control amount shadow-none"
                                                    onchange="passportImagePreview(event)">
                                                @error('passport')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                <div class="mb-3 mt-2">
                                                    <img id="passportPreview" src="#"
                                                        alt="Passport Image Preview"
                                                        style="width: 200px; display: none;" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">Offer Letter Image</div>
                                                <input type="file" name="offer_letter"
                                                    class="form-control amount shadow-none"
                                                    onchange="offer_letterPreviewImage(event)">
                                                @error('offer_letter')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                <div class="mb-3 mt-2">
                                                    <img id="offerLetterPreview" src="#"
                                                        alt="Passport Image Preview"
                                                        style="width: 200px; display: none;" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">Transcript Certificate</div>
                                                <input type="file" name="transcript_certificate"
                                                    class="form-control amount shadow-none"
                                                    onchange="transcriptCertificatePreviewImage(event)">
                                                @error('transcript_certificate')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                <div class="mb-3 mt-2">
                                                    <img id="transcriptCertificatePreview" src="#"
                                                        alt="Image Preview" style="width: 200px; display: none;" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">Language Test Score</div>
                                                <input type="file" name="language_test_score"
                                                    class="form-control amount shadow-none"
                                                    onchange="languageTestPreviewImage(event)">
                                                @error('language_test_score')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                <div class="mb-3 mt-2">
                                                    <img id="languageTestPreview" src="#" alt="Image Preview"
                                                        style="width: 200px; display: none;" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">Bank Statement</div>
                                                <input type="file" name="bank_statement"
                                                    class="form-control amount shadow-none"
                                                    onchange="bankStatementPreviewImage(event)">
                                                @error('bank_statement')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                <div class="mb-3 mt-2">
                                                    <img id="bankStatementPreview" src="#" alt="Image Preview"
                                                        style="width: 200px; display: none;" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">Tuition Fee Payment</div>
                                                <input type="file" name="tuition_fee_payment"
                                                    class="form-control amount shadow-none"
                                                    onchange="tuitionfeepaymentPreviewImage(event)">
                                                @error('tuition_fee_payment')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                <div class="mb-3 mt-2">
                                                    <img id="tuitionfeepaymentPreview" src="#"
                                                        alt="Image Preview" style="width: 200px; display: none;" />
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <div class="form-label">&nbsp;</div>
                                                <button type="submit" class="btn btn-primary w-100">
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>





                    </div>


                </div>
            </div>
        </div>
    </div>



    <script src="{{ url('assets/students/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/students/js/apexcharts.min.js') }}"></script>
    <script src="{{ url('assets/students/js/tabler.min.js') }}"></script>
    <script src="{{ url('assets/students/js/demo.min.js') }}"></script>

    <script>
        function passportImagePreview(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('passportPreview');
                output.src = reader.result;
                output.style.display = "block";
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function offer_letterPreviewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('offerLetterPreview');
                output.src = reader.result;
                output.style.display = "block";
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function transcriptCertificatePreviewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('transcriptCertificatePreview');
                output.src = reader.result;
                output.style.display = "block";
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function languageTestPreviewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('languageTestPreview');
                output.src = reader.result;
                output.style.display = "block";
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function bankStatementPreviewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('bankStatementPreview');
                output.src = reader.result;
                output.style.display = "block";
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function tuitionfeepaymentPreviewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('tuitionfeepaymentPreview');
                output.src = reader.result;
                output.style.display = "block";
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>


</body>

</html>
