<?php

namespace Gigablah\PersonaProviderDemoBundle\Security\Http\Authentication;

use Divi\AjaxLoginBundle\Security\Http\Authentication\AjaxAuthenticationFailureHandler as BaseAjaxAuthenticationFailureHandler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

class AjaxAuthenticationFailureHandler extends BaseAjaxAuthenticationFailureHandler
{
	/**
     * {@inheritDoc}
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
		if ($request->isXmlHttpRequest()) {
			$response = parent::onAuthenticationFailure($request, $exception);

			return new JsonResponse(json_decode($response->getContent()), 401);
		}

		return parent::onAuthenticationFailure($request, $exception);
    }
}
