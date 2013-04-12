<?php

namespace Gigablah\PersonaProviderDemoBundle\Controller;

use FOS\UserBundle\Controller\RegistrationController as BaseRegistrationController;
use Symfony\Component\HttpFoundation\Request;

class RegistrationController extends BaseRegistrationController
{
    public function registerAction(Request $request)
    {
        $form = $request->request->get('fos_user_registration_form');
        if (is_array($form) && isset($form['username'])) {
            $form['email'] = $form['username'].'@'.$this->container->getParameter('gb_persona_provider.host');
        }

        $request->request->set('fos_user_registration_form', $form);

        return parent::registerAction($request);
    }
}
