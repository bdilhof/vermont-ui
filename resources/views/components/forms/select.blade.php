<div {{ $attributes->class(['']) }}>
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <select class="form-control {{ $error ? 'is-invalid' : '' }}" aria-label="Vyber zo zoznamu" id="{{ $id }}" name="{{ $name }}">
        <option selected disabled>{{ __('ui::common.please-choose') }}</option>
        @foreach($options as $option)
            <option value="{{ $option->id }}" {{ $option->id === $value ? ' selected' : '' }}>
                {{ $option->text }}
            </option>
        @endforeach
    </select>
    @if($error)
        <div class="invalid-feedback">
            {{ $error }}
        </div>
    @endif
</div>
