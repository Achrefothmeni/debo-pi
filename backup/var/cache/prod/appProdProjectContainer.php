<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOlxj744\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOlxj744/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerOlxj744.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerOlxj744\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerOlxj744\appProdProjectContainer([
    'container.build_hash' => 'Olxj744',
    'container.build_id' => '65972e99',
    'container.build_time' => 1581951319,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOlxj744');
