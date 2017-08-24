<?php

/* SonataAdminBundle:Button:edit_button.html.twig */
class __TwigTemplate_62ecf8810b4224ba3c073a987d6fd437a3869d536f9e0e1c6ba792c9c12e89b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_689e03464a117f42c41590f4978a6dae682c384c2c13b905907e8ca671006469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_689e03464a117f42c41590f4978a6dae682c384c2c13b905907e8ca671006469->enter($__internal_689e03464a117f42c41590f4978a6dae682c384c2c13b905907e8ca671006469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:edit_button.html.twig"));

        $__internal_252b8788726be9567b66676444c08fd8d46ea799d523093e51052a5d7c095edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_252b8788726be9567b66676444c08fd8d46ea799d523093e51052a5d7c095edb->enter($__internal_252b8788726be9567b66676444c08fd8d46ea799d523093e51052a5d7c095edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:edit_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "canAccessObject", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method"))) {
            // line 13
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_689e03464a117f42c41590f4978a6dae682c384c2c13b905907e8ca671006469->leave($__internal_689e03464a117f42c41590f4978a6dae682c384c2c13b905907e8ca671006469_prof);

        
        $__internal_252b8788726be9567b66676444c08fd8d46ea799d523093e51052a5d7c095edb->leave($__internal_252b8788726be9567b66676444c08fd8d46ea799d523093e51052a5d7c095edb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:edit_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 16,  33 => 14,  30 => 13,  28 => 12,  25 => 11,);
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

{% if admin.canAccessObject('edit', object) and admin.hasRoute('edit') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
            {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "SonataAdminBundle:Button:edit_button.html.twig", "/Users/lala/Sites/instantpot/vendor/sonata-project/admin-bundle/Resources/views/Button/edit_button.html.twig");
    }
}
