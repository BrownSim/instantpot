<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_0b3ba24df724600c9c66dd90ada2b6bcb91bc8ed08c4ed17ffe71058136659da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d603cc0a6470cbd7acbd8a76bc80fe8b8c58269a56e341fccb2292eacf1a74f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d603cc0a6470cbd7acbd8a76bc80fe8b8c58269a56e341fccb2292eacf1a74f9->enter($__internal_d603cc0a6470cbd7acbd8a76bc80fe8b8c58269a56e341fccb2292eacf1a74f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $__internal_291187b63f4ca45c07fc33098734488d2392e8db8581d53267918c4868f9496f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291187b63f4ca45c07fc33098734488d2392e8db8581d53267918c4868f9496f->enter($__internal_291187b63f4ca45c07fc33098734488d2392e8db8581d53267918c4868f9496f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d603cc0a6470cbd7acbd8a76bc80fe8b8c58269a56e341fccb2292eacf1a74f9->leave($__internal_d603cc0a6470cbd7acbd8a76bc80fe8b8c58269a56e341fccb2292eacf1a74f9_prof);

        
        $__internal_291187b63f4ca45c07fc33098734488d2392e8db8581d53267918c4868f9496f->leave($__internal_291187b63f4ca45c07fc33098734488d2392e8db8581d53267918c4868f9496f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "/Users/lala/Sites/instantpot/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
