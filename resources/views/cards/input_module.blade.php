<h4>{{ $item->name }}</h4>
<input type="hidden" name="modules_id" value="{{ $item->id }}">
<div class="form-group">
    <label for="photo_{{ $item->id }}">Фото:</label>
    <input type="file" class="form-control-file" id="photo_{{ $item->id }}" name="photo_{{ $item->id }}">
</div>
<div class="form-group">
    <label for="info_{{ $item->id }}">Состояние:</label>
    <textarea class="form-control" id="info_{{ $item->id }}" rows="1" name="description_{{ $item->id }}"></textarea>
</div>
