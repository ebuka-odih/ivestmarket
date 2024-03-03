@extends('dashboard.layout.app')
@section('content')
    <style>
        iframe {
            width: 100%;
            max-width: 400px;
            border: 0; /* to remove default border */
        }
    </style>
    <script>
        var nhiframe = document.getElementById('nhiframe');
        window.addEventListener('message', function (e) {
            // message that was passed from iframe page
            // check message content if you have other messages too
            let message = e.data;
            nhiframe.style.height = message.height + 'px';
        }, false);
    </script>

    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session()->get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="row">

                    <div class="col-lg-8 offset-lg-2 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Deposit Info</h4>
                            </div>
                            <!-- /.box-header -->
                            <table class="table table-striped" style="width:100%">
                                <tr>
                                    <th>Amount:</th>
                                    <td>$@convert($deposit->amount)</td>
                                </tr>
                                <tr>
                                    <th>Payment Method:</th>
                                    <td>{{ $deposit->payment_method->name }}</td>
                                </tr>
                                <tr>
                                    <th>Created Date:</th>
                                    <td>{{ date('d M, Y', strtotime($deposit->created_at)) }}</td>
                                </tr>
                            </table>
                            <hr>
                            <a style="margin: 20px" href="{{ route('user.dashboard') }}" class=" text-primary">Goto Dashboard</a>
                        </div>
                        <!-- /.box -->
                    </div>


                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>


@endsection
