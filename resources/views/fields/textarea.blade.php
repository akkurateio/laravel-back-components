<?php if ($showLabel && $showField): ?>
<?php if ($options['wrapper'] !== false): ?>
<div <?= $options['wrapperAttrs'] ?> >
    <?php endif; ?>
    <?php endif; ?>

    <?php if ($showLabel && $options['label'] !== false && $options['label_show']): ?>
    <?= Form::customLabel($name, $options['label'], $options['label_attr']) ?>
    <?php endif; ?>

    <?php if ($showField): ?>
    <AkkInput
            type="textarea"
            name="{{ $name }}"
            @if(!empty($options['attr']['placeholder']))
            placeholder="{{ $options['attr']['placeholder'] }}"
            @endif
            @if(!empty($options['help_block']['text']))
            help-text="{{ $options['help_block']['text'] }}"
            @endif
    ></AkkInput>

    @include('back.fields.help-block')
    <?php endif; ?>

    @include('back.fields.errors')

    <?php if ($showLabel && $showField): ?>
    <?php if ($options['wrapper'] !== false): ?>
</div>
<?php endif; ?>
<?php endif; ?>
