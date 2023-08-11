<h2>Daily Task Hour Counts</h2>
<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Hours</th>
            <th>Hours</th>
            <th>Hours</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($dailyCounts as $task)
            <tr>
                <td>{{ $task->date }}</td>
                <td>{{ $task->hours  }}</td>
                <td>{{ $task->task_count  }}</td>
                <td>{{  $task->task_ids   }}</td>


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
      @foreach ($tasks_by_month as $tasks)
      <tr>
          <td>{{ $tasks->month }}</td>
          <td>{{ $tasks->hours  }}</td>
          <td>{{ $tasks->task_count  }}</td>
          <td>{{  $tasks->task_ids   }}</td>


      </tr>
  @endforeach
    </tbody>
</table>



