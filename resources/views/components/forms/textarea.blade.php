<div {{ $attributes->class(['']) }}>
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <textarea name="{{ $name }}" id="{{ $id }}" class="form-control {{ $error ? 'is-invalid' : '' }}" rows="4" {!! $required ? 'required' : '' !!}>{{ $value }}</textarea>
    @if($error)
        <div class="invalid-feedback">
            {{ $error }}
        </div>
    @endif
</div>
