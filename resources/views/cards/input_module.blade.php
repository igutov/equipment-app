<h4>{{ $item->name }}</h4>
<input type="hidden" name="modules_{{ $loop->index }}" value="{{ $item->id }}">
<div class="form-group">
    <label for="photo_{{ $loop->index }}">Фото:</label>
    <input type="file" class="form-control-file" id="photo_{{ $loop->index }}" name="photo_{{ $loop->index }}">
</div>
<div class="form-group">
    <label for="info_{{ $loop->index }}">Состояние:</label>
    <textarea class="form-control" id="info_{{ $loop->index }}" rows="1"
        name="description_{{ $loop->index }}"></textarea>
</div>
