@if(!empty($items['lastupdated']) || !empty($items['lastcreated']) || !empty($items['custom1']) || !empty($items['custom2']) || !empty($items['custom3']))
    <div class="inner pt-0">
        <ul class="nav nav-tabs mb-3" id="defaultTabs" role="tablist">
            @if(!empty($items['all']))
                <li class="nav-item">
                    <a href="#all" id="all-tab" aria-controls="all" aria-selected="true"
                       class="nav-link active" data-toggle="tab"
                       role="tab">{{ __('Tous les :model', ['model' => __($labels['plural'])]) }}</a>
                </li>
            @endif
            @if(!empty($items['lastupdated']))
                <li class="nav-item">
                    <a href="#lastupdated" id="lastupdated-tab" aria-controls="lastupdated"
                       aria-selected="true"
                       class="nav-link @if(empty($items['all'])) active @endif" data-toggle="tab"
                       role="tab">{{ __('Dernières modifications') }}</a>
                </li>
            @endif
            @if(!empty($items['lastcreated']))
                <li class="nav-item">
                    <a href="#lastcreated" id="lastcreated-tab" aria-controls="lastcreated"
                       aria-selected="true"
                       class="nav-link" data-toggle="tab" role="tab">{{ __('Dernières créations') }}</a>
                </li>
            @endif
            @if(!empty($items['custom1']))
                <li class="nav-item">
                    <a href="#{{$items['custom1']['label']}}" id="{{$items['custom1']['label']}}-tab" aria-controls="{{$items['custom1']['label']}}"
                       aria-selected="true"
                       class="nav-link" data-toggle="tab" role="tab">{{ $items['custom1']['label'] }}</a>
                </li>
            @endif
            @if(!empty($items['custom2']))
                <li class="nav-item">
                    <a href="#{{$items['custom2']['label']}}" id="{{$items['custom2']['label']}}-tab" aria-controls="{{$items['custom2']['label']}}"
                       aria-selected="true"
                       class="nav-link" data-toggle="tab" role="tab">{{ $items['custom2']['label'] }}</a>
                </li>
            @endif
            @if(!empty($items['custom3']))
                <li class="nav-item">
                    <a href="#{{$items['custom3']['label']}}" id="{{$items['custom3']['label']}}-tab" aria-controls="{{$items['custom3']['label']}}"
                       aria-selected="true"
                       class="nav-link" data-toggle="tab" role="tab">{{ $items['custom3']['label'] }}</a>
                </li>
            @endif
        </ul>
    </div>
@endif

<div class="tab-content mb-5">
    @if(!empty($items['all']))
        <div class="tab-pane active" id="all" role="tabpanel" aria-labelledby="all-tab">
            @if(!empty($alphabetical))
                @foreach($items['all'] as $letter => $entries)
                    <div class="mb-4">
                        <div class="text-4xl font-bold pl-3 mb-3">{{ $letter }}</div>
                        <div class="list-group list-group-flush">
                            @foreach($entries as $index => $entry)
                                <div class="list-group-item bg-transparent">
                                    @component($componentEntry, ['entry' => $entry, 'routes' => $routes])@endcomponent
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @else
                <div class="list-group list-group-flush">
                    @foreach($items['all'] as $index => $entry)
                        <div class="list-group-item bg-transparent">
                            @component($componentEntry, ['entry' => $entry, 'routes' => $routes])@endcomponent
                        </div>
                    @endforeach
                </div>
                @if($items['all'] instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    {{ $items['all']->links('back::atomicdesign.atoms.paginate') }}
                @endif
            @endif
        </div>
    @endif

    @if(!empty($items['lastupdated']))
        <div class="tab-pane mb-4 {{ empty($items['all']) ? 'active' : null }}" id="lastupdated"
             role="tabpanel" aria-labelledby="lastupdated-tab">
            <div class="list-group list-group-flush">
                @foreach($items['lastupdated'] as $index => $entry)
                    <div class="list-group-item bg-transparent">
                        @component($componentEntry, ['entry' => $entry, 'routes' => $routes])@endcomponent
                    </div>
                @endforeach
            </div>
            @if($items['lastupdated'] instanceof \Illuminate\Pagination\LengthAwarePaginator)
                {{ $items['lastupdated']->links('back::atomicdesign.atoms.paginate') }}
            @endif
        </div>
    @endif

    @if(!empty($items['lastcreated']))
        <div class="tab-pane mb-4" id="lastcreated" role="tabpanel" aria-labelledby="lastcreated-tab">
            <div class="list-group list-group-flush">
                @foreach($items['lastcreated'] as $index => $entry)
                    <div class="list-group-item bg-transparent">
                        @component($componentEntry, ['entry' => $entry, 'routes' => $routes])@endcomponent
                    </div>
                @endforeach
            </div>
            @if($items['lastcreated'] instanceof \Illuminate\Pagination\LengthAwarePaginator)
                {{ $items['lastcreated']->links('back::atomicdesign.atoms.paginate') }}
            @endif
        </div>
    @endif
    @if(!empty($items['custom1']))
        <div class="tab-pane mb-4" id="{{$items['custom1']['label']}}" role="tabpanel" aria-labelledby="{{$items['custom1']['label']}}-tab">
            <div class="list-group list-group-flush">
                @foreach($items['custom1']['data'] as $index => $entry)
                    <div class="list-group-item bg-transparent">
                        @component($componentEntry, ['entry' => $entry, 'routes' => $routes])@endcomponent
                    </div>
                @endforeach
            </div>
            @if($items['custom1']['data'] instanceof \Illuminate\Pagination\LengthAwarePaginator)
                {{ $items['custom1']['data']->links('back::atomicdesign.atoms.paginate') }}
            @endif
        </div>
    @endif
    @if(!empty($items['custom2']))
        <div class="tab-pane mb-4" id="{{$items['custom2']['label']}}" role="tabpanel" aria-labelledby="{{$items['custom2']['label']}}-tab">
            <div class="list-group list-group-flush">
                @foreach($items['custom2']['data'] as $index => $entry)
                    <div class="list-group-item bg-transparent">
                        @component($componentEntry, ['entry' => $entry, 'routes' => $routes])@endcomponent
                    </div>
                @endforeach
            </div>
            @if($items['custom2']['data'] instanceof \Illuminate\Pagination\LengthAwarePaginator)
                {{ $items['custom2']['data']->links('back::atomicdesign.atoms.paginate') }}
            @endif
        </div>
    @endif
    @if(!empty($items['custom3']))
        <div class="tab-pane mb-4" id="{{$items['custom3']['label']}}" role="tabpanel" aria-labelledby="{{$items['custom3']['label']}}-tab">
            <div class="list-group list-group-flush">
                @foreach($items['custom3']['data'] as $index => $entry)
                    <div class="list-group-item bg-transparent">
                        @component($componentEntry, ['entry' => $entry, 'routes' => $routes])@endcomponent
                    </div>
                @endforeach
            </div>
            @if($items['custom3']['data'] instanceof \Illuminate\Pagination\LengthAwarePaginator)
                {{ $items['custom3']['data']->links('back::atomicdesign.atoms.paginate') }}
            @endif
        </div>
    @endif
</div>
