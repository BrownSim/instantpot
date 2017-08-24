<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_70181b07d5e805df3d6f3c97feec446e945e208e5e8375f20f4bd8913a8dbe43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efa0e0168256e31d362832a3ce8b8dbbef81512dc9b9798b35840af06c1a9353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa0e0168256e31d362832a3ce8b8dbbef81512dc9b9798b35840af06c1a9353->enter($__internal_efa0e0168256e31d362832a3ce8b8dbbef81512dc9b9798b35840af06c1a9353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $__internal_94682c1f9d4deee155a292d19a76cfa83cf7efb3144613b5250eabe433f93b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94682c1f9d4deee155a292d19a76cfa83cf7efb3144613b5250eabe433f93b8e->enter($__internal_94682c1f9d4deee155a292d19a76cfa83cf7efb3144613b5250eabe433f93b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efa0e0168256e31d362832a3ce8b8dbbef81512dc9b9798b35840af06c1a9353->leave($__internal_efa0e0168256e31d362832a3ce8b8dbbef81512dc9b9798b35840af06c1a9353_prof);

        
        $__internal_94682c1f9d4deee155a292d19a76cfa83cf7efb3144613b5250eabe433f93b8e->leave($__internal_94682c1f9d4deee155a292d19a76cfa83cf7efb3144613b5250eabe433f93b8e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bdbb48014898ea099cdf00fd3077ca5f0fcb90343d2804d480325dfb6aca5631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdbb48014898ea099cdf00fd3077ca5f0fcb90343d2804d480325dfb6aca5631->enter($__internal_bdbb48014898ea099cdf00fd3077ca5f0fcb90343d2804d480325dfb6aca5631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f769bd77e90a9073a831978f2dc1ef825b07bf88c5afbeaab57add801155987d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f769bd77e90a9073a831978f2dc1ef825b07bf88c5afbeaab57add801155987d->enter($__internal_f769bd77e90a9073a831978f2dc1ef825b07bf88c5afbeaab57add801155987d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_f769bd77e90a9073a831978f2dc1ef825b07bf88c5afbeaab57add801155987d->leave($__internal_f769bd77e90a9073a831978f2dc1ef825b07bf88c5afbeaab57add801155987d_prof);

        
        $__internal_bdbb48014898ea099cdf00fd3077ca5f0fcb90343d2804d480325dfb6aca5631->leave($__internal_bdbb48014898ea099cdf00fd3077ca5f0fcb90343d2804d480325dfb6aca5631_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/Users/lala/Sites/instantpot/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
