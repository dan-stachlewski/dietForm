<?php

/* forms/bmi.twig */
class __TwigTemplate_81722752b2fdcf8a403f0bc5b4f60b1a1e464e95f504bae7783c7001078da976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("md_document.twig", "forms/bmi.twig", 3);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "md_document.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    
    <h1>Calculate your BMI</h1>
    
    <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("bmi"), "html", null, true);
        echo "\" method=\"POST\">
        
        ";
        // line 12
        echo "        <div class=\"form-group ";
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "weight", array())) {
            echo "\"has-error";
        }
        echo "\">
             <label class=\"control-label\" for=\"weight\">What is your weight(kg)?</label>
            <input type=\"text\" class=\"form-control\" name=\"weight\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bmi"]) ? $context["bmi"] : null), "weight", array()), "html", null, true);
        echo "\" />
            ";
        // line 15
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "weight", array())) {
            echo "<span class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "weight", array()), 0, array()), "html", null, true);
            echo "</span>";
        }
        // line 16
        echo "        </div>

        ";
        // line 19
        echo "        <div class=\"form-group ";
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "height", array())) {
            echo "\"has-error";
        }
        echo "\">
             <label class=\"control-label\" for=\"height\">What is your height(m)?</label>
            <input type=\"text\" class=\"form-control\" name=\"height\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bmi"]) ? $context["bmi"] : null), "height", array()), "html", null, true);
        echo "\" />
            ";
        // line 22
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "height", array())) {
            echo "<span class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "height", array()), 0, array()), "html", null, true);
            echo "</span>";
        }
        // line 23
        echo "        </div>

        ";
        // line 26
        echo "        <div class=\"form-group ";
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "emial", array())) {
            echo "\"has-error";
        }
        echo "\">
             <label class=\"control-label\" for=\"emial\">What is your email address?</label>
            <input type=\"text\" class=\"form-control\" name=\"email\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bmi"]) ? $context["bmi"] : null), "email", array()), "html", null, true);
        echo "\" />
            ";
        // line 29
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "email", array())) {
            echo "<span class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "email", array()), 0, array()), "html", null, true);
            echo "</span>";
        }
        // line 30
        echo "        </div>
        
        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        <a class=\"btn btn-default\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("docs-home"), "html", null, true);
        echo "\">Cancel</a>

    </form>
        
   ";
    }

    public function getTemplateName()
    {
        return "forms/bmi.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 33,  103 => 30,  97 => 29,  93 => 28,  85 => 26,  81 => 23,  75 => 22,  71 => 21,  63 => 19,  59 => 16,  53 => 15,  49 => 14,  41 => 12,  36 => 9,  31 => 6,  28 => 5,  11 => 3,);
    }
}
/* {# BMI Form TWIG TEMPLATE #}*/
/* */
/* {% extends 'md_document.twig' %}*/
/* */
/* {% block content %}*/
/*     */
/*     <h1>Calculate your BMI</h1>*/
/*     */
/*     <form action="{{ path_for('bmi') }}" method="POST">*/
/*         */
/*         {# WEIGHT text-box #}*/
/*         <div class="form-group {% if errors.weight %}"has-error{% endif %}">*/
/*              <label class="control-label" for="weight">What is your weight(kg)?</label>*/
/*             <input type="text" class="form-control" name="weight" value="{{ bmi.weight }}" />*/
/*             {% if errors.weight %}<span class="help-block">{{ errors.weight.0 }}</span>{% endif %}*/
/*         </div>*/
/* */
/*         {# WEIGHT text-box #}*/
/*         <div class="form-group {% if errors.height %}"has-error{% endif %}">*/
/*              <label class="control-label" for="height">What is your height(m)?</label>*/
/*             <input type="text" class="form-control" name="height" value="{{ bmi.height }}" />*/
/*             {% if errors.height %}<span class="help-block">{{ errors.height.0 }}</span>{% endif %}*/
/*         </div>*/
/* */
/*         {# EMAIL text-box #}*/
/*         <div class="form-group {% if errors.emial %}"has-error{% endif %}">*/
/*              <label class="control-label" for="emial">What is your email address?</label>*/
/*             <input type="text" class="form-control" name="email" value="{{ bmi.email }}" />*/
/*             {% if errors.email %}<span class="help-block">{{ errors.email.0 }}</span>{% endif %}*/
/*         </div>*/
/*         */
/*         <button type="submit" class="btn btn-primary">Submit</button>*/
/*         <a class="btn btn-default" href="{{ path_for('docs-home') }}">Cancel</a>*/
/* */
/*     </form>*/
/*         */
/*    {% endblock %}*/
