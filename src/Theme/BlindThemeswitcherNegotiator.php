<?php
/**
 * Created by PhpStorm.
 * User: Timur
 * Date: 19.05.2016
 * Time: 12:37
 */

namespace Drupal\blind\Theme;

use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Theme\ThemeNegotiatorInterface;

class BlindThemeswitcherNegotiator implements ThemeNegotiatorInterface {

    public function applies(RouteMatchInterface $route_match) {
        $applies = TRUE;
        /*Тут можно определить условия, когда должна работать переключалка тем*/
        return $applies;
    }

    /**
     * {@inheritdoc}
     */
    public function determineActiveTheme(RouteMatchInterface $route_match) {
        /*$cache = \Drupal::cache('render');
        $cache->deleteAll();*/
        if(isset($_COOKIE['blind_theme']) && $_COOKIE['blind_theme'] == 'text')
        {
            return 'special';
        }else{
            //ичего не меняем, оставляем как было
            return;
        }
    }
}