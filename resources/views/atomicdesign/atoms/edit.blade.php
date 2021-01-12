<div class="d-flex align-items-center">
    <a class="font-bold text-primary text-underline" href="{{ route("$route.edit", ["$param" => $item, 'uuid' => request('uuid')]) }}">{{ $value }}</a>
    <a class="btn btn-sm d-flex justify-content-center align-items-center text-decoration-none mr-1" href="{{ route("$route.show", ["$param" => $item, 'uuid' => request('uuid')]) }}" target="_blank">
        <i class="icon primary">
            <Icon name="Launch" />
        </i>
    </a>
</div>
