<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // DoctrineWorkbenchConverterBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'DoctrineWorkbenchConverterBundle_homepage');
            }
            return array (  '_controller' => 'Doctrine\\WorkbenchConverterBundle\\Controller\\DefaultController::indexAction',  '_route' => 'DoctrineWorkbenchConverterBundle_homepage',);
        }

        // DoctrineWorkbenchConverterBundle_convert
        if ($pathinfo === '/convert') {
            return array (  '_controller' => 'Doctrine\\WorkbenchConverterBundle\\Controller\\DefaultController::convertAction',  '_route' => 'DoctrineWorkbenchConverterBundle_convert',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
