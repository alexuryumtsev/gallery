<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'routing.loader' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Config/Loader/LoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Config/Loader/Loader.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Config/Loader/FileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/Loader/XmlFileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/Loader/YamlFileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/Loader/PhpFileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/Loader/GlobFileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/Loader/DirectoryLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/Loader/ObjectRouteLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/Loader/DependencyInjection/ServiceRouterLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/Loader/AnnotationClassLoader.php';
include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Routing/AnnotatedRouteControllerLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/Loader/AnnotationFileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/Loader/AnnotationDirectoryLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/assetic-bundle/Routing/AsseticLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Routing/AnnotatedRouteControllerLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Config/Loader/LoaderResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Config/Loader/LoaderResolver.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Config/Loader/DelegatingLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Routing/DelegatingLoader.php';

$a = ${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[3].'/app/Resources'), array(0 => ($this->targetDirs[3].'/app')))) && false ?: '_'};
$b = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'};

$c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

$d = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader($b);

$e = new \Symfony\Component\Config\Loader\LoaderResolver();
$e->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
$e->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
$e->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
$e->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($a));
$e->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
$e->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
$e->addLoader($c);
$e->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
$e->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
$e->addLoader(new \Symfony\Bundle\AsseticBundle\Routing\AsseticLoader(${($_ = isset($this->services['assetic.asset_manager']) ? $this->services['assetic.asset_manager'] : $this->load('getAssetic_AssetManagerService.php')) && false ?: '_'}, array()));
$e->addLoader($d);
$e->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $d));
$e->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $d));

return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'}, $e);
