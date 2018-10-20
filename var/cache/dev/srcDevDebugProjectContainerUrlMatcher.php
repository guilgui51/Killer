<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/admin/home' => array(array('_route' => 'adminHomepage', '_controller' => 'App\\Controller\\AdminController::adminHome'), null, null, null),
                    '/admin/mission/list' => array(array('_route' => 'missionList', '_controller' => 'App\\Controller\\AdminController::missionList'), null, null, null),
                    '/admin/party/list' => array(array('_route' => 'partyList', '_controller' => 'App\\Controller\\AdminController::partyList'), null, null, null),
                    '/admin/mission/create' => array(array('_route' => 'adminMissionCreate', '_controller' => 'App\\Controller\\AdminController::createMission'), null, null, null),
                    '/home' => array(array('_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'), null, null, null),
                    '/' => array(array('_route' => 'homeRedirect', '_controller' => 'App\\Controller\\HomeController::indexRedirect'), null, null, null),
                    '/login' => array(array('_route' => 'login', '_controller' => 'App\\Controller\\LoginController::userLogin'), null, null, null),
                    '/signin' => array(array('_route' => 'signin', '_controller' => 'App\\Controller\\LoginController::userSignIn'), null, null, null),
                    '/disconnect' => array(array('_route' => 'disconnect', '_controller' => 'App\\Controller\\LoginController::userDisconnect'), null, null, null),
                    '/party/create' => array(array('_route' => 'createParty', '_controller' => 'App\\Controller\\PartyController::createParty'), null, null, null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/admin/part(?'
                        .'|y/(?'
                            .'|view/([^/]++)(*:39)'
                            .'|delete/([^/]++)(*:61)'
                        .')'
                        .'|icipant/kill/([^/]++)(*:90)'
                    .')'
                    .'|/p(?'
                        .'|arty/([^/]++)(*:116)'
                        .'|rofil/([^/]++)(*:138)'
                    .')'
                    .'|/killed/([^/]++)(*:163)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:202)'
                        .'|wdt/([^/]++)(*:222)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:268)'
                                .'|router(*:282)'
                                .'|exception(?'
                                    .'|(*:302)'
                                    .'|\\.css(*:315)'
                                .')'
                            .')'
                            .'|(*:325)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            39 => array(array('_route' => 'partyView', '_controller' => 'App\\Controller\\AdminController::partyView'), array('uid'), null, null),
                            61 => array(array('_route' => 'participantView', '_controller' => 'App\\Controller\\AdminController::participantView'), array('uid'), null, null),
                            90 => array(array('_route' => 'participantKill', '_controller' => 'App\\Controller\\AdminController::participantKill'), array('uid'), null, null),
                            116 => array(array('_route' => 'party', '_controller' => 'App\\Controller\\PartyController::showParty'), array('uid'), null, null),
                            138 => array(array('_route' => 'profil', '_controller' => 'App\\Controller\\PartyController::showProfil'), array('uid'), null, null),
                            163 => array(array('_route' => 'killed', '_controller' => 'App\\Controller\\PartyController::killed'), array('uid'), null, null),
                            202 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            222 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            268 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            282 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            302 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            315 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            325 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (325 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
