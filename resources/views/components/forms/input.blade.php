@props([
    'titulo' => 'titulo',
    'name' => 'noName',
    'required',
    'id',
    'value'=>null,
])

<div class="">
    <label for="{{ empty($id) ? $name : $id }}">{{ $titulo }} @isset($required)
            <span class="text-red-600 text-sm font-bold">*</span>
        @endisset
    </label>
    <input id="{{ empty($id) ? $name : $id }}" @isset($required) required @endisset
        name="{{ $name }}" class="input" {{ $attributes }}
        @if ($errors->all()) value="{{ old($name) }}" @endif
        @isset($value)
        value="{{ $value }}"
        @endisset
        >
    @error($name)
        <span class="text-red-600">
            <i class="fa-solid fa-circle-exclamation"></i>
            {{ $message }}
        </span>
    @enderror
</div>
