<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_e56787839fc3a08d36521d508901eb83d550b6bf684b8eb8616f94ab225e0fd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04a1457d062115b9a3fabac20c3181f5744ceff6e98de2f1e207aa6ea28b9db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04a1457d062115b9a3fabac20c3181f5744ceff6e98de2f1e207aa6ea28b9db5->enter($__internal_04a1457d062115b9a3fabac20c3181f5744ceff6e98de2f1e207aa6ea28b9db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_516ee06722b4e4d8720a1699fafcfe969282909d01c569f694bc42eafde7f783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516ee06722b4e4d8720a1699fafcfe969282909d01c569f694bc42eafde7f783->enter($__internal_516ee06722b4e4d8720a1699fafcfe969282909d01c569f694bc42eafde7f783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04a1457d062115b9a3fabac20c3181f5744ceff6e98de2f1e207aa6ea28b9db5->leave($__internal_04a1457d062115b9a3fabac20c3181f5744ceff6e98de2f1e207aa6ea28b9db5_prof);

        
        $__internal_516ee06722b4e4d8720a1699fafcfe969282909d01c569f694bc42eafde7f783->leave($__internal_516ee06722b4e4d8720a1699fafcfe969282909d01c569f694bc42eafde7f783_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_742a0add8811b57086b31e94f00b160b8a175772b385408aee1e51eb2bea8727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_742a0add8811b57086b31e94f00b160b8a175772b385408aee1e51eb2bea8727->enter($__internal_742a0add8811b57086b31e94f00b160b8a175772b385408aee1e51eb2bea8727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5fcf9d3a601e1ecf820326a7cea10dad5eccdb228fd5951eabe2483ed68d8b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fcf9d3a601e1ecf820326a7cea10dad5eccdb228fd5951eabe2483ed68d8b51->enter($__internal_5fcf9d3a601e1ecf820326a7cea10dad5eccdb228fd5951eabe2483ed68d8b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_5fcf9d3a601e1ecf820326a7cea10dad5eccdb228fd5951eabe2483ed68d8b51->leave($__internal_5fcf9d3a601e1ecf820326a7cea10dad5eccdb228fd5951eabe2483ed68d8b51_prof);

        
        $__internal_742a0add8811b57086b31e94f00b160b8a175772b385408aee1e51eb2bea8727->leave($__internal_742a0add8811b57086b31e94f00b160b8a175772b385408aee1e51eb2bea8727_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_fa8f087dcc01db228c4af565b384341d8749146523169855041a42b23adedf40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa8f087dcc01db228c4af565b384341d8749146523169855041a42b23adedf40->enter($__internal_fa8f087dcc01db228c4af565b384341d8749146523169855041a42b23adedf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_e80e01f060916934be12f081485c17ead5bdf4e12867c9adbd255b71f3e376a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80e01f060916934be12f081485c17ead5bdf4e12867c9adbd255b71f3e376a0->enter($__internal_e80e01f060916934be12f081485c17ead5bdf4e12867c9adbd255b71f3e376a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e80e01f060916934be12f081485c17ead5bdf4e12867c9adbd255b71f3e376a0->leave($__internal_e80e01f060916934be12f081485c17ead5bdf4e12867c9adbd255b71f3e376a0_prof);

        
        $__internal_fa8f087dcc01db228c4af565b384341d8749146523169855041a42b23adedf40->leave($__internal_fa8f087dcc01db228c4af565b384341d8749146523169855041a42b23adedf40_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_574ca87d55d610fdee7617daf5add52272f6aee86a46c9476eacb73dbb6afd90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574ca87d55d610fdee7617daf5add52272f6aee86a46c9476eacb73dbb6afd90->enter($__internal_574ca87d55d610fdee7617daf5add52272f6aee86a46c9476eacb73dbb6afd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_fc670b7d3fe4045d2db9a5097be09ccb8f6ab9502dc65109878c839d8446d611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc670b7d3fe4045d2db9a5097be09ccb8f6ab9502dc65109878c839d8446d611->enter($__internal_fc670b7d3fe4045d2db9a5097be09ccb8f6ab9502dc65109878c839d8446d611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_fc670b7d3fe4045d2db9a5097be09ccb8f6ab9502dc65109878c839d8446d611->leave($__internal_fc670b7d3fe4045d2db9a5097be09ccb8f6ab9502dc65109878c839d8446d611_prof);

        
        $__internal_574ca87d55d610fdee7617daf5add52272f6aee86a46c9476eacb73dbb6afd90->leave($__internal_574ca87d55d610fdee7617daf5add52272f6aee86a46c9476eacb73dbb6afd90_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_4cfcb8d67d7a2d534fcf0e58906321b0b4d4702b3d7ad55d4c3e2bad18cf75d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cfcb8d67d7a2d534fcf0e58906321b0b4d4702b3d7ad55d4c3e2bad18cf75d2->enter($__internal_4cfcb8d67d7a2d534fcf0e58906321b0b4d4702b3d7ad55d4c3e2bad18cf75d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_db8468e630788eb666a00cd70a4bca2efe779e46fffbf7a534e73e2438229dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8468e630788eb666a00cd70a4bca2efe779e46fffbf7a534e73e2438229dcc->enter($__internal_db8468e630788eb666a00cd70a4bca2efe779e46fffbf7a534e73e2438229dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_db8468e630788eb666a00cd70a4bca2efe779e46fffbf7a534e73e2438229dcc->leave($__internal_db8468e630788eb666a00cd70a4bca2efe779e46fffbf7a534e73e2438229dcc_prof);

        
        $__internal_4cfcb8d67d7a2d534fcf0e58906321b0b4d4702b3d7ad55d4c3e2bad18cf75d2->leave($__internal_4cfcb8d67d7a2d534fcf0e58906321b0b4d4702b3d7ad55d4c3e2bad18cf75d2_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_8c1cea102969d6889721edc9966c796fba40e0230392efd533dd519be666c950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1cea102969d6889721edc9966c796fba40e0230392efd533dd519be666c950->enter($__internal_8c1cea102969d6889721edc9966c796fba40e0230392efd533dd519be666c950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_abf5da93b375b0cecd95dbf081c428088916e69fcd486a4c90e64c33a16fbd94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf5da93b375b0cecd95dbf081c428088916e69fcd486a4c90e64c33a16fbd94->enter($__internal_abf5da93b375b0cecd95dbf081c428088916e69fcd486a4c90e64c33a16fbd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_abf5da93b375b0cecd95dbf081c428088916e69fcd486a4c90e64c33a16fbd94->leave($__internal_abf5da93b375b0cecd95dbf081c428088916e69fcd486a4c90e64c33a16fbd94_prof);

        
        $__internal_8c1cea102969d6889721edc9966c796fba40e0230392efd533dd519be666c950->leave($__internal_8c1cea102969d6889721edc9966c796fba40e0230392efd533dd519be666c950_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 35,  152 => 34,  134 => 30,  124 => 27,  115 => 26,  102 => 23,  93 => 22,  79 => 18,  73 => 16,  70 => 15,  61 => 14,  40 => 12,  12 => 32,);
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

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/Users/lala/Sites/instantpot/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
