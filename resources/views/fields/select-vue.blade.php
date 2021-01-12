@if ($showLabel && $showField)
    @if ($options['wrapper'] !== false)
        <div {!! $options['wrapperAttrs'] !!}>
    @endif
@endif

<akk-select name="{{ $name }}"
            label="{{ $options['label'] ?? null }}"
            :options="{{ json_encode($options['choices']) }}"
            required="{{ $options['required'] ?? false }}">
    <template slot="view" slot-scope="{ option }">
        <div class="text-xs" v-html="option.name"></div>
    </template>
</akk-select>

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
