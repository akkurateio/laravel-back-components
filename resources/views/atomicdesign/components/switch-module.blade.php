<div class="switch switch-module" id="switch">
    {{--    <div class="akk-h-unit d-flex align-items-center justify-content-between">--}}
    {{--        <div>--}}
    {{--            <div class="text-3xs font-bold text-uppercase text-white-50">{{ $label }}</div>--}}
    {{--            <div class="text-lg font-medium text-white">{{ $util }}</div>--}}
    {{--        </div>--}}
    {{--        @if(!empty($options))--}}
    {{--            <i class="icon white">--}}
    {{--                <Icon name="ChevronDown"/>--}}
    {{--            </i>--}}
    {{--        @endif--}}
    {{--    </div>--}}
    {{--    @if(!empty($options))--}}
    {{--        <ul class="nav flex-column module-options pt-0 shadow-lg">--}}
    {{--            @foreach($options as $option)--}}
    {{--                @if(!empty($option['menu']))--}}
    {{--                    <li class="nav-item">--}}
    {{--                        <a class="nav-link text-white"--}}
    {{--                           href="{{route($option['route'], ['uuid' => request('uuid') ?? auth()->user()->account->uuid])}}">{{ $option['label'] }}</a>--}}
    {{--                    </li>--}}
    {{--                @endif--}}
    {{--            @endforeach--}}
    {{--        </ul>--}}
    {{--    @endif--}}
    @if(!empty($options))
        <akk-dropdown>
            <button type="button"
                    class="btn bg-transparent border-0 w-100 akk-h-unit pr-0 d-flex align-items-center justify-content-between">
                <div class="text-left">
                    <div class="text-3xs font-bold text-uppercase text-white-50">{{ $label }}</div>
                    <div class="text-lg font-medium text-white">{{ $util }}</div>
                </div>
                <i class="icon-box icon white">
                    <Icon name="ChevronDown"/>
                </i>
            </button>
            <template slot="items">
                @foreach($options as $option)
                    @if(!empty($option['menu']))
                        <akk-dropdown-item>
                            <a class="item-link"
                               href="{{route($option['route'], ['uuid' => request('uuid') ?? auth()->user()->account->uuid])}}">{{ $option['label'] }}</a>
                        </akk-dropdown-item>
                    @endif
                @endforeach
            </template>
        </akk-dropdown>
    @else
        <div class="akk-h-unit d-flex align-items-center justify-content-between">
            <div class="px-3">
                <div class="text-3xs font-bold text-uppercase text-white-50">{{ $label }}</div>
                <div class="text-lg font-medium text-white">{{ $util }}</div>
            </div>
        </div>
    @endif
</div>
