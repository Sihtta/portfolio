<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1NA8JlY\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1NA8JlY/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1NA8JlY.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1NA8JlY\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1NA8JlY\App_KernelDevDebugContainer([
    'container.build_hash' => '1NA8JlY',
    'container.build_id' => 'ccfa62b6',
    'container.build_time' => 1733926687,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1NA8JlY');
