@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Форма создания карточки:</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cards_store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="equipments">Наименование оборудования:</label>
                                <select name="equipments_id" id="equipments" class="form-control">
                                    @forelse ($equipments as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @empty
                                        <option value="">Не найдено</option>
                                    @endforelse
                                </select>
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
                                    @include('cards.input_module')
                                @empty
                                    <p>Модулей не обнаружено</p>
                                @endforelse
                            </div>

                            <button type="reset">Очистить поля</button>
                            <button type="submit">Создать карточку</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#equipments').change(function() {
                $.ajax({
                    method: 'GET',
                    url: '/cards/create',
                    dataType: "text",
                    success: function(data) {
                        $('#data_input_modules').html(data);
                        // console.log(result);
                    }
                });
            });
        });

    </script>
@endsection
