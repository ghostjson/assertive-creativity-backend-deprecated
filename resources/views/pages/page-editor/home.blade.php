@extends('layout.main')


@section('content')

<style>
    .component-panel{
        background: var(--gray-dark);
        color: white;
    }

    .item{

    }
</style>

<div class="row">
    <div class="col-md-9" style="height: 2000px">
        test component
    </div>
    <div class="col-md-3 component-panel p-3" style="position: fixed;right: 0px">
        <h3>Components</h3>
        <div class="item primary-bg mt-3" draggable="true">
            Item 1
        </div>
        <div class="item primary-bg mt-3"  draggable="true">
            Item 2
        </div> 
        <div class="item primary-bg mt-3"  draggable="true">
            Item 3
        </div> 
        <div class="item primary-bg mt-3"  draggable="true">
            Item 3
        </div> 
    </div>
</div>

@endsection