<?php

/* SonataAdminBundle:CRUD:delete.html.twig */
class __TwigTemplate_5c2363aab61120a031aac79d0cf034293538aef70a0af76beef6341839741b9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:delete.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d17a97a8a87458133bb23c1a8358db6b0fddaa8f96069348d2988286fbfb3207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d17a97a8a87458133bb23c1a8358db6b0fddaa8f96069348d2988286fbfb3207->enter($__internal_d17a97a8a87458133bb23c1a8358db6b0fddaa8f96069348d2988286fbfb3207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $__internal_448c6bfa7cf414b5e62de0eed640171b5dd84f3c6e2108c3e2770f9487429ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_448c6bfa7cf414b5e62de0eed640171b5dd84f3c6e2108c3e2770f9487429ac7->enter($__internal_448c6bfa7cf414b5e62de0eed640171b5dd84f3c6e2108c3e2770f9487429ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d17a97a8a87458133bb23c1a8358db6b0fddaa8f96069348d2988286fbfb3207->leave($__internal_d17a97a8a87458133bb23c1a8358db6b0fddaa8f96069348d2988286fbfb3207_prof);

        
        $__internal_448c6bfa7cf414b5e62de0eed640171b5dd84f3c6e2108c3e2770f9487429ac7->leave($__internal_448c6bfa7cf414b5e62de0eed640171b5dd84f3c6e2108c3e2770f9487429ac7_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e3b70b6303d992ed239d3f34b7fc8391857ead0b97d9695790ef6e059a1eeb86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b70b6303d992ed239d3f34b7fc8391857ead0b97d9695790ef6e059a1eeb86->enter($__internal_e3b70b6303d992ed239d3f34b7fc8391857ead0b97d9695790ef6e059a1eeb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_652edc889da3caee4cef95dc3e7ba8471ed2c384e33ef3d48470d617244d7cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652edc889da3caee4cef95dc3e7ba8471ed2c384e33ef3d48470d617244d7cfe->enter($__internal_652edc889da3caee4cef95dc3e7ba8471ed2c384e33ef3d48470d617244d7cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:delete.html.twig", 15)->display($context);
        
        $__internal_652edc889da3caee4cef95dc3e7ba8471ed2c384e33ef3d48470d617244d7cfe->leave($__internal_652edc889da3caee4cef95dc3e7ba8471ed2c384e33ef3d48470d617244d7cfe_prof);

        
        $__internal_e3b70b6303d992ed239d3f34b7fc8391857ead0b97d9695790ef6e059a1eeb86->leave($__internal_e3b70b6303d992ed239d3f34b7fc8391857ead0b97d9695790ef6e059a1eeb86_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_b945f85a59ced4a2b770cc99fb78d5ed387e9ae726de30d7fa180b975de7bab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b945f85a59ced4a2b770cc99fb78d5ed387e9ae726de30d7fa180b975de7bab7->enter($__internal_b945f85a59ced4a2b770cc99fb78d5ed387e9ae726de30d7fa180b975de7bab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_6005c207f9f43b17433cc22f25ea3b45672f62264fd4bfed0da431e878afdba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6005c207f9f43b17433cc22f25ea3b45672f62264fd4bfed0da431e878afdba0->enter($__internal_6005c207f9f43b17433cc22f25ea3b45672f62264fd4bfed0da431e878afdba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_6005c207f9f43b17433cc22f25ea3b45672f62264fd4bfed0da431e878afdba0->leave($__internal_6005c207f9f43b17433cc22f25ea3b45672f62264fd4bfed0da431e878afdba0_prof);

        
        $__internal_b945f85a59ced4a2b770cc99fb78d5ed387e9ae726de30d7fa180b975de7bab7->leave($__internal_b945f85a59ced4a2b770cc99fb78d5ed387e9ae726de30d7fa180b975de7bab7_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_ca1364524d72d8206da470a3a9498c630bd8bbba2634e22b503eb31fe0c30d5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca1364524d72d8206da470a3a9498c630bd8bbba2634e22b503eb31fe0c30d5a->enter($__internal_ca1364524d72d8206da470a3a9498c630bd8bbba2634e22b503eb31fe0c30d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_971e142e9e287939908dfb4fb8a912b94ddad76d31aa68da6eb83e276fb0652a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971e142e9e287939908dfb4fb8a912b94ddad76d31aa68da6eb83e276fb0652a->enter($__internal_971e142e9e287939908dfb4fb8a912b94ddad76d31aa68da6eb83e276fb0652a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"box-body\">
                ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_delete_confirmation", array("%object%" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method")), "SonataAdminBundle"), "html", null, true);
        echo "
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>
                    ";
        // line 36
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
            // line 37
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 43
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_971e142e9e287939908dfb4fb8a912b94ddad76d31aa68da6eb83e276fb0652a->leave($__internal_971e142e9e287939908dfb4fb8a912b94ddad76d31aa68da6eb83e276fb0652a_prof);

        
        $__internal_ca1364524d72d8206da470a3a9498c630bd8bbba2634e22b503eb31fe0c30d5a->leave($__internal_ca1364524d72d8206da470a3a9498c630bd8bbba2634e22b503eb31fe0c30d5a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  132 => 41,  127 => 39,  121 => 37,  119 => 36,  115 => 35,  110 => 33,  105 => 31,  99 => 28,  93 => 25,  87 => 21,  78 => 20,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block content %}
    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">{{ 'title_delete'|trans({}, 'SonataAdminBundle') }}</h3>
            </div>
            <div class=\"box-body\">
                {{ 'message_delete_confirmation'|trans({'%object%': admin.toString(object)}, 'SonataAdminBundle') }}
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"{{ admin.generateObjectUrl('delete', object) }}\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> {{ 'btn_delete'|trans({}, 'SonataAdminBundle') }}</button>
                    {% if admin.hasRoute('edit') and admin.hasAccess('edit', object) %}
                        {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}

                        <a class=\"btn btn-success\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}</a>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:delete.html.twig", "/Users/lala/Sites/instantpot/vendor/sonata-project/admin-bundle/Resources/views/CRUD/delete.html.twig");
    }
}
