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
                                                                class="btn btn-primary btn-sm details">View
                                                                Documents</a>
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

                <div class="modal modal-blur fade" id="modal-success" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            <div class="modal-status bg-primary"></div>
                            <div class="modal-body text-center py-4">
                                <i class="fas fa-info-circle fa-3x text-primary mb-2"></i>
                                <h3>Transaction Details</h3>
                                <p class="trx_details"></p>
                                <ul class="list-group mt-2">

                                </ul>
                            </div>
                            <div class="modal-footer">
                                <div class="w-100">
                                    <div class="row">
                                        <div class="col"><a href="#" class="btn w-100"
                                                data-bs-dismiss="modal">
                                                Close </a></div>
                                    </div>
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
        'use strict';
        $('.reason').on('click', function() {
            $('#modal-reason').find('.reason-text').val($(this).data('reason'))
            $('#modal-reason').modal('show')
        })

        var theme = localStorage.getItem("tablerTheme");
        var element = $(document).find('.page-title');
        if (theme == 'dark') {
            element.css('color', 'white');
            $(document).find('.kyc__text').removeClass('text-dark').addClass('text-light')
            $(document).find('.file-type').css('color', '#67737e')
            $(document).find('.language-bar').css('color', '#f7fafd')
            $(document).find('td').addClass('res')
        } else {
            element.css('color', 'black');
        }
    </script>

    <script src="https://product.geniusocean.com/genius-wallet/assets/admin/js/sweetalert2@9.js"></script>






    <script>
        function toast(type, msg) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                onOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: type,
                title: msg
            })
        }

        function amount(amount, type) {
            if (type == 2) {
                return amount.toFixed(8);
            } else {
                return amount.toFixed();
            }
        }
    </script>
    <script>
        'use strict';

        $('.details').on('click', function() {
            var url = "https://product.geniusocean.com/genius-wallet/user/transaction/details" + '/' + $(this).data(
                'data').id
            $('.trx_details').text($(this).data('data').details)
            $.get(url, function(res) {
                if (res == 'empty') {
                    $('.list-group').html('<p>No details found!</p>')
                } else {
                    $('.list-group').html(res)
                }
                $('#modal-success').modal('show')
            })
        })
    </script>

</body>

</html>
