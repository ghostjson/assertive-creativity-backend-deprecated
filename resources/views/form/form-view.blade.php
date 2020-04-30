@extends('layout.main')



@section('content')

    <div class="form-output">

    </div>

@endsection

@section('scripts')
    <script src="/js/form-render.min.js"></script>

    <script>
        $('.form-output').formRender({
            formData: `[
  {
    "type": "checkbox-group",
    "required": false,
    "label": "Checkbox Group",
    "toggle": false,
    "inline": false,
    "name": "checkbox-group-1588234415955",
    "access": false,
    "other": false,
    "values": [
      {
        "label": "Option 1",
        "value": "option-1",
        "selected": true
      }
    ]
  },
  {
    "type": "hidden",
    "name": "hidden-1588234417615",
    "access": false
  },
  {
    "type": "paragraph",
    "subtype": "p",
    "label": "Paragraph",
    "access": false
  },
  {
    "type": "select",
    "required": false,
    "label": "Select",
    "className": "form-control",
    "name": "select-1588234418887",
    "access": false,
    "multiple": false,
    "values": [
      {
        "label": "Option 1",
        "value": "option-1",
        "selected": true
      },
      {
        "label": "Option 2",
        "value": "option-2"
      },
      {
        "label": "Option 3",
        "value": "option-3"
      }
    ]
  },
  {
    "type": "button",
    "label": "Button",
    "subtype": "button",
    "className": "btn-default btn",
    "name": "button-1588234423671",
    "access": false,
    "style": "default"
  }
]`,
            dataType: 'json',
            render: true
        });
    </script>
@endsection
