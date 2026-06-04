@include('dashboard.header')
<br><br>

<h2 style="text-align:center">Transactions</h2>
<br>

<style>
    div.scrollmenu {
        background-color: #333;
        overflow: auto;
        white-space: nowrap;
    }

    div.scrollmenu a {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px;
        text-decoration: none;
    }

    div.scrollmenu a:hover {
        background-color: #777;
    }
    table, td {
        background: goldenrod;
        color: white;
        border: 1px solid white; /* Added border for better visibility */
    }
    th {
        background: gold;
        color: white;
    }
</style>

<b>
<div class="scrollmenu">
    <table cellspacing="400" class="table" border="1">
        <thead>
            <tr>
                <th>ACTION</th>
                <th>AMOUNT</th>
                <th>PAYMENT METHOD/MODE</th>
                <th>STATUS</th>
                <th>DATE</th>
            </tr>
        </thead>
        <tbody>
            @foreach($deposits as $deposithistory)
                <tr>
                    <td>Deposit</td>
                    <td>${{ $deposithistory->amount }}</td>
                    <td>{{ $deposithistory->payment_method }}</td>
                    <td>{{ $deposithistory->status == '0' ? 'Pending' : 'Approved' }}</td>
                    <td>{{ $deposithistory->created_at }}</td>
                </tr>
            @endforeach

            @foreach($withdrawal as $withdrawalhistory)
                <tr>   
                    <td>Withdrawal</td>
                    <td>${{ $withdrawalhistory->amount }}</td>
                    <td>{{ $withdrawalhistory->mode }}</td>
                    <td style="color: {{ $withdrawalhistory->status == '0' ? 'red' : 'green' }};">
                        {{ $withdrawalhistory->status == '0' ? 'Pending' : 'Approved' }}
                    </td>
                    <td>{{ $withdrawalhistory->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</b>
<hr>

   <a href="account"><button class="btn btn-primary">back to account</button></a>
<br><br>





  @include('dashboard.footer')