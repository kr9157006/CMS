@php
    $events = $case->events;
    $btn = '';
    if (Auth::user()->isClerk()) {
        $btn = "<button class='btn btn-sm btn-link register-case-btn' onclick='registerEvent({$case->id}); return false;'>Scehdule Event</button>";
    }
    if ($events) {
        echo "<h6>Events Attached To This Case{$btn}</h6>
        <table class='table table-condensed table-sm table-bordered' style='font-size: 9pt;'>
            <thead style='background-color:cornflowerblue;'>
                <th>#</th>
                <th>Event Type</th>
                <th>Date </th>
                <th>Locatin</th>
                <th>OutCome</th>
            </thead><tbody>";
        $count = 0;
        foreach ($events as $event) {
            echo "<tr>
                    <td>" .
                ++$count .
                "</td>
                    <td>{$event->eventType->event_type_name}</td>
                    <td>{$event->date_time}</td>
                    <td>{$event->location}</td>
                    <td>{$event->out_come}</td>
                </tr>";
        }
        echo '</tbody></table>';
    } else {
        echo 'No event attach to this case.';
    }
@endphp
