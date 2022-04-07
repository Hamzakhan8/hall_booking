@extends('couple.dashboard')

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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction['transaction_id'] }}</td>
                        <td>{{ $transaction['amount'] }}</td>
                        <td>{{ $transaction['date'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{ $transactions->links() }}
@endsection
