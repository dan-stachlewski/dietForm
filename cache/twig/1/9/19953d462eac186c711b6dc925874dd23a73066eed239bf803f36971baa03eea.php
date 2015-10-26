<?php

/* forms/bmi.post.twig */
class __TwigTemplate_e66b6c27c1159862f52c08e04533bb38a87cb93c30f679b7d1ee3bbad540d2d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("md_document.twig", "forms/bmi.post.twig", 2);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"jumbotron\">
        <div class=\"container\">
            <h3>Your Body Mass Index (BMI) is: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["bmi_value"]) ? $context["bmi_value"] : null), "html", null, true);
        echo "</h3>
            <h6>Thank you for subscribing to our newsletter using: ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo ". We have sent you an activation request.</h6>
            <p><a class=\"btn btn-primary btn-lg\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("bmi"), "html", null, true);
        echo "\" role=\"button\">Try Again? &raquo;</a></p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/bmi.post.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'md_document.twig' %}*/
/* {% block content %}*/
/*     <div class="jumbotron">*/
/*         <div class="container">*/
/*             <h3>Your Body Mass Index (BMI) is: {{ bmi_value }}</h3>*/
/*             <h6>Thank you for subscribing to our newsletter using: {{ email }}. We have sent you an activation request.</h6>*/
/*             <p><a class="btn btn-primary btn-lg" href="{{ path_for('bmi') }}" role="button">Try Again? &raquo;</a></p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
