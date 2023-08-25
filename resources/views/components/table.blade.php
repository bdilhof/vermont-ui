<div class="table-responsive">
    <table class="table table-striped text-nowrap align-middle">
        <thead>
            {{ $thead }}
        </thead>
        <tbody>
            {{ $tbody }}
        </tbody>
        @if($caption)
            <caption class="small">{{ $caption }}</caption>
        @endif
    </table>
</div>
