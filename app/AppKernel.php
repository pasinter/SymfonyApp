<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
			
			
			// sonata
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Sonata\NotificationBundle\SonataNotificationBundle(),
            new Sonata\IntlBundle\SonataIntlBundle(),
            
            // images
            new Liip\ImagineBundle\LiipImagineBundle(),
            
			
			// twitter bootstrap etc
            new Mopa\Bundle\BootstrapBundle\MopaBootstrapBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
			new Knp\Bundle\MenuBundle\KnpMenuBundle(),
			
			// Doctrine behaviours
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
			
			// locale
            new Lunetics\LocaleBundle\LuneticsLocaleBundle(),
			
			// Security
            new JMS\AopBundle\JMSAopBundle(),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this),
            new Pasinter\FrontendBundle\PasinterFrontendBundle(),
            new Pasinter\BackendBundle\PasinterBackendBundle(),
            new Pasinter\CoreBundle\PasinterCoreBundle(),
            new Pasinter\AccountBundle\PasinterAccountBundle(),
            new Pasinter\ApiBundle\PasinterApiBundle(),
        );
		


        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
			$bundles[] = new Elao\WebProfilerExtraBundle\WebProfilerExtraBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
