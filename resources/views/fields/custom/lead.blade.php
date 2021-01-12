<div class="text-2xs font-medium">@{{ option.name }}</div>
<div class="d-flex align-items-center justify-content-between">
    <div class="text-2xs">@{{ option.budget }} €</div>
    <div class="text-2xs">@{{ option.deadline }}</div>
</div>
<div class="text-3xs">
    <a @click.stop :href="url" target="_blank">Voir la fiche</a>
</div>
