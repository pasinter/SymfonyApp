<?php
namespace Pasinter\CoreBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Application\Sonata\UserBundle\Entity\User;
use Application\Sonata\UserBundle\Entity\Group;
use Application\Sonata\PageBundle\Entity\Site;
use Application\Sonata\PageBundle\Entity\Page;

class LoadSiteData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $site = new Site();
        $site->setEnabled(true);
        $site->setHost('localhost');
        $site->setTitle('Default site');
        $site->setName('Default site');
        $site->setId(1);
        $site->setIsDefault(true);
        $site->setLocale('en');
        $site->setEnabledFrom(new \DateTime());
        //$site->setEnabledTo(new \DateTime(time() + 10 * 365 * 24 * 3600));
        $manager->persist($site);
        
        
        $homePage = new Page();
        $homePage->setEnabled(true);
        $homePage->setName('Home Page');
        $homePage->setTemplateCode('default');
        $homePage->setCustomUrl('/');
        $homePage->setSite($site);
        $homePage->setRouteName('homepage');
        $manager->persist($homePage);
        
        $contactPage = new Page();
        $contactPage->setEnabled(true);
        $contactPage->setName('Contact');
        $contactPage->setUrl('/contact/');
        $contactPage->setCustomUrl('/contact/');
        $contactPage->setTemplateCode('default');
        $contactPage->setSite($site);
        $contactPage->setParent($homePage);
        $contactPage->setRouteName('contact');
        $manager->persist($contactPage);
        
        
        $manager->flush();
    }
}