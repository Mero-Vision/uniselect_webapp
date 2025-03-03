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
                                <h4 class="text-dark kyc__text text-center"><i class="fas fa-search-location"></i>
                                    Your KYC data is currently under reviewing.</h4>
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
                                                <img src="{{url('assets/students/img/application.png')}}" />
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                12 <sup class="text-danger">*</sup>
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
                                                <img src="{{url('assets/students/img/graduation.png')}}" />
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                {{$totalUniversity}}
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
                                                <img src="{{url('assets/students/img/course.png')}}" />
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                {{$totalCourses}}
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
                                                <img src="{{url('assets/students/img/contact.png')}}" />
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                1 <sup class="text-danger">*</sup>
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
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">My Applications</h3>
                                </div>

                                <div class="table-responsive">
                                    <table class="table card-table table-vcenter text-nowrap datatable">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Description</th>
                                                <th>Remark</th>
                                                <th>Amount</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="Date">10-Feb-2025</td>
                                                <td data-label="Description">
                                                    Bedfordshire
                                                </td>
                                                <td data-label="Remark">
                                                    <span class="badge badge-dark">University</span>
                                                </td>
                                                <td data-label="Amount">
                                                    <span class="text-danger">500</span>
                                                </td>
                                                <td data-label="Details" class="text-end">
                                                    <button class="btn btn-primary btn-sm details"
                                                        data-data="{&quot;id&quot;:4147,&quot;trnx&quot;:&quot;IMGNKNQWUMS2&quot;,&quot;user_id&quot;:&quot;51&quot;,&quot;user_type&quot;:&quot;1&quot;,&quot;currency_id&quot;:&quot;10&quot;,&quot;wallet_id&quot;:null,&quot;charge&quot;:&quot;171.6337000000&quot;,&quot;amount&quot;:&quot;6.0000000000&quot;,&quot;remark&quot;:&quot;money_exchange&quot;,&quot;type&quot;:&quot;-&quot;,&quot;details&quot;:&quot;Exchanged money from INR to BDT&quot;,&quot;invoice_num&quot;:null,&quot;created_at&quot;:&quot;2025-02-10T12:17:03.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-02-10T12:17:03.000000Z&quot;,&quot;currency&quot;:{&quot;id&quot;:10,&quot;default&quot;:&quot;0&quot;,&quot;symbol&quot;:&quot;\u20b9&quot;,&quot;code&quot;:&quot;INR&quot;,&quot;curr_name&quot;:&quot;Indian Rupee&quot;,&quot;type&quot;:&quot;1&quot;,&quot;status&quot;:&quot;1&quot;,&quot;rate&quot;:&quot;85.7868500000&quot;,&quot;created_at&quot;:&quot;2022-01-25T19:28:23.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-01-01T13:21:26.000000Z&quot;}}">Details</button>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card wallet__card">
                                <div class="card-header">
                                    <h4>Login Activity</h4>
                                </div>
                                <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                                    <div class="divide-y">
                                        <div>
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <span class="bg-blue text-white avatar">
                                                        1 hr ago
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <div class="font-weight-medium">
                                                        Device: Mobile
                                                    </div>
                                                    <div class="text-muted">
                                                        Browser: Chrome
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal modal-blur fade" id="modal-success" tabindex="-1" role="dialog"
                    aria-hidden="true">
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


    <script src="{{url('assets/students/js/jquery.min.js')}}"></script>
    <script src="{{url('assets/students/js/apexcharts.min.js')}}"></script>
    <script src="{{url('assets/students/js/tabler.min.js')}}"></script>
    <script src="{{url('assets/students/js/demo.min.js')}}"></script>


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
