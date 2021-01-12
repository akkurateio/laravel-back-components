<div class="w-100 d-flex align-items-center justify-content-between">
    @if(!empty($package))
        @if(config('laravel-'.$package.'.archi'))
            @include('back::atomicdesign.components.switch-module', ['package' => $package, 'label' => $label, 'util' => $util ?? 'Util', 'options' => config('laravel-'.$package.'.archi')])
        @else
            @include('back::atomicdesign.components.switch-module', ['package' => $package ?? 'app', 'label' => $label ?? 'App', 'util' => $util ?? 'Util', 'options' => []])
        @endif
    @endif

    {{ $slot }}

    @if(!empty($package))
        @can('switch-account')
        <akk-switch-account module="{{ $package ?? '' }}"></akk-switch-account>
    @else
        <div class="switch switch-account">
            <div>
                <div class="text-xs font-medium">
                    {{ auth()->user()->fullname ?? auth()->user()->name }}
                </div>
                @if(auth()->user()->account)
                    <div class="text-2xs text-white-50">{{ auth()->user()->account->name }}</div>
                @endif
            </div>
        </div>
        @endcan
    @endif
</div>
