<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Livraison/Default/listeLivraison.html.twig */
class __TwigTemplate_7d7649c1e63ce82fdbfd9728cfba5a3c1bdb10bbc67560b303e0cd0c4e4fc8f9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'onglet' => [$this, 'block_onglet'],
            'titre' => [$this, 'block_titre'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "dashboard_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Livraison/Default/listeLivraison.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Livraison/Default/listeLivraison.html.twig"));

        $this->parent = $this->loadTemplate("dashboard_base.html.twig", "@Livraison/Default/listeLivraison.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_onglet($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "onglet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "onglet"));

        echo "Gestion livraisons";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo "Debo - Livraison";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <style>
        [data-draggable=\"target\"]
        {
            float:left;
            list-style-type:none;

            width:42%;
            height:7.5em;
            overflow-y:auto;

            margin:0 0.5em 0.5em 0;
            padding:0.5em;

            border:2px solid #888;
            border-radius:0.2em;

            background:#ddd;
            color:#555;
        }

        /* drop target state */
        [data-draggable=\"target\"][aria-dropeffect=\"move\"]
        {
            border-color:#68b;

            background:#fff;
        }

        /* drop target focus and dragover state */
        [data-draggable=\"target\"][aria-dropeffect=\"move\"]:focus,
        [data-draggable=\"target\"][aria-dropeffect=\"move\"].dragover
        {
            outline:none;

            box-shadow:0 0 0 1px #fff, 0 0 0 3px #68b;
        }

        /* draggable items */
        [data-draggable=\"item\"]
        {
            display:block;
            list-style-type:none;

            margin:0 0 2px 0;
            padding:0.2em 0.4em;

            border-radius:0.2em;

            line-height:1.3;
        }

        /* items focus state */
        [data-draggable=\"item\"]:focus
        {
            outline:none;

            box-shadow:0 0 0 2px #68b, inset 0 0 0 1px #ddd;
        }

        /* items grabbed state */
        [data-draggable=\"item\"][aria-grabbed=\"true\"]
        {
            background:#8ad;
            color:#fff;
        }
    </style>




    <div class=\"content\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Ajouter livraison</h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\" style=\"position: relative;\">
                            <form action=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter_livraison");
        echo "\", method=\"post\">
                                <ol data-draggable=\"target\" class=\"livraison\" style=\"width: 100%; height: 300px;\" id=\"livraison\">
                                    <p style=\"text-align: center\">Ajouter les commandes</p>

                                    <div class=\"form-group\">
                                        <label>Choisir le livreur</label>
                                        <select class=\"form-control\" name=\"livreur\">
                                            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["livreurs"] ?? $this->getContext($context, "livreurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["livreur"]) {
            // line 93
            echo "                                                ";
            if (($this->getAttribute($context["livreur"], "status", []) == "Disponible")) {
                // line 94
                echo "                                                <option value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["livreur"], "id", []), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["livreur"], "nom", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["livreur"], "prenom", []), "html", null, true);
                echo "</option>
                                                ";
            }
            // line 96
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livreur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                                        </select>
                                    </div>
                                    <input type=\"submit\" class=\"btn btn-success\" value=\"Ajouter\" style=\"position: absolute; bottom: 10px;\"/>
                                </ol>
                            </form>
                        </div>
                        <div class=\"col-lg-6\">
                            <ol data-draggable=\"target\" class=\"commandes\" name=\"commandes\" style=\"width: 100%; height: 300px;\">
                                <p style=\"text-align: center\">Liste des commandes</p>
                                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 107
            echo "                                    ";
            if (($this->getAttribute($context["commande"], "status", []) == "En attente")) {
                // line 108
                echo "                                    <input class=\"form-control\"  data-draggable=\"item\" name=\"commandes[]\" value=\"Commande n° ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", []), "html", null, true);
                echo "\"  style=\"margin-bottom: 8px\"/>
                                    ";
            }
            // line 110
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <h4 class=\"card-title\">Liste des livraison</h4>
                        </div>
                        <div class=\"col-lg-6\" style=\"text-align: right\">
                            <button type=\"button\" class=\"btn btn-default\">Mes livraison</button>
                        </div>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"col-lg-12\">
                    <div class=\"row\" style=\"justify-content: center\">
                        <a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_livraison");
        echo "\"> <button type=\"button\" class=\"btn btn-sm btn-outline-default\"> Tout</button></a>
                        <a href=\"";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_livraison_by_status", ["status" => "En attente"]);
        echo "\"><button type=\"button\" class=\"btn btn-sm btn-outline-warning\"> En attente</button></a>
                        <a href=\"";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_livraison_by_status", ["status" => "En cours"]);
        echo "\"><button type=\"button\" class=\"btn btn-sm btn-outline-info\"> En cours</button></a>
                        <a href=\"";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_livraison_by_status", ["status" => "Terminée"]);
        echo "\"><button type=\"button\" class=\"btn btn-sm btn-outline-success\"> Terminée</button></a>
                        <a href=\"";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_livraison_by_status", ["status" => "Annulée"]);
        echo "\"><button type=\"button\" class=\"btn btn-sm btn-outline-danger\"> Annulée</button></a>
                    </div>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <thead class=\" text-primary\">
                            <th>
                                Id
                            </th>
                            <th>
                                Date de depart
                            </th>
                            <th>
                                Date d'arrivé
                            </th>

                            <th >
                                Status
                            </th>
                            <th >
                                Livreur
                            </th>

                            </thead>
                            <tbody>
                            ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["livraisons"] ?? $this->getContext($context, "livraisons")));
        foreach ($context['_seq'] as $context["_key"] => $context["livraison"]) {
            // line 166
            echo "                                <tr>
                                    <td>
                                        ";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($context["livraison"], "id", []), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 171
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["livraison"], "dateDepart", []), "Y-m-d H:i:s"), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 174
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["livraison"], "dateArivee", []), "Y-m-d H:i:s"), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 177
            if (($this->getAttribute($context["livraison"], "status", []) == "En cours")) {
                // line 178
                echo "                                            <div class=\"badge badge-info\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["livraison"], "status", []), "html", null, true);
                echo "</div>
                                        ";
            } elseif (($this->getAttribute(            // line 179
$context["livraison"], "status", []) == "Terminée")) {
                // line 180
                echo "                                            <div class=\"badge badge-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["livraison"], "status", []), "html", null, true);
                echo "</div>
                                        ";
            } elseif (($this->getAttribute(            // line 181
$context["livraison"], "status", []) == "Annulée")) {
                // line 182
                echo "                                            <div class=\"badge badge-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["livraison"], "status", []), "html", null, true);
                echo "</div>
                                        ";
            } else {
                // line 184
                echo "                                            <div class=\"badge badge-warning\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["livraison"], "status", []), "html", null, true);
                echo "</div>
                                        ";
            }
            // line 186
            echo "                                    </td>
                                    <td>
                                        ";
            // line 188
            (($this->getAttribute($context["livraison"], "livreur", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["livraison"], "livreur", []), "nom", []), "html", null, true))) : (print ("")));
            echo " ";
            (($this->getAttribute($context["livraison"], "livreur", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["livraison"], "livreur", []), "prenom", []), "html", null, true))) : (print ("")));
            echo "
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_single_livraison", ["id" => $this->getAttribute($context["livraison"], "id", [])]), "html", null, true);
            echo "\">
                                            <button type=\"button\" class=\"btn btn-info\">Voir</button>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livraison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        (function()
        {

            //exclude older browsers by the features we need them to support
            //and legacy opera explicitly so we don't waste time on a dead browser
            if
            (
                !document.querySelectorAll
                ||
                !('draggable' in document.createElement('span'))
                ||
                window.opera
            )
            { return; }

            //get the collection of draggable targets and add their draggable attribute
            for(var
                    targets = document.querySelectorAll('[data-draggable=\"target\"]'),
                    len = targets.length,
                    i = 0; i < len; i ++)
            {
                targets[i].setAttribute('aria-dropeffect', 'none');
            }

            //get the collection of draggable items and add their draggable attributes
            for(var
                    items = document.querySelectorAll('[data-draggable=\"item\"]'),
                    len = items.length,
                    i = 0; i < len; i ++)
            {
                items[i].setAttribute('draggable', 'true');
                items[i].setAttribute('aria-grabbed', 'false');
                items[i].setAttribute('tabindex', '0');
            }



            //dictionary for storing the selections data
            //comprising an array of the currently selected items
            //a reference to the selected items' owning container
            //and a refernce to the current drop target container
            var selections =
                {
                    items      : [],
                    owner      : null,
                    droptarget : null
                };

            //function for selecting an item
            function addSelection(item)
            {
                //if the owner reference is still null, set it to this item's parent
                //so that further selection is only allowed within the same container
                if(!selections.owner)
                {
                    selections.owner = item.parentNode;
                }

                //or if that's already happened then compare it with this item's parent
                //and if they're not the same container, return to prevent selection
                else if(selections.owner != item.parentNode)
                {
                    return;
                }

                //set this item's grabbed state
                item.setAttribute('aria-grabbed', 'true');

                //add it to the items array
                selections.items.push(item);
            }

            //function for unselecting an item
            function removeSelection(item)
            {
                //reset this item's grabbed state
                item.setAttribute('aria-grabbed', 'false');

                //then find and remove this item from the existing items array
                for(var len = selections.items.length, i = 0; i < len; i ++)
                {
                    if(selections.items[i] == item)
                    {
                        selections.items.splice(i, 1);
                        break;
                    }
                }
            }

            //function for resetting all selections
            function clearSelections()
            {
                //if we have any selected items
                if(selections.items.length)
                {
                    //reset the owner reference
                    selections.owner = null;

                    //reset the grabbed state on every selected item
                    for(var len = selections.items.length, i = 0; i < len; i ++)
                    {
                        selections.items[i].setAttribute('aria-grabbed', 'false');
                    }

                    //then reset the items array
                    selections.items = [];
                }
            }

            //shorctut function for testing whether a selection modifier is pressed
            function hasModifier(e)
            {
                return (e.ctrlKey || e.metaKey || e.shiftKey);
            }


            //function for applying dropeffect to the target containers
            function addDropeffects()
            {
                //apply aria-dropeffect and tabindex to all targets apart from the owner
                for(var len = targets.length, i = 0; i < len; i ++)
                {
                    if
                    (
                        targets[i] != selections.owner
                        &&
                        targets[i].getAttribute('aria-dropeffect') == 'none'
                    )
                    {
                        targets[i].setAttribute('aria-dropeffect', 'move');
                        targets[i].setAttribute('tabindex', '0');
                    }
                }

                //remove aria-grabbed and tabindex from all items inside those containers
                for(var len = items.length, i = 0; i < len; i ++)
                {
                    if
                    (
                        items[i].parentNode != selections.owner
                        &&
                        items[i].getAttribute('aria-grabbed')
                    )
                    {
                        items[i].removeAttribute('aria-grabbed');
                        items[i].removeAttribute('tabindex');
                    }
                }
            }

            //function for removing dropeffect from the target containers
            function clearDropeffects()
            {
                //if we have any selected items
                if(selections.items.length)
                {
                    //reset aria-dropeffect and remove tabindex from all targets
                    for(var len = targets.length, i = 0; i < len; i ++)
                    {
                        if(targets[i].getAttribute('aria-dropeffect') != 'none')
                        {
                            targets[i].setAttribute('aria-dropeffect', 'none');
                            targets[i].removeAttribute('tabindex');
                        }
                    }

                    //restore aria-grabbed and tabindex to all selectable items
                    //without changing the grabbed value of any existing selected items
                    for(var len = items.length, i = 0; i < len; i ++)
                    {
                        if(!items[i].getAttribute('aria-grabbed'))
                        {
                            items[i].setAttribute('aria-grabbed', 'false');
                            items[i].setAttribute('tabindex', '0');
                        }
                        else if(items[i].getAttribute('aria-grabbed') == 'true')
                        {
                            items[i].setAttribute('tabindex', '0');
                        }
                    }
                }
            }

            //shortcut function for identifying an event element's target container
            function getContainer(element)
            {
                do
                {
                    if(element.nodeType == 1 && element.getAttribute('aria-dropeffect'))
                    {
                        return element;
                    }
                }
                while(element = element.parentNode);

                return null;
            }



            //mousedown event to implement single selection
            document.addEventListener('mousedown', function(e)
            {
                //if the element is a draggable item
                if(e.target.getAttribute('draggable'))
                {
                    //clear dropeffect from the target containers
                    clearDropeffects();

                    //if the multiple selection modifier is not pressed
                    //and the item's grabbed state is currently false
                    if
                    (
                        !hasModifier(e)
                        &&
                        e.target.getAttribute('aria-grabbed') == 'false'
                    )
                    {
                        //clear all existing selections
                        clearSelections();

                        //then add this new selection
                        addSelection(e.target);
                    }
                }

                //else [if the element is anything else]
                //and the selection modifier is not pressed
                else if(!hasModifier(e))
                {
                    //clear dropeffect from the target containers
                    clearDropeffects();

                    //clear all existing selections
                    clearSelections();
                }

                //else [if the element is anything else and the modifier is pressed]
                else
                {
                    //clear dropeffect from the target containers
                    clearDropeffects();
                }

            }, false);

            //mouseup event to implement multiple selection
            document.addEventListener('mouseup', function(e)
            {
                //if the element is a draggable item
                //and the multipler selection modifier is pressed
                if(e.target.getAttribute('draggable') && hasModifier(e))
                {
                    //if the item's grabbed state is currently true
                    if(e.target.getAttribute('aria-grabbed') == 'true')
                    {
                        //unselect this item
                        removeSelection(e.target);

                        //if that was the only selected item
                        //then reset the owner container reference
                        if(!selections.items.length)
                        {
                            selections.owner = null;
                        }
                    }

                    //else [if the item's grabbed state is false]
                    else
                    {
                        //add this additional selection
                        addSelection(e.target);
                    }
                }

            }, false);

            //dragstart event to initiate mouse dragging
            document.addEventListener('dragstart', function(e)
            {
                //if the element's parent is not the owner, then block this event
                if(selections.owner != e.target.parentNode)
                {
                    e.preventDefault();
                    return;
                }

                //[else] if the multiple selection modifier is pressed
                //and the item's grabbed state is currently false
                if
                (
                    hasModifier(e)
                    &&
                    e.target.getAttribute('aria-grabbed') == 'false'
                )
                {
                    //add this additional selection
                    addSelection(e.target);
                }

                //we don't need the transfer data, but we have to define something
                //otherwise the drop action won't work at all in firefox
                //most browsers support the proper mime-type syntax, eg. \"text/plain\"
                //but we have to use this incorrect syntax for the benefit of IE10+
                e.dataTransfer.setData('text', '');

                //apply dropeffect to the target containers
                addDropeffects();

            }, false);



            //keydown event to implement selection and abort
            document.addEventListener('keydown', function(e)
            {
                //if the element is a grabbable item
                if(e.target.getAttribute('aria-grabbed'))
                {
                    //Space is the selection or unselection keystroke
                    if(e.keyCode == 32)
                    {
                        //if the multiple selection modifier is pressed
                        if(hasModifier(e))
                        {
                            //if the item's grabbed state is currently true
                            if(e.target.getAttribute('aria-grabbed') == 'true')
                            {
                                //if this is the only selected item, clear dropeffect
                                //from the target containers, which we must do first
                                //in case subsequent unselection sets owner to null
                                if(selections.items.length == 1)
                                {
                                    clearDropeffects();
                                }

                                //unselect this item
                                removeSelection(e.target);

                                //if we have any selections
                                //apply dropeffect to the target containers,
                                //in case earlier selections were made by mouse
                                if(selections.items.length)
                                {
                                    addDropeffects();
                                }

                                //if that was the only selected item
                                //then reset the owner container reference
                                if(!selections.items.length)
                                {
                                    selections.owner = null;
                                }
                            }

                            //else [if its grabbed state is currently false]
                            else
                            {
                                //add this additional selection
                                addSelection(e.target);

                                //apply dropeffect to the target containers
                                addDropeffects();
                            }
                        }

                        //else [if the multiple selection modifier is not pressed]
                        //and the item's grabbed state is currently false
                        else if(e.target.getAttribute('aria-grabbed') == 'false')
                        {
                            //clear dropeffect from the target containers
                            clearDropeffects();

                            //clear all existing selections
                            clearSelections();

                            //add this new selection
                            addSelection(e.target);

                            //apply dropeffect to the target containers
                            addDropeffects();
                        }

                        //else [if modifier is not pressed and grabbed is already true]
                        else
                        {
                            //apply dropeffect to the target containers
                            addDropeffects();
                        }

                        //then prevent default to avoid any conflict with native actions
                        e.preventDefault();
                    }

                    //Modifier + M is the end-of-selection keystroke
                    if(e.keyCode == 77 && hasModifier(e))
                    {
                        //if we have any selected items
                        if(selections.items.length)
                        {
                            //apply dropeffect to the target containers
                            //in case earlier selections were made by mouse
                            addDropeffects();

                            //if the owner container is the last one, focus the first one
                            if(selections.owner == targets[targets.length - 1])
                            {
                                targets[0].focus();
                            }

                            //else [if it's not the last one], find and focus the next one
                            else
                            {
                                for(var len = targets.length, i = 0; i < len; i ++)
                                {
                                    if(selections.owner == targets[i])
                                    {
                                        targets[i + 1].focus();
                                        break;
                                    }
                                }
                            }
                        }

                        //then prevent default to avoid any conflict with native actions
                        e.preventDefault();
                    }
                }

                //Escape is the abort keystroke (for any target element)
                if(e.keyCode == 27)
                {
                    //if we have any selected items
                    if(selections.items.length)
                    {
                        //clear dropeffect from the target containers
                        clearDropeffects();

                        //then set focus back on the last item that was selected, which is
                        //necessary because we've removed tabindex from the current focus
                        selections.items[selections.items.length - 1].focus();

                        //clear all existing selections
                        clearSelections();

                        //but don't prevent default so that native actions can still occur
                    }
                }

            }, false);



            //related variable is needed to maintain a reference to the
            //dragleave's relatedTarget, since it doesn't have e.relatedTarget
            var related = null;

            //dragenter event to set that variable
            document.addEventListener('dragenter', function(e)
            {
                related = e.target;

            }, false);

            //dragleave event to maintain target highlighting using that variable
            document.addEventListener('dragleave', function(e)
            {
                //get a drop target reference from the relatedTarget
                var droptarget = getContainer(related);

                //if the target is the owner then it's not a valid drop target
                if(droptarget == selections.owner)
                {
                    droptarget = null;
                }

                //if the drop target is different from the last stored reference
                //(or we have one of those references but not the other one)
                if(droptarget != selections.droptarget)
                {
                    //if we have a saved reference, clear its existing dragover class
                    if(selections.droptarget)
                    {
                        selections.droptarget.className =
                            selections.droptarget.className.replace(/ dragover/g, '');
                    }

                    //apply the dragover class to the new drop target reference
                    if(droptarget)
                    {
                        droptarget.className += ' dragover';
                    }

                    //then save that reference for next time
                    selections.droptarget = droptarget;
                }

            }, false);

            //dragover event to allow the drag by preventing its default
            document.addEventListener('dragover', function(e)
            {
                //if we have any selected items, allow them to be dragged
                if(selections.items.length)
                {
                    e.preventDefault();
                }

            }, false);



            //dragend event to implement items being validly dropped into targets,
            //or invalidly dropped elsewhere, and to clean-up the interface either way
            document.addEventListener('dragend', function(e)
            {
                //if we have a valid drop target reference
                //(which implies that we have some selected items)
                if(selections.droptarget)
                {
                    //append the selected items to the end of the target container
                    for(var len = selections.items.length, i = 0; i < len; i ++)
                    {
                        selections.droptarget.appendChild(selections.items[i]);
                    }

                    //prevent default to allow the action
                    e.preventDefault();
                }

                //if we have any selected items
                if(selections.items.length)
                {
                    //clear dropeffect from the target containers
                    clearDropeffects();

                    //if we have a valid drop target reference
                    if(selections.droptarget)
                    {
                        //reset the selections array
                        clearSelections();

                        //reset the target's dragover class
                        selections.droptarget.className =
                            selections.droptarget.className.replace(/ dragover/g, '');

                        //reset the target reference
                        selections.droptarget = null;
                    }
                }

            }, false);

        })();
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Livraison/Default/listeLivraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 197,  380 => 191,  372 => 188,  368 => 186,  362 => 184,  356 => 182,  354 => 181,  349 => 180,  347 => 179,  342 => 178,  340 => 177,  334 => 174,  328 => 171,  322 => 168,  318 => 166,  314 => 165,  286 => 140,  282 => 139,  278 => 138,  274 => 137,  270 => 136,  243 => 111,  237 => 110,  231 => 108,  228 => 107,  224 => 106,  213 => 97,  207 => 96,  197 => 94,  194 => 93,  190 => 92,  180 => 85,  98 => 5,  89 => 4,  71 => 3,  53 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard_base.html.twig' %}
{% block onglet %}Gestion livraisons{% endblock %}
{% block titre %}Debo - Livraison{% endblock %}
{% block body %}
    <style>
        [data-draggable=\"target\"]
        {
            float:left;
            list-style-type:none;

            width:42%;
            height:7.5em;
            overflow-y:auto;

            margin:0 0.5em 0.5em 0;
            padding:0.5em;

            border:2px solid #888;
            border-radius:0.2em;

            background:#ddd;
            color:#555;
        }

        /* drop target state */
        [data-draggable=\"target\"][aria-dropeffect=\"move\"]
        {
            border-color:#68b;

            background:#fff;
        }

        /* drop target focus and dragover state */
        [data-draggable=\"target\"][aria-dropeffect=\"move\"]:focus,
        [data-draggable=\"target\"][aria-dropeffect=\"move\"].dragover
        {
            outline:none;

            box-shadow:0 0 0 1px #fff, 0 0 0 3px #68b;
        }

        /* draggable items */
        [data-draggable=\"item\"]
        {
            display:block;
            list-style-type:none;

            margin:0 0 2px 0;
            padding:0.2em 0.4em;

            border-radius:0.2em;

            line-height:1.3;
        }

        /* items focus state */
        [data-draggable=\"item\"]:focus
        {
            outline:none;

            box-shadow:0 0 0 2px #68b, inset 0 0 0 1px #ddd;
        }

        /* items grabbed state */
        [data-draggable=\"item\"][aria-grabbed=\"true\"]
        {
            background:#8ad;
            color:#fff;
        }
    </style>




    <div class=\"content\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Ajouter livraison</h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\" style=\"position: relative;\">
                            <form action=\"{{ path('ajouter_livraison') }}\", method=\"post\">
                                <ol data-draggable=\"target\" class=\"livraison\" style=\"width: 100%; height: 300px;\" id=\"livraison\">
                                    <p style=\"text-align: center\">Ajouter les commandes</p>

                                    <div class=\"form-group\">
                                        <label>Choisir le livreur</label>
                                        <select class=\"form-control\" name=\"livreur\">
                                            {% for livreur in livreurs %}
                                                {% if livreur.status == \"Disponible\" %}
                                                <option value={{livreur.id}}>{{ livreur.nom }} {{ livreur.prenom }}</option>
                                                {% endif %}
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <input type=\"submit\" class=\"btn btn-success\" value=\"Ajouter\" style=\"position: absolute; bottom: 10px;\"/>
                                </ol>
                            </form>
                        </div>
                        <div class=\"col-lg-6\">
                            <ol data-draggable=\"target\" class=\"commandes\" name=\"commandes\" style=\"width: 100%; height: 300px;\">
                                <p style=\"text-align: center\">Liste des commandes</p>
                                {% for commande in commandes %}
                                    {% if commande.status == 'En attente' %}
                                    <input class=\"form-control\"  data-draggable=\"item\" name=\"commandes[]\" value=\"Commande n° {{ commande.id }}\"  style=\"margin-bottom: 8px\"/>
                                    {% endif %}
                                {% endfor %}
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <h4 class=\"card-title\">Liste des livraison</h4>
                        </div>
                        <div class=\"col-lg-6\" style=\"text-align: right\">
                            <button type=\"button\" class=\"btn btn-default\">Mes livraison</button>
                        </div>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"col-lg-12\">
                    <div class=\"row\" style=\"justify-content: center\">
                        <a href=\"{{ path('liste_livraison') }}\"> <button type=\"button\" class=\"btn btn-sm btn-outline-default\"> Tout</button></a>
                        <a href=\"{{ path('view_livraison_by_status', {'status':'En attente'}) }}\"><button type=\"button\" class=\"btn btn-sm btn-outline-warning\"> En attente</button></a>
                        <a href=\"{{ path('view_livraison_by_status', {'status':'En cours'}) }}\"><button type=\"button\" class=\"btn btn-sm btn-outline-info\"> En cours</button></a>
                        <a href=\"{{ path('view_livraison_by_status', {'status':'Terminée'}) }}\"><button type=\"button\" class=\"btn btn-sm btn-outline-success\"> Terminée</button></a>
                        <a href=\"{{ path('view_livraison_by_status', {'status':'Annulée'}) }}\"><button type=\"button\" class=\"btn btn-sm btn-outline-danger\"> Annulée</button></a>
                    </div>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <thead class=\" text-primary\">
                            <th>
                                Id
                            </th>
                            <th>
                                Date de depart
                            </th>
                            <th>
                                Date d'arrivé
                            </th>

                            <th >
                                Status
                            </th>
                            <th >
                                Livreur
                            </th>

                            </thead>
                            <tbody>
                            {% for livraison in livraisons%}
                                <tr>
                                    <td>
                                        {{livraison.id}}
                                    </td>
                                    <td>
                                        {{livraison.dateDepart|date('Y-m-d H:i:s')}}
                                    </td>
                                    <td>
                                        {{livraison.dateArivee|date('Y-m-d H:i:s')}}
                                    </td>
                                    <td>
                                        {% if livraison.status == \"En cours\" %}
                                            <div class=\"badge badge-info\">{{ livraison.status }}</div>
                                        {% elseif livraison.status == \"Terminée\" %}
                                            <div class=\"badge badge-success\">{{ livraison.status }}</div>
                                        {% elseif livraison.status == \"Annulée\" %}
                                            <div class=\"badge badge-danger\">{{ livraison.status }}</div>
                                        {% else%}
                                            <div class=\"badge badge-warning\">{{ livraison.status }}</div>
                                        {% endif %}
                                    </td>
                                    <td>
                                        {{ livraison.livreur ? livraison.livreur.nom }} {{ livraison.livreur ? livraison.livreur.prenom }}
                                    </td>
                                    <td>
                                        <a href=\"{{ path('view_single_livraison', {'id':livraison.id}) }}\">
                                            <button type=\"button\" class=\"btn btn-info\">Voir</button>
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        (function()
        {

            //exclude older browsers by the features we need them to support
            //and legacy opera explicitly so we don't waste time on a dead browser
            if
            (
                !document.querySelectorAll
                ||
                !('draggable' in document.createElement('span'))
                ||
                window.opera
            )
            { return; }

            //get the collection of draggable targets and add their draggable attribute
            for(var
                    targets = document.querySelectorAll('[data-draggable=\"target\"]'),
                    len = targets.length,
                    i = 0; i < len; i ++)
            {
                targets[i].setAttribute('aria-dropeffect', 'none');
            }

            //get the collection of draggable items and add their draggable attributes
            for(var
                    items = document.querySelectorAll('[data-draggable=\"item\"]'),
                    len = items.length,
                    i = 0; i < len; i ++)
            {
                items[i].setAttribute('draggable', 'true');
                items[i].setAttribute('aria-grabbed', 'false');
                items[i].setAttribute('tabindex', '0');
            }



            //dictionary for storing the selections data
            //comprising an array of the currently selected items
            //a reference to the selected items' owning container
            //and a refernce to the current drop target container
            var selections =
                {
                    items      : [],
                    owner      : null,
                    droptarget : null
                };

            //function for selecting an item
            function addSelection(item)
            {
                //if the owner reference is still null, set it to this item's parent
                //so that further selection is only allowed within the same container
                if(!selections.owner)
                {
                    selections.owner = item.parentNode;
                }

                //or if that's already happened then compare it with this item's parent
                //and if they're not the same container, return to prevent selection
                else if(selections.owner != item.parentNode)
                {
                    return;
                }

                //set this item's grabbed state
                item.setAttribute('aria-grabbed', 'true');

                //add it to the items array
                selections.items.push(item);
            }

            //function for unselecting an item
            function removeSelection(item)
            {
                //reset this item's grabbed state
                item.setAttribute('aria-grabbed', 'false');

                //then find and remove this item from the existing items array
                for(var len = selections.items.length, i = 0; i < len; i ++)
                {
                    if(selections.items[i] == item)
                    {
                        selections.items.splice(i, 1);
                        break;
                    }
                }
            }

            //function for resetting all selections
            function clearSelections()
            {
                //if we have any selected items
                if(selections.items.length)
                {
                    //reset the owner reference
                    selections.owner = null;

                    //reset the grabbed state on every selected item
                    for(var len = selections.items.length, i = 0; i < len; i ++)
                    {
                        selections.items[i].setAttribute('aria-grabbed', 'false');
                    }

                    //then reset the items array
                    selections.items = [];
                }
            }

            //shorctut function for testing whether a selection modifier is pressed
            function hasModifier(e)
            {
                return (e.ctrlKey || e.metaKey || e.shiftKey);
            }


            //function for applying dropeffect to the target containers
            function addDropeffects()
            {
                //apply aria-dropeffect and tabindex to all targets apart from the owner
                for(var len = targets.length, i = 0; i < len; i ++)
                {
                    if
                    (
                        targets[i] != selections.owner
                        &&
                        targets[i].getAttribute('aria-dropeffect') == 'none'
                    )
                    {
                        targets[i].setAttribute('aria-dropeffect', 'move');
                        targets[i].setAttribute('tabindex', '0');
                    }
                }

                //remove aria-grabbed and tabindex from all items inside those containers
                for(var len = items.length, i = 0; i < len; i ++)
                {
                    if
                    (
                        items[i].parentNode != selections.owner
                        &&
                        items[i].getAttribute('aria-grabbed')
                    )
                    {
                        items[i].removeAttribute('aria-grabbed');
                        items[i].removeAttribute('tabindex');
                    }
                }
            }

            //function for removing dropeffect from the target containers
            function clearDropeffects()
            {
                //if we have any selected items
                if(selections.items.length)
                {
                    //reset aria-dropeffect and remove tabindex from all targets
                    for(var len = targets.length, i = 0; i < len; i ++)
                    {
                        if(targets[i].getAttribute('aria-dropeffect') != 'none')
                        {
                            targets[i].setAttribute('aria-dropeffect', 'none');
                            targets[i].removeAttribute('tabindex');
                        }
                    }

                    //restore aria-grabbed and tabindex to all selectable items
                    //without changing the grabbed value of any existing selected items
                    for(var len = items.length, i = 0; i < len; i ++)
                    {
                        if(!items[i].getAttribute('aria-grabbed'))
                        {
                            items[i].setAttribute('aria-grabbed', 'false');
                            items[i].setAttribute('tabindex', '0');
                        }
                        else if(items[i].getAttribute('aria-grabbed') == 'true')
                        {
                            items[i].setAttribute('tabindex', '0');
                        }
                    }
                }
            }

            //shortcut function for identifying an event element's target container
            function getContainer(element)
            {
                do
                {
                    if(element.nodeType == 1 && element.getAttribute('aria-dropeffect'))
                    {
                        return element;
                    }
                }
                while(element = element.parentNode);

                return null;
            }



            //mousedown event to implement single selection
            document.addEventListener('mousedown', function(e)
            {
                //if the element is a draggable item
                if(e.target.getAttribute('draggable'))
                {
                    //clear dropeffect from the target containers
                    clearDropeffects();

                    //if the multiple selection modifier is not pressed
                    //and the item's grabbed state is currently false
                    if
                    (
                        !hasModifier(e)
                        &&
                        e.target.getAttribute('aria-grabbed') == 'false'
                    )
                    {
                        //clear all existing selections
                        clearSelections();

                        //then add this new selection
                        addSelection(e.target);
                    }
                }

                //else [if the element is anything else]
                //and the selection modifier is not pressed
                else if(!hasModifier(e))
                {
                    //clear dropeffect from the target containers
                    clearDropeffects();

                    //clear all existing selections
                    clearSelections();
                }

                //else [if the element is anything else and the modifier is pressed]
                else
                {
                    //clear dropeffect from the target containers
                    clearDropeffects();
                }

            }, false);

            //mouseup event to implement multiple selection
            document.addEventListener('mouseup', function(e)
            {
                //if the element is a draggable item
                //and the multipler selection modifier is pressed
                if(e.target.getAttribute('draggable') && hasModifier(e))
                {
                    //if the item's grabbed state is currently true
                    if(e.target.getAttribute('aria-grabbed') == 'true')
                    {
                        //unselect this item
                        removeSelection(e.target);

                        //if that was the only selected item
                        //then reset the owner container reference
                        if(!selections.items.length)
                        {
                            selections.owner = null;
                        }
                    }

                    //else [if the item's grabbed state is false]
                    else
                    {
                        //add this additional selection
                        addSelection(e.target);
                    }
                }

            }, false);

            //dragstart event to initiate mouse dragging
            document.addEventListener('dragstart', function(e)
            {
                //if the element's parent is not the owner, then block this event
                if(selections.owner != e.target.parentNode)
                {
                    e.preventDefault();
                    return;
                }

                //[else] if the multiple selection modifier is pressed
                //and the item's grabbed state is currently false
                if
                (
                    hasModifier(e)
                    &&
                    e.target.getAttribute('aria-grabbed') == 'false'
                )
                {
                    //add this additional selection
                    addSelection(e.target);
                }

                //we don't need the transfer data, but we have to define something
                //otherwise the drop action won't work at all in firefox
                //most browsers support the proper mime-type syntax, eg. \"text/plain\"
                //but we have to use this incorrect syntax for the benefit of IE10+
                e.dataTransfer.setData('text', '');

                //apply dropeffect to the target containers
                addDropeffects();

            }, false);



            //keydown event to implement selection and abort
            document.addEventListener('keydown', function(e)
            {
                //if the element is a grabbable item
                if(e.target.getAttribute('aria-grabbed'))
                {
                    //Space is the selection or unselection keystroke
                    if(e.keyCode == 32)
                    {
                        //if the multiple selection modifier is pressed
                        if(hasModifier(e))
                        {
                            //if the item's grabbed state is currently true
                            if(e.target.getAttribute('aria-grabbed') == 'true')
                            {
                                //if this is the only selected item, clear dropeffect
                                //from the target containers, which we must do first
                                //in case subsequent unselection sets owner to null
                                if(selections.items.length == 1)
                                {
                                    clearDropeffects();
                                }

                                //unselect this item
                                removeSelection(e.target);

                                //if we have any selections
                                //apply dropeffect to the target containers,
                                //in case earlier selections were made by mouse
                                if(selections.items.length)
                                {
                                    addDropeffects();
                                }

                                //if that was the only selected item
                                //then reset the owner container reference
                                if(!selections.items.length)
                                {
                                    selections.owner = null;
                                }
                            }

                            //else [if its grabbed state is currently false]
                            else
                            {
                                //add this additional selection
                                addSelection(e.target);

                                //apply dropeffect to the target containers
                                addDropeffects();
                            }
                        }

                        //else [if the multiple selection modifier is not pressed]
                        //and the item's grabbed state is currently false
                        else if(e.target.getAttribute('aria-grabbed') == 'false')
                        {
                            //clear dropeffect from the target containers
                            clearDropeffects();

                            //clear all existing selections
                            clearSelections();

                            //add this new selection
                            addSelection(e.target);

                            //apply dropeffect to the target containers
                            addDropeffects();
                        }

                        //else [if modifier is not pressed and grabbed is already true]
                        else
                        {
                            //apply dropeffect to the target containers
                            addDropeffects();
                        }

                        //then prevent default to avoid any conflict with native actions
                        e.preventDefault();
                    }

                    //Modifier + M is the end-of-selection keystroke
                    if(e.keyCode == 77 && hasModifier(e))
                    {
                        //if we have any selected items
                        if(selections.items.length)
                        {
                            //apply dropeffect to the target containers
                            //in case earlier selections were made by mouse
                            addDropeffects();

                            //if the owner container is the last one, focus the first one
                            if(selections.owner == targets[targets.length - 1])
                            {
                                targets[0].focus();
                            }

                            //else [if it's not the last one], find and focus the next one
                            else
                            {
                                for(var len = targets.length, i = 0; i < len; i ++)
                                {
                                    if(selections.owner == targets[i])
                                    {
                                        targets[i + 1].focus();
                                        break;
                                    }
                                }
                            }
                        }

                        //then prevent default to avoid any conflict with native actions
                        e.preventDefault();
                    }
                }

                //Escape is the abort keystroke (for any target element)
                if(e.keyCode == 27)
                {
                    //if we have any selected items
                    if(selections.items.length)
                    {
                        //clear dropeffect from the target containers
                        clearDropeffects();

                        //then set focus back on the last item that was selected, which is
                        //necessary because we've removed tabindex from the current focus
                        selections.items[selections.items.length - 1].focus();

                        //clear all existing selections
                        clearSelections();

                        //but don't prevent default so that native actions can still occur
                    }
                }

            }, false);



            //related variable is needed to maintain a reference to the
            //dragleave's relatedTarget, since it doesn't have e.relatedTarget
            var related = null;

            //dragenter event to set that variable
            document.addEventListener('dragenter', function(e)
            {
                related = e.target;

            }, false);

            //dragleave event to maintain target highlighting using that variable
            document.addEventListener('dragleave', function(e)
            {
                //get a drop target reference from the relatedTarget
                var droptarget = getContainer(related);

                //if the target is the owner then it's not a valid drop target
                if(droptarget == selections.owner)
                {
                    droptarget = null;
                }

                //if the drop target is different from the last stored reference
                //(or we have one of those references but not the other one)
                if(droptarget != selections.droptarget)
                {
                    //if we have a saved reference, clear its existing dragover class
                    if(selections.droptarget)
                    {
                        selections.droptarget.className =
                            selections.droptarget.className.replace(/ dragover/g, '');
                    }

                    //apply the dragover class to the new drop target reference
                    if(droptarget)
                    {
                        droptarget.className += ' dragover';
                    }

                    //then save that reference for next time
                    selections.droptarget = droptarget;
                }

            }, false);

            //dragover event to allow the drag by preventing its default
            document.addEventListener('dragover', function(e)
            {
                //if we have any selected items, allow them to be dragged
                if(selections.items.length)
                {
                    e.preventDefault();
                }

            }, false);



            //dragend event to implement items being validly dropped into targets,
            //or invalidly dropped elsewhere, and to clean-up the interface either way
            document.addEventListener('dragend', function(e)
            {
                //if we have a valid drop target reference
                //(which implies that we have some selected items)
                if(selections.droptarget)
                {
                    //append the selected items to the end of the target container
                    for(var len = selections.items.length, i = 0; i < len; i ++)
                    {
                        selections.droptarget.appendChild(selections.items[i]);
                    }

                    //prevent default to allow the action
                    e.preventDefault();
                }

                //if we have any selected items
                if(selections.items.length)
                {
                    //clear dropeffect from the target containers
                    clearDropeffects();

                    //if we have a valid drop target reference
                    if(selections.droptarget)
                    {
                        //reset the selections array
                        clearSelections();

                        //reset the target's dragover class
                        selections.droptarget.className =
                            selections.droptarget.className.replace(/ dragover/g, '');

                        //reset the target reference
                        selections.droptarget = null;
                    }
                }

            }, false);

        })();
    </script>
{% endblock %}", "@Livraison/Default/listeLivraison.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\LivraisonBundle\\Resources\\views\\Default\\listeLivraison.html.twig");
    }
}
