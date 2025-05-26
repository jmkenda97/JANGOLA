<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['car']));

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

foreach (array_filter((['car']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>



<div class="car-item card">
    <a href="<?php echo e(route('car.show',$car)); ?>">
      <img
        src=<?php echo e($car->primaryImage->image_path); ?>

        alt=""
        class="car-item-img rounded-t"
      />
    </a>
    <div class="p-medium">
      <div class="flex items-center justify-between">
        <small class="m-0 text-muted"><?php echo e($car->city->name); ?></small>
        <button class="btn-heart">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            style="width: 20px"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
            />
          </svg>
        </button>
      </div>
      <h2 class="car-item-title"><?php echo e($car->year); ?> - <?php echo e($car->maker->name); ?> <?php echo e($car->carModel->name); ?></h2>
      <p class="car-item-price"><?php echo e($car->price); ?></p>
      <hr />
      <p class="m-0">
        <span class="car-item-badge"><?php echo e($car->carType->name); ?></span>
        <span class="car-item-badge"><?php echo e($car->fuelType->name); ?></span>
      </p>
    </div>
  </div><?php /**PATH C:\Users\JACKSON MKENDA\JANGOLA\resources\views\components\car-item.blade.php ENDPATH**/ ?>