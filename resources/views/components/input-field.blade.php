@if($type === 'radio')
    <div class="form-check">
        <input type="radio" class="form-check-input" name="job_type" id="{{$id}}" value="{{$name}}">
        <label for="{{$id}}" class="form-check-label">{{$label}}</label>
    </div>
@elseif($type === 'textarea')
    <div class="form-group  mt-2">
        <label for="{{$id}}">{{$label}}</label>
            <textarea name="{{$name}}" id="{{$id}}" class="form-control"></textarea>
    </div>
@else
    <div class="form-group  mt-2">
        <label for="{{$id}}">{{$label}}</label>
        <input type="{{$type}}" name="{{$name}}" id="{{$id}}" class="form-control">
    </div>
@endif
