<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXgisuol\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXgisuol/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerXgisuol.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerXgisuol\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerXgisuol\appProdProjectContainer([
    'container.build_hash' => 'Xgisuol',
    'container.build_id' => '211a1d66',
    'container.build_time' => 1681580176,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXgisuol');
