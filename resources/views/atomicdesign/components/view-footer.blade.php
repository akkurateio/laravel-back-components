<a class="icon-box"
   href="{{ \Illuminate\Support\Facades\URL::to($backPath) }}">
    <i class="icon gray">
        <Icon name="Undo"/>
    </i>
</a>

@if(!empty($form))
    <button type="submit" class="btn btn-lg btn-primary d-flex align-items-center">
        <i class="icon white mr-2">
            <Icon name="Save"/>
        </i>
        <span class="text-sm font-medium">{{ $saveLabel }}</span>
    </button>
@endif

@if(!empty($editPath))
    <a href="{{ $editPath }}" class="btn btn-lg btn-primary d-flex align-items-center">
        <span class="text-sm font-medium">{{ $editLabel ?? __('Modifier') }}</span>
    </a>
@endif

{{ $slot }}

@if(!empty($item))
    <div class="text-muted text-2xs ml-auto mr-3">
        {{ __('Dernière mise à jour') }}
        @if(!empty($item->user))
            {{ __('par') }}
            {{ $item->user->fullname ?? $item->user->name }}
        @endif
        {{ __('le') }}
        {{ \Carbon\Carbon::parse($item->updated_at)->format('d/m/Y') }}
        {{ __('à') }}
        {{ \Carbon\Carbon::parse($item->updated_at)->format('H:i:s') }}
    </div>
@endif
