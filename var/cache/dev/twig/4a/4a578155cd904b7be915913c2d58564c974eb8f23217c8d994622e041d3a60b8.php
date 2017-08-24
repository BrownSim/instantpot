<?php

/* SonataAdminBundle:CRUD:list__action.html.twig */
class __TwigTemplate_39b4eb386204f1fb226cf33acd41613bfe9fbc78958a1447bd41830ad3fbb1a1 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b5350cde54c5293af7722eb83f52684cd6677b2e4535b84710b2afe11693752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b5350cde54c5293af7722eb83f52684cd6677b2e4535b84710b2afe11693752->enter($__internal_2b5350cde54c5293af7722eb83f52684cd6677b2e4535b84710b2afe11693752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $__internal_9f2d85b8be942e3efde09039f3ff27c3af98d5e71f7692b701091a788df6288f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2d85b8be942e3efde09039f3ff27c3af98d5e71f7692b701091a788df6288f->enter($__internal_9f2d85b8be942e3efde09039f3ff27c3af98d5e71f7692b701091a788df6288f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b5350cde54c5293af7722eb83f52684cd6677b2e4535b84710b2afe11693752->leave($__internal_2b5350cde54c5293af7722eb83f52684cd6677b2e4535b84710b2afe11693752_prof);

        
        $__internal_9f2d85b8be942e3efde09039f3ff27c3af98d5e71f7692b701091a788df6288f->leave($__internal_9f2d85b8be942e3efde09039f3ff27c3af98d5e71f7692b701091a788df6288f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c50220af533541749fa552a73b9ed2477c2ab47ca5b540fc2e5ed66be6ef03e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c50220af533541749fa552a73b9ed2477c2ab47ca5b540fc2e5ed66be6ef03e6->enter($__internal_c50220af533541749fa552a73b9ed2477c2ab47ca5b540fc2e5ed66be6ef03e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6a3d964a50990f283b88098c8ecd79b03076b81f0f26d2620d57fae57f0cb354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3d964a50990f283b88098c8ecd79b03076b81f0f26d2620d57fae57f0cb354->enter($__internal_6a3d964a50990f283b88098c8ecd79b03076b81f0f26d2620d57fae57f0cb354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <div class=\"btn-group\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "actions", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 17
            echo "            ";
            $this->loadTemplate($this->getAttribute($context["actions"], "template", array()), "SonataAdminBundle:CRUD:list__action.html.twig", 17)->display($context);
            // line 18
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
        
        $__internal_6a3d964a50990f283b88098c8ecd79b03076b81f0f26d2620d57fae57f0cb354->leave($__internal_6a3d964a50990f283b88098c8ecd79b03076b81f0f26d2620d57fae57f0cb354_prof);

        
        $__internal_c50220af533541749fa552a73b9ed2477c2ab47ca5b540fc2e5ed66be6ef03e6->leave($__internal_c50220af533541749fa552a73b9ed2477c2ab47ca5b540fc2e5ed66be6ef03e6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  71 => 18,  68 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    <div class=\"btn-group\">
        {% for actions in field_description.options.actions %}
            {% include actions.template %}
        {% endfor %}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:list__action.html.twig", "/Users/lala/Sites/instantpot/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__action.html.twig");
    }
}
