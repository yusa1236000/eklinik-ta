<tr>
    <td>{{$patient->nik ?? "-"}}</td>
    <td>{{$patient->name}}</td>
    <td>{{\Carbon\Carbon::parse($patient->birth_date)->diffInYears()}}</td>
    <td>{{$patient->gender}}</td>
    <td>{{$patient->address}}</td>
    <td>{{$patient->phone_number}}</td>
    <td>
        <a wire:click="delete" class="btn text-danger">
            <i class="fa fa-trash fa-1x"></i>
        </a>
        <a href="{{route('patient.update', ['patient' => $patient->id])}}" class="btn text-warning">
            <i class="fa fa-edit fa-1x"></i>
        </a>
    </td>
</tr>
