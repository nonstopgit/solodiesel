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

/* /home/vagrant/code/solodiesel/themes/solodiesel/pages/contact.htm */
class __TwigTemplate_2480c75ee92c53b6dbcb767aedba2a3ca573d5944ca27b5bbdf9a8bf9f03a66c extends \Twig\Template
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
        $tags = array("component" => 23);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                [],
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
        echo "<div class=\"row\">
\t<div class=\"col-12 col-lg-6\">

\t\t<p>
\t\t\t<br>
\t\t</p>

\t\t<h2>Alara d.o.o.</h2>Seidlova cesta 11
\t\t<br>8000 Novo mesto
\t\t<br>Slovenia
\t\t<br>
\t\t<br>Phone: +386 (0)7 39 34 456
\t\t<br>
\t\t<br>Fax: +386 (0)7 39 34 460
\t\t<br>
\t\t<br>E-mail: <a href=\"mailto:info@solodiesel.eu\">info@solodiesel.eu</a>

\t\t<p>
\t\t\t<br>
\t\t</p>
\t</div>
\t<div class=\"col-12 col-lg-6\">
\t\t";
        // line 23
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("genericForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 24
        echo "\t</div></div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/solodiesel/themes/solodiesel/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 24,  86 => 23,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
\t<div class=\"col-12 col-lg-6\">

\t\t<p>
\t\t\t<br>
\t\t</p>

\t\t<h2>Alara d.o.o.</h2>Seidlova cesta 11
\t\t<br>8000 Novo mesto
\t\t<br>Slovenia
\t\t<br>
\t\t<br>Phone: +386 (0)7 39 34 456
\t\t<br>
\t\t<br>Fax: +386 (0)7 39 34 460
\t\t<br>
\t\t<br>E-mail: <a href=\"mailto:info@solodiesel.eu\">info@solodiesel.eu</a>

\t\t<p>
\t\t\t<br>
\t\t</p>
\t</div>
\t<div class=\"col-12 col-lg-6\">
\t\t{% component 'genericForm' %}
\t</div></div>", "/home/vagrant/code/solodiesel/themes/solodiesel/pages/contact.htm", "");
    }
}
