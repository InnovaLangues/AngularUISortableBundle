<?php

namespace Innova\AngularUISortableBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Claroline\KernelBundle\Bundle\AutoConfigurableInterface;
use Claroline\KernelBundle\Bundle\ConfigurationBuilder;

class InnovaAngularUISortableBundle extends Bundle implements AutoConfigurableInterface
{
    public function supports($environment)
    {
        return true;
    }
    
    public function getConfiguration($environment)
    {
        return new ConfigurationBuilder();
    }
}
