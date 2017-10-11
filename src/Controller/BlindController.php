<?php

/**
 * Created by PhpStorm.
 * User: Timur
 * Date: 19.05.2016
 * Time: 11:57
 */

namespace Drupal\blind\Controller;

use Drupal\Core\Controller\ControllerBase;

class BlindController extends ControllerBase
{
    public function text()
    {
        setcookie("blind_theme", "text");
        return new \Symfony\Component\HttpFoundation\RedirectResponse(\Drupal::url('<front>'));
    }

    public function full()
    {
        setcookie("blind_theme", "full");
        return new \Symfony\Component\HttpFoundation\RedirectResponse(\Drupal::url('<front>'));
    }
}