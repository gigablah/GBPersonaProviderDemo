<?php

namespace Gigablah\PersonaProviderDemoBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * GBPersonaProviderDemoBundle.
 *
 * @author Chris Heng <bigblah@gmail.com>
 */
class GBPersonaProviderDemoBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
