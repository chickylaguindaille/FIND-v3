<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0KMYnGv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0KMYnGv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0KMYnGv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0KMYnGv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container0KMYnGv\App_KernelDevDebugContainer([
    'container.build_hash' => '0KMYnGv',
    'container.build_id' => 'ad210845',
    'container.build_time' => 1679243920,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0KMYnGv');