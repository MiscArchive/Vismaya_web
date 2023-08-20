@extends('admin.layouts.app')

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
                    <i class="ri-error-warning-line label-icon"></i><strong>{{ $message }}</strong> <button
                        type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="alert alert-danger alert-dismissible alert-label-icon rounded-label fade show" role="alert"
                id="errorMessage" style="display: none;">
                <i class="ri-error-warning-line label-icon"></i><strong></strong> <button type="button" class="btn-close"
                    data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center ">
                        <div class="col-xxl-3 col-lg-6 me-auto">
                            <h6 class="card-title">Enquiries</h6>
                        </div>
                      
                    </div>
                   
                </div>
            </div>

            <div class="card-body">
                {!! $dataTable->table(['class' => 'table table-striped']) !!}
            </div>
        </div>

<div id="commentModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
        </div>
        <div class="modal-body" id="commentModalBody">
            <p class="text-muted">It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            
        </div>

    </div>
</div>
</div>

    </div>


@section('script')
    {{ $dataTable->scripts() }}
    <script>
      
        $(document).on('click', '.open-modal-btn', function() {
            var comment = $(this).data('comment');
            $('#commentModalBody').text(comment);
            $('#commentModal').modal('show');
        });
    </script>
@endsection


@endsection
