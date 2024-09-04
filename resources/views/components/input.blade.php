@props([
    'label',
    'name',
    'defaultValue' => '',
    'placeholder' => '',

])


{{ $label }}
<div>
    <input type="text" name="{{ $name }}" value="{{ $errors->any() ? old($name) : $defaultValue }}" placeholder="{{ $placeholder }}">
</div>

@error($name)
<div style="color: red;">{{ $message }}</div>
@enderror
