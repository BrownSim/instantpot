<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_01dd42ad90aa62a49de0d228ab67d2b4d84541de29e9fa88b85410bd8bb09915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bb874a316faa2584016b5936ad2edf49e07147fc85bd7a850be81248d7d6a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb874a316faa2584016b5936ad2edf49e07147fc85bd7a850be81248d7d6a01->enter($__internal_0bb874a316faa2584016b5936ad2edf49e07147fc85bd7a850be81248d7d6a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_9a11dd94e1d5ee611ff81354b300b75f54e4cc6f5f60e305a455ef1b7f9beb46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a11dd94e1d5ee611ff81354b300b75f54e4cc6f5f60e305a455ef1b7f9beb46->enter($__internal_9a11dd94e1d5ee611ff81354b300b75f54e4cc6f5f60e305a455ef1b7f9beb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_0bb874a316faa2584016b5936ad2edf49e07147fc85bd7a850be81248d7d6a01->leave($__internal_0bb874a316faa2584016b5936ad2edf49e07147fc85bd7a850be81248d7d6a01_prof);

        
        $__internal_9a11dd94e1d5ee611ff81354b300b75f54e4cc6f5f60e305a455ef1b7f9beb46->leave($__internal_9a11dd94e1d5ee611ff81354b300b75f54e4cc6f5f60e305a455ef1b7f9beb46_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Users/lala/Sites/instantpot/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
