<tr>
    <td>{{$bpjs->no ?? "-"}}</td>
    <td>{{$bpjs->name}}</td>
    <td>{{$bpjs->identity_card}}</td>
    <td>{{$bpjs->family_card}}</td>
    <td>{{$bpjs->bpjs_card}}</td>
    <td>
        <a wire:click="delete" class="btn text-danger">
            <i class="fa fa-trash fa-1x"></i>
        </a>
        <a href="{{route('bpjs.update', ['bpjs' => $bpjs->id])}}" class="btn text-warning">
            <i class="fa fa-edit fa-1x"></i>
        </a>
    </td>
</tr>
@push("js")

@endpush