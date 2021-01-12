@if ($status === 'published')
    <span class="d-inline-block text-3xs font-bold border border-success bg-success text-white text-uppercase rounded-sm px-2 py-1">{{ __('Publié') }}</span>
@elseif ($status === 'draft')
    <span class="d-inline-block text-3xs font-bold border border-info text-info text-uppercase rounded-sm px-2 py-1">{{ __('Brouillon') }}</span>
@else
    <span class="d-inline-block text-3xs font-bold border border-warning text-warning text-uppercase rounded-sm px-2 py-1">{{ __('Archivé') }}</span>
@endif

