@if($type === 'radio')
    <div class="form-check">
        <input type="radio" class="form-check-input @error($name) is-invalid @enderror" name="job_type" id="{{$id}}" value="{{$name}}"{{$slot}}>
        <label for="{{$id}}" class="form-check-label">{{$label}}</label>
    </div>
@elseif($type === 'textarea')
    <div class="form-group mt-2">
        <label for="{{$id}}">{{$label}}</label>
            <textarea name="{{$name}}" id="{{$id}}" class="form-control @error($name) is-invalid @enderror">{{old($name)}}</textarea>
    </div>
@else
    <div class="form-group mt-2">
        <label for="{{$id}}">{{$label}}</label>
        <input type="{{$type}}" name="{{$name}}" id="{{$id}}" class="form-control @error($name) is-invalid @enderror" value="{{old($name)}}">
    </div>
@endif
<x-errors.field-message name="{{$name}}"/>
<style>
    .is-invalid{
        border: 2px solid red;
    }
    .error-text {
        color: #F51212;
        font-family: "Century Schoolbook L" ,sans-serif;
        font-size: .9em;
        font-weight: bold;
    }
</style>
