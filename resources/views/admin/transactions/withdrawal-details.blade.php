@extends('admin.layout.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                        Withdrawal Detail
                    </h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            @if(session()->has('updated'))
                <div class="alert alert-success">
                    {{ session()->get('updated') }}
                </div>
            @endif
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="block-content">
                                        @if(session()->has('success'))
                                            <div class="alert alert-success">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif


                                        <table style="width:100%" class="table table-striped">
                                            <tr>
                                                <th>Amount:</th>
                                                <td>${{ $with->amount }}</td>
                                            </tr>
                                            <tr>
                                                <th>Wallet Address (BTC):</th>
                                                <td>{{ $with->wallet_address }}</td>
                                            </tr>

                                        </table>
                                        <br>

                                        <form action="{{ route('admin.withdrawPercent', $with->id) }}" method="POST">
                                            @csrf
                                            <div class="row mt-3">
                                                <div class="col-lg-6">
                                                    <a href="{{ route('admin.approve_withdrawal', $with->id) }}" class="btn btn-success">Approve</a>
                                                </div>
                                            </div>

                                        </form>
                                        <br>
                                        <hr>
                                            <h5>{{ date('Y-m-d', strtotime($with->updated_at)) }}</h5>
                                        <form action="{{ route('admin.updateDate') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="with_id" value="{{ $with->id }}">
                                            <div class="col-md-6 mb-3">
                                                <input class="form-control" type="date" name="updated_at" >
                                            </div>
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-sm btn-secondary">Update Date</button>
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
            <!-- END Page Content -->
    </main>

@endsection
