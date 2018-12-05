<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'adminHomepage' => array(array(), array('_controller' => 'App\\Controller\\AdminController::adminHome'), array(), array(array('text', '/admin/home')), array(), array()),
        'missionList' => array(array(), array('_controller' => 'App\\Controller\\AdminController::missionList'), array(), array(array('text', '/admin/mission/list')), array(), array()),
        'missionDelete' => array(array('id'), array('_controller' => 'App\\Controller\\AdminController::missionDelete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/mission/delete')), array(), array()),
        'partyList' => array(array(), array('_controller' => 'App\\Controller\\AdminController::partyList'), array(), array(array('text', '/admin/party/list')), array(), array()),
        'partyView' => array(array('uid'), array('_controller' => 'App\\Controller\\AdminController::partyView'), array(), array(array('variable', '/', '[^/]++', 'uid'), array('text', '/admin/party/view')), array(), array()),
        'participantView' => array(array('uid'), array('_controller' => 'App\\Controller\\AdminController::participantView'), array(), array(array('variable', '/', '[^/]++', 'uid'), array('text', '/admin/party/delete')), array(), array()),
        'participantModify' => array(array('uid'), array('_controller' => 'App\\Controller\\AdminController::participantModify'), array(), array(array('variable', '/', '[^/]++', 'uid'), array('text', '/admin/participant/modify')), array(), array()),
        'participantKill' => array(array('uid'), array('_controller' => 'App\\Controller\\AdminController::participantKill'), array(), array(array('variable', '/', '[^/]++', 'uid'), array('text', '/admin/participant/kill')), array(), array()),
        'adminMissionCreate' => array(array(), array('_controller' => 'App\\Controller\\AdminController::createMission'), array(), array(array('text', '/admin/mission/create')), array(), array()),
        'home' => array(array(), array('_controller' => 'App\\Controller\\HomeController::index'), array(), array(array('text', '/home')), array(), array()),
        'homeRedirect' => array(array(), array('_controller' => 'App\\Controller\\HomeController::indexRedirect'), array(), array(array('text', '/')), array(), array()),
        'jeudesociete' => array(array(), array('_controller' => 'App\\Controller\\JeudesocieteController::index'), array(), array(array('text', '/jeudesociete')), array(), array()),
        'createGame' => array(array(), array('_controller' => 'App\\Controller\\JeudesocieteController::createGame'), array(), array(array('text', '/jeudesociete/jeu/create')), array(), array()),
        'jeuDelete' => array(array('id'), array('_controller' => 'App\\Controller\\JeudesocieteController::jeuDelete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/jeudesociete/jeu/delete')), array(), array()),
        'jeuModify' => array(array('id'), array('_controller' => 'App\\Controller\\JeudesocieteController::jeuModify'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/jeudesociete/jeu/modify')), array(), array()),
        'jeuModifyInterest' => array(array('id'), array('_controller' => 'App\\Controller\\JeudesocieteController::jeuModifyInterest'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/jeudesociete/jeu/interest')), array(), array()),
        'listDelete' => array(array('id'), array('_controller' => 'App\\Controller\\JeudesocieteController::listDelete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/jeudesociete/list/delete')), array(), array()),
        'listModify' => array(array('id'), array('_controller' => 'App\\Controller\\JeudesocieteController::listModify'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/jeudesociete/list/modify')), array(), array()),
        'removeFromList' => array(array('gameId', 'listId'), array('_controller' => 'App\\Controller\\JeudesocieteController::removeFromList'), array(), array(array('variable', '/', '[^/]++', 'listId'), array('variable', '/', '[^/]++', 'gameId'), array('text', '/jeudesociete/list/remove')), array(), array()),
        'jeuListAdv' => array(array(), array('_controller' => 'App\\Controller\\JeudesocieteController::jeuListAdv'), array(), array(array('text', '/jeudesociete/jeu/list')), array(), array()),
        'jeuView' => array(array('id'), array('_controller' => 'App\\Controller\\JeudesocieteController::jeuView'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/jeudesociete/jeu/view')), array(), array()),
        'jeuObserve' => array(array('id'), array('_controller' => 'App\\Controller\\JeudesocieteController::jeuObserve'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/jeudesociete/jeu/observe')), array(), array()),
        'createList' => array(array(), array('_controller' => 'App\\Controller\\JeudesocieteController::createList'), array(), array(array('text', '/jeudesociete/list/create')), array(), array()),
        'listList' => array(array(), array('_controller' => 'App\\Controller\\JeudesocieteController::listList'), array(), array(array('text', '/jeudesociete/list/list')), array(), array()),
        'listView' => array(array('listId'), array('_controller' => 'App\\Controller\\JeudesocieteController::listView'), array(), array(array('variable', '/', '[^/]++', 'listId'), array('text', '/jeudesociete/list/view')), array(), array()),
        'addToList' => array(array('gameId', 'listId', 'from'), array('_controller' => 'App\\Controller\\JeudesocieteController::addToList'), array(), array(array('variable', '/', '[^/]++', 'from'), array('variable', '/', '[^/]++', 'listId'), array('variable', '/', '[^/]++', 'gameId'), array('text', '/jeudesociete/add')), array(), array()),
        'login' => array(array(), array('_controller' => 'App\\Controller\\LoginController::userLogin'), array(), array(array('text', '/login')), array(), array()),
        'signin' => array(array(), array('_controller' => 'App\\Controller\\LoginController::userSignIn'), array(), array(array('text', '/signin')), array(), array()),
        'disconnect' => array(array(), array('_controller' => 'App\\Controller\\LoginController::userDisconnect'), array(), array(array('text', '/disconnect')), array(), array()),
        'createParty' => array(array(), array('_controller' => 'App\\Controller\\PartyController::createParty'), array(), array(array('text', '/party/create')), array(), array()),
        'party' => array(array('uid'), array('_controller' => 'App\\Controller\\PartyController::showParty'), array(), array(array('variable', '/', '[^/]++', 'uid'), array('text', '/party')), array(), array()),
        'profil' => array(array('uid'), array('_controller' => 'App\\Controller\\PartyController::showProfil'), array(), array(array('variable', '/', '[^/]++', 'uid'), array('text', '/profil')), array(), array()),
        'killed' => array(array('uid'), array('_controller' => 'App\\Controller\\PartyController::killed'), array(), array(array('variable', '/', '[^/]++', 'uid'), array('text', '/killed')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
