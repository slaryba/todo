<?php

/* todo/create.html.twig */
class __TwigTemplate_f99a5a070bb2aa92c8a3154e995729803b0f029bfc24f0a870cdf89bf09c8e39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/create.html.twig", 1);
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
        $__internal_c7d0274fdf960697a71f137f5a54d3b799aee79142ec743b32141cc87df51c95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d0274fdf960697a71f137f5a54d3b799aee79142ec743b32141cc87df51c95->enter($__internal_c7d0274fdf960697a71f137f5a54d3b799aee79142ec743b32141cc87df51c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/create.html.twig"));

        $__internal_e902d28f2daf74ee1b922cb447b5bdb5b2ff206b2db1b9270c34d212f2b60d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e902d28f2daf74ee1b922cb447b5bdb5b2ff206b2db1b9270c34d212f2b60d13->enter($__internal_e902d28f2daf74ee1b922cb447b5bdb5b2ff206b2db1b9270c34d212f2b60d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7d0274fdf960697a71f137f5a54d3b799aee79142ec743b32141cc87df51c95->leave($__internal_c7d0274fdf960697a71f137f5a54d3b799aee79142ec743b32141cc87df51c95_prof);

        
        $__internal_e902d28f2daf74ee1b922cb447b5bdb5b2ff206b2db1b9270c34d212f2b60d13->leave($__internal_e902d28f2daf74ee1b922cb447b5bdb5b2ff206b2db1b9270c34d212f2b60d13_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6ae707a46e43fd4c469de32dbe6ec36424689aca318ef68db8540915e85f1de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ae707a46e43fd4c469de32dbe6ec36424689aca318ef68db8540915e85f1de->enter($__internal_f6ae707a46e43fd4c469de32dbe6ec36424689aca318ef68db8540915e85f1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6060766975124e830f549b7e83e20afdae5e7e76fc86a3b22f7937d10a8234b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6060766975124e830f549b7e83e20afdae5e7e76fc86a3b22f7937d10a8234b->enter($__internal_b6060766975124e830f549b7e83e20afdae5e7e76fc86a3b22f7937d10a8234b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h2 class=\"page-header\">Add Todo</h2>
    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_b6060766975124e830f549b7e83e20afdae5e7e76fc86a3b22f7937d10a8234b->leave($__internal_b6060766975124e830f549b7e83e20afdae5e7e76fc86a3b22f7937d10a8234b_prof);

        
        $__internal_f6ae707a46e43fd4c469de32dbe6ec36424689aca318ef68db8540915e85f1de->leave($__internal_f6ae707a46e43fd4c469de32dbe6ec36424689aca318ef68db8540915e85f1de_prof);

    }

    public function getTemplateName()
    {
        return "todo/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
    <h2 class=\"page-header\">Add Todo</h2>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
", "todo/create.html.twig", "C:\\xampp\\htdocs\\todolist\\app\\Resources\\views\\todo\\create.html.twig");
    }
}
