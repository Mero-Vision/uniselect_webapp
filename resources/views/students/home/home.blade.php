<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @include('students.layouts.header')

</head>

<body>
    <div class="wrapper">
        @include('students.layouts.top_nav')
        @include('students.layouts.nav')
        <div class="page-wrapper">
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header text-white d-print-none">
                    <div class="row align-items-center">
                        <div class="col-12 mb-3">
                            <div class="p-2 rounded-3 review">
                                <h4 class="kyc__text text-center text-danger">
                                    {{ $warningMessage }}</h4>
                            </div>
                        </div>
                        <div class="col">
                            <h2 class="page-title">
                                Dashboard </h2>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-auto ms-auto d-print-none">
                            <div class="btn-list">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="container-xl">
                    <div class="row mb-3">

                        <div class="col-sm-6 col-xl-3 mb-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="text-white avatar">
                                                <img src="{{ url('assets/students/img/application.png') }}" />
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                {{ $totalApplications }}
                                            </div>
                                            <div class="text-muted">
                                                Total Application </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3 mb-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="text-white avatar">
                                                <img src="{{ url('assets/students/img/graduation.png') }}" />
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                {{ $totalUniversity }}
                                            </div>
                                            <div class="text-muted">
                                                Total Universities </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3 mb-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="text-white avatar">
                                                <img src="{{ url('assets/students/img/course.png') }}" />
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                {{ $totalCourses }}
                                            </div>
                                            <div class="text-muted">
                                                Total Courses </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3 mb-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="text-white avatar">
                                                <img src="{{ url('assets/students/img/contact.png') }}" />
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                1
                                            </div>
                                            <div class="text-muted">
                                                Contact Us </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row row-deck row-cards">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">My Applications</h3>
                                </div>

                                <div class="table-responsive">
                                    <table class="table card-table table-vcenter text-nowrap datatable">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Applied University</th>
                                                <th>Applied Course</th>
                                                <th>Program Level</th>
                                                <th>Application Status</th>
                                                <th>Document Status</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($applications as $data)
                                                <tr>
                                                    <td data-label="Date">{{ $data->created_at }}</td>
                                                    <td data-label="Description">
                                                        {{ $data->university->name }}
                                                    </td>
                                                    <td>
                                                        {{ $data->course->name }}
                                                    </td>
                                                    <td data-label="Amount">
                                                        <span
                                                            class="text-danger">{{ $data->course->program_level }}</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge 
                                                            {{ $data->application_status == 'pending' ? 'bg-danger' : '' }}
                                                            {{ $data->application_status == 'approved' ? 'bg-success' : '' }}">
                                                            {{ ucfirst($data->application_status) }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge 
                                                            {{ $data->document_status == 'pending' ? 'bg-danger' : '' }}
                                                            {{ $data->document_status == 'submitted' ? 'bg-primary' : '' }}
                                                            {{ $data->document_status == 'approved' ? 'bg-success' : '' }}">
                                                            {{ ucfirst($data->document_status) }}
                                                        </span>
                                                    </td>


                                                    <td data-label="Details" class="text-end">
                                                        @if ($data->document_status == 'pending')
                                                            <a href="{{ url('student/applications') }}/{{ $data->id }}"
                                                                class="btn btn-primary btn-sm details">Upload
                                                                Documents</a>
                                                        @elseif (in_array($data->document_status, ['submitted', 'approved']))
                                                            <a href="{{ url('student/applications') }}/{{ $data->id }}"
                                                                class="btn btn-primary btn-sm details"
                                                                data-bs-toggle="modal" data-bs-target="#modal-success"
                                                                data-university="{{ $data->university->name }}"
                                                                data-course="{{ $data->course->name }}"
                                                                data-program-level="{{ $data->course->program_level }}"
                                                                data-application-status="{{ $data->application_status }}"
                                                                data-document-status="{{ $data->document_status }}"
                                                                data-passport="{{ $data->getFirstMediaUrl('passport') }}"
                                                                data-offer-letter="{{ $data->getFirstMediaUrl('offer_letter') }}"
                                                                data-transcript="{{ $data->getFirstMediaUrl('transcript_certificate') }}"
                                                                data-language-test="{{ $data->getFirstMediaUrl('language_test_score') }}"
                                                                data-bank-statement="{{ $data->getFirstMediaUrl('bank_statement') }}"
                                                                data-tuition-fee="{{ $data->getFirstMediaUrl('tuition_fee_payment') }}">
                                                                View Documents
                                                            </a>
                                                        @endif

                                                    </td>
                                                </tr>
                                            @empty
                                            @endforelse

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="modal modal-blur fade" id="modal-success" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-status bg-primary"></div>
                <div class="modal-body text-center py-4">
                    <i class="fas fa-info-circle fa-3x text-primary mb-2"></i>
                    <h3>Application Details</h3>
                    <p class="application_details"></p>
                    <ul class="list-group mt-2">
                        <li class="list-group-item"><strong>University:</strong> <span class="university_name"></span>
                        </li>
                        <li class="list-group-item"><strong>Course:</strong> <span class="course_name"></span></li>
                        <li class="list-group-item"><strong>Program Level:</strong> <span
                                class="program_level"></span></li>
                        <li class="list-group-item"><strong>Application Status:</strong> <span
                                class="application_status"></span></li>
                        <li class="list-group-item"><strong>Document Status:</strong> <span
                                class="document_status"></span></li>
                    </ul>

                    <!-- Document Previews -->
                    <div class="mt-4">
                        <h5>Uploaded Documents</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-label">Passport Image</div>
                                <img id="modalPassportPreview" src="#" alt="Passport Image Preview"
                                    style="width: 100%; display: none;" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-label">Offer Letter</div>
                                <img id="modalOfferLetterPreview" src="#" alt="Offer Letter Preview"
                                    style="width: 100%; display: none;" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-label">Transcript Certificate</div>
                                <img id="modalTranscriptPreview" src="#" alt="Transcript Certificate Preview"
                                    style="width: 100%; display: none;" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-label">Language Test Score</div>
                                <img id="modalLanguageTestPreview" src="#" alt="Language Test Score Preview"
                                    style="width: 100%; display: none;" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-label">Bank Statement</div>
                                <img id="modalBankStatementPreview" src="#" alt="Bank Statement Preview"
                                    style="width: 100%; display: none;" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-label">Tuition Fee Payment</div>
                                <img id="modalTuitionFeePreview" src="#" alt="Tuition Fee Payment Preview"
                                    style="width: 100%; display: none;" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="w-100">
                        <div class="row">
                            <div class="col"><a href="#" class="btn w-100"
                                    data-bs-dismiss="modal">Close</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('modal-success');
            modal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget; // Button that triggered the modal
                var university = button.getAttribute('data-university');
                var course = button.getAttribute('data-course');
                var programLevel = button.getAttribute('data-program-level');
                var applicationStatus = button.getAttribute('data-application-status');
                var documentStatus = button.getAttribute('data-document-status');

                // Media URLs
                var passport = button.getAttribute('data-passport');
                var offerLetter = button.getAttribute('data-offer-letter');
                var transcript = button.getAttribute('data-transcript');
                var languageTest = button.getAttribute('data-language-test');
                var bankStatement = button.getAttribute('data-bank-statement');
                var tuitionFee = button.getAttribute('data-tuition-fee');

                // Update modal content
                modal.querySelector('.university_name').textContent = university;
                modal.querySelector('.course_name').textContent = course;
                modal.querySelector('.program_level').textContent = programLevel;
                modal.querySelector('.application_status').textContent = applicationStatus;
                modal.querySelector('.document_status').textContent = documentStatus;

                // Update media previews
                updateMediaPreview('modalPassportPreview', passport);
                updateMediaPreview('modalOfferLetterPreview', offerLetter);
                updateMediaPreview('modalTranscriptPreview', transcript);
                updateMediaPreview('modalLanguageTestPreview', languageTest);
                updateMediaPreview('modalBankStatementPreview', bankStatement);
                updateMediaPreview('modalTuitionFeePreview', tuitionFee);
            });

            function updateMediaPreview(elementId, mediaUrl) {
                var element = document.getElementById(elementId);
                if (mediaUrl) {
                    element.src = mediaUrl;
                    element.style.display = 'block';
                } else {
                    element.style.display = 'none';
                }
            }
        });
    </script>


    <script src="{{ url('assets/students/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/students/js/apexcharts.min.js') }}"></script>
    <script src="{{ url('assets/students/js/tabler.min.js') }}"></script>
    <script src="{{ url('assets/students/js/demo.min.js') }}"></script>




</body>

</html>
