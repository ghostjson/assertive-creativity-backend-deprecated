@extends('layout.main')

@section('content')


<div class="row mb-3">
  <div class="col-md-2" style="margin-left: auto;">
    <a href="/vendors/new">
        <button type="button" class="btn btn-block btn-primary">Add new Vendor</button>
    </a>
</div>
</div>

<table id="products" class="display" style="width:100%; background-color: white;">
  <thead>
  <tr>
      <th>S.N</th>
      <th>Vendor Name</th>
      <th>Address</th>
      <th>Total Sales</th>
      <th>Edit/Remove</th>
  </tr>
  </thead>
  <tbody>
          <tr>
              <td>1</td>
              <td>Kozk</td>
              <td>Some mock address here</td>
              <td>10522</td>
              <td> <a href="#"> Edit </a> / <a href="#"> Remove </a> </td>
          </tr>
          <tr>
            <td>2</td>
            <td>oor</td>
            <td>Some mock address here</td>
            <td>1045</td>
            <td> <a href="#"> Edit </a> / <a href="#"> Remove </a> </td>
        </tr>

  </tbody>
  <tfoot>
  <tr>
        <th>S.N</th>
        <th>Vendor Name</th>
        <th>Address</th>
        <th>Total Sales</th>
        <th>Edit/Remove</th>
  </tr>
  </tfoot>
</table>

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#products').DataTable();
        } );
    </script>
@endsection