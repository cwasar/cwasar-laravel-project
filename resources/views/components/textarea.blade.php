@props([
'label',
'name',
'defaultValue' => '',
'placeholder',

])


{{ $label }}
<div>
    <textarea name="{{ $name }}" id="" cols="30" rows="10" placeholder="{{ $placeholder }}">
        {{ $errors->any() ? old($name) : $defaultValue }}
    </textarea>
</div>

@error($name)
<div style="color: red;">{{ $message }}</div>
@enderror
