@extends('layout.main')

@section('content')




    <table id="forms" class="display" style="width:100%; background-color: white;">
        <thead>
        <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Url</th>
            <th>Edit/Remove</th>
        </tr>
        </thead>
        <tbody></tbody>
        <tfoot>
        <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Url</th>
            <th>Edit/Remove</th>
        </tr>
        </tfoot>
    </table>

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#forms').DataTable();
        } );
    </script>
@endsection
