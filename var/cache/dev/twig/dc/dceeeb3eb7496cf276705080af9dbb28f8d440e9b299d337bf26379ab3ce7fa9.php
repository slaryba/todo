<?php

/* base.html.twig */
class __TwigTemplate_551c2a089b13ddf4e0ac2282d0eb2712a2ea82e32b4a08ce8ba8a82a0817cbe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f37dd8b46bc6f3015fed8107073162245ac07cd2095d1fdcdad39f6e08871106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f37dd8b46bc6f3015fed8107073162245ac07cd2095d1fdcdad39f6e08871106->enter($__internal_f37dd8b46bc6f3015fed8107073162245ac07cd2095d1fdcdad39f6e08871106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f86c1256387453b79ef0ae0a6ad9798c9c23e4c45716dfa894edf53d04662f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86c1256387453b79ef0ae0a6ad9798c9c23e4c45716dfa894edf53d04662f19->enter($__internal_f86c1256387453b79ef0ae0a6ad9798c9c23e4c45716dfa894edf53d04662f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../../../favicon.ico\">

    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
    <!-- Custom styles for this template -->
    <link href=\"starter-template.css\" rel=\"stylesheet\">
    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

</head>

<body>

<nav class=\"navbar navbar-expand-md navbar-dark bg-dark \">
    <a class=\"navbar-brand\" href=\"/\">TodoList</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/todo/create\">Create</a>
            </li>


        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
    </div>
</nav>

<main role=\"main\" class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 52
            echo "                <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 55
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "        </div>

    </div>


</main><!-- /.container -->
";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
</body>
</html>
";
        
        $__internal_f37dd8b46bc6f3015fed8107073162245ac07cd2095d1fdcdad39f6e08871106->leave($__internal_f37dd8b46bc6f3015fed8107073162245ac07cd2095d1fdcdad39f6e08871106_prof);

        
        $__internal_f86c1256387453b79ef0ae0a6ad9798c9c23e4c45716dfa894edf53d04662f19->leave($__internal_f86c1256387453b79ef0ae0a6ad9798c9c23e4c45716dfa894edf53d04662f19_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3f6b6a0f51a3108b0390fc71c8dee94218f7fa5285b84da4f00106eed29e9a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f6b6a0f51a3108b0390fc71c8dee94218f7fa5285b84da4f00106eed29e9a7->enter($__internal_c3f6b6a0f51a3108b0390fc71c8dee94218f7fa5285b84da4f00106eed29e9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d774fb73b8d97ca806ffe6d5c78e91d5c3c3df78cd413f69f99f15fbf778bdc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d774fb73b8d97ca806ffe6d5c78e91d5c3c3df78cd413f69f99f15fbf778bdc9->enter($__internal_d774fb73b8d97ca806ffe6d5c78e91d5c3c3df78cd413f69f99f15fbf778bdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d774fb73b8d97ca806ffe6d5c78e91d5c3c3df78cd413f69f99f15fbf778bdc9->leave($__internal_d774fb73b8d97ca806ffe6d5c78e91d5c3c3df78cd413f69f99f15fbf778bdc9_prof);

        
        $__internal_c3f6b6a0f51a3108b0390fc71c8dee94218f7fa5285b84da4f00106eed29e9a7->leave($__internal_c3f6b6a0f51a3108b0390fc71c8dee94218f7fa5285b84da4f00106eed29e9a7_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f515ce417331f326c1368139d9d245c46c9ca898ec7edb7b8a44278dc5fd64e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f515ce417331f326c1368139d9d245c46c9ca898ec7edb7b8a44278dc5fd64e8->enter($__internal_f515ce417331f326c1368139d9d245c46c9ca898ec7edb7b8a44278dc5fd64e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8b6479e5516586b6e588675252b87241e368705b56087aede1778960ab0563d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6479e5516586b6e588675252b87241e368705b56087aede1778960ab0563d1->enter($__internal_8b6479e5516586b6e588675252b87241e368705b56087aede1778960ab0563d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8b6479e5516586b6e588675252b87241e368705b56087aede1778960ab0563d1->leave($__internal_8b6479e5516586b6e588675252b87241e368705b56087aede1778960ab0563d1_prof);

        
        $__internal_f515ce417331f326c1368139d9d245c46c9ca898ec7edb7b8a44278dc5fd64e8->leave($__internal_f515ce417331f326c1368139d9d245c46c9ca898ec7edb7b8a44278dc5fd64e8_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bebb3c5f64aca794c9a7edbd19aae930aed218f050fe1bc64ef5e3fe84b08ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bebb3c5f64aca794c9a7edbd19aae930aed218f050fe1bc64ef5e3fe84b08ae->enter($__internal_1bebb3c5f64aca794c9a7edbd19aae930aed218f050fe1bc64ef5e3fe84b08ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34459ddb48e2e1c0c56e3080827fbe6798d30c2f91cc43f91918807ce548e4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34459ddb48e2e1c0c56e3080827fbe6798d30c2f91cc43f91918807ce548e4b0->enter($__internal_34459ddb48e2e1c0c56e3080827fbe6798d30c2f91cc43f91918807ce548e4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_34459ddb48e2e1c0c56e3080827fbe6798d30c2f91cc43f91918807ce548e4b0->leave($__internal_34459ddb48e2e1c0c56e3080827fbe6798d30c2f91cc43f91918807ce548e4b0_prof);

        
        $__internal_1bebb3c5f64aca794c9a7edbd19aae930aed218f050fe1bc64ef5e3fe84b08ae->leave($__internal_1bebb3c5f64aca794c9a7edbd19aae930aed218f050fe1bc64ef5e3fe84b08ae_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cfe78e2d92873f81652963f5768491b388e9bcf05111f0b361c21676ebc62fd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe78e2d92873f81652963f5768491b388e9bcf05111f0b361c21676ebc62fd6->enter($__internal_cfe78e2d92873f81652963f5768491b388e9bcf05111f0b361c21676ebc62fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_42d80306d5967c1181b049ddb7760e05b20074e00f988ba7b8484788519457f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d80306d5967c1181b049ddb7760e05b20074e00f988ba7b8484788519457f7->enter($__internal_42d80306d5967c1181b049ddb7760e05b20074e00f988ba7b8484788519457f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_42d80306d5967c1181b049ddb7760e05b20074e00f988ba7b8484788519457f7->leave($__internal_42d80306d5967c1181b049ddb7760e05b20074e00f988ba7b8484788519457f7_prof);

        
        $__internal_cfe78e2d92873f81652963f5768491b388e9bcf05111f0b361c21676ebc62fd6->leave($__internal_cfe78e2d92873f81652963f5768491b388e9bcf05111f0b361c21676ebc62fd6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 64,  181 => 57,  164 => 17,  146 => 10,  129 => 65,  127 => 64,  119 => 58,  116 => 57,  107 => 55,  102 => 54,  93 => 52,  89 => 51,  52 => 18,  50 => 17,  40 => 10,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../../../favicon.ico\">

    <title>{% block title %}Welcome!{% endblock %}</title>

    <!-- Bootstrap core CSS -->

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
    <!-- Custom styles for this template -->
    <link href=\"starter-template.css\" rel=\"stylesheet\">
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

</head>

<body>

<nav class=\"navbar navbar-expand-md navbar-dark bg-dark \">
    <a class=\"navbar-brand\" href=\"/\">TodoList</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/todo/create\">Create</a>
            </li>


        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
    </div>
</nav>

<main role=\"main\" class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            {% for flash_message in app.session.flashbag.get('notice') %}
                <div class=\"alert alert-success\">{{ flash_message }}</div>
            {% endfor %}
            {% for flash_message in app.session.flashbag.get('error') %}
                <div class=\"alert alert-danger\">{{ flash_message }}</div>
            {% endfor %}
            {% block body %}{% endblock %}
        </div>

    </div>


</main><!-- /.container -->
{% block javascripts %}{% endblock %}

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\todolist\\app\\Resources\\views\\base.html.twig");
    }
}
