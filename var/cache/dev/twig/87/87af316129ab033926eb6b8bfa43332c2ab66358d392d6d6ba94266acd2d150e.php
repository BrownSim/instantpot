<?php

/* :Recipe:index.html.twig */
class __TwigTemplate_8c667a4f3a6115db87db0d25aa1bcc8ed6355a1794286cf34908c30125f88d96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Recipe:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8de10974810942053f73c019e905a2fe3ddcf92c0f4b3ccf795b6367053382a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8de10974810942053f73c019e905a2fe3ddcf92c0f4b3ccf795b6367053382a->enter($__internal_c8de10974810942053f73c019e905a2fe3ddcf92c0f4b3ccf795b6367053382a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Recipe:index.html.twig"));

        $__internal_82922076c50cd4f4d4c902921634c126ae461d604dab59dfb3ca03bf966bd602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82922076c50cd4f4d4c902921634c126ae461d604dab59dfb3ca03bf966bd602->enter($__internal_82922076c50cd4f4d4c902921634c126ae461d604dab59dfb3ca03bf966bd602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Recipe:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8de10974810942053f73c019e905a2fe3ddcf92c0f4b3ccf795b6367053382a->leave($__internal_c8de10974810942053f73c019e905a2fe3ddcf92c0f4b3ccf795b6367053382a_prof);

        
        $__internal_82922076c50cd4f4d4c902921634c126ae461d604dab59dfb3ca03bf966bd602->leave($__internal_82922076c50cd4f4d4c902921634c126ae461d604dab59dfb3ca03bf966bd602_prof);

    }

    public function getTemplateName()
    {
        return ":Recipe:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

", ":Recipe:index.html.twig", "/Users/lala/Sites/instantpot/app/Resources/views/Recipe/index.html.twig");
    }
}
