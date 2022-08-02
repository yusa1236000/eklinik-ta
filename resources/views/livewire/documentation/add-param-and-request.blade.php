@section('page_title_icon')
    <i class="metismenu-icon fa fa-portrait"></i>
@endsection
@section('modal')
    <livewire:component.response-modal :doc="$doc->id" />
    <livewire:component.parameter-modal />
@endsection
<div class="row">
    <div class="card col-md-12">
        <div class="card-header">
            Data Documentation
        </div>
        <div class="card-body">
            <table width="100%">
                <tbody>
                    <tr>
                        <td style="width: 30%">Title</td>
                        <td>{{ $doc->title }}</td>
                    </tr>
                    <tr>
                        <td style="width: 30%">Method</td>
                        <td>{{ $doc->method }}</td>
                    </tr>
                    <tr>
                        <td style="width: 30%">Description</td>
                        <td>{{ $doc->description }}</td>
                    </tr>

                </tbody>
            </table>
        </div>
        @if ($list_param)
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Wajib</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doc->parameters as $param)
                        {{ $param->id }}
                    @endforeach
                </tbody>
            </table>
        @endif
        <div class="col-md-6">
            <button class="btn btn-primary" wire:click="addParam">Tambah Parameter</button>
        </div>
    </div>
</div>
