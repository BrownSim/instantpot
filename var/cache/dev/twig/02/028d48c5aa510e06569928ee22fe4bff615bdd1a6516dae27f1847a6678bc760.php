<?php

/* SonataAdminBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_285d2cb6bfd4f9a99def88a92b754c1912917b8a949f39ec3de00ee063de13d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8051cf191a5fa45d1fd08093d8ad3b8698398d8c9d663a13b6fb4cbe0e20d5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8051cf191a5fa45d1fd08093d8ad3b8698398d8c9d663a13b6fb4cbe0e20d5b->enter($__internal_f8051cf191a5fa45d1fd08093d8ad3b8698398d8c9d663a13b6fb4cbe0e20d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_field.html.twig"));

        $__internal_10e75030994a1aef84636175750f35c57580dd7a883b8498fb2ae8778e590a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e75030994a1aef84636175750f35c57580dd7a883b8498fb2ae8778e590a1b->enter($__internal_10e75030994a1aef84636175750f35c57580dd7a883b8498fb2ae8778e590a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_field.html.twig"));

        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "row_align", array(), "any", true, true)) {
            echo " style=\"text-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "row_align", array()), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 13
        $context["route"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", false, true), "name", array()), null)) : (null));
        // line 14
        echo "
    ";
        // line 15
        if (((($this->getAttribute($this->getAttribute(        // line 16
($context["field_description"] ?? null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) &&         // line 17
($context["route"] ?? $this->getContext($context, "route"))) && $this->getAttribute(        // line 18
($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => ($context["route"] ?? $this->getContext($context, "route"))), "method")) && $this->getAttribute(        // line 19
($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => ($context["route"] ?? $this->getContext($context, "route")), 1 => ((twig_in_filter(($context["route"] ?? $this->getContext($context, "route")), array(0 => "show", 1 => "edit"))) ? (($context["object"] ?? $this->getContext($context, "object"))) : (null))), "method"))) {
            // line 21
            echo "        <a class=\"sonata-link-identifier\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => ($context["route"] ?? $this->getContext($context, "route")), 1 => ($context["object"] ?? $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            // line 22
            $this->displayBlock('field', $context, $blocks);
            // line 35
            echo "</a>
    ";
        } else {
            // line 37
            echo "        ";
            $context["isEditable"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"));
            // line 38
            echo "        ";
            $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "type", array()));
            // line 39
            echo "
        ";
            // line 40
            if ((($context["isEditable"] ?? $this->getContext($context, "isEditable")) && ($context["xEditableType"] ?? $this->getContext($context, "xEditableType")))) {
                // line 41
                echo "            ";
                $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_set_object_field_value", twig_array_merge((($this->getAttribute(                // line 43
($context["admin"] ?? null), "getPersistentParameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["admin"] ?? null), "getPersistentParameters", array()), array())) : (array())), array("context" => "list", "field" => $this->getAttribute(                // line 45
($context["field_description"] ?? $this->getContext($context, "field_description")), "name", array()), "objectId" => $this->getAttribute(                // line 46
($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "code" => $this->getAttribute(                // line 47
($context["admin"] ?? $this->getContext($context, "admin")), "code", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))));
                // line 50
                echo "
            ";
                // line 51
                if ((($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "type", array()) == "date") &&  !twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                    // line 52
                    echo "                ";
                    $context["data_value"] = $this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), "format", array(0 => "Y-m-d"), "method");
                    // line 53
                    echo "            ";
                } elseif ((($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "type", array()) == "boolean") && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                    // line 54
                    echo "                ";
                    $context["data_value"] = 0;
                    // line 55
                    echo "            ";
                } else {
                    // line 56
                    echo "                ";
                    $context["data_value"] = ($context["value"] ?? $this->getContext($context, "value"));
                    // line 57
                    echo "            ";
                }
                // line 58
                echo "
            <span ";
                // line 59
                $this->displayBlock('field_span_attributes', $context, $blocks);
                // line 64
                echo ">
                ";
                // line 65
                $this->displayBlock("field", $context, $blocks);
                echo "
            </span>
        ";
            } else {
                // line 68
                echo "            ";
                $this->displayBlock("field", $context, $blocks);
                echo "
        ";
            }
            // line 70
            echo "    ";
        }
        // line 71
        echo "</td>
";
        
        $__internal_f8051cf191a5fa45d1fd08093d8ad3b8698398d8c9d663a13b6fb4cbe0e20d5b->leave($__internal_f8051cf191a5fa45d1fd08093d8ad3b8698398d8c9d663a13b6fb4cbe0e20d5b_prof);

        
        $__internal_10e75030994a1aef84636175750f35c57580dd7a883b8498fb2ae8778e590a1b->leave($__internal_10e75030994a1aef84636175750f35c57580dd7a883b8498fb2ae8778e590a1b_prof);

    }

    // line 22
    public function block_field($context, array $blocks = array())
    {
        $__internal_e650c4a5d171586ff838c0a88f8864d36cce18a1fb3c96586242b23d61785748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e650c4a5d171586ff838c0a88f8864d36cce18a1fb3c96586242b23d61785748->enter($__internal_e650c4a5d171586ff838c0a88f8864d36cce18a1fb3c96586242b23d61785748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_560cc54ccfa35bc999b4b52cbdeda631163674463b4882f4d4f95f6cade532a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560cc54ccfa35bc999b4b52cbdeda631163674463b4882f4d4f95f6cade532a7->enter($__internal_560cc54ccfa35bc999b4b52cbdeda631163674463b4882f4d4f95f6cade532a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 23
        echo "                ";
        ob_start();
        // line 24
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) {
            // line 25
            echo "                    ";
            $context["collapse"] = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "collapse", array());
            // line 26
            echo "                    <div class=\"sonata-readmore\"
                          data-readmore-height=\"";
            // line 27
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collapse"] ?? null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                          data-readmore-more=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["collapse"] ?? null), "more", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                          data-readmore-less=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["collapse"] ?? null), "less", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "</div>
                ";
        } else {
            // line 31
            echo "                    ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
                ";
        }
        // line 33
        echo "                ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 34
        echo "            ";
        
        $__internal_560cc54ccfa35bc999b4b52cbdeda631163674463b4882f4d4f95f6cade532a7->leave($__internal_560cc54ccfa35bc999b4b52cbdeda631163674463b4882f4d4f95f6cade532a7_prof);

        
        $__internal_e650c4a5d171586ff838c0a88f8864d36cce18a1fb3c96586242b23d61785748->leave($__internal_e650c4a5d171586ff838c0a88f8864d36cce18a1fb3c96586242b23d61785748_prof);

    }

    // line 59
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_e1378b5d83a98217fab247d9b2521cfc945fae77d15dec69caec43fc19fb3fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1378b5d83a98217fab247d9b2521cfc945fae77d15dec69caec43fc19fb3fe0->enter($__internal_e1378b5d83a98217fab247d9b2521cfc945fae77d15dec69caec43fc19fb3fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_a898c88c5b32e46840fb5f0c3103c65dae6c7e3463b07c0219616366810ce5b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a898c88c5b32e46840fb5f0c3103c65dae6c7e3463b07c0219616366810ce5b1->enter($__internal_a898c88c5b32e46840fb5f0c3103c65dae6c7e3463b07c0219616366810ce5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        echo "class=\"x-editable\"
                  data-type=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["xEditableType"] ?? $this->getContext($context, "xEditableType")), "html", null, true);
        echo "\"
                  data-value=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["data_value"] ?? $this->getContext($context, "data_value")), "html", null, true);
        echo "\"
                  data-title=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "label", array()), array(), $this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "translationDomain", array())), "html", null, true);
        echo "\"
                  data-pk=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"
                  data-url=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\" ";
        
        $__internal_a898c88c5b32e46840fb5f0c3103c65dae6c7e3463b07c0219616366810ce5b1->leave($__internal_a898c88c5b32e46840fb5f0c3103c65dae6c7e3463b07c0219616366810ce5b1_prof);

        
        $__internal_e1378b5d83a98217fab247d9b2521cfc945fae77d15dec69caec43fc19fb3fe0->leave($__internal_e1378b5d83a98217fab247d9b2521cfc945fae77d15dec69caec43fc19fb3fe0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 64,  216 => 63,  212 => 62,  208 => 61,  204 => 60,  193 => 59,  183 => 34,  180 => 33,  174 => 31,  167 => 29,  163 => 28,  159 => 27,  156 => 26,  153 => 25,  150 => 24,  147 => 23,  138 => 22,  127 => 71,  124 => 70,  118 => 68,  112 => 65,  109 => 64,  107 => 59,  104 => 58,  101 => 57,  98 => 56,  95 => 55,  92 => 54,  89 => 53,  86 => 52,  84 => 51,  81 => 50,  79 => 47,  78 => 46,  77 => 45,  76 => 43,  74 => 41,  72 => 40,  69 => 39,  66 => 38,  63 => 37,  59 => 35,  57 => 22,  53 => 21,  51 => 19,  50 => 18,  49 => 17,  48 => 16,  47 => 15,  44 => 14,  42 => 13,  30 => 12,  27 => 11,);
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

<td class=\"sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }}\" objectId=\"{{ admin.id(object) }}\"{% if field_description.options.row_align is defined %} style=\"text-align:{{ field_description.options.row_align }}\"{% endif %}>
    {% set route = field_description.options.route.name|default(null) %}

    {% if
        field_description.options.identifier is defined
        and route
        and admin.hasRoute(route)
        and admin.hasAccess(route, route in ['show', 'edit'] ? object : null)
    %}
        <a class=\"sonata-link-identifier\" href=\"{{ admin.generateObjectUrl(route, object, field_description.options.route.parameters) }}\">
            {%- block field %}
                {% spaceless %}
                {% if field_description.options.collapse is defined %}
                    {% set collapse = field_description.options.collapse %}
                    <div class=\"sonata-readmore\"
                          data-readmore-height=\"{{ collapse.height|default(40) }}\"
                          data-readmore-more=\"{{ collapse.more|default('read_more')|trans({}, 'SonataAdminBundle') }}\"
                          data-readmore-less=\"{{ collapse.less|default('read_less')|trans({}, 'SonataAdminBundle') }}\">{{ value }}</div>
                {% else %}
                    {{ value }}
                {% endif %}
                {% endspaceless %}
            {% endblock -%}
        </a>
    {% else %}
        {% set isEditable = field_description.options.editable is defined and field_description.options.editable and admin.hasAccess('edit', object) %}
        {% set xEditableType = field_description.type|sonata_xeditable_type %}

        {% if isEditable and xEditableType %}
            {% set url = path(
                'sonata_admin_set_object_field_value',
                admin.getPersistentParameters|default([])|merge({
                    'context': 'list',
                    'field': field_description.name,
                    'objectId': admin.id(object),
                    'code': admin.code(object)
                })
            ) %}

            {% if field_description.type == 'date' and value is not empty %}
                {% set data_value = value.format('Y-m-d') %}
            {% elseif field_description.type == 'boolean' and value is empty %}
                {% set data_value = 0 %}
            {% else %}
                {% set data_value = value %}
            {% endif %}

            <span {% block field_span_attributes %}class=\"x-editable\"
                  data-type=\"{{ xEditableType }}\"
                  data-value=\"{{ data_value }}\"
                  data-title=\"{{ field_description.label|trans({}, field_description.translationDomain) }}\"
                  data-pk=\"{{ admin.id(object) }}\"
                  data-url=\"{{ url }}\" {% endblock %}>
                {{ block('field') }}
            </span>
        {% else %}
            {{ block('field') }}
        {% endif %}
    {% endif %}
</td>
", "SonataAdminBundle:CRUD:base_list_field.html.twig", "/Users/lala/Sites/instantpot/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_list_field.html.twig");
    }
}
