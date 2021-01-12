<div class="view view-datagrid {{ $wrapperClass ?? '' }}">
    <div class="view__body">
        <div class="mb-5">
            @if (!empty($items))
                @component('back::atomicdesign.atoms.table', [
                    'items' => $items,
                    'package' => $package,
                    'model' => $model,
                    'routes' => $routes,
                    'columns' => $config['columns'],
                    'main' => $config['main'],
                ])
                @endcomponent
                @if($items instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    {{ $items->links('back::atomicdesign.atoms.paginate') }}
                @endif
            @endif
        </div>
    </div>
</div>

@if(!empty($routes['create']))
    @component('back::atomicdesign.atoms.add', ['route' => $routes['create']])@endcomponent
@endif

@include('back::atomicdesign.atoms.toast')
