<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_07f381a2e0c9815bc5ea31bf86632d9b4b20c6fdcc522200978644bf2a43d0ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54c5dde867395a01615fc6620fe782a04f5fae9ffb36268a0992b5474452cc76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54c5dde867395a01615fc6620fe782a04f5fae9ffb36268a0992b5474452cc76->enter($__internal_54c5dde867395a01615fc6620fe782a04f5fae9ffb36268a0992b5474452cc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_3cb09c4ea75282c6c43b486e400cdffe29753e6c41b55b02e36b33a9e26a7949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb09c4ea75282c6c43b486e400cdffe29753e6c41b55b02e36b33a9e26a7949->enter($__internal_3cb09c4ea75282c6c43b486e400cdffe29753e6c41b55b02e36b33a9e26a7949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_54c5dde867395a01615fc6620fe782a04f5fae9ffb36268a0992b5474452cc76->leave($__internal_54c5dde867395a01615fc6620fe782a04f5fae9ffb36268a0992b5474452cc76_prof);

        
        $__internal_3cb09c4ea75282c6c43b486e400cdffe29753e6c41b55b02e36b33a9e26a7949->leave($__internal_3cb09c4ea75282c6c43b486e400cdffe29753e6c41b55b02e36b33a9e26a7949_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_96c7a1982e03240d668e1cb1154473b7e8af8d7bd0ef7e01fab756c0c1780478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c7a1982e03240d668e1cb1154473b7e8af8d7bd0ef7e01fab756c0c1780478->enter($__internal_96c7a1982e03240d668e1cb1154473b7e8af8d7bd0ef7e01fab756c0c1780478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_6b01237ebaf521d7cc7cc4188e196953a7074e87f5b8d6f2690943902a996cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b01237ebaf521d7cc7cc4188e196953a7074e87f5b8d6f2690943902a996cce->enter($__internal_6b01237ebaf521d7cc7cc4188e196953a7074e87f5b8d6f2690943902a996cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_6b01237ebaf521d7cc7cc4188e196953a7074e87f5b8d6f2690943902a996cce->leave($__internal_6b01237ebaf521d7cc7cc4188e196953a7074e87f5b8d6f2690943902a996cce_prof);

        
        $__internal_96c7a1982e03240d668e1cb1154473b7e8af8d7bd0ef7e01fab756c0c1780478->leave($__internal_96c7a1982e03240d668e1cb1154473b7e8af8d7bd0ef7e01fab756c0c1780478_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  33 => 13,  31 => 12,  26 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/Users/lala/Sites/instantpot/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
