@include('template.header')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row ">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col">
                            <div class="row ">
                                <div class="col">
                                    <h4>Fitur 2 - Pembayaran</h4>
                                </div>
                                <div class="col text-right">


                                </div>

                            </div>
                            <div class="col mt-5">
                                @if ($message = Session::get('notif'))
                                    @foreach ($message as $msg)
                                        <div class="alert alert-secondary alert-block">
                                            <strong>{{ $msg }}</strong>
                                        </div>
                                    @endforeach
                                @endif
                                <form id="submitform" action="{{ route('feature2.bayar') }}" method="post">
                                    @csrf
                                    <div class="col">
                                        <input type="text" name="harga" class="form-control" required>

                                        <div class="pretty p-icon p-smooth">
                                            <div class="row px-3 mt-4">
                                                <input type="checkbox" id="setuju_utang" checked />
                                                <span class="ml-2"> Setuju Untuk Pembayaran Utang </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col mt-3">

                                        <button type="submit" class="btn btn-primary w-100">Bayar</button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script>
            document.getElementById('submitform').addEventListener('submit', function(evt) {
                evt.preventDefault();
                if ($('#setuju_utang').is(':checked')) {
                    // console.log("first")
                    $('#submitform').submit()
                } else {
                    alert('Silahkan setujui Pembayaran Utang')
                }
            })
        </script>

        @include('template.footer')
