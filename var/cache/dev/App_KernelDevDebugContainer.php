<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerErCQX9Z\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerErCQX9Z/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerErCQX9Z.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerErCQX9Z\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerErCQX9Z\App_KernelDevDebugContainer([
    'container.build_hash' => 'ErCQX9Z',
    'container.build_id' => 'e2b9aa84',
    'container.build_time' => 1681810496,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerErCQX9Z');
