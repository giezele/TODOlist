@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        'user\checklist\show bleidas'
                       {{ $checklist->name }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

   
