@props([
    'defaultValue' => 'Выбрать',
    'values' => [],
    'name',
    'label' => 'Выбрать',
    'multiple' => ''
])

<div class="col-2">
    <label for="">{{ $label }}</label><br>
    <select class="" aria-label="" name="{{ $name }}" {{ $multiple }}>
        @if($defaultValue === 'Выбрать')
            <option value="none">Выбрать</option>
        @endif
        @foreach($values as $key => $value)
            @if($defaultValue == $key)
                    <option value="{{ $key }}" selected>{{ $value }}</option>
                @else
                    <option value="{{ $key }}">{{ $value }}</option>
            @endif
        @endforeach
    </select>
</div>
@error($name)
<div style="color: red;">{{ $message }}</div>
@enderror

