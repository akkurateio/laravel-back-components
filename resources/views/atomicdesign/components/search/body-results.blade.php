<div class="inner mb-3">
    <div class="d-flex justify-content-between">
        <div>
            <div class="text-2xl font-bold">
                {{ count($items) }}
                @if(count($items) > 1)
                    {{ __($labels['plural']) }}
                @else
                    {{ __($labels['singular']) }}
                @endif
            </div>
            <div class="text-neutral text-xs">{{ __('Terme recherché') }} : "{{ $q }}"</div>
        </div>
        <a href="{{ route($routes['index'], uuid()) }}"
           class="text-neutral">
            <Icon name="Close" size="32"/>
        </a>
    </div>
</div>
<div class="list-group list-group-flush mb-5">
    @foreach($items as $index => $item)
        <div class="list-group-item bg-transparent">
            @component($componentEntry, ['entry' => $item, 'routes' => $routes])@endcomponent
        </div>
    @endforeach
</div>
@if($items instanceof \Illuminate\Pagination\LengthAwarePaginator)
    {{ $items->links('back::atomicdesign.atoms.paginate') }}
@endif
