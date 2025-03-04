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
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header text-white d-print-none">

                    @if ($warningMessage)
                        <div class="row align-items-center">
                            <div class="col-12 mb-3">
                                <div class="p-2 rounded-3 review">
                                    <h4 class="text-danger kyc__text text-center">
                                        {{ $warningMessage }}</h4>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck row-cards">
                        <div class="col-md-6">
                            <div class="card">
                                <h3 class="text-center p-2">IELTS</h3>
                                <div class="card-body">
                                    <form action="{{ url('student/test-scores') }}" id="form" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">IELTS Reading</div>
                                                <input type="number" name="ielts_reading"
                                                    value="{{ $studentTestScore->ielts_reading }}"
                                                    class="form-control amount shadow-none" required>
                                                @error('ielts_reading')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">IELTS Writing</div>
                                                <input type="number" name="ielts_writing"
                                                    value="{{ $studentTestScore->ielts_writing }}"
                                                    class="form-control amount shadow-none" required>
                                                @error('ielts_writing')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">IELTS Listening</div>
                                                <input type="number" name="ielts_listening"
                                                    value="{{ $studentTestScore->ielts_listening }}"
                                                    class="form-control amount shadow-none" required>
                                                @error('ielts_listening')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">IELTS Speaking</div>
                                                <input type="number" name="ielts_speaking"
                                                    value="{{ $studentTestScore->ielts_speaking }}"
                                                    class="form-control amount shadow-none" required>
                                                @error('ielts_speaking')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-label">IELTS Overall</div>
                                                <input type="number" name="ielts_overall"
                                                    value="{{ $studentTestScore->ielts_overall }}"
                                                    class="form-control amount shadow-none" required>
                                                @error('ielts_overall')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
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


                        <div class="col-md-6">
                            <div class="card">
                                <h3 class="text-center p-2">PTE</h3>
                                <div class="card-body">
                                    <form action="{{ url('student/test-scores') }}" id="form" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">PTE Reading</div>
                                                <input type="number" name="pte_reading"
                                                    value="{{ $studentTestScore->pte_reading }}"
                                                    class="form-control amount shadow-none" required>
                                                @error('pte_reading')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">PTE Writing</div>
                                                <input type="number" name="pte_writing"
                                                    value="{{ $studentTestScore->pte_writing }}"
                                                    class="form-control amount shadow-none" required>
                                                @error('pte_writing')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">PTE Listening</div>
                                                <input type="number" name="pte_listening"
                                                    value="{{ $studentTestScore->pte_listening }}"
                                                    class="form-control amount shadow-none" required>
                                                @error('pte_listening')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">PTE Speaking</div>
                                                <input type="number" name="pte_speaking"
                                                    value="{{ $studentTestScore->pte_speaking }}"
                                                    class="form-control amount shadow-none" required>
                                                @error('pte_speaking')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-label">PTE Overall</div>
                                                <input type="number" name="pte_overall"
                                                    value="{{ $studentTestScore->pte_overall }}"
                                                    class="form-control amount shadow-none" required>
                                                @error('pte_overall')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
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


                        <div class="col-md-6">
                            <div class="card">
                                <h3 class="text-center p-2">SAT</h3>
                                <div class="card-body">
                                    <form action="{{ url('student/test-scores') }}" id="form" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">SAT Reading</div>
                                                <input type="number" name="sat_reading"
                                                    value="{{ $studentTestScore->sat_reading }}"
                                                    class="form-control amount shadow-none" required>
                                                @error('sat_reading')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">SAT Writing</div>
                                                <input type="number" name="sat_writing"
                                                    value="{{ $studentTestScore->sat_writing }}"
                                                    class="form-control amount shadow-none" required>
                                                @error('sat_writing')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">SAT Listening</div>
                                                <input type="number" name="sat_listening"
                                                    value="{{ $studentTestScore->sat_listening }}"
                                                    class="form-control amount shadow-none" required>
                                                @error('sat_listening')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">SAT Speaking</div>
                                                <input type="number" name="sat_speaking"
                                                    value="{{ $studentTestScore->sat_speaking }}"
                                                    class="form-control amount shadow-none" required>
                                                @error('sat_speaking')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-label">PTE Overall</div>
                                                <input type="number" name="sat_overall"
                                                    value="{{ $studentTestScore->sat_overall }}"
                                                    class="form-control amount shadow-none" required>
                                                @error('sat_overall')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
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


                        <div class="col-md-6">
                            <div class="card">
                                <h3 class="text-center p-2">TOEFL</h3>
                                <div class="card-body">
                                    <form action="{{ url('student/test-scores') }}" id="form" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">TOEFL Reading</div>
                                                <input type="number" name="toefl_reading"
                                                    value="{{ $studentTestScore->toefl_reading }}"
                                                    class="form-control amount shadow-none" required>
                                                @error('toefl_reading')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">TOEFL Writing</div>
                                                <input type="number" name="toefl_writing"
                                                    value="{{ $studentTestScore->toefl_writing }}"
                                                    class="form-control amount shadow-none" required>
                                                @error('toefl_writing')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">TOEFL Listening</div>
                                                <input type="number" name="toefl_listening"
                                                    value="{{ $studentTestScore->toefl_listening }}"
                                                    class="form-control amount shadow-none" required>
                                                @error('toefl_listening')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-label">TOEFL Speaking</div>
                                                <input type="number" name="toefl_speaking"
                                                    value="{{ $studentTestScore->toefl_speaking }}"
                                                    class="form-control amount shadow-none" required>
                                                @error('toefl_speaking')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-label">TOEFL Overall</div>
                                                <input type="number" name="toefl_overall"
                                                    value="{{ $studentTestScore->toefl_overall }}"
                                                    class="form-control amount shadow-none" required>
                                                @error('toefl_overall')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
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




</body>

</html>
