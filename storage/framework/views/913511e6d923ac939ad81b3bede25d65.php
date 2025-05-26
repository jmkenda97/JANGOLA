<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['color','bgColor'=>'white']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['color','bgColor'=>'white']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>


<div <?php echo e($attributes->merge(['lang'=>'ka'])
->class("card card-text-$color card-bg-$bgColor")); ?>>
<div <?php echo e($title->attributes->class("card-header")); ?>>
<?php echo e($title); ?></div>
<?php if($slot->isEmpty()): ?>
<p>please provide some content</p>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<div class="card-footer"><?php echo e($footer); ?></div>
</div><?php /**PATH C:\Users\JACKSON MKENDA\JANGOLA\resources\views\components\card.blade.php ENDPATH**/ ?>