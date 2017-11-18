<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8ece518a7d47cbec3cd793902ac2d1780625c2e915ea685331c4e93ae6c98d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6a0379df4fb503e297ee624748da48a323c7e265d3e4b56411390b38dbddc48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a0379df4fb503e297ee624748da48a323c7e265d3e4b56411390b38dbddc48->enter($__internal_c6a0379df4fb503e297ee624748da48a323c7e265d3e4b56411390b38dbddc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bd0200843a2e016652ef7e22bcef2324cc2c76dc97a9b22f204bb3d514107b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0200843a2e016652ef7e22bcef2324cc2c76dc97a9b22f204bb3d514107b8f->enter($__internal_bd0200843a2e016652ef7e22bcef2324cc2c76dc97a9b22f204bb3d514107b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6a0379df4fb503e297ee624748da48a323c7e265d3e4b56411390b38dbddc48->leave($__internal_c6a0379df4fb503e297ee624748da48a323c7e265d3e4b56411390b38dbddc48_prof);

        
        $__internal_bd0200843a2e016652ef7e22bcef2324cc2c76dc97a9b22f204bb3d514107b8f->leave($__internal_bd0200843a2e016652ef7e22bcef2324cc2c76dc97a9b22f204bb3d514107b8f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_575217fe44ab37fccb9d8770cd07bab78385278660cab6a193a1e8039d7d5438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_575217fe44ab37fccb9d8770cd07bab78385278660cab6a193a1e8039d7d5438->enter($__internal_575217fe44ab37fccb9d8770cd07bab78385278660cab6a193a1e8039d7d5438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8c8b6b670bc51a56e1c786c618c3e580d7b01ec011fff383cf59da9e14ecb6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8b6b670bc51a56e1c786c618c3e580d7b01ec011fff383cf59da9e14ecb6ce->enter($__internal_8c8b6b670bc51a56e1c786c618c3e580d7b01ec011fff383cf59da9e14ecb6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8c8b6b670bc51a56e1c786c618c3e580d7b01ec011fff383cf59da9e14ecb6ce->leave($__internal_8c8b6b670bc51a56e1c786c618c3e580d7b01ec011fff383cf59da9e14ecb6ce_prof);

        
        $__internal_575217fe44ab37fccb9d8770cd07bab78385278660cab6a193a1e8039d7d5438->leave($__internal_575217fe44ab37fccb9d8770cd07bab78385278660cab6a193a1e8039d7d5438_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c352d13cb0c2374bf1df617cd6ee1a2c3210b16db1b91ad220a9ab5d31ede6df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c352d13cb0c2374bf1df617cd6ee1a2c3210b16db1b91ad220a9ab5d31ede6df->enter($__internal_c352d13cb0c2374bf1df617cd6ee1a2c3210b16db1b91ad220a9ab5d31ede6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b9328ebc551e3c2ca7b06728a4088f09eddf1fa5adff9e9c715c2abe02c7f02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9328ebc551e3c2ca7b06728a4088f09eddf1fa5adff9e9c715c2abe02c7f02c->enter($__internal_b9328ebc551e3c2ca7b06728a4088f09eddf1fa5adff9e9c715c2abe02c7f02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b9328ebc551e3c2ca7b06728a4088f09eddf1fa5adff9e9c715c2abe02c7f02c->leave($__internal_b9328ebc551e3c2ca7b06728a4088f09eddf1fa5adff9e9c715c2abe02c7f02c_prof);

        
        $__internal_c352d13cb0c2374bf1df617cd6ee1a2c3210b16db1b91ad220a9ab5d31ede6df->leave($__internal_c352d13cb0c2374bf1df617cd6ee1a2c3210b16db1b91ad220a9ab5d31ede6df_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c328aee5486dd4884ab27936f73c006abe4443b718d821011f9faf6af53fca9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c328aee5486dd4884ab27936f73c006abe4443b718d821011f9faf6af53fca9d->enter($__internal_c328aee5486dd4884ab27936f73c006abe4443b718d821011f9faf6af53fca9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ef824fed606a978f81d748b43ddba4575b4e80081e31790bb3e6b4fbecf823a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef824fed606a978f81d748b43ddba4575b4e80081e31790bb3e6b4fbecf823a4->enter($__internal_ef824fed606a978f81d748b43ddba4575b4e80081e31790bb3e6b4fbecf823a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ef824fed606a978f81d748b43ddba4575b4e80081e31790bb3e6b4fbecf823a4->leave($__internal_ef824fed606a978f81d748b43ddba4575b4e80081e31790bb3e6b4fbecf823a4_prof);

        
        $__internal_c328aee5486dd4884ab27936f73c006abe4443b718d821011f9faf6af53fca9d->leave($__internal_c328aee5486dd4884ab27936f73c006abe4443b718d821011f9faf6af53fca9d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\todolist\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
