<div {{ $attributes->class(['']) }}>
    @if($label)
        <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    @endif
    <Select2 :options='{!! $options !!}'
             name="{{ $name }}"
             id="{{ $id }}"
             {{ $required ? 'required' : '' }}
             model-value="{{ $value }}"
             :settings="{allowClear: true, theme: 'bootstrap-5', width: '100%'}"
    />
</div>
