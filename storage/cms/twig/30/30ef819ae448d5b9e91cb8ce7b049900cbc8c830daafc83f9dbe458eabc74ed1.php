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

/* /home/vagrant/code/solodiesel/themes/solodiesel/partials/genericform/default.htm */
class __TwigTemplate_f15d9b655adcf6621f481f09f1b44711d9e227f4bd788b26155729f424d6c839 extends \Twig\Template
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
        $filters = array("escape" => 3, "_" => 14);
        $functions = array("form_token" => 5);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', '_'],
                ['form_token']
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
        echo "<section class=\"form\">
    <p>You can send us your questions, comments, wishes and suggestions with the use of the form below. Please, fill out the form bellow and click on the send button. We assure You that you will receive your answer no later than in 2 working days.</p>
    <form data-request=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 3, $this->source), "html", null, true);
        echo "::onFormSubmit\" data-request-validate>

        ";
        // line 5
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
    
        <div id=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 7, $this->source), "html", null, true);
        echo "_forms_flash\"></div>

        <!-- row 1 -->
        <div class=\"row\">

            <div class=\"col\">
                <div class=\"form-group row\">
                    <label for=\"name\" class=\"col-sm-12 control-label\">";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["NameSurname"]);
        echo "</label>
                    <div class=\"col-sm-12\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\"
                                   placeholder=\"";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["form..msg.namesurname"]);
        echo "\" value=\"\">                            
                        </div>
                        <div data-validate-for=\"name\" class=\"notify\"></div>                        
                    </div>                    
                </div>
            </div>
        </div>

        <!-- row 2 -->        
        <div class=\"row\">

            <div class=\"col\">
                <div class=\"form-group row clearfix\">
                    <label for=\"phone\" class=\"col-sm-12 control-label\">";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Phone"]);
        echo "</label>
                    <div class=\"col-sm-12\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" name=\"phone\" id=\"phone\"
                                placeholder=\"";
        // line 35
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["form.msg.phone"]);
        echo "\" value=\"\">
                        </div>
                        <div data-validate-for=\"phone\" class=\"notify\"></div>
                    </div>
                </div>
            </div>

        </div>
 
        <!-- row 3 -->        
        <div class=\"row\">

            <div class=\"col-12\">
                <div class=\"form-group row clearfix\">
                    <label for=\"company\" class=\"col-sm-12 control-label\">";
        // line 49
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Company"]);
        echo "</label>
                    <div class=\"col-sm-12\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" name=\"company\" id=\"company\"
                                    placeholder=\"";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["form.msg.company"]);
        echo "\" value=\"\">
                        </div>
                        <div data-validate-for=\"company\" class=\"notify\"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- row 4 -->        
        <div class=\"row\">

            <div class=\"col-12\">
                <div class=\"form-group row clearfix\">
                    <label for=\"email\" class=\"col-sm-12 control-label\">";
        // line 66
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["E-mail"]);
        echo "</label>
                    <div class=\"col-sm-12\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\"
                                    placeholder=\"";
        // line 70
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["form.msg.email"]);
        echo "\" value=\"\">
                        </div>
                        <div data-validate-for=\"email\" class=\"notify\"></div>
                    </div>
                </div>
            </div>

        </div>

        <!-- row 5 -->        
        <div class=\"row\">

            <div class=\"col-12\">
                <div class=\"form-group row clearfix\">
                    <label for=\"email\" class=\"col-sm-12 control-label\">";
        // line 84
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Message"]);
        echo "</label>
                    <div class=\"col-sm-12\">
                        <div class=\"input-group\">
                            <textarea rows=\"5\" class=\"form-control\" name=\"message\" id=\"message\"
                                placeholder=\"";
        // line 88
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["form.msg.message"]);
        echo "\"></textarea>
                        </div>
                        <div data-validate-for=\"message\" class=\"notify\"></div>
                    </div>
                </div>
            </div>

        </div>

        <!--div class=\"form-group\">
            ";
        // line 99
        echo "        </div-->
    
        <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">Submit</button>
    
    </form>

</section>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/solodiesel/themes/solodiesel/partials/genericform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 99,  187 => 88,  180 => 84,  163 => 70,  156 => 66,  140 => 53,  133 => 49,  116 => 35,  109 => 31,  93 => 18,  86 => 14,  76 => 7,  71 => 5,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"form\">
    <p>You can send us your questions, comments, wishes and suggestions with the use of the form below. Please, fill out the form bellow and click on the send button. We assure You that you will receive your answer no later than in 2 working days.</p>
    <form data-request=\"{{ __SELF__ }}::onFormSubmit\" data-request-validate>

        {{ form_token() }}
    
        <div id=\"{{ __SELF__ }}_forms_flash\"></div>

        <!-- row 1 -->
        <div class=\"row\">

            <div class=\"col\">
                <div class=\"form-group row\">
                    <label for=\"name\" class=\"col-sm-12 control-label\">{{ 'NameSurname'|_ }}</label>
                    <div class=\"col-sm-12\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\"
                                   placeholder=\"{{ 'form..msg.namesurname'|_ }}\" value=\"\">                            
                        </div>
                        <div data-validate-for=\"name\" class=\"notify\"></div>                        
                    </div>                    
                </div>
            </div>
        </div>

        <!-- row 2 -->        
        <div class=\"row\">

            <div class=\"col\">
                <div class=\"form-group row clearfix\">
                    <label for=\"phone\" class=\"col-sm-12 control-label\">{{ 'Phone'|_ }}</label>
                    <div class=\"col-sm-12\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" name=\"phone\" id=\"phone\"
                                placeholder=\"{{ 'form.msg.phone'|_ }}\" value=\"\">
                        </div>
                        <div data-validate-for=\"phone\" class=\"notify\"></div>
                    </div>
                </div>
            </div>

        </div>
 
        <!-- row 3 -->        
        <div class=\"row\">

            <div class=\"col-12\">
                <div class=\"form-group row clearfix\">
                    <label for=\"company\" class=\"col-sm-12 control-label\">{{ 'Company'|_ }}</label>
                    <div class=\"col-sm-12\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" name=\"company\" id=\"company\"
                                    placeholder=\"{{ 'form.msg.company'|_ }}\" value=\"\">
                        </div>
                        <div data-validate-for=\"company\" class=\"notify\"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- row 4 -->        
        <div class=\"row\">

            <div class=\"col-12\">
                <div class=\"form-group row clearfix\">
                    <label for=\"email\" class=\"col-sm-12 control-label\">{{ 'E-mail'|_ }}</label>
                    <div class=\"col-sm-12\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\"
                                    placeholder=\"{{ 'form.msg.email'|_ }}\" value=\"\">
                        </div>
                        <div data-validate-for=\"email\" class=\"notify\"></div>
                    </div>
                </div>
            </div>

        </div>

        <!-- row 5 -->        
        <div class=\"row\">

            <div class=\"col-12\">
                <div class=\"form-group row clearfix\">
                    <label for=\"email\" class=\"col-sm-12 control-label\">{{ 'Message'|_ }}</label>
                    <div class=\"col-sm-12\">
                        <div class=\"input-group\">
                            <textarea rows=\"5\" class=\"form-control\" name=\"message\" id=\"message\"
                                placeholder=\"{{ 'form.msg.message'|_ }}\"></textarea>
                        </div>
                        <div data-validate-for=\"message\" class=\"notify\"></div>
                    </div>
                </div>
            </div>

        </div>

        <!--div class=\"form-group\">
            {#% partial '@recaptcha' %#}
        </div-->
    
        <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">Submit</button>
    
    </form>

</section>", "/home/vagrant/code/solodiesel/themes/solodiesel/partials/genericform/default.htm", "");
    }
}
