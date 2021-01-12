@if(!empty($form))
    {!! form_start($form) !!}
@endif

<div class="view view-leftbodyright {{ !empty($footer) ? 'view-with-footer' : '' }} {{ $wrapperClass ?? '' }}">
    <div class="view__left {{ $leftClass ?? '' }}">
        {{ $left ?? null }}
    </div>

    <div class="view__body {{ $bodyClass ?? '' }}">
        {{ $body ?? null }}
    </div>

    <div class="view__right {{ $rightClass ?? '' }}">
        {{ $right ?? null }}
    </div>

    {{ $slot }}

    @if(!empty($footer))
        <div class="view__footer {{ $footerClass ?? '' }}">
            {{ $footer ?? null }}
        </div>
    @endif
</div>

@if(!empty($form))
    {!! form_end($form) !!}
@endif
