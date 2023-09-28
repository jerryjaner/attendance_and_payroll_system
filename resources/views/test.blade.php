@extends('layouts.main')
@section('main-content')

<table class="table table-striped table-hover border border-gray payroll_all" id="records" style="width:100%">
    <thead>
        <tr>
            <th  class="text-center border border-gray">ID</th>
            <th  class="text-center border border-gray">Name</th>
            <th  class="text-center border border-gray">Department</th>
            <th  class="text-center border border-gray">Positions</th>
            <th  class="text-center border border-gray">Monthly Base</th>
            <th  class="text-center border border-gray">Daily Rate</th>
            <th  class="text-center border border-gray">Hourly Rate</th>
            <th  class="text-center border border-gray">Base Salary</th>
            <th  class="text-center border border-gray" colspan="4" style="background-color:yellow">SSS</th>
            <th  class="text-center border border-gray" colspan="4" style="background-color:yellow">Pag Ibig</th>
            <th  class="text-center border border-gray" colspan="3" style="background-color:yellow">Philhealth</th>
            <th  class="text-center border border-gray" style="background-color:yellow">TAX</th>
            <th  class="text-center border border-gray" style="background-color:rgb(34, 227, 118)">Allowance</th>
            <th  class="text-center border border-gray" style="background-color:rgb(93, 93, 93)">13 Month Salary</th>
            <th  class="text-center border border-gray" colspan="2" style="background-color:rgb(226, 248, 113)">Filled w/Pay Leaves</th>
            <th  class="text-center border border-gray" colspan="13" style="background-color:rgba(237, 177, 13, 0.719)">OVERTIME</th>
            <th  class="text-center border border-gray" colspan="13" style="background-color:rgba(255, 170, 0, 0.977)">NIGHT DIFFERENTIAL</th>
            <th  class="text-center border border-gray" colspan="7" style="background-color: #FFD966">RESTDAY</th>
            <th  class="text-center border border-gray" colspan="5" style="background-color: #FFE599">HOLIDAYS</th>
            <th  class="text-center border border-gray" style="background-color: #C9DAF8">ADJUSTMENTS</th>
            <th  class="text-center border border-gray" style="background-color: #93C47D">TOTAL ADDIDTIONALS</th>
            <th  class="text-center border border-gray" style="background-color: #A4C2F4">GROSS SALARY</th>
            <th  class="text-center border border-gray" colspan="6" style="background-color: #6D9EEB">ATTENDANCE</th>
            <th  class="text-center border border-gray" style="background-color: #6D9EEB">GOV. CONTRIBUTION</th>
            <th  class="text-center border border-gray" style="background-color: #B4A7D6">CASH ADVANCE</th>
            <th  class="text-center border border-gray" style="background-color: #BA91A5">ADJUSTMENT</th>
            <th  class="text-center border border-gray" style="background-color: #DD7E6B">TOTAL DEDUCTION</th>
            <th  class="text-center border border-gray" style="background-color: #FF9900">NET SALARY</th>
            <th  class="text-center border border-gray" style="background-color: #D9D9D9">DOLLAR VALUE</th>
        </tr>
        <tr>
            <th  class="text-center border border-gray"></th>
            <th  class="text-center border border-gray"></th>
            <th  class="text-center border border-gray"></th>
            <th  class="text-center border border-gray"></th>
            <th  class="text-center border border-gray"> </th>
            <th  class="text-center border border-gray"> </th>
            <th  class="text-center border border-gray"> </th>
            <th  class="text-center border border-gray"> </th>
            <th  class="text-center border border-gray">EE</th>
            <th  class="text-center border border-gray">ER</th>
            <th  class="text-center border border-gray" >SSS Loan</th>
            <th  class="text-center border border-gray" >Total</th>
            <th  class="text-center border border-gray">EE</th>
            <th  class="text-center border border-gray">ER</th>
            <th  class="text-center border border-gray">Pag ibig Loan</th>
            <th  class="text-center border border-gray">Total</th>
            <th  class="text-center border border-gray">EE</th>
            <th  class="text-center border border-gray">ER</th>
            <th  class="text-center border border-gray">Total</th>
            <th  class="text-center border border-gray"></th>
            <th  class="text-center border border-gray"></th>
            <th  class="text-center border border-gray"></th>
            <th  class="text-center border border-gray">VL</th>
            <th  class="text-center border border-gray">SL</th>
            <th  class="text-center border border-gray">OT</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">RDOT</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">SHOT</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">RDSHOT</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">RHOT</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">RDRHOT</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">Total Amount</th>
            <th  class="text-center border border-gray">ND</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">RDND</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">SHND</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">RDSHND</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">RHND</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">RDRHND</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">Total Amount</th>
            <th  class="text-center border border-gray">RD</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">RDSH</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">RDRH</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">Total Amount</th>
            <th  class="text-center border border-gray">SH</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">RH</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">Total Amount</th>
            <th  class="text-center border border-gray">Total Amount</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">Total Amount</th>
            <th  class="text-center border border-gray">L/UT</th>
            <th  class="text-center border border-gray">A</th>
            <th  class="text-center border border-gray">VTO</th>
            <th  class="text-center border border-gray">LWP</th>
            <th  class="text-center border border-gray">S</th>
            <th  class="text-center border border-gray">Total Amount</th>
            <th  class="text-center border border-gray">Total Amount</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">Total Amount</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">Amount</th>
            <th  class="text-center border border-gray">Amount</th>

        </tr>
    </thead>
    {{-- <tfoot>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th>Total:</th>
            <th>Total Rate:</th>
            <th></th>
        </tr>
    </tfoot> --}}
</table>

{{-- <script>
var options = {
    chart: {
        type: 'bar'
    },
    series: [],
    xaxis: {
        categories: []
    }
}

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();

$.ajax({
    url: '/employees1',
    method: 'GET',
    success: function(response) {
        var categories = [];
        var series = [{
            name: 'Employees',
            data: []
        }];

        $.each(response, function(index, employee) {
            categories.push(employee.employee_name);
            series[0].data.push(employee.employee_department);
        });

        chart.updateSeries(series);
        chart.updateOptions({
            xaxis: {
                categories: categories
            }
        });
    }
});
</script>

</script>  --}}
@endsection
