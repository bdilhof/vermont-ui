<div class="accordion" id="accordionFilter">
    <div class="accordion-item">

        <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button {{ !$open ? 'collapsed' : '' }}"
                    type="button"
                    data-bs-toggle="collapse"
                    aria-expanded="{{ $open ? 'true' : 'false' }}"
                    data-bs-target="#flush-collapseOne">
                {{ __('common.filter') }}
            </button>
        </h2>

        <div id="flush-collapseOne" class="accordion-collapse collapse {{ $open ? 'show' : '' }}" data-bs-parent="#accordionFilter">
            <div class="accordion-body p-3">
                <form action="{{ $url }}" method="GET" id="searchForm">
                    <div class="row g-3">
                        {{ $slot }}
                        <x-ui::filter-item>
                            <label class="form-label">&nbsp;</label>
                            <div class="hstack gap-3">
                                <button type="submit" class="btn btn-primary text-nowrap" form="searchForm">
                                    <span class="me-2"><icon icon="filter"/></span>
                                    <span>{{ __('common.filter') }}</span>
                                </button>
                                <button type="submit" class="btn btn-outline-danger text-nowrap" form="resetForm">
                                    {{ __('common.reset') }}
                                </button>
                            </div>
                        </x-ui::filter-item>
                    </div>
                </form>
                <form action="{{ $url }}" method="GET" id="resetForm">
                    <input type="hidden" name="reset" value="1">
                </form>
            </div>
        </div>
    </div>
</div>
