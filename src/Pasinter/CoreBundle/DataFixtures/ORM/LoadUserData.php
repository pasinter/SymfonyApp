<?php
namespace Pasinter\CoreBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Application\Sonata\UserBundle\Entity\User;
use Application\Sonata\UserBundle\Entity\Group;

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $groups = array('Admins', 'Editors');
        
        $groupAdmin = new Group('Admins');
        $groupAdmin
            ->setRoles(['ROLE_USER', 'ROLE_SONATA_ADMIN', 'ROLE_SUPER_ADMIN'])
        ;
        $manager->persist($groupAdmin);
        
        $groupEditors = new Group('Editors');
        $groupEditors
            ->setRoles(['ROLE_USER'])
        ;
        $manager->persist($groupEditors);
        
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setPassword('admin');
        $userAdmin->setEmail('admin@localhost');
        $userAdmin->addGroup($groupAdmin);
        //$userAdmin->set

        $manager->persist($userAdmin);
        $manager->flush();
    }
}