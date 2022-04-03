@extends('admin.dashboard')

@section('body-title')
    <h2>
        Transactions
    </h2>
@endsection

@section('body-upper-content')
<div class="card-shadow">
    <div class="card-shadow-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">User Name</th>
                        <th scope="col">Transaction Id</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Date</th>
                        <th scope="col">Card Cvc</th>
                        <th scope="col">Exp month</th>
                        <th scope="col">Exp Year</th>
                        <th scope="col">Card last 4</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                    <tr>
                        <th scope="row">{{ $transaction['user_name'] }}</th>
                        <td>{{ $transaction['transaction_id'] }}</td>
                        <td>{{ $transaction['amount'] }}</td>
                        <td>{{ $transaction['date'] }}</td>
                        <td>{{ $transaction['card_cvc'] }}</td>
                        <td>{{ $transaction['exp_month'] }}</td>
                        <td>{{ $transaction['exp_year'] }}</td>
                        <td>{{ $transaction['card_last_4'] }}</td>
                        <td>
                            <a href="javascript:" class="action-links">
                                <lord-icon
                                src="https://cdn.lordicon.com/qsloqzpf.json"
                                trigger="loop"
                                colors="primary:#121331"
                                state="hover-empty"
                                style="width:25px;height:25px">
                                </lord-icon>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{ $transactions->links() }}
@endsection
