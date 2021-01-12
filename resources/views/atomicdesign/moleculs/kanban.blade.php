<akk-kanban
        :hidden-column='@json($kanban['hiddenColumn'])'
        state="{{$kanban['state']}}"
        :column='@json($kanban['column'])'
        :list='@json($kanban['list'])'
        api="{{ $kanban['api'] }}">
    <template slot-scope="{ element }">
        <{{ $kanban['component'] }} :element="element" uuid="{{ request('uuid') }}"/>
    </template>
</akk-kanban>

@component('back::atomicdesign.atoms.add', ['route' => $routes['create']])@endcomponent

@include('back::atomicdesign.atoms.toast')
