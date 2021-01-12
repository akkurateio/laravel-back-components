<div class="d-flex align-items-center justify-content-between text-2xs mr-1">
    <div class="font-medium mr-auto">
        <div class="">@{{ option.name }}</div>
    </div>
    <div class="text-3xs text-muted">@{{ option.registry_siren }}</div>
</div>
<div class="text-3xs">
    <a @click.stop :href="url" target="_blank">Voir la fiche</a>
</div>
