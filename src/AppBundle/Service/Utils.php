<?php

namespace AppBundle\Service;

class Utils
{
    public function generateSlug($name)
    {
        return strtolower(preg_replace('/\s+/', '-', $name));
    }
}
