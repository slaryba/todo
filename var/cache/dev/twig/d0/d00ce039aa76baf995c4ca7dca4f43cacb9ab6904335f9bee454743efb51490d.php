<?php

/* todo/index.html.twig */
class __TwigTemplate_cfbe1d13030c3db08f47b675dbe19a34ce0c79e888da587aea3c6d1ef56ea804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/index.html.twig", 1);
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
        $__internal_53054ab6c7ec7156544ffbbb5bd903a1d162b104757a0c5547592ea5ce8e82d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53054ab6c7ec7156544ffbbb5bd903a1d162b104757a0c5547592ea5ce8e82d3->enter($__internal_53054ab6c7ec7156544ffbbb5bd903a1d162b104757a0c5547592ea5ce8e82d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/index.html.twig"));

        $__internal_0e03de83bb680bf80f7d6b9b9642d090a0e8c2f7fb0ff9c1d50cf2a0bb634c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e03de83bb680bf80f7d6b9b9642d090a0e8c2f7fb0ff9c1d50cf2a0bb634c1d->enter($__internal_0e03de83bb680bf80f7d6b9b9642d090a0e8c2f7fb0ff9c1d50cf2a0bb634c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53054ab6c7ec7156544ffbbb5bd903a1d162b104757a0c5547592ea5ce8e82d3->leave($__internal_53054ab6c7ec7156544ffbbb5bd903a1d162b104757a0c5547592ea5ce8e82d3_prof);

        
        $__internal_0e03de83bb680bf80f7d6b9b9642d090a0e8c2f7fb0ff9c1d50cf2a0bb634c1d->leave($__internal_0e03de83bb680bf80f7d6b9b9642d090a0e8c2f7fb0ff9c1d50cf2a0bb634c1d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c83c88749414efdd5b752c7ddc3113a0308553ae59f3e80fed1700d9f6812fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c83c88749414efdd5b752c7ddc3113a0308553ae59f3e80fed1700d9f6812fe->enter($__internal_3c83c88749414efdd5b752c7ddc3113a0308553ae59f3e80fed1700d9f6812fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f55c8934cb2b2fd0f6134a37039a5aeb9ef331d3144e764e09404708ca38ed54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f55c8934cb2b2fd0f6134a37039a5aeb9ef331d3144e764e09404708ca38ed54->enter($__internal_f55c8934cb2b2fd0f6134a37039a5aeb9ef331d3144e764e09404708ca38ed54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h2 class=\"page-header\">Latest Todos</h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Todo</th>
            <th scope=\"col\">Due Date</th>
            <th scope=\"col\"></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["todos"] ?? $this->getContext($context, "todos")));
        foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
            // line 15
            echo "        <tr>
            <th scope=\"row\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "</th>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["todo"], "dueDate", array()), "d m Y"), "html", null, true);
            echo "</td>
            <td><a href=\"/todo/details/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">View</a>
                <a href=\"/todo/edit/";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-warning\">Edit</a>
                <a href=\"/todo/delete/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a> </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>
    </table>
";
        
        $__internal_f55c8934cb2b2fd0f6134a37039a5aeb9ef331d3144e764e09404708ca38ed54->leave($__internal_f55c8934cb2b2fd0f6134a37039a5aeb9ef331d3144e764e09404708ca38ed54_prof);

        
        $__internal_3c83c88749414efdd5b752c7ddc3113a0308553ae59f3e80fed1700d9f6812fe->leave($__internal_3c83c88749414efdd5b752c7ddc3113a0308553ae59f3e80fed1700d9f6812fe_prof);

    }

    public function getTemplateName()
    {
        return "todo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 24,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  66 => 15,  62 => 14,  49 => 3,  40 => 2,  11 => 1,);
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
    <h2 class=\"page-header\">Latest Todos</h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Todo</th>
            <th scope=\"col\">Due Date</th>
            <th scope=\"col\"></th>
        </tr>
        </thead>
        <tbody>
        {% for todo in todos %}
        <tr>
            <th scope=\"row\">{{ todo.id }}</th>
            <td>{{ todo.name }}</td>
            <td>{{ todo.dueDate|date('d m Y') }}</td>
            <td><a href=\"/todo/details/{{ todo.id }}\" class=\"btn btn-success\">View</a>
                <a href=\"/todo/edit/{{ todo.id }}\" class=\"btn btn-warning\">Edit</a>
                <a href=\"/todo/delete/{{ todo.id }}\" class=\"btn btn-danger\">Delete</a> </td>
        </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "todo/index.html.twig", "C:\\xampp\\htdocs\\todolist\\app\\Resources\\views\\todo\\index.html.twig");
    }
}
