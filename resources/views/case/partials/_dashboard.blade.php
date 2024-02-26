<div class="container table-responsive">
    <h2 class="text-center bg-info mr-2 underlined">Case Trials</h2>
    @php
        $cases = App\models\CaseModel::getOpenCaseTrials();
        $count = 0;
    @endphp
    @if ($cases)
        <table class="table table-condensed table-sm table-bordered">
            <thead class="bg-active">
                <th>#</th>
                <th>Case Number</th>
                <th>Plaintiff</th>
                <th>Defendant</th>
                <th>Date</th>
                <th>Event Type</th>
            </thead>
            <tbody>
                @foreach ($cases as $case)
                    <tr>
                        <td><?= ++$count ?></td>
                        <td>{{$case->case_number}}</td>
                        <td>{{$case->getPlaintiff()}}</td>
                        <td>{{$case->getDefendant()}}</td>
                        <td>{{$case->getEventSceduleForToday()}}</td>
                        <td>{{$case->getEventType()}}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    @else
        <p>No active case schedule for today</p>
    @endif
</div>
