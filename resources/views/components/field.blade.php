<div class="input-box @error($fieldName) is-invalid @enderror">
    <span class="icon"><ion-icon style="color: #FFFFFF" name="{{$iconName}}"></ion-icon></span>
    <input name="{{$fieldName}}" type="{{$type}}" value="{{$value}}">
    <label>{{$label}}</label>
</div>
<x-errors.field-message name="{{$fieldName}}"/>

