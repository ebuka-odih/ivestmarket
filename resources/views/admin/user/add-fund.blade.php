@extends('admin.layout.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                        Fund Account
                    </h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">

            <!-- Elements -->
            <div class="block block-rounded">
                <div class="block-content">
                    <form action="{{ route('admin.sendFund') }}" method="POST" >
                        <!-- Basic Elements -->
                        @csrf
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row push">
                            <div class="col-lg-6 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">User</label>
                                    <select name="user_id" id="" class="form-control">
                                        @foreach($users as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="mb-4">
                                    <label class="form-label"  for="example-email-input">Type of Fund</label>
                                    <select name="type" id="" class="form-control ">
                                        <option disabled selected>Select </option>
                                        <option value="Main-Balance">Main-Deposit</option>
                                        <option value="Bonus">Bonus</option>
                                        <option value="Profit">Profit</option>
                                        {{--                                        <option value="Profit">Profit</option>--}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="mb-4">
                                    <label class="form-label" for="example-email-input">Amount</label>
                                    <input type="text" class="form-control" id="example-email-input" name="amount" >
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-secondary">Send</button>
                            </div>
                        </div>

                        <!-- END Basic Elements -->


                    </form>

                    <br>
                    <hr>
                    <table class="table table-striped">
                        <tr>
                            <th>Date</th>
                            <th>User</th>
                            <th>Type</th>
                            <th>Amount</th>
                        </tr>
                        @foreach($funding as $item)
                        <tr>
                            <td>{{ date('Y-m-d', strtotime($item->created_at)) }}</td>
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->fund_type() }}</td>
                            <td>$@convert($item->amount)</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <!-- END Elements -->
        </div>

        <!-- END Page Content -->
    </main>

@endsection
