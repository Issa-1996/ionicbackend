<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHrjN6Eu\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHrjN6Eu/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHrjN6Eu.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHrjN6Eu\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHrjN6Eu\App_KernelDevDebugContainer([
    'container.build_hash' => 'HrjN6Eu',
    'container.build_id' => '5de041d2',
    'container.build_time' => 1616582142,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHrjN6Eu');
