@component('mail::message')
    <h3>Withdrawal Confirmation</h3>

    # Dear {{ $withdraw->user['name'] }}

    You have successfully received your withdrawal from <a href="{{ env('APP_URL') }}">{{ env('APP_NAME') }}</a> to your  wallet
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>
    <table style="width:100%">
        <tr>
            <th>Amount:</th>
            <td>$@convert($withdraw->amount)</td>
        </tr>
        <tr>
            <th>Wallet Address:</th>
            <td><a href="{{ $withdraw->wallet_address }}">{{ $withdraw->wallet_address }}</a></td>
        </tr>
        <tr>
            <th>Approved At:</th>
            <td>{{ date('Y-m-d', strtotime($withdraw->updated_at)) }}</td>
        </tr>

    </table>

    <div class="container">
        <div class="col-md-10">
            <table style="border: 1px solid #535125;  border-collapse: collapse;" class="table">
                <tr>
                    <th style="border-collapse: collapse; padding: 5px; text-align: left">Amount:</th>
                    <td style="border-collapse: collapse; padding: 5px; text-align: left">$@convert($withdraw->amount)</td>
                </tr>
                <tr>
                    <th style="border-collapse: collapse; padding: 5px; text-align: left">Wallet Address:</th>
                    <td style="border-collapse: collapse; padding: 5px; text-align: left"><a href="{{ $withdraw->wallet_address }}">{{ $withdraw->wallet_address }}</a></td>
                </tr>
                <tr>
                    <th style="border-collapse: collapse; padding: 5px; text-align: left">Approved At:</th>
                    <td style="border-collapse: collapse; padding: 5px; text-align: left">{{ date('Y-m-d', strtotime($withdraw->updated_at)) }}</td>
                </tr>

            </table>

            <p class="mt-2">Kindly confirm payment, if not received <a href="mailto:support@scalpstats.co">Contact Support</a>
                for further information
            </p>

        </div>
    </div>


    <p>Kindly confirm payment, if not received <a href="mailto:support@scalpstats.co">Contact Support</a>
        for further information
    </p>


    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
