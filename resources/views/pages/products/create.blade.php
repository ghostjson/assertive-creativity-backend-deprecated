@extends('layout.main')


@section('content')

<style>
  .close{
    position: absolute;
    right: 10px;
    cursor: pointer;
  }
</style>

<!--Modal-->
<div class="modal" id="options" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add an option</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
              <label for="option-title">Option Title</label><br>
              <small class="title-error" style="color: red;">Title already used</small>
              <input type="text" class="form-control" id="option-title" placeholder="Option Title">
            </div>
          <div class="form-group">
              <label for="option_type">Option Type</label>
              <select class="option_type" id="option_type">
                <option selected value="0">Select an option type</option>
                <option value="input-text">Input Text</option>
                <option value="color-picker">Pick a colour</option>
                <option value="dropdown">Dropdown selection</option>
                <option value="input-file">Input File</option>
                <option value="checkbox">Checkbox</option>
                <option value="radio">Radio</option>
              </select>
          </div>
          <div class="settings">

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn site-primary" onclick="addOption()" data-dismiss="modal">Add</button>
          <button type="button" class="btn site-dark" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


<div class="row">
    <div class="col-md-8">
            <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Create Product</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="/products">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="product-name">Product Name</label>
                          <input type="text" class="form-control" id="product-name" placeholder="Enter Prodcut Name">
                        </div>
                        <div class="form-group">
                          <label for="vendor">Vendor Name</label>
                          <input type="text" class="form-control" id="vendor" placeholder="Vendor Name">
                        </div>
                        <div class="form-group">
                          <label for="vendor">Price Per Piece</label>
                          <input type="number" class="form-control" id="price" placeholder="Product Price">
                        </div>
                        <div class="form-group">
                          <label for="vendor">Minimum Number of products should buy</label>
                          <input type="number" class="form-control" id="mini" placeholder="Minimum">
                        </div>

                        <div class="card pro-cust">
                            <div class="card-body">
                              <h3>Product Customization Options</h3><br>
                              <ul class="list-group options-listed mb-3">
                                
                              </ul>
                              <a href="#" data-toggle="modal" data-target="#options" class="card-link btn site-primary">Add an option</a>
                            </div>
                          </div>
                      </div>

                      <input type="hidden" name="options" id="product-options">
                      <!-- /.box-body -->
        
                      <div class="box-footer">
                        <button type="submit" class="btn site-primary">Submit</button>
                      </div>
                    </form>
                  </div>
    </div>
</div>


@endsection

@section('scripts')

<script>

  let options = []
  let option;
  let settings = $('.settings');

  $('.title-error').hide();

  $('#option_type').change(function(){
    let type = $(this).val();

    settings.empty()

    switch(type){
      case 'input-text':
        option = {
          type: 'input-text',
          features: []
        }
        break;
      case 'color-picker':
        addPicker()
        option = {
          type: 'color-picker',
          features: []
        }
        break;
      case 'dropdown':
      addListInput()
        option = {
          type: 'dropdown',
          features: []
        }
        break;
      case 'input-file':
        option = {
          type: 'input-file',
          features: []
        }  
      break;
      case 'checkbox':
      addListInput()
        option = {
          type: 'checkbox',
          features: []
        }
      break;
      case 'radio':
      addListInput()
        option = {
          type: 'radio', 
          features: []
        }
        break;
    }
  })


  // add an option
  function addOption(){


    let option_title = $('#option-title')
    let title = option_title.val();
    let options_temp = []

    options = options.filter(item => item.title !== title);

    if(title != '' && $('#option_type').val() != '0'){
      options.push({
        title: title,
        option_type: option.type,
        option_features: option.features
      })
      renderList(options)
    }

    option_title.val('');
    $('#option_type').val('0');
  }

  function renderList(list){
    $('.options-listed').empty();
    $('.settings').empty();
    list.forEach(item => {
      $('.options-listed').append($list_item(item.title));
    });

    $('#product-options').val(JSON.stringify(list))    
  }

  function $list_item(item_name){
    return `<li class="list-group-item">${item_name}<span class="close" onclick="remove('${item_name}')" aria-hidden="true">&times;</span></li>`;
  }

  function remove(item_name){
    options = options.filter(item => item.title != item_name)
    renderList(options);
  }

  // color picker
  function addPicker(){
    settings.append('<div class="form-group">')
    settings.append('<label>Enter Name</label')
    settings.append('<input type="text" class="color-title">')
    settings.append('<input type="color" class="color-value">')
    settings.append(' <button type="button" class="btn site-primary btn-sm m-3" onclick="addPicker()">Add more</button>')
  }

  // dropdown
  function addListInput(){
    settings.append('<input type="text" class="dropdown-value"><button type="button" class="btn site-primary btn-sm m-3" onclick="addList()">Add more</button>')
  }
  function addList(){
    settings.append('<div>'+ $('.dropdown-value').val() +'</div>')
    $('.dropdown-value').val('')
  }

</script>

@endsection