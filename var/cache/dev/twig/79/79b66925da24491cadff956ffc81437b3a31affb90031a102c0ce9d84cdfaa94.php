<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_eca25080307854985c31c3ad7b908a8715df4d88e8fe933b45eadfd91001c030 extends Twig_Template
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
        $__internal_84a6f40cf6c7367f8088f2979be20cbd5340c1ca5db2fe2d9295d61cd02eff75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a6f40cf6c7367f8088f2979be20cbd5340c1ca5db2fe2d9295d61cd02eff75->enter($__internal_84a6f40cf6c7367f8088f2979be20cbd5340c1ca5db2fe2d9295d61cd02eff75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a57a07a645942af25d33cb07bc0db244973c7f204fda6392bba2002c2d688396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57a07a645942af25d33cb07bc0db244973c7f204fda6392bba2002c2d688396->enter($__internal_a57a07a645942af25d33cb07bc0db244973c7f204fda6392bba2002c2d688396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84a6f40cf6c7367f8088f2979be20cbd5340c1ca5db2fe2d9295d61cd02eff75->leave($__internal_84a6f40cf6c7367f8088f2979be20cbd5340c1ca5db2fe2d9295d61cd02eff75_prof);

        
        $__internal_a57a07a645942af25d33cb07bc0db244973c7f204fda6392bba2002c2d688396->leave($__internal_a57a07a645942af25d33cb07bc0db244973c7f204fda6392bba2002c2d688396_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dda8398a3db0737ba4b347e8ccfb7f30d0d4c4c38cfdcd11418d6a1d814c12e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda8398a3db0737ba4b347e8ccfb7f30d0d4c4c38cfdcd11418d6a1d814c12e5->enter($__internal_dda8398a3db0737ba4b347e8ccfb7f30d0d4c4c38cfdcd11418d6a1d814c12e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_46cda513bb70dbbcff164e121d38f2f1afe8fdf1490f23c2ca9cbfdf20e8ec97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46cda513bb70dbbcff164e121d38f2f1afe8fdf1490f23c2ca9cbfdf20e8ec97->enter($__internal_46cda513bb70dbbcff164e121d38f2f1afe8fdf1490f23c2ca9cbfdf20e8ec97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_46cda513bb70dbbcff164e121d38f2f1afe8fdf1490f23c2ca9cbfdf20e8ec97->leave($__internal_46cda513bb70dbbcff164e121d38f2f1afe8fdf1490f23c2ca9cbfdf20e8ec97_prof);

        
        $__internal_dda8398a3db0737ba4b347e8ccfb7f30d0d4c4c38cfdcd11418d6a1d814c12e5->leave($__internal_dda8398a3db0737ba4b347e8ccfb7f30d0d4c4c38cfdcd11418d6a1d814c12e5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a1f116c0ac80c28632c9569df7e6f390f5ce60a6d6b0b32f86a80cc65b871473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f116c0ac80c28632c9569df7e6f390f5ce60a6d6b0b32f86a80cc65b871473->enter($__internal_a1f116c0ac80c28632c9569df7e6f390f5ce60a6d6b0b32f86a80cc65b871473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6651dc53345d573eac78d63f9368aeef2fba00ad21ffab1772b7f86f92eb9299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6651dc53345d573eac78d63f9368aeef2fba00ad21ffab1772b7f86f92eb9299->enter($__internal_6651dc53345d573eac78d63f9368aeef2fba00ad21ffab1772b7f86f92eb9299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6651dc53345d573eac78d63f9368aeef2fba00ad21ffab1772b7f86f92eb9299->leave($__internal_6651dc53345d573eac78d63f9368aeef2fba00ad21ffab1772b7f86f92eb9299_prof);

        
        $__internal_a1f116c0ac80c28632c9569df7e6f390f5ce60a6d6b0b32f86a80cc65b871473->leave($__internal_a1f116c0ac80c28632c9569df7e6f390f5ce60a6d6b0b32f86a80cc65b871473_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f17d2c26539156834414642c2c21acacf0a258b217aeb37d94cb833b8b61e765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f17d2c26539156834414642c2c21acacf0a258b217aeb37d94cb833b8b61e765->enter($__internal_f17d2c26539156834414642c2c21acacf0a258b217aeb37d94cb833b8b61e765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aa654d5fed4fc09934eee66a2de7cd79be0284d937c65c7a17899b67b9d33c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa654d5fed4fc09934eee66a2de7cd79be0284d937c65c7a17899b67b9d33c54->enter($__internal_aa654d5fed4fc09934eee66a2de7cd79be0284d937c65c7a17899b67b9d33c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aa654d5fed4fc09934eee66a2de7cd79be0284d937c65c7a17899b67b9d33c54->leave($__internal_aa654d5fed4fc09934eee66a2de7cd79be0284d937c65c7a17899b67b9d33c54_prof);

        
        $__internal_f17d2c26539156834414642c2c21acacf0a258b217aeb37d94cb833b8b61e765->leave($__internal_f17d2c26539156834414642c2c21acacf0a258b217aeb37d94cb833b8b61e765_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/lala/Sites/instantpot/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
