<?php

/* todo/details.html.twig */
class __TwigTemplate_f0e07e661a5be78357ebda43fde702b503edeefab6d9b64c7d3b0b9da6320613 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/details.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fba3fc5292f0980b593fdf7438f36de64ec5dd614053dc7eb7b9880c723d8bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fba3fc5292f0980b593fdf7438f36de64ec5dd614053dc7eb7b9880c723d8bf->enter($__internal_9fba3fc5292f0980b593fdf7438f36de64ec5dd614053dc7eb7b9880c723d8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/details.html.twig"));

        $__internal_3a962b6edaf73fdb59fb6d6d0a985b9dc9ca9d3b19fde3538dd05d69b1a6c285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a962b6edaf73fdb59fb6d6d0a985b9dc9ca9d3b19fde3538dd05d69b1a6c285->enter($__internal_3a962b6edaf73fdb59fb6d6d0a985b9dc9ca9d3b19fde3538dd05d69b1a6c285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fba3fc5292f0980b593fdf7438f36de64ec5dd614053dc7eb7b9880c723d8bf->leave($__internal_9fba3fc5292f0980b593fdf7438f36de64ec5dd614053dc7eb7b9880c723d8bf_prof);

        
        $__internal_3a962b6edaf73fdb59fb6d6d0a985b9dc9ca9d3b19fde3538dd05d69b1a6c285->leave($__internal_3a962b6edaf73fdb59fb6d6d0a985b9dc9ca9d3b19fde3538dd05d69b1a6c285_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ac8e420059f66d3dab6ad38b90a7b59a95bee39efe235ae244643c9e901aa3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac8e420059f66d3dab6ad38b90a7b59a95bee39efe235ae244643c9e901aa3c->enter($__internal_7ac8e420059f66d3dab6ad38b90a7b59a95bee39efe235ae244643c9e901aa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0ccaf16d324a872a139e33da092ec257b3c6343220a9a5928a023a2b9380c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ccaf16d324a872a139e33da092ec257b3c6343220a9a5928a023a2b9380c49->enter($__internal_f0ccaf16d324a872a139e33da092ec257b3c6343220a9a5928a023a2b9380c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <a class=\"btn btn-default\" href=\"/\">Back to todos</a>
    <hr>
    <h2 class=\"pager-header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["todo"] ?? $this->getContext($context, "todo")), "name", array()), "html", null, true);
        echo "</h2>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["todo"] ?? $this->getContext($context, "todo")), "category", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Priority: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["todo"] ?? $this->getContext($context, "todo")), "priority", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Due: ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["todo"] ?? $this->getContext($context, "todo")), "dueDate", array()), "F j, Y, g:i:z"), "html", null, true);
        echo "</li>
    </ul>
    <p>
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["todo"] ?? $this->getContext($context, "todo")), "description", array()), "html", null, true);
        echo "
    </p>
";
        
        $__internal_f0ccaf16d324a872a139e33da092ec257b3c6343220a9a5928a023a2b9380c49->leave($__internal_f0ccaf16d324a872a139e33da092ec257b3c6343220a9a5928a023a2b9380c49_prof);

        
        $__internal_7ac8e420059f66d3dab6ad38b90a7b59a95bee39efe235ae244643c9e901aa3c->leave($__internal_7ac8e420059f66d3dab6ad38b90a7b59a95bee39efe235ae244643c9e901aa3c_prof);

    }

    public function getTemplateName()
    {
        return "todo/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  66 => 9,  62 => 8,  58 => 7,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%    extends 'base.html.twig' %}
{% block body %}
    <a class=\"btn btn-default\" href=\"/\">Back to todos</a>
    <hr>
    <h2 class=\"pager-header\">{{todo.name}}</h2>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category: {{ todo.category }}</li>
        <li class=\"list-group-item\">Priority: {{ todo.priority }}</li>
        <li class=\"list-group-item\">Due: {{ todo.dueDate | date('F j, Y, g:i:z') }}</li>
    </ul>
    <p>
        {{ todo.description }}
    </p>
{% endblock %}
", "todo/details.html.twig", "C:\\xampp\\htdocs\\todolist\\app\\Resources\\views\\todo\\details.html.twig");
    }
}
