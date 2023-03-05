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
                                    <h4>Fitur 3 </h4>
                                </div>
                                <div class="col text-right">


                                </div>

                            </div>
                            <div class="col mt-5">
                                <form class="" method="post">
                                    @csrf
                                    <div class="col">
                                        <label for="" class="form-label">Masukan Character</label>
                                        <input type="text" name="input1" id="input1" class="form-control">
                                    </div>
                                    <div class="col mt-2">
                                        <label for="" class="form-label">Masukan Character</label>
                                        <input id="input2" type="text" name="input2" class="form-control">
                                    </div>
                                    <div class="col mt-3 text-center">

                                        <button type="button" onclick="postData()"
                                            class="btn btn-primary w-50">Submit</button>
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
            function postData() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "{{ route('feature3.rand') }}",
                    data: {
                        input1: $('#input1').val(),
                        input2: $('#input2').val(),
                    },
                    dataType: 'json',
                    success: function(res) {
                        alert(res.hasil)

                    }
                });
            }
        </script>
        @include('template.footer')
