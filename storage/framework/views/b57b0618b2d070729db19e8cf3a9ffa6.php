<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title'=>'','footerLinks'=>'']));

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

foreach (array_filter((['title'=>'','footerLinks'=>'']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>


<?php if (isset($component)) { $__componentOriginal7442783a15dff2b0d32f2947a462c2e2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7442783a15dff2b0d32f2947a462c2e2 = $attributes; } ?>
<?php $component = App\View\Components\BaseLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('base-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\BaseLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title)]); ?>
  <?php if (isset($component)) { $__componentOriginal508dd3e42d353d46f68538c5a8e15cd5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal508dd3e42d353d46f68538c5a8e15cd5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal508dd3e42d353d46f68538c5a8e15cd5)): ?>
<?php $attributes = $__attributesOriginal508dd3e42d353d46f68538c5a8e15cd5; ?>
<?php unset($__attributesOriginal508dd3e42d353d46f68538c5a8e15cd5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal508dd3e42d353d46f68538c5a8e15cd5)): ?>
<?php $component = $__componentOriginal508dd3e42d353d46f68538c5a8e15cd5; ?>
<?php unset($__componentOriginal508dd3e42d353d46f68538c5a8e15cd5); ?>
<?php endif; ?>
  <?php echo e($slot); ?>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7442783a15dff2b0d32f2947a462c2e2)): ?>
<?php $attributes = $__attributesOriginal7442783a15dff2b0d32f2947a462c2e2; ?>
<?php unset($__attributesOriginal7442783a15dff2b0d32f2947a462c2e2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7442783a15dff2b0d32f2947a462c2e2)): ?>
<?php $component = $__componentOriginal7442783a15dff2b0d32f2947a462c2e2; ?>
<?php unset($__componentOriginal7442783a15dff2b0d32f2947a462c2e2); ?>
<?php endif; ?>
   <?php /**PATH C:\Users\JACKSON MKENDA\JANGOLA\resources\views\layouts\app.blade.php ENDPATH**/ ?>