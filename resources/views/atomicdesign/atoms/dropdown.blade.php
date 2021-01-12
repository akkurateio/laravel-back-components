<div class="dropdown {{ $wrapperClass ?? null }}">
    <button class="{{ $buttonClass ?? 'btn btn-outline-primary' }}" type="button" id="{{ $id }}DropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ $label ?? __('Option') }}
    </button>
    <div class="dropdown-menu" aria-labelledby="{{ $id }}DropdownMenuButton">
        @foreach($options as $option)
            <a class="dropdown-item" href="{{ $option['href'] }}">{{ $option['label'] }}</a>
        @endforeach
    </div>
</div>
