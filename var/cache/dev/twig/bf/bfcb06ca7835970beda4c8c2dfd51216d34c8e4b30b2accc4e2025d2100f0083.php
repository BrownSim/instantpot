<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_84f7b431ec9857815a5a00d77f090da464180d9e8e47cf3b9390ebb5ff0204f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed604f2b293d32b03cb5c911d6e8f869b9c987fbaf84ba2f19ba08cd1aba13ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed604f2b293d32b03cb5c911d6e8f869b9c987fbaf84ba2f19ba08cd1aba13ea->enter($__internal_ed604f2b293d32b03cb5c911d6e8f869b9c987fbaf84ba2f19ba08cd1aba13ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $__internal_484585a188475e6aaf6995f6ed80d086b17e33265b6bfddc84cff603c6935115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_484585a188475e6aaf6995f6ed80d086b17e33265b6bfddc84cff603c6935115->enter($__internal_484585a188475e6aaf6995f6ed80d086b17e33265b6bfddc84cff603c6935115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed604f2b293d32b03cb5c911d6e8f869b9c987fbaf84ba2f19ba08cd1aba13ea->leave($__internal_ed604f2b293d32b03cb5c911d6e8f869b9c987fbaf84ba2f19ba08cd1aba13ea_prof);

        
        $__internal_484585a188475e6aaf6995f6ed80d086b17e33265b6bfddc84cff603c6935115->leave($__internal_484585a188475e6aaf6995f6ed80d086b17e33265b6bfddc84cff603c6935115_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
", "SonataAdminBundle:Pager:results.html.twig", "/Users/lala/Sites/instantpot/vendor/sonata-project/admin-bundle/Resources/views/Pager/results.html.twig");
    }
}
