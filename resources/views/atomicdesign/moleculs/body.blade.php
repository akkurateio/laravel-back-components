@if(!empty($form))
    {!! form_start($form) !!}
@endif

<div class="view view-body {{ !empty($footer) ? 'view-with-footer' : '' }} {{ $wrapperClass ?? '' }}">

    <div class="view__body {{ $bodyClass ?? '' }}">
        {{ $body ?? null }}

{{--        @if(!empty($form))--}}
{{--            <div class="inner">--}}
{{--                <pre>@json($form, JSON_PRETTY_PRINT)</pre>--}}
{{--            </div>--}}
{{--        @endif--}}
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
