@if ($showLabel && $showField)
    @if ($options['wrapper'] !== false)
        <div {!! $options['wrapperAttrs'] !!}>
    @endif
@endif

<akk-select-and-search name="{{ $name }}"
                       label="{{ $options['label'] ?? null }}"
                       :fields="{{ json_encode($options['fields']) }}"
                       :model="{{ json_encode($options['object']) }}"
                       :items="{{ json_encode($options['choices']) }}"></akk-select-and-search>

@if ($showError && isset($errors) && $errors->hasBag($errorBag))
    @foreach ($errors->getBag($errorBag)->get($nameKey) as $err)
        <div {{ $options['errorAttrs'] }}>{{ $err }}</div>
    @endforeach
@endif

@if ($showLabel && $showField)
    @if ($options['wrapper'] !== false)
        </div>
    @endif
@endif
