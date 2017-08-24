<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9fcd0e81d48eae5439a775fe1811ca02e35e2d57d25038154d62527d2b14609e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c308ca43214f5bc2ea16d6dad38f3721c8ff6d5abbdf953c30823ce44ca575be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c308ca43214f5bc2ea16d6dad38f3721c8ff6d5abbdf953c30823ce44ca575be->enter($__internal_c308ca43214f5bc2ea16d6dad38f3721c8ff6d5abbdf953c30823ce44ca575be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_daa95dfe98f0db14ddd8bded62d90848ab7d82fc55a3e11406b1c476326223ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa95dfe98f0db14ddd8bded62d90848ab7d82fc55a3e11406b1c476326223ce->enter($__internal_daa95dfe98f0db14ddd8bded62d90848ab7d82fc55a3e11406b1c476326223ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c308ca43214f5bc2ea16d6dad38f3721c8ff6d5abbdf953c30823ce44ca575be->leave($__internal_c308ca43214f5bc2ea16d6dad38f3721c8ff6d5abbdf953c30823ce44ca575be_prof);

        
        $__internal_daa95dfe98f0db14ddd8bded62d90848ab7d82fc55a3e11406b1c476326223ce->leave($__internal_daa95dfe98f0db14ddd8bded62d90848ab7d82fc55a3e11406b1c476326223ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c5bf276daf51d849302dfce0f7507e59c708c31712b0213242e8e9e810ec6a7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5bf276daf51d849302dfce0f7507e59c708c31712b0213242e8e9e810ec6a7b->enter($__internal_c5bf276daf51d849302dfce0f7507e59c708c31712b0213242e8e9e810ec6a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_15fb746cfc074c62e45da3c92e25d2d77e18a26c9a0b604d9d1e79c8f45a4e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fb746cfc074c62e45da3c92e25d2d77e18a26c9a0b604d9d1e79c8f45a4e55->enter($__internal_15fb746cfc074c62e45da3c92e25d2d77e18a26c9a0b604d9d1e79c8f45a4e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_15fb746cfc074c62e45da3c92e25d2d77e18a26c9a0b604d9d1e79c8f45a4e55->leave($__internal_15fb746cfc074c62e45da3c92e25d2d77e18a26c9a0b604d9d1e79c8f45a4e55_prof);

        
        $__internal_c5bf276daf51d849302dfce0f7507e59c708c31712b0213242e8e9e810ec6a7b->leave($__internal_c5bf276daf51d849302dfce0f7507e59c708c31712b0213242e8e9e810ec6a7b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_571326d4e7fd918ea963733dc2bc94682340a3c36f075319faef3f96441945e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571326d4e7fd918ea963733dc2bc94682340a3c36f075319faef3f96441945e4->enter($__internal_571326d4e7fd918ea963733dc2bc94682340a3c36f075319faef3f96441945e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c940406c20c66c7efae5bd3675fa8261dab94391c07d340ac2923ea5fe7c6788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c940406c20c66c7efae5bd3675fa8261dab94391c07d340ac2923ea5fe7c6788->enter($__internal_c940406c20c66c7efae5bd3675fa8261dab94391c07d340ac2923ea5fe7c6788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c940406c20c66c7efae5bd3675fa8261dab94391c07d340ac2923ea5fe7c6788->leave($__internal_c940406c20c66c7efae5bd3675fa8261dab94391c07d340ac2923ea5fe7c6788_prof);

        
        $__internal_571326d4e7fd918ea963733dc2bc94682340a3c36f075319faef3f96441945e4->leave($__internal_571326d4e7fd918ea963733dc2bc94682340a3c36f075319faef3f96441945e4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5cbcb16978c2b1eb6775a413c8e90f75915ed3de8a0e476448121c593f70b289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cbcb16978c2b1eb6775a413c8e90f75915ed3de8a0e476448121c593f70b289->enter($__internal_5cbcb16978c2b1eb6775a413c8e90f75915ed3de8a0e476448121c593f70b289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a453ade803f0fcbe797ff6fbd6e6743ae0f6058892d2761e3b2de9d0b0327e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a453ade803f0fcbe797ff6fbd6e6743ae0f6058892d2761e3b2de9d0b0327e17->enter($__internal_a453ade803f0fcbe797ff6fbd6e6743ae0f6058892d2761e3b2de9d0b0327e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a453ade803f0fcbe797ff6fbd6e6743ae0f6058892d2761e3b2de9d0b0327e17->leave($__internal_a453ade803f0fcbe797ff6fbd6e6743ae0f6058892d2761e3b2de9d0b0327e17_prof);

        
        $__internal_5cbcb16978c2b1eb6775a413c8e90f75915ed3de8a0e476448121c593f70b289->leave($__internal_5cbcb16978c2b1eb6775a413c8e90f75915ed3de8a0e476448121c593f70b289_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/lala/Sites/instantpot/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
