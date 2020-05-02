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
        <tbody>
            <?php $id=1; ?>
            @foreach($forms as $form)
                <tr>
                    <td>{{$id}}</td>
                    <td>{{$form->name}}</td>
                    <td>{{$form->slug}}</td>
                    <td> <a href="/form/edit/{{$form->id}}"> Edit </a> / <a href="/form/remove/{{$form->id}}"> Remove </a> </td>
                </tr>

                <?php $id++; ?>
            @endforeach
        </tbody>
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
