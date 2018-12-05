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
                    '/jeudesociete' => array(array('_route' => 'jeudesociete', '_controller' => 'App\\Controller\\JeudesocieteController::index'), null, null, null),
                    '/jeudesociete/jeu/create' => array(array('_route' => 'createGame', '_controller' => 'App\\Controller\\JeudesocieteController::createGame'), null, null, null),
                    '/jeudesociete/jeu/list' => array(array('_route' => 'jeuListAdv', '_controller' => 'App\\Controller\\JeudesocieteController::jeuListAdv'), null, null, null),
                    '/jeudesociete/list/create' => array(array('_route' => 'createList', '_controller' => 'App\\Controller\\JeudesocieteController::createList'), null, null, null),
                    '/jeudesociete/list/list' => array(array('_route' => 'listList', '_controller' => 'App\\Controller\\JeudesocieteController::listList'), null, null, null),
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
                    .'|/admin/(?'
                        .'|mission/delete/([^/]++)(*:40)'
                        .'|part(?'
                            .'|y/(?'
                                .'|view/([^/]++)(*:72)'
                                .'|delete/([^/]++)(*:94)'
                            .')'
                            .'|icipant/(?'
                                .'|modify/([^/]++)(*:128)'
                                .'|kill/([^/]++)(*:149)'
                            .')'
                        .')'
                    .')'
                    .'|/jeudesociete/(?'
                        .'|jeu/(?'
                            .'|delete/([^/]++)(*:199)'
                            .'|modify/([^/]++)(*:222)'
                            .'|interest/([^/]++)(*:247)'
                            .'|view/([^/]++)(*:268)'
                            .'|observe/([^/]++)(*:292)'
                        .')'
                        .'|list/(?'
                            .'|delete/([^/]++)(*:324)'
                            .'|modify/([^/]++)(*:347)'
                            .'|remove/([^/]++)/([^/]++)(*:379)'
                            .'|view/([^/]++)(*:400)'
                        .')'
                        .'|add/([^/]++)/([^/]++)/([^/]++)(*:439)'
                    .')'
                    .'|/p(?'
                        .'|arty/([^/]++)(*:466)'
                        .'|rofil/([^/]++)(*:488)'
                    .')'
                    .'|/killed/([^/]++)(*:513)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:552)'
                        .'|wdt/([^/]++)(*:572)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:618)'
                                .'|router(*:632)'
                                .'|exception(?'
                                    .'|(*:652)'
                                    .'|\\.css(*:665)'
                                .')'
                            .')'
                            .'|(*:675)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            40 => array(array('_route' => 'missionDelete', '_controller' => 'App\\Controller\\AdminController::missionDelete'), array('id'), null, null),
                            72 => array(array('_route' => 'partyView', '_controller' => 'App\\Controller\\AdminController::partyView'), array('uid'), null, null),
                            94 => array(array('_route' => 'participantView', '_controller' => 'App\\Controller\\AdminController::participantView'), array('uid'), null, null),
                            128 => array(array('_route' => 'participantModify', '_controller' => 'App\\Controller\\AdminController::participantModify'), array('uid'), null, null),
                            149 => array(array('_route' => 'participantKill', '_controller' => 'App\\Controller\\AdminController::participantKill'), array('uid'), null, null),
                            199 => array(array('_route' => 'jeuDelete', '_controller' => 'App\\Controller\\JeudesocieteController::jeuDelete'), array('id'), null, null),
                            222 => array(array('_route' => 'jeuModify', '_controller' => 'App\\Controller\\JeudesocieteController::jeuModify'), array('id'), null, null),
                            247 => array(array('_route' => 'jeuModifyInterest', '_controller' => 'App\\Controller\\JeudesocieteController::jeuModifyInterest'), array('id'), null, null),
                            268 => array(array('_route' => 'jeuView', '_controller' => 'App\\Controller\\JeudesocieteController::jeuView'), array('id'), null, null),
                            292 => array(array('_route' => 'jeuObserve', '_controller' => 'App\\Controller\\JeudesocieteController::jeuObserve'), array('id'), null, null),
                            324 => array(array('_route' => 'listDelete', '_controller' => 'App\\Controller\\JeudesocieteController::listDelete'), array('id'), null, null),
                            347 => array(array('_route' => 'listModify', '_controller' => 'App\\Controller\\JeudesocieteController::listModify'), array('id'), null, null),
                            379 => array(array('_route' => 'removeFromList', '_controller' => 'App\\Controller\\JeudesocieteController::removeFromList'), array('gameId', 'listId'), null, null),
                            400 => array(array('_route' => 'listView', '_controller' => 'App\\Controller\\JeudesocieteController::listView'), array('listId'), null, null),
                            439 => array(array('_route' => 'addToList', '_controller' => 'App\\Controller\\JeudesocieteController::addToList'), array('gameId', 'listId', 'from'), null, null),
                            466 => array(array('_route' => 'party', '_controller' => 'App\\Controller\\PartyController::showParty'), array('uid'), null, null),
                            488 => array(array('_route' => 'profil', '_controller' => 'App\\Controller\\PartyController::showProfil'), array('uid'), null, null),
                            513 => array(array('_route' => 'killed', '_controller' => 'App\\Controller\\PartyController::killed'), array('uid'), null, null),
                            552 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            572 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            618 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            632 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            652 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            665 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            675 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
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

                if (675 === $m) {
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
