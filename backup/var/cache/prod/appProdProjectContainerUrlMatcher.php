<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/front')) {
            // front_homepage
            if ('/front' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_front_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'front_homepage'));
                }

                return $ret;
            }
            not_front_homepage:

            // shop
            if ('/front/shop' === $pathinfo) {
                return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::shopAction',  '_route' => 'shop',);
            }

            // single_product
            if ('/front/single_product' === $pathinfo) {
                return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::single_productAction',  '_route' => 'single_product',);
            }

            // order
            if ('/front/order' === $pathinfo) {
                return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::orderAction',  '_route' => 'order',);
            }

            // about
            if ('/front/about' === $pathinfo) {
                return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'about',);
            }

            // account
            if ('/front/account' === $pathinfo) {
                return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::accountAction',  '_route' => 'account',);
            }

            if (0 === strpos($pathinfo, '/front/c')) {
                // contact
                if ('/front/contact' === $pathinfo) {
                    return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::contactAction',  '_route' => 'contact',);
                }

                // checkout
                if ('/front/checkout' === $pathinfo) {
                    return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::checkoutAction',  '_route' => 'checkout',);
                }

                // cart
                if ('/front/cart' === $pathinfo) {
                    return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::cartAction',  '_route' => 'cart',);
                }

            }

            // login
            if ('/front/login' === $pathinfo) {
                return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
            }

            // wishlist
            if ('/front/wishlist' === $pathinfo) {
                return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::wishlistAction',  '_route' => 'wishlist',);
            }

        }

        elseif (0 === strpos($pathinfo, '/flux')) {
            // ajouter_facture
            if ('/flux/ajouter_factures' === $pathinfo) {
                return array (  '_controller' => 'FluxBundle\\Controller\\FactureController::ajouterAction',  '_route' => 'ajouter_facture',);
            }

            // afficherfacture
            if ('/flux/afficher_facture' === $pathinfo) {
                return array (  '_controller' => 'FluxBundle\\Controller\\FluxTransactionController::factureAction',  '_route' => 'afficherfacture',);
            }

            // flux_home
            if ('/flux' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'FluxBundle\\Controller\\FluxTransactionController::fluxHomeAction',  '_route' => 'flux_home',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_flux_home;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'flux_home'));
                }

                return $ret;
            }
            not_flux_home:

        }

        elseif (0 === strpos($pathinfo, '/a')) {
            // panier
            if ('/afficher' === $pathinfo) {
                return array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::afficherAction',  '_route' => 'panier',);
            }

            // add_user
            if (0 === strpos($pathinfo, '/add-user') && preg_match('#^/add\\-user/(?P<user_type>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'add_user']), array (  '_controller' => 'AuthBundle\\Controller\\UserController::addUserAction',));
            }

            if (0 === strpos($pathinfo, '/article')) {
                // article_homepage
                if ('/article' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'ArticleBundle\\Controller\\DefaultController::indexAction',  '_route' => 'article_homepage',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_article_homepage;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'article_homepage'));
                    }

                    return $ret;
                }
                not_article_homepage:

                // create_article
                if ('/article/create-article' === $pathinfo) {
                    return array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::createAction',  '_route' => 'create_article',);
                }

                // create_category
                if ('/article/create-category' === $pathinfo) {
                    return array (  '_controller' => 'ArticleBundle\\Controller\\CategoryController::createAction',  '_route' => 'create_category',);
                }

                // delete_article
                if (0 === strpos($pathinfo, '/article/Delete-article') && preg_match('#^/article/Delete\\-article/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_article']), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::deleteAction',));
                }

                // delete_category
                if (0 === strpos($pathinfo, '/article/Delete-category') && preg_match('#^/article/Delete\\-category/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_category']), array (  '_controller' => 'ArticleBundle\\Controller\\CategoryController::deleteAction',));
                }

                if (0 === strpos($pathinfo, '/article/show-articles')) {
                    // show-articles-front
                    if ('/article/show-articles-front' === $pathinfo) {
                        return array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::showFrontAction',  '_route' => 'show-articles-front',);
                    }

                    // show-articles
                    if ('/article/show-articles' === $pathinfo) {
                        return array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::showAction',  '_route' => 'show-articles',);
                    }

                }

                // show-category
                if ('/article/show-category' === $pathinfo) {
                    return array (  '_controller' => 'ArticleBundle\\Controller\\CategoryController::showAction',  '_route' => 'show-category',);
                }

                // update-article
                if (0 === strpos($pathinfo, '/article/update-article') && preg_match('#^/article/update\\-article/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'update-article']), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::updateAction',));
                }

                // update-category
                if (0 === strpos($pathinfo, '/article/update-category') && preg_match('#^/article/update\\-category/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'update-category']), array (  '_controller' => 'ArticleBundle\\Controller\\CategoryController::updateAction',));
                }

                // view-article
                if (0 === strpos($pathinfo, '/article/view-article') && preg_match('#^/article/view\\-article/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'view-article']), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::viewAction',));
                }

                // view-category
                if (0 === strpos($pathinfo, '/article/view-category') && preg_match('#^/article/view\\-category/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'view-category']), array (  '_controller' => 'ArticleBundle\\Controller\\CategoryController::viewAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_security_login;
                    }

                    return $ret;
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_security_check;
                    }

                    return $ret;
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_logout;
                }

                return $ret;
            }
            not_fos_user_security_logout:

            if (0 === strpos($pathinfo, '/livraison')) {
                // livraison_homepage
                if ('/livraison' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'LivraisonBundle\\Controller\\DefaultController::indexAction',  '_route' => 'livraison_homepage',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_livraison_homepage;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'livraison_homepage'));
                    }

                    return $ret;
                }
                not_livraison_homepage:

                // liste_livraison
                if ('/livraison/liste-livraison' === $pathinfo) {
                    return array (  '_controller' => 'LivraisonBundle\\Controller\\LivraisonController::listeLivraisonAction',  '_route' => 'liste_livraison',);
                }

                // ajouter_livraison
                if ('/livraison/ajouter-livraison' === $pathinfo) {
                    return array (  '_controller' => 'LivraisonBundle\\Controller\\LivraisonController::ajouterLivraisonAction',  '_route' => 'ajouter_livraison',);
                }

            }

            // users_list
            if ('/list-users' === $pathinfo) {
                return array (  '_controller' => 'AuthBundle\\Controller\\UserController::getAllUsersAction',  '_route' => 'users_list',);
            }

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_registration_register;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                    }

                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_registration_register;
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_check_email;
                    }

                    return $ret;
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirm;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirmed;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_request;
                    }

                    return $ret;
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_resetting_reset;
                    }

                    return $ret;
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_resetting_send_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_check_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_check_email:

            }

            elseif (0 === strpos($pathinfo, '/resources')) {
                // resources_homepage
                if ('/resources' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'ResourcesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'resources_homepage',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_resources_homepage;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'resources_homepage'));
                    }

                    return $ret;
                }
                not_resources_homepage:

                if (0 === strpos($pathinfo, '/resources/a')) {
                    // afficherFleet
                    if ('/resources/afficherFleet' === $pathinfo) {
                        return array (  '_controller' => 'ResourcesBundle\\Controller\\FleetController::afficherTableFleetAction',  '_route' => 'afficherFleet',);
                    }

                    // afficherMagazin
                    if ('/resources/afficherMagazin' === $pathinfo) {
                        return array (  '_controller' => 'ResourcesBundle\\Controller\\MagazinController::afficherTableMagazinAction',  '_route' => 'afficherMagazin',);
                    }

                    // ajouterFleet
                    if ('/resources/ajouterFleet' === $pathinfo) {
                        return array (  '_controller' => 'ResourcesBundle\\Controller\\FleetController::ajouterFleetAction',  '_route' => 'ajouterFleet',);
                    }

                    // ajouterMagazin
                    if ('/resources/ajouterMagazin' === $pathinfo) {
                        return array (  '_controller' => 'ResourcesBundle\\Controller\\MagazinController::ajouterMagazinAction',  '_route' => 'ajouterMagazin',);
                    }

                }

                // fleet_supp
                if (0 === strpos($pathinfo, '/resources/supprimerFleet') && preg_match('#^/resources/supprimerFleet/(?P<matriculation>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'fleet_supp']), array (  '_controller' => 'ResourcesBundle\\Controller\\FleetController::supprimerAction',));
                }

                // magazin_supp
                if (0 === strpos($pathinfo, '/resources/supprimerMagazin') && preg_match('#^/resources/supprimerMagazin/(?P<id_mag>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'magazin_supp']), array (  '_controller' => 'ResourcesBundle\\Controller\\MagazinController::supprimerAction',));
                }

                // fleet_modif
                if (0 === strpos($pathinfo, '/resources/modifierFleet') && preg_match('#^/resources/modifierFleet/(?P<matriculation>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'fleet_modif']), array (  '_controller' => 'ResourcesBundle\\Controller\\FleetController::ModifierFleetAction',));
                }

                // magazin_modif
                if (0 === strpos($pathinfo, '/resources/modifierMagazin') && preg_match('#^/resources/modifierMagazin/(?P<id_mag>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'magazin_modif']), array (  '_controller' => 'ResourcesBundle\\Controller\\MagazinController::ModifierMagazinAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/reclamation')) {
                // reclamation_index
                if ('/reclamation/reclamation/show' === $pathinfo) {
                    return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::showReclamationAction',  '_route' => 'reclamation_index',);
                }

                // reclamation_homepage
                if ('/reclamation' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'reclamation_homepage',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_reclamation_homepage;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'reclamation_homepage'));
                    }

                    return $ret;
                }
                not_reclamation_homepage:

                // reclamation_show
                if ('/reclamation/show' === $pathinfo) {
                    return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::showReclamationAction',  '_route' => 'reclamation_show',);
                }

                // reclamation_create
                if ('/reclamation/createReclamation' === $pathinfo) {
                    return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::createReclamationAction',  '_route' => 'reclamation_create',);
                }

                // appel_d_offre_index
                if ('/reclamation' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'ReclamationBundle\\Controller\\Appel_d_offreController::indexAction',  '_route' => 'appel_d_offre_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_appel_d_offre_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'appel_d_offre_index'));
                    }

                    return $ret;
                }
                not_appel_d_offre_index:

                // appel_d_offre_show
                if (preg_match('#^/reclamation/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'appel_d_offre_show']), array (  '_controller' => 'ReclamationBundle\\Controller\\Appel_d_offreController::showAction',));
                }

                // appel_d_offre_new
                if ('/reclamation/new' === $pathinfo) {
                    return array (  '_controller' => 'ReclamationBundle\\Controller\\Appel_d_offreController::newAction',  '_route' => 'appel_d_offre_new',);
                }

                // appel_d_offre_edit
                if (preg_match('#^/reclamation/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'appel_d_offre_edit']), array (  '_controller' => 'ReclamationBundle\\Controller\\Appel_d_offreController::editAction',));
                }

                // appel_d_offre_delete
                if (preg_match('#^/reclamation/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'appel_d_offre_delete']), array (  '_controller' => 'ReclamationBundle\\Controller\\Appel_d_offreController::deleteAction',));
                }

            }

        }

        // dashboard_homepage
        if ('/dashboard' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'DashboardBundle\\Controller\\DefaultController::indexAction',  '_route' => 'dashboard_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_dashboard_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'dashboard_homepage'));
            }

            return $ret;
        }
        not_dashboard_homepage:

        // user_redirect
        if ('/user-redirect' === $pathinfo) {
            return array (  '_controller' => 'AuthBundle\\Controller\\UserRedirectController::userRedirectAction',  '_route' => 'user_redirect',);
        }

        // redirect_to_login
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AuthBundle\\Controller\\UserRedirectController::redirectToLoginAction',  '_route' => 'redirect_to_login',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_redirect_to_login;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'redirect_to_login'));
            }

            return $ret;
        }
        not_redirect_to_login:

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
