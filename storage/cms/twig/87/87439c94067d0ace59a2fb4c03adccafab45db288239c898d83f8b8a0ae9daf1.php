<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /home/vagrant/code/solodiesel/themes/solodiesel/partials/footer.htm */
class __TwigTemplate_b58c03d8b2bfdda351cd7e2adb4e0a88bc8e83e5886f78f46e8d151a314a0ad6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array("escape" => 5, "date" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-6 text-center text-md-left\"><a href=\"/\"><img class=\"logo lazyload\" src=\"/themes/solodiesel/assets/images/solodiesel-logo-a.png\" data-src=\"/themes/solodiesel/assets/images/solodiesel-logo-a.png\" alt=\"Solodiesel\"></a></div>
            <div class=\"col-12 col-md-6 text-center text-md-right\">Copyright &copy; ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ", Alara d.o.o.</div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/solodiesel/themes/solodiesel/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-6 text-center text-md-left\"><a href=\"/\"><img class=\"logo lazyload\" src=\"/themes/solodiesel/assets/images/solodiesel-logo-a.png\" data-src=\"/themes/solodiesel/assets/images/solodiesel-logo-a.png\" alt=\"Solodiesel\"></a></div>
            <div class=\"col-12 col-md-6 text-center text-md-right\">Copyright &copy; {{ \"now\"|date(\"Y\") }}, Alara d.o.o.</div>
        </div>
    </div>
</footer>", "/home/vagrant/code/solodiesel/themes/solodiesel/partials/footer.htm", "");
    }
}
