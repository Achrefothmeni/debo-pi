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

/* @Flux/Default/transaction.xlsx.twig */
class __TwigTemplate_640d510502011503580dfd30c7d71b0db852e96cbd7145fb31f9429085191b10 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Flux/Default/transaction.xlsx.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Flux/Default/transaction.xlsx.twig"));

        // line 1
        $documentProperties = [];
        $context['phpExcel'] = new MewesK\TwigExcelBundle\Wrapper\PhpExcelWrapper($context, $this->env);
        $context['phpExcel']->startDocument($documentProperties);
        unset($documentProperties);
        // line 2
        $sheetIndex = "Worksheet";
        $sheetProperties = [];
        $context['phpExcel']->startSheet($sheetIndex, $sheetProperties);
        unset($sheetIndex, $sheetProperties);
        // line 3
        $context['phpExcel']->setRowIndex(null);
        $context['phpExcel']->startRow($context['phpExcel']->getRowIndex());
        $context['phpExcel']->setRowIndex(0);
        // line 4
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo " id ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = [];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 5
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo " Nature ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = [];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 6
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo " Somme ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = [];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 7
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo " Date de transaction ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = [];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 3
        $context['phpExcel']->endRow();
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transactions"] ?? $this->getContext($context, "transactions")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 10
            $context['phpExcel']->setRowIndex(null);
            $context['phpExcel']->startRow($context['phpExcel']->getRowIndex());
            $context['phpExcel']->setRowIndex(0);
            // line 11
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", []), "html", null, true);
            $cellValue = trim(ob_get_clean());
            $cellProperties = [];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 12
            if (($this->getAttribute($context["t"], "nature", []) == "C")) {
                // line 13
                $context['phpExcel']->setCellIndex(null);
                ob_start();
                echo "CREDIT";
                $cellValue = trim(ob_get_clean());
                $cellProperties = [];
                $context['phpExcel']->startCell($cellValue, $cellProperties);
                unset($cellIndex, $cellValue, $cellProperties);
                $context['phpExcel']->endCell();
            } else {
                // line 15
                $context['phpExcel']->setCellIndex(null);
                ob_start();
                echo "DEBIT";
                $cellValue = trim(ob_get_clean());
                $cellProperties = [];
                $context['phpExcel']->startCell($cellValue, $cellProperties);
                unset($cellIndex, $cellValue, $cellProperties);
                $context['phpExcel']->endCell();
            }
            // line 17
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "somme", []), "html", null, true);
            $cellValue = trim(ob_get_clean());
            $cellProperties = [];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 18
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["t"], "date", []), "Y-m-d"), "html", null, true);
            $cellValue = trim(ob_get_clean());
            $cellProperties = [];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 10
            $context['phpExcel']->endRow();
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2
        $context['phpExcel']->endSheet();
        // line 1
        $context['phpExcel']->endDocument(true, null);
        unset($context['phpExcel']);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Flux/Default/transaction.xlsx.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 1,  151 => 2,  145 => 10,  136 => 18,  127 => 17,  117 => 15,  107 => 13,  105 => 12,  96 => 11,  92 => 10,  88 => 9,  86 => 3,  77 => 7,  68 => 6,  59 => 5,  50 => 4,  46 => 3,  41 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% xlsdocument %}
    {% xlssheet 'Worksheet' %}
        {% xlsrow %}
            {% xlscell%} id {% endxlscell %}
            {% xlscell%} Nature {% endxlscell %}
            {% xlscell%} Somme {% endxlscell %}
            {% xlscell%} Date de transaction {% endxlscell %}
        {% endxlsrow %}
        {% for t in transactions %}
            {% xlsrow %}
                {% xlscell %}{{ t.id }}{% endxlscell %}
                {% if t.nature == 'C' %}
                {% xlscell %}CREDIT{% endxlscell %}
                    {% else %}
                        {% xlscell %}DEBIT{% endxlscell %}
                {% endif %}
                {% xlscell %}{{ t.somme }}{% endxlscell %}
                {% xlscell %}{{ t.date | date('Y-m-d') }}{% endxlscell %}
            {% endxlsrow %}
        {% endfor %}
    {% endxlssheet %}
{% endxlsdocument %}", "@Flux/Default/transaction.xlsx.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\FluxBundle\\Resources\\views\\Default\\transaction.xlsx.twig");
    }
}
