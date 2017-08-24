<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_184b77a4f41f600c1a5948aabac2dda211e8924cf1392017c35d24b0d17fee84 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db8cf94c846a6c500a751b382fb0827875f5cd4facfa97943773482bee335449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db8cf94c846a6c500a751b382fb0827875f5cd4facfa97943773482bee335449->enter($__internal_db8cf94c846a6c500a751b382fb0827875f5cd4facfa97943773482bee335449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $__internal_6e5083638db82e1827c3cd1727cba177742ce0e2ec90125348ceefc506895bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5083638db82e1827c3cd1727cba177742ce0e2ec90125348ceefc506895bf3->enter($__internal_6e5083638db82e1827c3cd1727cba177742ce0e2ec90125348ceefc506895bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db8cf94c846a6c500a751b382fb0827875f5cd4facfa97943773482bee335449->leave($__internal_db8cf94c846a6c500a751b382fb0827875f5cd4facfa97943773482bee335449_prof);

        
        $__internal_6e5083638db82e1827c3cd1727cba177742ce0e2ec90125348ceefc506895bf3->leave($__internal_6e5083638db82e1827c3cd1727cba177742ce0e2ec90125348ceefc506895bf3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
", "SonataAdminBundle:CRUD:list_string.html.twig", "/Users/lala/Sites/instantpot/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
