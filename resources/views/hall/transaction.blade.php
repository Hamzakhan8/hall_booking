@extends('hall.dashboard')

@section('body-title')
    <h2>Transaction Records</h2>
@endsection

@section('body-upper-content')

<div class="card-shadow">
    <div class="card-shadow-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Transaction Id</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Date</th>
                        <th scope="col">Card cvc</th>
                        <th scope="col">Expiry Month</th>
                        <th scope="col">Expiry Year</th>
                        <th scope="col">Card Last 4 Digits</th>
                        <th scope="col">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction['transaction_id'] }}</td>
                        <td>{{ $transaction['amount'] }}</td>
                        <td>{{ $transaction['date'] }}</td>
                        <td>{{ $transaction['card_cvc '] }}</td>
                        <td>{{ $transaction['exp_month'] }}</td>
                        <td>{{ $transaction['exp_year'] }}</td>
                        <td>{{ $transaction['card_last_4'] }}</td>
                        <td>{{ ($transaction['created_at'])->diffForHumans() }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{ $transactions->links() }}
@endsection
