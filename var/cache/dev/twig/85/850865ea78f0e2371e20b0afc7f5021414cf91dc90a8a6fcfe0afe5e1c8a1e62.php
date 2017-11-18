<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5bd7f8a780af153f7b032cdcf8ff8bed527ab6abfb102758ecf7625f9382938d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3befcc67040f7cf9259968d6e746c0f7da51f2706512fe2b53f76c51426827b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3befcc67040f7cf9259968d6e746c0f7da51f2706512fe2b53f76c51426827b->enter($__internal_c3befcc67040f7cf9259968d6e746c0f7da51f2706512fe2b53f76c51426827b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9b11e81ad059a0d364ed7433731669f6d56086972a594d6092add61a146d829a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b11e81ad059a0d364ed7433731669f6d56086972a594d6092add61a146d829a->enter($__internal_9b11e81ad059a0d364ed7433731669f6d56086972a594d6092add61a146d829a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3befcc67040f7cf9259968d6e746c0f7da51f2706512fe2b53f76c51426827b->leave($__internal_c3befcc67040f7cf9259968d6e746c0f7da51f2706512fe2b53f76c51426827b_prof);

        
        $__internal_9b11e81ad059a0d364ed7433731669f6d56086972a594d6092add61a146d829a->leave($__internal_9b11e81ad059a0d364ed7433731669f6d56086972a594d6092add61a146d829a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_58c6f2ee1ca45b2dd3f42d902f0fc02f6be753001ba5c9fcdec7e176b49534cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58c6f2ee1ca45b2dd3f42d902f0fc02f6be753001ba5c9fcdec7e176b49534cf->enter($__internal_58c6f2ee1ca45b2dd3f42d902f0fc02f6be753001ba5c9fcdec7e176b49534cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_37507dd36d1f9dc6a43abc0be14510f6dc871a1ef205f2494fc2b9ca9bc719dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37507dd36d1f9dc6a43abc0be14510f6dc871a1ef205f2494fc2b9ca9bc719dd->enter($__internal_37507dd36d1f9dc6a43abc0be14510f6dc871a1ef205f2494fc2b9ca9bc719dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_37507dd36d1f9dc6a43abc0be14510f6dc871a1ef205f2494fc2b9ca9bc719dd->leave($__internal_37507dd36d1f9dc6a43abc0be14510f6dc871a1ef205f2494fc2b9ca9bc719dd_prof);

        
        $__internal_58c6f2ee1ca45b2dd3f42d902f0fc02f6be753001ba5c9fcdec7e176b49534cf->leave($__internal_58c6f2ee1ca45b2dd3f42d902f0fc02f6be753001ba5c9fcdec7e176b49534cf_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5151cea7556478cee682e99e3131a4968febc6f26672a64421ff09a71eab0ce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5151cea7556478cee682e99e3131a4968febc6f26672a64421ff09a71eab0ce7->enter($__internal_5151cea7556478cee682e99e3131a4968febc6f26672a64421ff09a71eab0ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d11d51d5b8fa85ead415688d9b410771054a3b7c6e02a36be6e241a6ee6d943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d11d51d5b8fa85ead415688d9b410771054a3b7c6e02a36be6e241a6ee6d943->enter($__internal_0d11d51d5b8fa85ead415688d9b410771054a3b7c6e02a36be6e241a6ee6d943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0d11d51d5b8fa85ead415688d9b410771054a3b7c6e02a36be6e241a6ee6d943->leave($__internal_0d11d51d5b8fa85ead415688d9b410771054a3b7c6e02a36be6e241a6ee6d943_prof);

        
        $__internal_5151cea7556478cee682e99e3131a4968febc6f26672a64421ff09a71eab0ce7->leave($__internal_5151cea7556478cee682e99e3131a4968febc6f26672a64421ff09a71eab0ce7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9caa0486910b4161355cb0c409b5a6c2d5f0b6335d6d00a781cfa619ac4a1018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9caa0486910b4161355cb0c409b5a6c2d5f0b6335d6d00a781cfa619ac4a1018->enter($__internal_9caa0486910b4161355cb0c409b5a6c2d5f0b6335d6d00a781cfa619ac4a1018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5bef39592fd01c67e81ced2c08f259cc285097142465a751c6a1d91d3959802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5bef39592fd01c67e81ced2c08f259cc285097142465a751c6a1d91d3959802->enter($__internal_f5bef39592fd01c67e81ced2c08f259cc285097142465a751c6a1d91d3959802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f5bef39592fd01c67e81ced2c08f259cc285097142465a751c6a1d91d3959802->leave($__internal_f5bef39592fd01c67e81ced2c08f259cc285097142465a751c6a1d91d3959802_prof);

        
        $__internal_9caa0486910b4161355cb0c409b5a6c2d5f0b6335d6d00a781cfa619ac4a1018->leave($__internal_9caa0486910b4161355cb0c409b5a6c2d5f0b6335d6d00a781cfa619ac4a1018_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\todolist\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
