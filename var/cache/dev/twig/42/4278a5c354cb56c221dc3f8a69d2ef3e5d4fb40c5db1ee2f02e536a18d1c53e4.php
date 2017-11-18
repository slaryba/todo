<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c9f78952cac0f06f836bef76a076f48afb0514ecc489dab37a42fd5e69371b77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79880dea460f531f68123d5e18ea8bc1ec80e8dda1b208eff03a96dcbd170c88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79880dea460f531f68123d5e18ea8bc1ec80e8dda1b208eff03a96dcbd170c88->enter($__internal_79880dea460f531f68123d5e18ea8bc1ec80e8dda1b208eff03a96dcbd170c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_426c02d3beff10bed4f91f824dcb330415ab61dc58f20e90849098db804b97e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426c02d3beff10bed4f91f824dcb330415ab61dc58f20e90849098db804b97e1->enter($__internal_426c02d3beff10bed4f91f824dcb330415ab61dc58f20e90849098db804b97e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_79880dea460f531f68123d5e18ea8bc1ec80e8dda1b208eff03a96dcbd170c88->leave($__internal_79880dea460f531f68123d5e18ea8bc1ec80e8dda1b208eff03a96dcbd170c88_prof);

        
        $__internal_426c02d3beff10bed4f91f824dcb330415ab61dc58f20e90849098db804b97e1->leave($__internal_426c02d3beff10bed4f91f824dcb330415ab61dc58f20e90849098db804b97e1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c33ef41c5c817b11c2faa1739ae8a7eb81eeaaef9dae938a3a837b38ca282d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c33ef41c5c817b11c2faa1739ae8a7eb81eeaaef9dae938a3a837b38ca282d2d->enter($__internal_c33ef41c5c817b11c2faa1739ae8a7eb81eeaaef9dae938a3a837b38ca282d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e1c7f57224c4364b77a8299c3a4beb6f5fc73625c00ffb3582ca10c0c8ab540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1c7f57224c4364b77a8299c3a4beb6f5fc73625c00ffb3582ca10c0c8ab540->enter($__internal_2e1c7f57224c4364b77a8299c3a4beb6f5fc73625c00ffb3582ca10c0c8ab540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2e1c7f57224c4364b77a8299c3a4beb6f5fc73625c00ffb3582ca10c0c8ab540->leave($__internal_2e1c7f57224c4364b77a8299c3a4beb6f5fc73625c00ffb3582ca10c0c8ab540_prof);

        
        $__internal_c33ef41c5c817b11c2faa1739ae8a7eb81eeaaef9dae938a3a837b38ca282d2d->leave($__internal_c33ef41c5c817b11c2faa1739ae8a7eb81eeaaef9dae938a3a837b38ca282d2d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_04982dc6f0193d5cb60a4358445727251c65629c68b3149a6338c7755eb9bdad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04982dc6f0193d5cb60a4358445727251c65629c68b3149a6338c7755eb9bdad->enter($__internal_04982dc6f0193d5cb60a4358445727251c65629c68b3149a6338c7755eb9bdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_379b67fc9346afb31d7ce5f8401d304750c31430ff2c698091915e438be328ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379b67fc9346afb31d7ce5f8401d304750c31430ff2c698091915e438be328ad->enter($__internal_379b67fc9346afb31d7ce5f8401d304750c31430ff2c698091915e438be328ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_379b67fc9346afb31d7ce5f8401d304750c31430ff2c698091915e438be328ad->leave($__internal_379b67fc9346afb31d7ce5f8401d304750c31430ff2c698091915e438be328ad_prof);

        
        $__internal_04982dc6f0193d5cb60a4358445727251c65629c68b3149a6338c7755eb9bdad->leave($__internal_04982dc6f0193d5cb60a4358445727251c65629c68b3149a6338c7755eb9bdad_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_687f307bf2a168b4c0843b41b25e2f48d8e3d93abffc55f3a5433c791162dcf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_687f307bf2a168b4c0843b41b25e2f48d8e3d93abffc55f3a5433c791162dcf4->enter($__internal_687f307bf2a168b4c0843b41b25e2f48d8e3d93abffc55f3a5433c791162dcf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2845340e2ad280e9d9e3f551fe46c6244af73891a3cc35e6737c4b762e08be2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2845340e2ad280e9d9e3f551fe46c6244af73891a3cc35e6737c4b762e08be2c->enter($__internal_2845340e2ad280e9d9e3f551fe46c6244af73891a3cc35e6737c4b762e08be2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2845340e2ad280e9d9e3f551fe46c6244af73891a3cc35e6737c4b762e08be2c->leave($__internal_2845340e2ad280e9d9e3f551fe46c6244af73891a3cc35e6737c4b762e08be2c_prof);

        
        $__internal_687f307bf2a168b4c0843b41b25e2f48d8e3d93abffc55f3a5433c791162dcf4->leave($__internal_687f307bf2a168b4c0843b41b25e2f48d8e3d93abffc55f3a5433c791162dcf4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\todolist\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
