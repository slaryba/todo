<?php

/* todo/edit.html.twig */
class __TwigTemplate_17eaf08e32e3054dfa048eba24503942d81c325638f34e35b46d091947800cb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/edit.html.twig", 1);
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
        $__internal_1a817146fa58f453bfb5ba9c45ff312d6ee2f30b744fccef91b8592ed60272e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a817146fa58f453bfb5ba9c45ff312d6ee2f30b744fccef91b8592ed60272e8->enter($__internal_1a817146fa58f453bfb5ba9c45ff312d6ee2f30b744fccef91b8592ed60272e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/edit.html.twig"));

        $__internal_677a0012a4c09049f98d96a8101961bc90eb1919d4d361843975991bf6eb7a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677a0012a4c09049f98d96a8101961bc90eb1919d4d361843975991bf6eb7a54->enter($__internal_677a0012a4c09049f98d96a8101961bc90eb1919d4d361843975991bf6eb7a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a817146fa58f453bfb5ba9c45ff312d6ee2f30b744fccef91b8592ed60272e8->leave($__internal_1a817146fa58f453bfb5ba9c45ff312d6ee2f30b744fccef91b8592ed60272e8_prof);

        
        $__internal_677a0012a4c09049f98d96a8101961bc90eb1919d4d361843975991bf6eb7a54->leave($__internal_677a0012a4c09049f98d96a8101961bc90eb1919d4d361843975991bf6eb7a54_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_08bee9b6f902b96f19eb3e8bc46ac174ba12e6d05f8edf0d4a0f6ee8d0a35631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08bee9b6f902b96f19eb3e8bc46ac174ba12e6d05f8edf0d4a0f6ee8d0a35631->enter($__internal_08bee9b6f902b96f19eb3e8bc46ac174ba12e6d05f8edf0d4a0f6ee8d0a35631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05c07553040e3dd415a95953d43f9bd156d7cb8b58d87bf8b0dd12756760c637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c07553040e3dd415a95953d43f9bd156d7cb8b58d87bf8b0dd12756760c637->enter($__internal_05c07553040e3dd415a95953d43f9bd156d7cb8b58d87bf8b0dd12756760c637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h2 class=\"page-header\">Edit Todo</h2>
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
        
        $__internal_05c07553040e3dd415a95953d43f9bd156d7cb8b58d87bf8b0dd12756760c637->leave($__internal_05c07553040e3dd415a95953d43f9bd156d7cb8b58d87bf8b0dd12756760c637_prof);

        
        $__internal_08bee9b6f902b96f19eb3e8bc46ac174ba12e6d05f8edf0d4a0f6ee8d0a35631->leave($__internal_08bee9b6f902b96f19eb3e8bc46ac174ba12e6d05f8edf0d4a0f6ee8d0a35631_prof);

    }

    public function getTemplateName()
    {
        return "todo/edit.html.twig";
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
    <h2 class=\"page-header\">Edit Todo</h2>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
", "todo/edit.html.twig", "C:\\xampp\\htdocs\\todolist\\app\\Resources\\views\\todo\\edit.html.twig");
    }
}
