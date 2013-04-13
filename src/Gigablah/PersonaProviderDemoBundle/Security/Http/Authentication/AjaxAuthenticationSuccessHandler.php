<?php

namespace Gigablah\PersonaProviderDemoBundle\Security\Http\Authentication;

use Divi\AjaxLoginBundle\Security\Http\Authentication\AjaxAuthenticationSuccessHandler as BaseAjaxAuthenticationSuccessHandler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class AjaxAuthenticationSuccessHandler extends BaseAjaxAuthenticationSuccessHandler
{
    /**
     * {@inheritDoc}
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
		if ($request->isXmlHttpRequest()) {
            $response = parent::onAuthenticationSuccess($request, $token);

            return new JsonResponse(json_decode($response->getContent()));
		}

		return parent::onAuthenticationSuccess($request, $token);
    }
}