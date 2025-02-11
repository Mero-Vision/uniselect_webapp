<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>
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
                                            <span class="bg-danger text-white avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-arrows-right-left"
                                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <line x1="21" y1="7" x2="3" y2="7">
                                                    </line>
                                                    <path d="M18 10l3 -3l-3 -3"></path>
                                                    <path d="M6 20l-3 -3l3 -3"></path>
                                                    <line x1="3" y1="17" x2="21" y2="17">
                                                    </line>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                5,453.85 USD <sup class="text-danger">*</sup>
                                            </div>
                                            <div class="text-muted">
                                                Total Money Transfered </div>
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
                                            <span class="bg-success text-white avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-currency-dogecoin"
                                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M6 12h6"></path>
                                                    <path d="M9 6v12"></path>
                                                    <path d="M6 18h6a6 6 0 1 0 0 -12h-6"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                8,177.44 USD <sup class="text-danger">*</sup>
                                            </div>
                                            <div class="text-muted">
                                                Total Deposit </div>
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
                                            <span class="bg-warning text-white avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-copy" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <rect x="8" y="8" width="12" height="12" rx="2">
                                                    </rect>
                                                    <path
                                                        d="M16 8v-2a2 2 0 0 0 -2 -2h-8a2 2 0 0 0 -2 2v8a2 2 0 0 0 2 2h2">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                0.00 USD <sup class="text-danger">*</sup>
                                            </div>
                                            <div class="text-muted">
                                                Total Withdraw </div>
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
                                            <span class="bg-info text-white avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-arrows-right-left"
                                                    width="24" height="24" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <line x1="21" y1="7" x2="3"
                                                        y2="7"></line>
                                                    <path d="M18 10l3 -3l-3 -3"></path>
                                                    <path d="M6 20l-3 -3l3 -3"></path>
                                                    <line x1="3" y1="17" x2="21"
                                                        y2="17"></line>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                19,152.55 USD <sup class="text-danger">*</sup>
                                            </div>
                                            <div class="text-muted">
                                                Total Exchange </div>
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
                                    <h3 class="card-title">Latest Transactions</h3>
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
                                                    Exchanged money from INR to BDT
                                                </td>
                                                <td data-label="Remark">
                                                    <span class="badge badge-dark">Money Exchange</span>
                                                </td>
                                                <td data-label="Amount">
                                                    <span class="text-danger">- 6.00 INR</span>
                                                </td>
                                                <td data-label="Details" class="text-end">
                                                    <button class="btn btn-primary btn-sm details"
                                                        data-data="{&quot;id&quot;:4147,&quot;trnx&quot;:&quot;IMGNKNQWUMS2&quot;,&quot;user_id&quot;:&quot;51&quot;,&quot;user_type&quot;:&quot;1&quot;,&quot;currency_id&quot;:&quot;10&quot;,&quot;wallet_id&quot;:null,&quot;charge&quot;:&quot;171.6337000000&quot;,&quot;amount&quot;:&quot;6.0000000000&quot;,&quot;remark&quot;:&quot;money_exchange&quot;,&quot;type&quot;:&quot;-&quot;,&quot;details&quot;:&quot;Exchanged money from INR to BDT&quot;,&quot;invoice_num&quot;:null,&quot;created_at&quot;:&quot;2025-02-10T12:17:03.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-02-10T12:17:03.000000Z&quot;,&quot;currency&quot;:{&quot;id&quot;:10,&quot;default&quot;:&quot;0&quot;,&quot;symbol&quot;:&quot;\u20b9&quot;,&quot;code&quot;:&quot;INR&quot;,&quot;curr_name&quot;:&quot;Indian Rupee&quot;,&quot;type&quot;:&quot;1&quot;,&quot;status&quot;:&quot;1&quot;,&quot;rate&quot;:&quot;85.7868500000&quot;,&quot;created_at&quot;:&quot;2022-01-25T19:28:23.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-01-01T13:21:26.000000Z&quot;}}">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="Date">10-Feb-2025</td>
                                                <td data-label="Description">
                                                    Exchanged money from INR to BDT
                                                </td>
                                                <td data-label="Remark">
                                                    <span class="badge badge-dark">Money Exchange</span>
                                                </td>
                                                <td data-label="Amount">
                                                    <span class="text-success">+ 8.35 BDT</span>
                                                </td>
                                                <td data-label="Details" class="text-end">
                                                    <button class="btn btn-primary btn-sm details"
                                                        data-data="{&quot;id&quot;:4148,&quot;trnx&quot;:&quot;IMGNKNQWUMS2&quot;,&quot;user_id&quot;:&quot;51&quot;,&quot;user_type&quot;:&quot;1&quot;,&quot;currency_id&quot;:&quot;6&quot;,&quot;wallet_id&quot;:null,&quot;charge&quot;:&quot;0.0000000000&quot;,&quot;amount&quot;:&quot;8.3529163502&quot;,&quot;remark&quot;:&quot;money_exchange&quot;,&quot;type&quot;:&quot;+&quot;,&quot;details&quot;:&quot;Exchanged money from INR to BDT&quot;,&quot;invoice_num&quot;:null,&quot;created_at&quot;:&quot;2025-02-10T12:17:03.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-02-10T12:17:03.000000Z&quot;,&quot;currency&quot;:{&quot;id&quot;:6,&quot;default&quot;:&quot;0&quot;,&quot;symbol&quot;:&quot;\u09f3&quot;,&quot;code&quot;:&quot;BDT&quot;,&quot;curr_name&quot;:&quot;Bangladeshi Taka&quot;,&quot;type&quot;:&quot;1&quot;,&quot;status&quot;:&quot;1&quot;,&quot;rate&quot;:&quot;119.4283970000&quot;,&quot;created_at&quot;:&quot;2021-12-20T17:48:53.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-01-01T13:21:26.000000Z&quot;}}">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="Date">09-Feb-2025</td>
                                                <td data-label="Description">
                                                    Received money from ma@gmail.com
                                                </td>
                                                <td data-label="Remark">
                                                    <span class="badge badge-dark">Transfer Money</span>
                                                </td>
                                                <td data-label="Amount">
                                                    <span class="text-success">+ 100.00 USD</span>
                                                </td>
                                                <td data-label="Details" class="text-end">
                                                    <button class="btn btn-primary btn-sm details"
                                                        data-data="{&quot;id&quot;:4146,&quot;trnx&quot;:&quot;O7O832LVRETC&quot;,&quot;user_id&quot;:&quot;51&quot;,&quot;user_type&quot;:&quot;1&quot;,&quot;currency_id&quot;:&quot;1&quot;,&quot;wallet_id&quot;:&quot;89&quot;,&quot;charge&quot;:&quot;0.0000000000&quot;,&quot;amount&quot;:&quot;100.0000000000&quot;,&quot;remark&quot;:&quot;transfer_money&quot;,&quot;type&quot;:&quot;+&quot;,&quot;details&quot;:&quot;Received money from ma@gmail.com&quot;,&quot;invoice_num&quot;:null,&quot;created_at&quot;:&quot;2025-02-09T02:59:44.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-02-09T02:59:44.000000Z&quot;,&quot;currency&quot;:{&quot;id&quot;:1,&quot;default&quot;:&quot;1&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;code&quot;:&quot;USD&quot;,&quot;curr_name&quot;:&quot;United State Dollar&quot;,&quot;type&quot;:&quot;1&quot;,&quot;status&quot;:&quot;1&quot;,&quot;rate&quot;:&quot;1.0000000000&quot;,&quot;created_at&quot;:&quot;2021-12-19T21:12:58.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-01-01T13:21:26.000000Z&quot;}}">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="Date">08-Feb-2025</td>
                                                <td data-label="Description">
                                                    Payment to merchant : merchant@gmail.com
                                                </td>
                                                <td data-label="Remark">
                                                    <span class="badge badge-dark">Merchant Payment</span>
                                                </td>
                                                <td data-label="Amount">
                                                    <span class="text-danger">- 10.00 INR</span>
                                                </td>
                                                <td data-label="Details" class="text-end">
                                                    <button class="btn btn-primary btn-sm details"
                                                        data-data="{&quot;id&quot;:4143,&quot;trnx&quot;:&quot;60ZMLSVCX7UZ&quot;,&quot;user_id&quot;:&quot;51&quot;,&quot;user_type&quot;:&quot;1&quot;,&quot;currency_id&quot;:&quot;10&quot;,&quot;wallet_id&quot;:&quot;832&quot;,&quot;charge&quot;:&quot;0.0000000000&quot;,&quot;amount&quot;:&quot;10.0000000000&quot;,&quot;remark&quot;:&quot;merchant_payment&quot;,&quot;type&quot;:&quot;-&quot;,&quot;details&quot;:&quot;Payment to merchant : merchant@gmail.com&quot;,&quot;invoice_num&quot;:null,&quot;created_at&quot;:&quot;2025-02-08T18:47:57.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-02-08T18:47:57.000000Z&quot;,&quot;currency&quot;:{&quot;id&quot;:10,&quot;default&quot;:&quot;0&quot;,&quot;symbol&quot;:&quot;\u20b9&quot;,&quot;code&quot;:&quot;INR&quot;,&quot;curr_name&quot;:&quot;Indian Rupee&quot;,&quot;type&quot;:&quot;1&quot;,&quot;status&quot;:&quot;1&quot;,&quot;rate&quot;:&quot;85.7868500000&quot;,&quot;created_at&quot;:&quot;2022-01-25T19:28:23.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-01-01T13:21:26.000000Z&quot;}}">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="Date">06-Feb-2025</td>
                                                <td data-label="Description">
                                                    Voucher commission
                                                </td>
                                                <td data-label="Remark">
                                                    <span class="badge badge-dark">Voucher Commission</span>
                                                </td>
                                                <td data-label="Amount">
                                                    <span class="text-success">+ 10.00 USD</span>
                                                </td>
                                                <td data-label="Details" class="text-end">
                                                    <button class="btn btn-primary btn-sm details"
                                                        data-data="{&quot;id&quot;:4142,&quot;trnx&quot;:&quot;89ZL1KIJBAKS&quot;,&quot;user_id&quot;:&quot;51&quot;,&quot;user_type&quot;:&quot;1&quot;,&quot;currency_id&quot;:&quot;1&quot;,&quot;wallet_id&quot;:null,&quot;charge&quot;:&quot;0.0000000000&quot;,&quot;amount&quot;:&quot;10.0000000000&quot;,&quot;remark&quot;:&quot;voucher_commission&quot;,&quot;type&quot;:&quot;+&quot;,&quot;details&quot;:&quot;Voucher commission&quot;,&quot;invoice_num&quot;:null,&quot;created_at&quot;:&quot;2025-02-06T09:28:03.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-02-06T09:28:03.000000Z&quot;,&quot;currency&quot;:{&quot;id&quot;:1,&quot;default&quot;:&quot;1&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;code&quot;:&quot;USD&quot;,&quot;curr_name&quot;:&quot;United State Dollar&quot;,&quot;type&quot;:&quot;1&quot;,&quot;status&quot;:&quot;1&quot;,&quot;rate&quot;:&quot;1.0000000000&quot;,&quot;created_at&quot;:&quot;2021-12-19T21:12:58.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-01-01T13:21:26.000000Z&quot;}}">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="Date">06-Feb-2025</td>
                                                <td data-label="Description">
                                                    Voucher created
                                                </td>
                                                <td data-label="Remark">
                                                    <span class="badge badge-dark">Create Voucher</span>
                                                </td>
                                                <td data-label="Amount">
                                                    <span class="text-danger">- 118.00 USD</span>
                                                </td>
                                                <td data-label="Details" class="text-end">
                                                    <button class="btn btn-primary btn-sm details"
                                                        data-data="{&quot;id&quot;:4141,&quot;trnx&quot;:&quot;89ZL1KIJBAKS&quot;,&quot;user_id&quot;:&quot;51&quot;,&quot;user_type&quot;:&quot;1&quot;,&quot;currency_id&quot;:&quot;1&quot;,&quot;wallet_id&quot;:null,&quot;charge&quot;:&quot;18.0000000000&quot;,&quot;amount&quot;:&quot;118.0000000000&quot;,&quot;remark&quot;:&quot;create_voucher&quot;,&quot;type&quot;:&quot;-&quot;,&quot;details&quot;:&quot;Voucher created&quot;,&quot;invoice_num&quot;:null,&quot;created_at&quot;:&quot;2025-02-06T09:28:03.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-02-06T09:28:03.000000Z&quot;,&quot;currency&quot;:{&quot;id&quot;:1,&quot;default&quot;:&quot;1&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;code&quot;:&quot;USD&quot;,&quot;curr_name&quot;:&quot;United State Dollar&quot;,&quot;type&quot;:&quot;1&quot;,&quot;status&quot;:&quot;1&quot;,&quot;rate&quot;:&quot;1.0000000000&quot;,&quot;created_at&quot;:&quot;2021-12-19T21:12:58.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-01-01T13:21:26.000000Z&quot;}}">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="Date">06-Feb-2025</td>
                                                <td data-label="Description">
                                                    Exchanged money from USD to EUR
                                                </td>
                                                <td data-label="Remark">
                                                    <span class="badge badge-dark">Money Exchange</span>
                                                </td>
                                                <td data-label="Amount">
                                                    <span class="text-success">+ 38.44 EUR</span>
                                                </td>
                                                <td data-label="Details" class="text-end">
                                                    <button class="btn btn-primary btn-sm details"
                                                        data-data="{&quot;id&quot;:4140,&quot;trnx&quot;:&quot;RWQI32HY2TEX&quot;,&quot;user_id&quot;:&quot;51&quot;,&quot;user_type&quot;:&quot;1&quot;,&quot;currency_id&quot;:&quot;4&quot;,&quot;wallet_id&quot;:null,&quot;charge&quot;:&quot;0.0000000000&quot;,&quot;amount&quot;:&quot;38.4406000000&quot;,&quot;remark&quot;:&quot;money_exchange&quot;,&quot;type&quot;:&quot;+&quot;,&quot;details&quot;:&quot;Exchanged money from USD to EUR&quot;,&quot;invoice_num&quot;:null,&quot;created_at&quot;:&quot;2025-02-06T09:27:23.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-02-06T09:27:23.000000Z&quot;,&quot;currency&quot;:{&quot;id&quot;:4,&quot;default&quot;:&quot;0&quot;,&quot;symbol&quot;:&quot;\u20ac&quot;,&quot;code&quot;:&quot;EUR&quot;,&quot;curr_name&quot;:&quot;European Currency&quot;,&quot;type&quot;:&quot;1&quot;,&quot;status&quot;:&quot;1&quot;,&quot;rate&quot;:&quot;0.9610150000&quot;,&quot;created_at&quot;:&quot;2021-12-19T21:12:58.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-01-01T13:21:26.000000Z&quot;}}">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="Date">06-Feb-2025</td>
                                                <td data-label="Description">
                                                    Exchanged money from USD to EUR
                                                </td>
                                                <td data-label="Remark">
                                                    <span class="badge badge-dark">Money Exchange</span>
                                                </td>
                                                <td data-label="Amount">
                                                    <span class="text-danger">- 40.00 USD</span>
                                                </td>
                                                <td data-label="Details" class="text-end">
                                                    <button class="btn btn-primary btn-sm details"
                                                        data-data="{&quot;id&quot;:4139,&quot;trnx&quot;:&quot;RWQI32HY2TEX&quot;,&quot;user_id&quot;:&quot;51&quot;,&quot;user_type&quot;:&quot;1&quot;,&quot;currency_id&quot;:&quot;1&quot;,&quot;wallet_id&quot;:null,&quot;charge&quot;:&quot;2.4000000000&quot;,&quot;amount&quot;:&quot;40.0000000000&quot;,&quot;remark&quot;:&quot;money_exchange&quot;,&quot;type&quot;:&quot;-&quot;,&quot;details&quot;:&quot;Exchanged money from USD to EUR&quot;,&quot;invoice_num&quot;:null,&quot;created_at&quot;:&quot;2025-02-06T09:27:23.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-02-06T09:27:23.000000Z&quot;,&quot;currency&quot;:{&quot;id&quot;:1,&quot;default&quot;:&quot;1&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;code&quot;:&quot;USD&quot;,&quot;curr_name&quot;:&quot;United State Dollar&quot;,&quot;type&quot;:&quot;1&quot;,&quot;status&quot;:&quot;1&quot;,&quot;rate&quot;:&quot;1.0000000000&quot;,&quot;created_at&quot;:&quot;2021-12-19T21:12:58.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-01-01T13:21:26.000000Z&quot;}}">Details</button>
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
                                    <h4>Your Wallets</h4>
                                </div>
                                <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                                    <div class="divide-y">
                                        <div>
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <span class="bg-blue text-white avatar">
                                                        €
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <div class="font-weight-medium">
                                                        77.59 EUR
                                                    </div>
                                                    <div class="text-muted">
                                                        European Currency
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <span class="bg-blue text-white avatar">
                                                        $
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <div class="font-weight-bold text-success">
                                                        581.18 USD
                                                    </div>
                                                    <div class="text-muted">
                                                        United State Dollar
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <span class="bg-blue text-white avatar">
                                                        ₹
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <div class="font-weight-medium">
                                                        41,631.57 INR
                                                    </div>
                                                    <div class="text-muted">
                                                        Indian Rupee
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <span class="bg-blue text-white avatar">
                                                        ₿
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <div class="font-weight-medium">
                                                        0.01632926 BTC
                                                    </div>
                                                    <div class="text-muted">
                                                        Bitcoin
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <span class="bg-blue text-white avatar">
                                                        ¥
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <div class="font-weight-medium">
                                                        6,161.38 JPY
                                                    </div>
                                                    <div class="text-muted">
                                                        Japanese Yen
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <span class="bg-blue text-white avatar">
                                                        ₦
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <div class="font-weight-medium">
                                                        262,537.58 NGN
                                                    </div>
                                                    <div class="text-muted">
                                                        Nigerian naira
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <span class="bg-blue text-white avatar">
                                                        ৳
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <div class="font-weight-medium">
                                                        242.71 BDT
                                                    </div>
                                                    <div class="text-muted">
                                                        Bangladeshi Taka
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <span class="bg-blue text-white avatar">
                                                        £
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <div class="font-weight-medium">
                                                        9.72 GBP
                                                    </div>
                                                    <div class="text-muted">
                                                        Greate British Pound
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
