@extends('layout.main')


@section('content')

<div class="row">
    <div class="col-md-8">
            <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Create Vendor</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="/vendors">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="product-name">Vendor Name</label>
                          <input type="text" class="form-control" id="product-name" placeholder="Enter Prodcut Name">
                        </div>
                        <div class="form-group">
                          <label for="address">Address</label>
                          <textarea class="form-control" id="address" placeholder="Address"></textarea>
                        </div>
                      </div>
                      <!-- /.box-body -->
        
                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
    </div>
</div>


@endsection