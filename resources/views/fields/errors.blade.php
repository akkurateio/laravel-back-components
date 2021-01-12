<?php if ($showError && isset($errors) && $errors->hasBag($errorBag)): ?>
<ul class="list-unstyled text-2xs mt-1">
    <?php foreach ($errors->getBag($errorBag)->get($nameKey) as $err): ?>
    <li <?= $options['errorAttrs'] ?>><?= $err ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>

