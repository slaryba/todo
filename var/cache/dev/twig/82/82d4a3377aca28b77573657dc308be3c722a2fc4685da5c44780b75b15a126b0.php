<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c78883b0a794df95bdc741371f79e94d9f33e13589dce19f76379b9c0a0f1d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_91a7b109f6952a84059dd90955da3ec15fcae9dae9e394ac94e5789d99b261c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a7b109f6952a84059dd90955da3ec15fcae9dae9e394ac94e5789d99b261c4->enter($__internal_91a7b109f6952a84059dd90955da3ec15fcae9dae9e394ac94e5789d99b261c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c538077354f721933a7950071eec45ef9f5033f41a490b895254d1a3e3c1efab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c538077354f721933a7950071eec45ef9f5033f41a490b895254d1a3e3c1efab->enter($__internal_c538077354f721933a7950071eec45ef9f5033f41a490b895254d1a3e3c1efab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91a7b109f6952a84059dd90955da3ec15fcae9dae9e394ac94e5789d99b261c4->leave($__internal_91a7b109f6952a84059dd90955da3ec15fcae9dae9e394ac94e5789d99b261c4_prof);

        
        $__internal_c538077354f721933a7950071eec45ef9f5033f41a490b895254d1a3e3c1efab->leave($__internal_c538077354f721933a7950071eec45ef9f5033f41a490b895254d1a3e3c1efab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9858b3c4dd1964c2d738ce22a1e53470d55c399583ce1dfa6128c9b260f1f6e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9858b3c4dd1964c2d738ce22a1e53470d55c399583ce1dfa6128c9b260f1f6e1->enter($__internal_9858b3c4dd1964c2d738ce22a1e53470d55c399583ce1dfa6128c9b260f1f6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_00505509a5450cc72d4859a3a4d41ca0e9ea11ddc866d6cd73f8b6551a00247f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00505509a5450cc72d4859a3a4d41ca0e9ea11ddc866d6cd73f8b6551a00247f->enter($__internal_00505509a5450cc72d4859a3a4d41ca0e9ea11ddc866d6cd73f8b6551a00247f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_00505509a5450cc72d4859a3a4d41ca0e9ea11ddc866d6cd73f8b6551a00247f->leave($__internal_00505509a5450cc72d4859a3a4d41ca0e9ea11ddc866d6cd73f8b6551a00247f_prof);

        
        $__internal_9858b3c4dd1964c2d738ce22a1e53470d55c399583ce1dfa6128c9b260f1f6e1->leave($__internal_9858b3c4dd1964c2d738ce22a1e53470d55c399583ce1dfa6128c9b260f1f6e1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_334a7de3b8366fbcf05089206deca0f66eb3b24ed84ee8b463c2d93b8b9fbb51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_334a7de3b8366fbcf05089206deca0f66eb3b24ed84ee8b463c2d93b8b9fbb51->enter($__internal_334a7de3b8366fbcf05089206deca0f66eb3b24ed84ee8b463c2d93b8b9fbb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dffbe5160ae459fd7448fd76e761fd4bb6579d42a6ccdcbfb53b8f0a4b0c7f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dffbe5160ae459fd7448fd76e761fd4bb6579d42a6ccdcbfb53b8f0a4b0c7f05->enter($__internal_dffbe5160ae459fd7448fd76e761fd4bb6579d42a6ccdcbfb53b8f0a4b0c7f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dffbe5160ae459fd7448fd76e761fd4bb6579d42a6ccdcbfb53b8f0a4b0c7f05->leave($__internal_dffbe5160ae459fd7448fd76e761fd4bb6579d42a6ccdcbfb53b8f0a4b0c7f05_prof);

        
        $__internal_334a7de3b8366fbcf05089206deca0f66eb3b24ed84ee8b463c2d93b8b9fbb51->leave($__internal_334a7de3b8366fbcf05089206deca0f66eb3b24ed84ee8b463c2d93b8b9fbb51_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f030cec02a1444560a7b327e88797d9bc9a784244d9509b9f2d09edc70b23bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f030cec02a1444560a7b327e88797d9bc9a784244d9509b9f2d09edc70b23bcc->enter($__internal_f030cec02a1444560a7b327e88797d9bc9a784244d9509b9f2d09edc70b23bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_46f1fba944c61a9b1e8907c4e67314763e8e9b521840ca44a6a34533f0c9b433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f1fba944c61a9b1e8907c4e67314763e8e9b521840ca44a6a34533f0c9b433->enter($__internal_46f1fba944c61a9b1e8907c4e67314763e8e9b521840ca44a6a34533f0c9b433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_46f1fba944c61a9b1e8907c4e67314763e8e9b521840ca44a6a34533f0c9b433->leave($__internal_46f1fba944c61a9b1e8907c4e67314763e8e9b521840ca44a6a34533f0c9b433_prof);

        
        $__internal_f030cec02a1444560a7b327e88797d9bc9a784244d9509b9f2d09edc70b23bcc->leave($__internal_f030cec02a1444560a7b327e88797d9bc9a784244d9509b9f2d09edc70b23bcc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\todolist\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
