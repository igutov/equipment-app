@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Форма создания карточки:</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('card_store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Наименование оборудования
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        @forelse ($equipments as $item)
                                            <input type="hidden" name="equipments_id" value="{{ $item->id }}">
                                            <a class="dropdown-item"
                                                href="{{ route('card_create', $item->id, $modules_count) }}">{{ $item->name }}</a>
                                        @empty
                                            <p>Не найдено</p>
                                        @endforelse
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="hangars">Номер цеха:</label>
                                <select name="hangars_id" id="hangars" class="form-control">
                                    @forelse ($hangars as $item)
                                        <option value="{{ $item->id }}">{{ $item->number }}</option>
                                    @empty
                                        <option value="">Не найдено</option>
                                    @endforelse
                                </select>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6"><label for="inventory">Инвентарный номер</label> <input
                                        type="text" id="inventory" name="inventory_number" placeholder="Инвентарный номер"
                                        class="form-control">
                                </div>
                                <div class="form-group col-md-6"><label for="nomenclature">Номенклатурный номер</label>
                                    <input type="text" id="nomenclature" name="nomenclature_number"
                                        placeholder="Номенклатурный номер" class="form-control">
                                </div>
                            </div>

                            <div id="data_input_modules">
                                @forelse ($modules as $item)
                                    <input type="hidden" name="modules_count" value="{{ $loop->count }}">
                                    @include('cards.input_module')
                                @empty
                                    <p>Модулей не обнаружено</p>
                                @endforelse
                            </div>

                            <button type="reset" class="btn btn-danger">Очистить поля</button>
                            <button type="submit" class="btn btn-primary">Создать карточку</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
