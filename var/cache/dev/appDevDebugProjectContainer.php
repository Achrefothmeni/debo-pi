<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1ntt73e\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1ntt73e/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container1ntt73e.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container1ntt73e\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container1ntt73e\appDevDebugProjectContainer([
    'container.build_hash' => '1ntt73e',
    'container.build_id' => 'a745b2ad',
    'container.build_time' => 1580556891,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1ntt73e');
