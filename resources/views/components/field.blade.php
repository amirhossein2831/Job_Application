<div class="{{$containerClass}}">
    <label class="form-label">{{$label}}
        <input type="{{$type}}" name="{{$fieldName}}" class="form-control @error($fieldName) is-invalid @enderror" placeholder="{{$slot}}">
    </label>
    <x-errors.field-message name="{{$fieldName}}"/>
</div>
