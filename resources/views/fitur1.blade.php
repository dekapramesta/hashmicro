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
                                <h3>Fitur 1</h3>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row px-4">
                            <div class="col">

                                <div class="d-flex flex-row">


                                    <span class="fs-3">Admin : </span>
                                    <span class="fs-6">{{ ' ' . $admin . ' Dari Total User' }}</span>
                                </div>
                                <div class="d-flex flex-row">
                                    <span class="fs-3">VIP Customer : </span>
                                    <span class="fs-6">{{ ' ' . $vip . ' Dari Total User' }}</span>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>

        @include('template.footer')
