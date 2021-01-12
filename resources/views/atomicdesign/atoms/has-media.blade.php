<div class="{{ !empty($wrapperClass) ? $wrapperClass : '' }}">
    <akk-media-manager
            field-name="{{ $formRow ?? 'resource_id' }}"
            @isset($resource)
            :resource="{{ json_encode($resource ?? null) }}"
            @endisset
            @isset($multiple)
            :multiple="{{$multiple}}"
            @endisset
    ></akk-media-manager>
</div>
