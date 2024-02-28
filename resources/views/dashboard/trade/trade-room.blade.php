@extends('dashboard.layout.app')
@section('content')

    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="container">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xl-4 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Buy</h4>
                            </div>
                            <div class="box-body">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#limit" role="tab">Limit Order</a> </li>
                                </ul>
                                <div class="tab-content p-10 tabcontent-border">
                                    <div class="tab-pane active" id="limit" role="tabpanel">
                                        <form class="dash-form" action="{{ route('user.placeTrade') }}" method="POST">
                                            @csrf


                                            <p>Balance: <span class="font-weight-600">@convert(auth()->user()->balance) USD</span></p>
                                            <div class="input-group mb-10">
                                                <span class="input-group-addon">Symbol</span>
                                                <select class="form-control" name="symbol">
                                                    <option disabled selected >Select Pair</option>
                                                    <option value="ETH/USD">ETH/USD</option>
                                                    <option value="BTC/USD">BTC/USD </option>
                                                    <option value="ETH/USDT">ETH/USDT </option>
                                                    <option value="BTC/USDT">BTC/USDT </option>
                                                    <option value="USD/BTC">USD/BTC </option>
                                                    <option value="USD/ETH">USD/ETH </option>
                                                    <option value="USD/USDT">USD/USDT </option>
                                                    <option value="USD/MATIC">USD/MATIC </option>
                                                    <option value="USD/ADA">USD/ADA </option>
                                                    <option value="DAI/ETH">DAI/ETH </option>
                                                    <option value="DAI/USDC">DAI/USDC </option>
                                                    <option value="USDT/BTC">USDT/BTC </option>
                                                    <option value="USDT/ETH">USDT/ETH </option>
                                                    <option value="USDT/DOGE">USDT/DOGE </option>
                                                    <option value="USDT/BCH">USDT/BCH </option>
                                                    <option value="USDT/LTC">USDT/LTC </option>
                                                    <option value="ETH/BTC">ETH/BTC </option>
                                                    <option value="ETH/BCH">ETH/BCH </option>
                                                    <option value="ETH/LINK">ETH/LINK </option>
                                                    <option value="ETH/ADA">ETH/ADA </option>
                                                    <option value="ETH/DOGE">ETH/DOGE </option>
                                                    <option value="BTC/ETH">BTC/ETH </option>
                                                    <option value="BTC/DOGE">BTC/DOGE </option>
                                                    <option value="BTC/LTC">BTC/LTC </option>
                                                    <option value="BTC/ADA">BTC/ADA </option>
                                                    <option value="BTC/XLM">BTC/XLM </option>
                                                    <option value="DAI/wETH">DAI/wETH </option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-10">
                                                <span class="input-group-addon">Amount [USD]</span>
                                                <input type="number" name="amount" required class="form-control" placeholder="0">
                                            </div>
                                            <div class="input-group mb-10">
                                                <span class="input-group-addon">Execution Time</span>
                                                <select class="form-control" name="execution_time">
                                                    <option value="1800">30 Minutes</option>
                                                    <option value="3600">1 Hour</option>
                                                    <option value="10800">3 Hours</option>
                                                    <option value="18000">5 Hours</option>
                                                    <option value="54000">15 Hours</option>
                                                    <option value="604800">1 Week</option>
                                                    <option value="1209600">2 Weeks</option>
                                                    <option value="2629746">1 Month</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-10">
                                                <span class="input-group-addon">Leverage</span>
                                                <select class="form-control" name="leverage">
                                                    <option value="5x">5x</option>
                                                    <option value="25x">25x</option>
                                                    <option value="50x">50x</option>
                                                    <option value="75x">75x</option>
                                                    <option value="100x">100x</option>
                                                    <option value="125x">125x</option>
                                                </select>
                                            </div>
                                            <div class="input-group">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control" name="sl" placeholder="Stop Loss">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control" name="tp" placeholder="Take Profit">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group mt-2">
                                                <select name="type" class="form-control">
                                                    <option value="buy">Buy</option>
                                                    <option value="sell">Sell</option>
                                                </select>
                                            </div>

                                            <button type="submit" class="btn btn-block btn-success mt-20">Execute</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-12">
                        <div class="box">
                            <div class="box-body">
                                <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=dark&amp;pref_coin_id=1505&amp;invert_hover=no" width="100%" height="36px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-body px-0">
                                <iframe src="https://widget.coinlib.io/widget?type=chart&amp;theme=dark&amp;coin_id=859&amp;pref_coin_id=1505" width="100%" height="100%" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px; min-height: 478px"></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Symbol</th>
                                            <th>Amount</th>
                                            <th>Leverage</th>
                                            <th>Time Frame</th>
                                            <th>TP/SL</th>
                                            <th>Status</th>
                                            <th>Progress</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($trades as $item)
                                            <tr>
                                                <td>{{ date('d M, Y', strtotime($item->created_at)) }}</td>
                                                <td>{{ $item->symbol }}</td>
                                                <td>$@convert($item->amount)</td>
                                                <td>{{ $item->leverage }}</td>
                                                <td>{{ $item->execution_time }} Secs</td>
                                                <td>{{ $item->tp ? : "" }}/ {{ $item->sl ? : "" }}</td>
                                                <td class="-pull-right">{!! $item->status() !!}</td>
                                                @if($item->percent != 100)
                                                    <td class="pull-right text-danger">{{ $item->percent ? : "1" }}%</td>
                                                @else
                                                    <td class="pull-right text-success">{{ $item->percent  }}%</td>
                                                @endif
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <a href="{{ route('user.trade.history') }}" class="text-primary text-center mt-3">View Trade History</a>

                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
