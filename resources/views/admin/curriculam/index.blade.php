@extends('layouts.app')

@section('content')
    <div class="container-fluid">


        <div class="card">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible alert-label-icon rounded-label fade show" role="alert">
                    <i class="ri-check-double-line label-icon"></i><strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="alert alert-success alert-dismissible alert-label-icon rounded-label fade show" role="alert"
                id="successMessage" style="display: none;">
                <i class="ri-check-double-line label-icon"></i><strong></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible alert-label-icon rounded-label fade show" role="alert">
                    <i class="ri-error-warning-line label-icon"></i><strong>{{ $message }}</strong <button
                        type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="alert alert-danger alert-dismissible alert-label-icon rounded-label fade show" role="alert"
                id="errorMessage" style="display: none;">
                <i class="ri-error-warning-line label-icon"></i><strong></strong <button type="button" class="btn-close"
                    data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center ">
                        <div class="col-xxl-3 col-lg-6 me-auto">
                            <h6 class="card-title">Curriculam</h6>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-auto col-auto">
                            <a href="{{ route('curriculam.create') }}" class="btn btn-primary"><i
                                    class="bi bi-plus-circle align-baseline me-1"></i> Add New</a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>

            <div class="card-body">
                {!! $dataTable->table(['class' => 'table table-striped']) !!}
            </div>
        </div>

    </div>


@section('script')
    {{ $dataTable->scripts() }}
    <script>
        function deleteCurriculum(id) {
            var id = id;
            if (confirm('Are you sure you want to delete this item?')) {
                $.ajax({
                    url: "/admin/curriculam/" + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        var messageContainer;
                        var message;
                        if (response.status === true) {
                            messageContainer = $('#successMessage');
                            $('#curriculam-table').DataTable().ajax.reload(null, true);
                        } else {
                            messageContainer = $('#errorMessage');
                        }
                        message = response.message;
                        messageContainer.show();
                        messageContainer.find('strong').text(message);
                        messageContainer.delay(1000).fadeOut('slow');
                    },
                    error: function(xhr, status, error) {
                        $('#errorMessage').show();
                        $('#errorMessage strong').text(xhr.message);
                        $('#errorMessage').delay(1000).fadeOut('slow');
                    }
                });
            }
        }
    </script>
@endsection


@endsection
