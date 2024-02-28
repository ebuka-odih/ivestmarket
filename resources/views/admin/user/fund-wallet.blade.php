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
                <div class="container">
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
                </div>
                <div class="block-content">
                    <button type="button" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#modal-block-normal">Top Up</button>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>User</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($balance as $item)
                            <tr>
                                <td>{{ date('d-M-Y', strtotime($item->created_at)) }}</td>
                                <td>{{ $item->user->fullname() }}</td>
                                <td>{{ $item->name }}</td>
                                <td>${{ $item->value }}</td>
                                <td><a href="" class=""></a></td>
                            </tr>


                            @endforeach
                        </tbody>



                    </table>


                </div>
            </div>
            <!-- END Elements -->
        </div>

        <!-- END Page Content -->
    </main>


    !-- Normal Block Modal -->
    <div class="modal" id="modal-block-normal" tabindex="-1" role="dialog" aria-labelledby="modal-block-normal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Modal Title</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form action="{{ route('admin.topUpWallet') }}" method="POST" >
                            <!-- Basic Elements -->
                            @csrf

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
                                        <label class="form-label" for="example-email-input">Coin</label>
                                        <select name="name" class="form-control" id="crypto-tokens">
                                            <option value="BTC">Bitcoin (BTC)</option>
                                            <option value="ETH">Ethereum (ETH)</option>
                                            <option value="BNB">Binance Coin (BNB)</option>
                                            <option value="USDT">Tether (USDT)</option>
                                            <option value="SOL">Solana (SOL)</option>
                                            <option value="ADA">Cardano (ADA)</option>
                                            <option value="XRP">Ripple (XRP)</option>
                                            <option value="DOT">Polkadot (DOT)</option>
                                            <option value="DOGE">Dogecoin (DOGE)</option>
                                            <option value="AVAX">Avalanche (AVAX)</option>
                                            <option value="LTC">Litecoin (LTC)</option>
                                            <option value="UNI">Uniswap (UNI)</option>
                                            <option value="LINK">Chainlink (LINK)</option>
                                            <option value="BCH">Bitcoin Cash (BCH)</option>
                                            <option value="ALGO">Algorand (ALGO)</option>
                                            <option value="LUNA">Terra (LUNA)</option> <!-- Note: Terra's status changed significantly in 2022 -->
                                            <option value="MATIC">Polygon (MATIC)</option>
                                            <option value="XLM">Stellar (XLM)</option>
                                            <option value="VET">VeChain (VET)</option>
                                            <option value="AXS">Axie Infinity (AXS)</option>
                                            <option value="FTT">FTX Token (FTT)</option>
                                            <option value="TRX">TRON (TRX)</option>
                                            <option value="DAI">Dai (DAI)</option>
                                            <option value="CRO">Crypto.com Coin (CRO)</option>
                                            <option value="ATOM">Cosmos (ATOM)</option>
                                            <option value="ICP">Internet Computer (ICP)</option>
                                            <option value="FIL">Filecoin (FIL)</option>
                                            <option value="AAVE">Aave (AAVE)</option>
                                            <option value="EOS">EOS (EOS)</option>
                                            <option value="XTZ">Tezos (XTZ)</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="example-email-input">Amount</label>
                                        <input type="number" class="form-control" id="example-email-input" name="value" >
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-secondary">Send</button>
                                </div>
                            </div>

                            <!-- END Basic Elements -->


                        </form>
                    </div>
                    <div class="block-content block-content-full text-end bg-body">
                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Normal Block Modal -->
@endsection
