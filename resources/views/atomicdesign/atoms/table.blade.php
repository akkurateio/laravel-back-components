<div class="table-responsive {{ $wrapperClass ?? '' }}">
    <table class="table">
        <thead>
        <tr>
            @foreach($columns as $column)
                @if($column === 'active' || $column === 'is_active')
                    <th class="text-center">{{__('Statut')}}</th>
                @elseif($column === 'name')
                    <th>{{__('Nom')}}</th>
                @else
                    <th>{{__(Str::ucfirst($column))}}</th>
                @endif
            @endforeach
            @if(config('back-components.crud-actions-enabled'))
                <th class="text-center w-25">{{__('Action')}}</th>
            @endif
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                @foreach($columns as $column)
                    @if($column === 'name' || $column === 'title'  || $column === 'label' || isset($main) && $main == $column)
                        @if(!empty($routes['edit']))
                            <td>
                                <a class="font-bold text-primary text-underline"
                                   href="{{ route($routes['edit'], ["$model" => $item, 'uuid' => request('uuid')]) }}">
                                    {{ $item->$column }}
                                </a>
                            </td>
                        @else
                            <td>{{ $item->$column }}</td>
                        @endif
                    @elseif($column === 'active' || $column === 'is_active')
                        <td class="text-center">
                            <akk-switch-active
                                    :item-props="{{ json_encode($item) }}"
                                    item-variable="{{ $column }}"
                                    package-name="{{ $package }}"
                                    model-name="{{ Illuminate\Support\Str::plural($model) }}">
                            </akk-switch-active>
                        </td>
                    @else
                        <td>{{ $item->$column }}</td>
                    @endif
                @endforeach
                @if(config('back-components.crud-actions-enabled'))
                    <td>
                        <div class="d-flex justify-content-center align-items-center">
                            <a class="btn btn-sm d-flex justify-content-center align-items-center mr-1"
                               href="{{ route($routes['edit'], ["$model" => $item, 'uuid' => request('uuid')]) }}">
                                <i class="icon">
                                    <Icon name="OverflowMenuHorizontal"/>
                                </i>
                            </a>
                            <a class="btn btn-sm d-flex justify-content-center align-items-center mr-1"
                               href="{{ route($routes['edit'], ["$model" => $item, 'uuid' => request('uuid')]) }}">
                                <i class="icon">
                                    <Icon name="Edit"/>
                                </i>
                            </a>
                            <form action="{{ route($routes['destroy'], ["$model" => $item, 'uuid' => request('uuid')]) }}"
                                  method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm d-flex justify-content-center align-items-center"
                                        type="submit">
                                    <i class="icon">
                                        <Icon name="Delete"/>
                                    </i>
                                </button>
                            </form>
                        </div>
                    </td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
