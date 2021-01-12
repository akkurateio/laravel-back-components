<div class="h-100 d-flex align-items-center justify-content-center">
    <div class="text-center">
        <div class="text-2xl font-bold mb-3">{{ __('Aucun:gender :model déclaré:gender', ['gender' => $labels['gender'] == 'feminine' ? 'e' : '', 'model' => __($labels['singular'])]) }}
            !
        </div>
        <div class="mb-4">
            <a href="{{ route($routes['create'], uuid()) }}"
               class="btn btn-sm btn-outline-primary font-bold px-3">
                {{ __('Ajouter un:gender :model', ['gender' => $labels['gender'] == 'feminine' ? 'e' : '', 'model' => __($labels['singular'])]) }}
            </a>
        </div>
    </div>
</div>
