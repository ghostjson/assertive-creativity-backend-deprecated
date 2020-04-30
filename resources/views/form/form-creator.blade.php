@extends('layout.main')


@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/formbuilder/0.2.1/formbuilder-min.css">

    <style>
        body {
            padding: 0;
            margin: 10px 0;
            background: #f2f2f2 url('http://formbuilder.readthedocs.io/en/latest/img/noise.png');
        }
    </style>

    <section class="form-creator">

        <div id="build-wrap"></div>

    </section>






@endsection

@section('scripts')

    <script src="/js/form-builder.min.js"></script>

    <script>

        let form;

        $(document).ready(function(){
             form = $('#build-wrap').formBuilder({
                 disabledActionButtons: ['data'],
                 onSave: function(evt,formData){
                     console.log(formData)
                     //form data
                 }
             });
        });

        function getData(){
            console.log(form.actions.getData('json'));
        }
    </script>

@endsection
