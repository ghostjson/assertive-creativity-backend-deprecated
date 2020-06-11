@extends('layout.main')

@section('content')


<div class="row mb-3">
  <div class="col-md-2" style="margin-left: auto;">
    <a href="/products/new">
      <button type="button" class="btn btn-block site-primary">Add new Product</button>
    </a>
    </div>
</div>

<table id="products" class="display" style="width:100%; background-color: white;">
  <thead>
  <tr>
      <th>S.N</th>
      <th>Product Name</th>
      <th>Vendor</th>
      <th>Total Sales</th>
      <th>Edit/Remove</th>
  </tr>
  </thead>
  <tbody>
          <tr>
              <td>1</td>
              <td>Big B T-shirt</td>
              <td>Kozk</td>
              <td>1323</td>
              <td> <a href="#"> Edit </a> / <a href="#"> Remove </a> </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Tony Stark T-shirt</td>
            <td>Kozk</td>
            <td>1234</td>
            <td> <a href="#"> Edit </a> / <a href="#"> Remove </a> </td>
        </tr>

  </tbody>
  <tfoot>
  <tr>
      <th>S.N</th>
      <th>Product Name</th>
      <th>Vendor</th>
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