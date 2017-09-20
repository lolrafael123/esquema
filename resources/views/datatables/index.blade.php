@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Listagem de Provas (Datatables)</h2>


            <table class="table table-bordered" id="datatable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Disciplina</th>
                        <th>Sala</th>
                        <th>Data</th>
                    </tr>
                </thead>
            </table>


        </div>
    </div>
</div>
@endsection


@push('scripts')
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
    $(function () {
        $(function () {
            $('#datatable0').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url("datatable/ajaxdata") }}'
            });
        });
        
        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url("datatable/ajaxdata") }}',
            columns: [
                {data: 0, name: 'id'},
                {data: 1, name: 'title'},
                {data: 2, name: 'disciplina', searchable: false},
                {data: 3, name: 'created_at'},
                {data: 4, name: 'updated_at'}
            ]
        });
        
    });
</script>
@endpush