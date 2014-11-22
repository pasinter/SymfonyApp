<?php
namespace Pasinter\FrontendBundle\Menu;
use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
/**
 * 
 */
class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root', array(
            'navbar' => false,
        ));
        
        $menu->setChildrenAttribute('id', 'mainNav');
        
        $menu->addChild('Contact', array('route' => 'pasinter_frontend_contact_index'));
        
        
        
//        $languageMenu = $this->container->get('lunetics_locale.menu.switch_language');
//        $menu->addChild($languageMenu);
        /* @var $languageMenu \Knp\Menu\MenuItem */
        
        return $menu;
    }
    
}