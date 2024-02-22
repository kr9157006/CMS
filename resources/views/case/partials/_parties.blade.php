@php
    $staffs = $case->parties;
    $btn = "";
    if($case->isAssignedTo(Auth::user()->person_id) && $case->isActive() && Auth::user()->can('party-create'))
    {
        $btn = "<button class='btn btn-sm btn-link float-right' onclick='registerParty({$case->id}); return false;'>Add New Party</button>";
    }
    
    if ($staffs) {
        echo "<h6>Parties in This Case{$btn}</h6>
        <table class='table table-condensed table-sm table-bordered' style='font-size: 9pt;'>
            <thead style='background-color:cornflowerblue;'>
                <th>#</th>
                <th>Person</th>
                <th>Party Type</th>
                <th>Date</th>
            </thead><tbody>";
        $count = 0;
        foreach ($staffs as $staff) {
            echo "<tr>
                    <td>" .
                ++$count .
                "</td>
                    <td>{$staff->person->getFullName()}</td>
                    <td>{$staff->partyType->party_type_name}</td>
                    <td>{$staff->created_at}</td>
                </tr>";
        }
        echo '</tbody></table>';
    } else {
        echo 'No parties assign to this case.';
    }
@endphp
