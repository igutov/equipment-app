@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Список оборудования:</div>


                    <div class="card-body">
                        <form method="POST" action="{{ route('equipments.create') }}">
                            @csrf


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
