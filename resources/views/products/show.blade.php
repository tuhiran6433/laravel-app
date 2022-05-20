@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-8 margin-tb">
        <div class="pull-left">
            <h2> Show Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $product->name }}
        </div>
    </div>
    @if($product->parent_id != '')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Parent Product:</strong>
            {{ $product->parent->name }}
        </div>
    </div>
    @endif
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Details:</strong>
            {{ $product->detail }}
        </div>
    </div>
</div>
@endsection