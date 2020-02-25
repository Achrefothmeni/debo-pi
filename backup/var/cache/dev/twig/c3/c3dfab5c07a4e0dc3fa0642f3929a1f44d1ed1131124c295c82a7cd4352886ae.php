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

/* @Auth/Default/index.html.twig */
class __TwigTemplate_c58b6c04eed280851de87d0c6af3cf613452957b5ce288bd8c553538bdc80488 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Auth/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Auth/Default/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Debo - Login </title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--===============================================================================================-->
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/images/icons/favicon.ico"), "html", null, true);
        echo "\"/>
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/fonts/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css    "), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/animate/animate.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/animsition/css/animsition.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/select2/select2.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/css/util.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/css/main.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
</head>
<body>

<div class=\"limiter\">
    <div class=\"container-login100\" style=\"background-color: #fffaef\">
        <div class=\"wrap-login100\">

            <form class=\"login100-form validate-form\" action=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t\t\t\t<span class=\"login100-form-title p-b-34\">
\t\t\t\t\t\tAccount Login
\t\t\t\t\t</span>

                <div class=\"wrap-input100 rs1-wrap-input100 validate-input m-b-20\" data-validate=\"Type user name\">
                    <input id=\"first-name\" class=\"input100\" type=\"text\" name=\"username\" placeholder=\"User name\">
                    <span class=\"focus-input100\"></span>
                </div>
                <div class=\"wrap-input100 rs2-wrap-input100 validate-input m-b-20\" data-validate=\"Type password\">
                    <input class=\"input100\" type=\"password\" name=\"pass\" placeholder=\"Password\">
                    <span class=\"focus-input100\"></span>
                </div>

                <div class=\"container-login100-form-btn\">
                    <button class=\"login100-form-btn\">
                        Sign in
                    </button>
                </div>

                <div class=\"w-full text-center p-t-27 p-b-239\">
\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\tForgot
\t\t\t\t\t\t</span>

                    <a href=\"#\" class=\"txt2\">
                        User name / password?
                    </a>
                </div>

                <div class=\"w-full text-center\">
                    <a href=\"#\" class=\"txt3\">
                        Sign Up
                    </a>
                </div>
            </form>

            <div class=\"login100-more\" style=\"background-image: url('";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/images/bg-02.jpg"), "html", null, true);
        echo "');\"></div>
        </div>
    </div>
</div>



<div id=\"dropDownSelect1\"></div>

<!--===============================================================================================-->
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/animsition/js/animsition.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(\".selection-2\").select2({
        minimumResultsForSearch: 20,
        dropdownParent: \$('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/daterangepicker/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/countdowntime/countdowntime.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/js/main.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Auth/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 103,  198 => 101,  193 => 99,  189 => 98,  178 => 90,  173 => 88,  169 => 87,  164 => 85,  159 => 83,  146 => 73,  106 => 36,  94 => 27,  90 => 26,  85 => 24,  80 => 22,  75 => 20,  70 => 18,  65 => 16,  60 => 14,  55 => 12,  50 => 10,  45 => 8,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Debo - Login </title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--===============================================================================================-->
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('login/images/icons/favicon.ico') }}\"/>
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/vendor/bootstrap/css/bootstrap.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css    ') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/vendor/animate/animate.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/vendor/css-hamburgers/hamburgers.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/vendor/animsition/css/animsition.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/vendor/select2/select2.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/vendor/daterangepicker/daterangepicker.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/css/util.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/css/main.css') }}\">
    <!--===============================================================================================-->
</head>
<body>

<div class=\"limiter\">
    <div class=\"container-login100\" style=\"background-color: #fffaef\">
        <div class=\"wrap-login100\">

            <form class=\"login100-form validate-form\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
\t\t\t\t\t<span class=\"login100-form-title p-b-34\">
\t\t\t\t\t\tAccount Login
\t\t\t\t\t</span>

                <div class=\"wrap-input100 rs1-wrap-input100 validate-input m-b-20\" data-validate=\"Type user name\">
                    <input id=\"first-name\" class=\"input100\" type=\"text\" name=\"username\" placeholder=\"User name\">
                    <span class=\"focus-input100\"></span>
                </div>
                <div class=\"wrap-input100 rs2-wrap-input100 validate-input m-b-20\" data-validate=\"Type password\">
                    <input class=\"input100\" type=\"password\" name=\"pass\" placeholder=\"Password\">
                    <span class=\"focus-input100\"></span>
                </div>

                <div class=\"container-login100-form-btn\">
                    <button class=\"login100-form-btn\">
                        Sign in
                    </button>
                </div>

                <div class=\"w-full text-center p-t-27 p-b-239\">
\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\tForgot
\t\t\t\t\t\t</span>

                    <a href=\"#\" class=\"txt2\">
                        User name / password?
                    </a>
                </div>

                <div class=\"w-full text-center\">
                    <a href=\"#\" class=\"txt3\">
                        Sign Up
                    </a>
                </div>
            </form>

            <div class=\"login100-more\" style=\"background-image: url('{{asset('login/images/bg-02.jpg')}}');\"></div>
        </div>
    </div>
</div>



<div id=\"dropDownSelect1\"></div>

<!--===============================================================================================-->
<script src=\"{{ asset('login/vendor/jquery/jquery-3.2.1.min.js') }}\"></script>
<!--===============================================================================================-->
<script src=\"{{ asset('login/vendor/animsition/js/animsition.min.js') }}\"></script>
<!--===============================================================================================-->
<script src=\"{{ asset('login/vendor/bootstrap/js/popper.js') }}\"></script>
<script src=\"{{ asset('login/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
<!--===============================================================================================-->
<script src=\"{{ asset('login/vendor/select2/select2.min.js') }}\"></script>
<script>
    \$(\".selection-2\").select2({
        minimumResultsForSearch: 20,
        dropdownParent: \$('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script src=\"{{ asset('login/vendor/daterangepicker/moment.min.js') }}\"></script>
<script src=\"{{ asset('login/vendor/daterangepicker/daterangepicker.js') }}\"></script>
<!--===============================================================================================-->
<script src=\"{{ asset('login/vendor/countdowntime/countdowntime.js') }}\"></script>
<!--===============================================================================================-->
<script src=\"{{ asset('login/js/main.js') }}\"></script>

</body>
</html>", "@Auth/Default/index.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\AuthBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
