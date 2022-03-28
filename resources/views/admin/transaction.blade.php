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
                        <th scope="col">Name</th>
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
                        <th scope="row">Hitesh Mahavar</th>
                        <td>sdjf34734nasdf894r3dsf</td>
                        <td>10000</td>
                        <td>12/22/2023</td>
                        <td>123</td>
                        <td>8</td>
                        <td>2028</td>
                        <td>6789</td>
                        <td><a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                </tbody>
            </table>
        </div>
    </div>
</div>

{{ $transactions->links() }}
@endsection
