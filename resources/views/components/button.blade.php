<button {{ $attributes->class([
        'btn',
        "btn-{$type}" => ! $outline,
        "btn-outline-{$type}" => $outline,
        'text-nowrap',
        'btn-sm' => $size == 'small',
        'btn-lg' => $size == 'large'
    ])->merge(['type' => 'button']) }}>

    <div class="hstack gap-2">
        @if($icon)
            <span><icon icon="{{ $icon }}" /></span>
        @endif

        @if($link)
            <a href="{{ $link }}" class="text-white text-decoration-none">
                @if($text)
                    {{ $text }}
                @endif
            </a>
        @else
            @if($text)
                {{ $text }}
            @endif
        @endif
    </div>
</button>
