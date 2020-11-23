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

                            <div class="list-group">
                                @forelse ($cards as $item)
                                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">List group item heading</h5>
                                            <small>{{ $item->created_at }}</small>
                                        </div>
                                        <p class="mb-1">Номенклатурный номер: {{ $item->nomenclature_number }}</p>
                                        <p class="mb-1">Инвентарный номер: {{ $item->inventory_number }}</p>
                                        {{-- <small>{{ $item->created_at }}</small> --}}
                                    </a>
                                @empty
                                    <p>Не найдено</p>
                                @endforelse
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
