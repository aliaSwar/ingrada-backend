<h2>Daily Task Hour Counts</h2>
<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Hours</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dailyCounts as $count)
            <tr>
                <td>{{ $count->date }}</td>
                <td>{{ $count->hours }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<h2>Weekly Task Hour Counts</h2>
<table>
    <thead>
        <tr>
            <th>Week</th>
            <th>Year</th>
            <th>Hours</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($weeklyCounts as $count)
            <tr>
                <td>{{ $count->week }}</td>
                <td>{{ $count->year }}</td>
                <td>{{ $count->hours }}</td>
            </tr>
        @endforeach
    </tbody>
</table>



