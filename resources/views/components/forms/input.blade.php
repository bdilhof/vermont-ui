<div {{ $attributes->class(['']) }}>
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" class="form-control {{ $error ? 'is-invalid' : '' }}" id="{{ $id }}" value="{{ $value }}" placeholder="{{ $placeholder }}" {{ $required ? 'required' : '' }}>
    @if($error)
        <div class="invalid-feedback">
            {{ $error }}
        </div>
    @endif
</div>
