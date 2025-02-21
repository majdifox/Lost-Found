@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Categories List 
                        <a href="{{ url('category/create)}}" class="btn btn-primary" > Add Category</a>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
