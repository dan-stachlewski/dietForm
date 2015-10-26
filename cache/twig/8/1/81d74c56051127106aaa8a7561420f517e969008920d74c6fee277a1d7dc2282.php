<?php

/* layout.twig */
class __TwigTemplate_98641cfc8f13d2ac1a67c580010b2da8d7be87490a181ef8f3afeeaf700b5e67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'navbar' => array($this, 'block_navbar'),
            'topnavbar' => array($this, 'block_topnavbar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 27
        echo "</head>

<body>


<div id=\"wrapper\">

    <!-- Sidebar -->
    <div id=\"sidebar-wrapper\">
        ";
        // line 36
        $this->displayBlock('navbar', $context, $blocks);
        // line 39
        echo "    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid\">

            <nav class=\"navbar navbar-default  \">
                <div class=\"navbar-header\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            ";
        // line 50
        $this->displayBlock('topnavbar', $context, $blocks);
        // line 53
        echo "                        </div>
                    </div>
                </div>
            </nav>

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/js/jquery.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>

<!-- Menu Toggle Script 
JQuery selector that moves the menu off the canvas -->
<script>
    \$(\"#menu-toggle\").click(function (e) {
        e.preventDefault();
        \$(\"#wrapper\").toggleClass(\"toggled\");
    });
</script>

</body>

</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Dieting with Slim</title>

        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/css/bootstrap.min.css\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/css/simple-sidebar.css\" rel=\"stylesheet\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    ";
    }

    // line 36
    public function block_navbar($context, array $blocks = array())
    {
        // line 37
        echo "            ";
        // line 38
        echo "        ";
    }

    // line 50
    public function block_topnavbar($context, array $blocks = array())
    {
        // line 51
        echo "                                <a href=\"#menu-toggle\" class=\"btn btn-default   navbar-text\" id=\"menu-toggle\">Toggle Menu</a>
                           ";
    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
        // line 61
        echo "                        ";
        // line 62
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 62,  161 => 61,  158 => 60,  153 => 51,  150 => 50,  146 => 38,  144 => 37,  141 => 36,  128 => 18,  122 => 15,  111 => 6,  108 => 5,  89 => 77,  83 => 74,  70 => 63,  68 => 60,  59 => 53,  57 => 50,  44 => 39,  42 => 36,  31 => 27,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/*     {% block head %}*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/* */
/*         <title>Dieting with Slim</title>*/
/* */
/*         <!-- Bootstrap Core CSS -->*/
/*         <link href="{{ base_url() }}/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*         <!-- Custom CSS -->*/
/*         <link href="{{ base_url() }}/css/simple-sidebar.css" rel="stylesheet">*/
/* */
/*         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/*     {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/* */
/* */
/* <div id="wrapper">*/
/* */
/*     <!-- Sidebar -->*/
/*     <div id="sidebar-wrapper">*/
/*         {% block navbar %}*/
/*             {# Left side menu #}*/
/*         {% endblock %}*/
/*     </div>*/
/*     <!-- /#sidebar-wrapper -->*/
/* */
/*     <!-- Page Content -->*/
/*     <div id="page-content-wrapper">*/
/*         <div class="container-fluid">*/
/* */
/*             <nav class="navbar navbar-default  ">*/
/*                 <div class="navbar-header">*/
/*                     <div class="container-fluid">*/
/*                         <div class="row">*/
/*                             {% block topnavbar %}*/
/*                                 <a href="#menu-toggle" class="btn btn-default   navbar-text" id="menu-toggle">Toggle Menu</a>*/
/*                            {% endblock %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/* */
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     {% block content %}*/
/*                         {# Main Page content #}*/
/*                     {% endblock %}*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /#page-content-wrapper -->*/
/* */
/* </div>*/
/* <!-- /#wrapper -->*/
/* */
/* <!-- jQuery -->*/
/* <script src="{{ base_url() }}/js/jquery.js"></script>*/
/* */
/* <!-- Bootstrap Core JavaScript -->*/
/* <script src="{{ base_url() }}/js/bootstrap.min.js"></script>*/
/* */
/* <!-- Menu Toggle Script */
/* JQuery selector that moves the menu off the canvas -->*/
/* <script>*/
/*     $("#menu-toggle").click(function (e) {*/
/*         e.preventDefault();*/
/*         $("#wrapper").toggleClass("toggled");*/
/*     });*/
/* </script>*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
