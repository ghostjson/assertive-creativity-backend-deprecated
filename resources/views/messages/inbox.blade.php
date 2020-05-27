@extends('messages.layout')

@section('message_content')
    
<div class="col-md-9">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="card-title"> Inbox</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm">
            <input type="text" class="form-control" placeholder="Search Mail">
            <div class="input-group-append">
              <div class="btn btn-primary">
                <i class="fas fa-search"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <div class="mailbox-controls">
          <!-- Check all button -->
          <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
          </button>
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
          </div>
          <!-- /.btn-group -->
          <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
          <div class="float-right">
            1-50/200
            <div class="btn-group">
              <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
              <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
            </div>
            <!-- /.btn-group -->
          </div>
          <!-- /.float-right -->
        </div>
        <div class="table-responsive mailbox-messages">
          <table class="table table-hover table-striped">
            <tbody>
            <tr>
              <td>
                <div class="icheck-primary">
                  <input type="checkbox" value="" id="check1">
                  <label for="check1"></label>
                </div>
              </td>
              <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
              <td class="mailbox-name"><a href="/messages/read">Alexander Pierce</a></td>
              <td class="mailbox-subject"><b>Assertive Creativity Subject</b> - Hello some content here
              </td>
              <td class="mailbox-attachment"></td>
              <td class="mailbox-date">5 mins ago</td>
            </tr>
            
            </tbody>
          </table>
          <!-- /.table -->
        </div>
        <!-- /.mail-box-messages -->
      </div>
      <!-- /.card-body -->
      <div class="card-footer p-0">
        <div class="mailbox-controls">
          <!-- Check all button -->
          <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
          </button>
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
          </div>
          <!-- /.btn-group -->
          <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
          <div class="float-right">
            1-50/200
            <div class="btn-group">
              <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
              <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
            </div>
            <!-- /.btn-group -->
          </div>
          <!-- /.float-right -->
        </div>
      </div>
    </div>
    <!-- /.card -->
  </div>

@endsection