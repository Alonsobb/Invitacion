@props([
    'titulo' => 'titulo',
    'name' => 'noName',
    'required',
    'id',
    'type'=>'text',
    'value'=>null,
])

<div class="">
    <label for="{{ empty($id) ? $name : $id }}">{{ $titulo }} @isset($required)
            <span class="text-red-600 text-sm font-bold">*</span>
        @endisset
    </label>
    <textarea type="{{$type}}" id="{{ empty($id) ? $name : $id }}" @isset($required) required @endisset
        name="{{ $name }}" class="textarea" {{ $attributes }} >@if($errors->all()){{old($name)}}@endif @isset($value){{ $value }}@endisset</textarea>
    @error($name)
        <span class="text-red-600">
            <i class="fa-solid fa-circle-exclamation"></i>
            {{ $message }}
        </span>
    @enderror
</div>
