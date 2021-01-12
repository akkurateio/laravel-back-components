<div class="form-group">
    <?php if ($showLabel && $showField): ?>
    <?php if ($options['wrapper'] !== false): ?>
    <div <?= $options['wrapperAttrs'] ?> >
        <?php endif; ?>
        <?php endif; ?>

        <?= Form::input($type, $name, $options['value'], $options['attr']) ?>

        <?php if ($showLabel && $options['label'] !== false && $options['label_show']): ?>
    <?= Form::customLabel($name, $options['label'], $options['label_attr']) ?>
    <?php endif; ?>

        <?php if ($showField): ?>
        @include('back.fields.help-block')
        <?php endif; ?>

        @include('back.fields.errors')

        <?php if ($showLabel && $showField): ?>
        <?php if ($options['wrapper'] !== false): ?>
    </div>
    <?php endif; ?>
    <?php endif; ?>
</div>
