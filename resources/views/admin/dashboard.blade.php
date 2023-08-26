@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xxl-3 col-md-6" >
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <div class="d-flex flex-column h-100">
                                    <p class="fs-md text-muted mb-4">Products/Services</p>
                                    <h3 class="mb-0 mt-auto"><span class="counter-value" data-target="3652">{{ $data['total_products'] }}</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-xxl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <div class="d-flex flex-column h-100">
                                    <p class="fs-md text-muted mb-4">Active Products/Services</p>
                                    <h3 class="mb-0 mt-auto"><span class="counter-value" data-target="1524">{{ $data['active_products'] }}</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-xxl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <div class="d-flex flex-column h-100">
                                    <p class="fs-md text-muted mb-4">Featued Products/Services</p>
                                    <h3 class="mb-0 mt-auto"><span class="counter-value" data-target="149.36">{{ $data['featured_products'] }}</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-xxl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <div class="d-flex flex-column h-100">
                                    <p class="fs-md text-muted mb-4">Enquiries</p>
                                    <h3 class="mb-0 mt-auto"><span class="counter-value" data-target="2376">{{ $data['enquiries'] }}</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div>




    </div>
@endsection
<!-- container-fluid -->
