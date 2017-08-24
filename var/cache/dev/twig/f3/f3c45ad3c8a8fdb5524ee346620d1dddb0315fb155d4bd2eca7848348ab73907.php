<?php

/* SonataAdminBundle:Menu:sonata_menu.html.twig */
class __TwigTemplate_b08c5adaa2566ff93a882d8a91b772a87ed3ff9d85d97ebecadbcd8d08458958 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Menu:sonata_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d07983b95ffdb5655051a1166427b06f3e1c9c85ff342e013ced7d6af3d41c84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07983b95ffdb5655051a1166427b06f3e1c9c85ff342e013ced7d6af3d41c84->enter($__internal_d07983b95ffdb5655051a1166427b06f3e1c9c85ff342e013ced7d6af3d41c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $__internal_56da88a20f18de1e9eb1eeb05ba163564766f3f576583383a3f8af7212946aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56da88a20f18de1e9eb1eeb05ba163564766f3f576583383a3f8af7212946aae->enter($__internal_56da88a20f18de1e9eb1eeb05ba163564766f3f576583383a3f8af7212946aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d07983b95ffdb5655051a1166427b06f3e1c9c85ff342e013ced7d6af3d41c84->leave($__internal_d07983b95ffdb5655051a1166427b06f3e1c9c85ff342e013ced7d6af3d41c84_prof);

        
        $__internal_56da88a20f18de1e9eb1eeb05ba163564766f3f576583383a3f8af7212946aae->leave($__internal_56da88a20f18de1e9eb1eeb05ba163564766f3f576583383a3f8af7212946aae_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_a0252fa3798c7e93c0b90c8b7997aa71780581442825976a9c1a9f600018ca5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0252fa3798c7e93c0b90c8b7997aa71780581442825976a9c1a9f600018ca5a->enter($__internal_a0252fa3798c7e93c0b90c8b7997aa71780581442825976a9c1a9f600018ca5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_c4dd265173d4bfd3cc140471b8607b6cc57508e34a4d89fd7507b78eef6b99a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4dd265173d4bfd3cc140471b8607b6cc57508e34a4d89fd7507b78eef6b99a8->enter($__internal_c4dd265173d4bfd3cc140471b8607b6cc57508e34a4d89fd7507b78eef6b99a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) : ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_c4dd265173d4bfd3cc140471b8607b6cc57508e34a4d89fd7507b78eef6b99a8->leave($__internal_c4dd265173d4bfd3cc140471b8607b6cc57508e34a4d89fd7507b78eef6b99a8_prof);

        
        $__internal_a0252fa3798c7e93c0b90c8b7997aa71780581442825976a9c1a9f600018ca5a->leave($__internal_a0252fa3798c7e93c0b90c8b7997aa71780581442825976a9c1a9f600018ca5a_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_eff1b84cebded97a77f7864ae13e1220d7d6ed57b458c469c7ec0fdc93d5a572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff1b84cebded97a77f7864ae13e1220d7d6ed57b458c469c7ec0fdc93d5a572->enter($__internal_eff1b84cebded97a77f7864ae13e1220d7d6ed57b458c469c7ec0fdc93d5a572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_4c1290646155b62a8980956891e0f125baba9e0e0bd79128492fd4825cb48360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1290646155b62a8980956891e0f125baba9e0e0bd79128492fd4825cb48360->enter($__internal_4c1290646155b62a8980956891e0f125baba9e0e0bd79128492fd4825cb48360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "roles"), "method")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !($context["display"] ?? $this->getContext($context, "display"))) {
                    // line 14
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter(($context["display"] ?? $this->getContext($context, "display")))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("branch_class" => "treeview", "currentClass" => "active"));
            // line 20
            $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_4c1290646155b62a8980956891e0f125baba9e0e0bd79128492fd4825cb48360->leave($__internal_4c1290646155b62a8980956891e0f125baba9e0e0bd79128492fd4825cb48360_prof);

        
        $__internal_eff1b84cebded97a77f7864ae13e1220d7d6ed57b458c469c7ec0fdc93d5a572->leave($__internal_eff1b84cebded97a77f7864ae13e1220d7d6ed57b458c469c7ec0fdc93d5a572_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_7da36ab4d9ffeb0b8cc7bfa5c5e26715e90ae350be51bbd55d1e73abad26275f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da36ab4d9ffeb0b8cc7bfa5c5e26715e90ae350be51bbd55d1e73abad26275f->enter($__internal_7da36ab4d9ffeb0b8cc7bfa5c5e26715e90ae350be51bbd55d1e73abad26275f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_549d17660be8e1c62be0c4c89e0f0358b8db084e5bc1958a0a8bae299e802267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549d17660be8e1c62be0c4c89e0f0358b8db084e5bc1958a0a8bae299e802267->enter($__internal_549d17660be8e1c62be0c4c89e0f0358b8db084e5bc1958a0a8bae299e802267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "on_top"), "method", true, true) &&  !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "on_top"), "method"))) {
            // line 29
            echo "            ";
            $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
            // line 30
            echo "            ";
            $context["icon"] = (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method"), ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : (((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "icon"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_549d17660be8e1c62be0c4c89e0f0358b8db084e5bc1958a0a8bae299e802267->leave($__internal_549d17660be8e1c62be0c4c89e0f0358b8db084e5bc1958a0a8bae299e802267_prof);

        
        $__internal_7da36ab4d9ffeb0b8cc7bfa5c5e26715e90ae350be51bbd55d1e73abad26275f->leave($__internal_7da36ab4d9ffeb0b8cc7bfa5c5e26715e90ae350be51bbd55d1e73abad26275f_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_9bd060e586583e77f02343ccc2ae10c71684e504a7733c19486bee8783baaed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd060e586583e77f02343ccc2ae10c71684e504a7733c19486bee8783baaed2->enter($__internal_9bd060e586583e77f02343ccc2ae10c71684e504a7733c19486bee8783baaed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_02cf18f3eaf6e0387f810a8ba11bb53c464b2bc90749dcecc7b191e34f7c7231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02cf18f3eaf6e0387f810a8ba11bb53c464b2bc90749dcecc7b191e34f7c7231->enter($__internal_02cf18f3eaf6e0387f810a8ba11bb53c464b2bc90749dcecc7b191e34f7c7231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        echo "            ";
        $context["icon"] = (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo "            ";
        echo ($context["icon"] ?? $this->getContext($context, "icon"));
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        // line 46
        if (( !$this->getAttribute(($context["item"] ?? null), "extra", array(0 => "keep_open"), "method", true, true) ||  !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "keep_open"), "method"))) {
            // line 47
            echo "<span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>";
        }
        // line 49
        echo "</a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_02cf18f3eaf6e0387f810a8ba11bb53c464b2bc90749dcecc7b191e34f7c7231->leave($__internal_02cf18f3eaf6e0387f810a8ba11bb53c464b2bc90749dcecc7b191e34f7c7231_prof);

        
        $__internal_9bd060e586583e77f02343ccc2ae10c71684e504a7733c19486bee8783baaed2->leave($__internal_9bd060e586583e77f02343ccc2ae10c71684e504a7733c19486bee8783baaed2_prof);

    }

    // line 53
    public function block_label($context, array $blocks = array())
    {
        $__internal_a69edd48d987e9df5fa9aa4701f193107f556255f7ab32440413bda5c27b1ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69edd48d987e9df5fa9aa4701f193107f556255f7ab32440413bda5c27b1ca5->enter($__internal_a69edd48d987e9df5fa9aa4701f193107f556255f7ab32440413bda5c27b1ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_4e7ba7c766488ffff5a2aa513bae0e2ffdf4d20dcba28f98b2497f75319c888f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7ba7c766488ffff5a2aa513bae0e2ffdf4d20dcba28f98b2497f75319c888f->enter($__internal_4e7ba7c766488ffff5a2aa513bae0e2ffdf4d20dcba28f98b2497f75319c888f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && ($context["is_link"] ?? $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_4e7ba7c766488ffff5a2aa513bae0e2ffdf4d20dcba28f98b2497f75319c888f->leave($__internal_4e7ba7c766488ffff5a2aa513bae0e2ffdf4d20dcba28f98b2497f75319c888f_prof);

        
        $__internal_a69edd48d987e9df5fa9aa4701f193107f556255f7ab32440413bda5c27b1ca5->leave($__internal_a69edd48d987e9df5fa9aa4701f193107f556255f7ab32440413bda5c27b1ca5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Menu:sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 53,  196 => 49,  193 => 47,  191 => 46,  189 => 45,  184 => 44,  181 => 43,  179 => 42,  176 => 41,  173 => 40,  164 => 39,  150 => 35,  147 => 34,  144 => 33,  141 => 32,  138 => 31,  135 => 30,  132 => 29,  129 => 28,  126 => 27,  117 => 26,  103 => 22,  101 => 21,  99 => 20,  96 => 19,  94 => 18,  86 => 14,  81 => 13,  79 => 12,  77 => 10,  68 => 9,  57 => 6,  55 => 5,  53 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block root %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': 'sidebar-menu'}) %}
    {%- set request        = item.extra('request') ?: app.request %}
    {{ block('list') -}}
{% endblock %}

{% block item %}
    {%- if item.displayed %}
        {#- check role of the group #}
        {%- set display = (item.extra('roles') is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
        {%- for role in item.extra('roles') if not display %}
            {%- set display = is_granted(role) %}
        {%- endfor %}
    {%- endif %}

    {%- if item.displayed and display|default %}
        {% set options = options|merge({branch_class: 'treeview', currentClass: \"active\"}) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' active')|trim) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' treeview-menu')|trim) %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block linkElement %}
    {% spaceless %}
        {% if item.extra('on_top') is defined and not item.extra('on_top') %}
            {% set translation_domain = item.extra('translation_domain', 'messages') %}
            {% set icon = item.extra('icon')|default(item.level > 1 ? '<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>' : '') %}
        {% else %}
            {% set icon = item.extra('icon') %}
        {% endif %}
        {% set is_link = true %}
        {{ parent() }}
    {% endspaceless %}
{% endblock %}

{% block spanElement %}
    {% spaceless %}
        <a href=\"#\">
            {% set translation_domain = item.extra('label_catalogue') %}
            {% set icon = item.extra('icon')|default('') %}
            {{ icon|raw }}
            {{ parent() }}
            {%- if item.extra('keep_open') is not defined or not item.extra('keep_open') -%}
                <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
            {%- endif -%}
        </a>
    {% endspaceless %}
{% endblock %}

{% block label %}{% if is_link is defined and is_link %}{{ icon|default|raw }}{% endif %}{% if options.allow_safe_labels and item.extra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label|trans({}, translation_domain|default('messages')) }}{% endif %}{% endblock %}
", "SonataAdminBundle:Menu:sonata_menu.html.twig", "/Users/lala/Sites/instantpot/vendor/sonata-project/admin-bundle/Resources/views/Menu/sonata_menu.html.twig");
    }
}
