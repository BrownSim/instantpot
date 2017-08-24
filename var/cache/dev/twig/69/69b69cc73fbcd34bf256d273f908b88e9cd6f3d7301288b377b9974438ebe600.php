<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_22636037a942d9cb123c4372f5147cc67e4db24babbdab6cafe618a9114b9cda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4e7d10698ecbfd488790a4c215bf967b056766f1303e5767dd26107d24e0741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e7d10698ecbfd488790a4c215bf967b056766f1303e5767dd26107d24e0741->enter($__internal_e4e7d10698ecbfd488790a4c215bf967b056766f1303e5767dd26107d24e0741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $__internal_6fdae951b38e85b998b7a2c08a190d1393ef6bcafdb972f8b62a7eedbe447ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fdae951b38e85b998b7a2c08a190d1393ef6bcafdb972f8b62a7eedbe447ee0->enter($__internal_6fdae951b38e85b998b7a2c08a190d1393ef6bcafdb972f8b62a7eedbe447ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4e7d10698ecbfd488790a4c215bf967b056766f1303e5767dd26107d24e0741->leave($__internal_e4e7d10698ecbfd488790a4c215bf967b056766f1303e5767dd26107d24e0741_prof);

        
        $__internal_6fdae951b38e85b998b7a2c08a190d1393ef6bcafdb972f8b62a7eedbe447ee0->leave($__internal_6fdae951b38e85b998b7a2c08a190d1393ef6bcafdb972f8b62a7eedbe447ee0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}
", "SonataAdminBundle:CRUD:list_inner_row.html.twig", "/Users/lala/Sites/instantpot/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_inner_row.html.twig");
    }
}
