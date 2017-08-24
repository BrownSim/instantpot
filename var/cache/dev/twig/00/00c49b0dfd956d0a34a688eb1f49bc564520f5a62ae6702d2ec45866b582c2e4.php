<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_d31f8308bbb96c00847b07ddec81e5f8adf3a6ec26368b43ccbb97a0320cbcca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_486122469776548e95b5fe768874ddf3a3cb05dad2aa44765ef3cb506d7f7e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_486122469776548e95b5fe768874ddf3a3cb05dad2aa44765ef3cb506d7f7e66->enter($__internal_486122469776548e95b5fe768874ddf3a3cb05dad2aa44765ef3cb506d7f7e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $__internal_dd0ce92f6b1e328a7f72daf0fb00090e9b09327fd88e0f823bf8fc69d61ad1b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0ce92f6b1e328a7f72daf0fb00090e9b09327fd88e0f823bf8fc69d61ad1b7->enter($__internal_dd0ce92f6b1e328a7f72daf0fb00090e9b09327fd88e0f823bf8fc69d61ad1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_486122469776548e95b5fe768874ddf3a3cb05dad2aa44765ef3cb506d7f7e66->leave($__internal_486122469776548e95b5fe768874ddf3a3cb05dad2aa44765ef3cb506d7f7e66_prof);

        
        $__internal_dd0ce92f6b1e328a7f72daf0fb00090e9b09327fd88e0f823bf8fc69d61ad1b7->leave($__internal_dd0ce92f6b1e328a7f72daf0fb00090e9b09327fd88e0f823bf8fc69d61ad1b7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "SonataAdminBundle:CRUD:edit.html.twig", "/Users/lala/Sites/instantpot/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit.html.twig");
    }
}
