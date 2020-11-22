@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Список карточек:</div>


                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf

                            <ul class="list-group">
                                @forelse ($cards as $item)
                                    <li class="list-group-item">{{ $item->name }}</li>
                                @empty
                                    <li class="list-group-item">Не найдено</li>
                                @endforelse
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
