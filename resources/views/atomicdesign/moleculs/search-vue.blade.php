<akk-body-index
        :routes="{{ json_encode($routes) }}"
        includes="{{ $setup['includes'] }}"
        identifier="{{ $setup['identifier'] }}"
        :filters-list="{{ json_encode($setup['filtersList']) }}"
        order-by-default="{{ $setup['orderByDefault'] }}">
    <template v-slot:item="{ item, formatDate, humanDate }">
        @component($componentEntry)@endcomponent
{{--        <div class="d-flex align-items-center justify-content-between">--}}
{{--            <div>@{{ item.title }}</div>--}}
{{--            <div class="text-3xs">@{{ item.updated_at }}</div>--}}
{{--        </div>--}}
    </template>
</akk-body-index>

@isset($routes['create'])
    @component('back::atomicdesign.atoms.add', ['route' => $routes['create']])@endcomponent
@endisset

@component('back::atomicdesign.atoms.toast')@endcomponent
