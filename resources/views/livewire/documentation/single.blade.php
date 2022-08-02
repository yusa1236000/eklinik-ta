<tr>
    <td>{{$documentation->id }}</td>
    <td>{{$documentation->title ?? "-"}}</td>
    <td>{{$documentation->description}}</td>
    <td>{{$documentation->url}}</td>
    <td>{{$documentation->method}}</td>

    <td>
        <a wire:click="delete" class="btn text-danger">
            <i class="fa fa-trash fa-1x"></i>
        </a>
        <a href="{{route('documentation.update', ['documentation' => $documentation->id])}}" class="btn text-warning">
            <i class="fa fa-edit fa-1x"></i>
        </a>
        {{-- <a href="{{route('documentation.show', ['documentation' => $documentation->id])}}" class="btn text-success">
            <i class="fa fa-eye fa-1x"></i>
        </a> --}}
    </td>
</tr>
