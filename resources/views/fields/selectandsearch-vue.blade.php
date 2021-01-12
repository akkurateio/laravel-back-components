@if ($showLabel && $showField)
    @if ($options['wrapper'] !== false)
        <div {!! $options['wrapperAttrs'] !!}>
    @endif
@endif

    <akk-select-and-search
            name="{{ $name }}"
            :options-form="{{ json_encode($options['optionsForm']) }}"
            item-property="{{ $options['itemProperty'] }}"
            items-property="{{ $options['itemsProperty'] }}"
            search-param="{{ $options['searchParam'] }}"
            api-url="{{ $options['apiUrl'] }}">
        <template slot="view" slot-scope="{option, url}">
            @include('back::fields.custom.' . $options['slot'])
        </template>
    </akk-select-and-search>

    @if ($showError && isset($errors) && $errors->hasBag($errorBag))
        @foreach ($errors->getBag($errorBag)->get($nameKey) as $err)
            <div class="text-3xs {{ $options['errorAttrs'] }}">{{ $err }}</div>
        @endforeach
    @endif

@if ($showLabel && $showField)
    @if ($options['wrapper'] !== false)
        </div>
    @endif
@endif
