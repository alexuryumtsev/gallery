<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXeuvsgt\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXeuvsgt/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXeuvsgt.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXeuvsgt\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXeuvsgt\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Xeuvsgt',
    'container.build_id' => 'd1c42c2e',
    'container.build_time' => 1526984737,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerXeuvsgt');
