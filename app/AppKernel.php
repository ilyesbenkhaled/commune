<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;
use Sensio\Bundle\GeneratorBundle;

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
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new AppBundle\AppBundle(),
            new SMS\CommuneBundle\SMSCommuneBundle(),
			new SMS\AdminBundle\SMSAdminBundle(),
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
			new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),
			new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
			new FOS\UserBundle\FOSUserBundle(),
			new Sonata\UserBundle\SonataUserBundle('FOSUserBundle'),
			new Application\Sonata\UserBundle\ApplicationSonataUserBundle(),
			new Sonata\MediaBundle\SonataMediaBundle(),
			new JMS\SerializerBundle\JMSSerializerBundle(),
			new Application\Sonata\MediaBundle\ApplicationSonataMediaBundle(),
		    #new Sonata\PageBundle\SonataPageBundle(),
			new Sonata\SeoBundle\SonataSeoBundle(),
			#new Application\Sonata\NotificationBundle\ApplicationSonataNotificationBundle(),
			#new Application\Sonata\PageBundle\ApplicationSonataPageBundle(),
			new Ivory\CKEditorBundle\IvoryCKEditorBundle(),
			new Sonata\NewsBundle\SonataNewsBundle(),
			new Sonata\IntlBundle\SonataIntlBundle(),
			new Sonata\FormatterBundle\SonataFormatterBundle(),
			new Sonata\ClassificationBundle\SonataClassificationBundle(),
			new Knp\Bundle\MarkdownBundle\KnpMarkdownBundle(),
			new Application\Sonata\ClassificationBundle\ApplicationSonataClassificationBundle(),
			new Application\Sonata\NewsBundle\ApplicationSonataNewsBundle()
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'), true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
