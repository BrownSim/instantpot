<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_3aeb92a010887aad39f9a23b42d3f053ef8170949607509d47f78b09008bd79f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12f8a77f805b04f69e8cc5d6db8c4163e3003d40051418017f09d1b4673d66c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f8a77f805b04f69e8cc5d6db8c4163e3003d40051418017f09d1b4673d66c2->enter($__internal_12f8a77f805b04f69e8cc5d6db8c4163e3003d40051418017f09d1b4673d66c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_b360653660cef3708929401e1dc2538448dfc49396fe6a2a4721c33d34ad7c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b360653660cef3708929401e1dc2538448dfc49396fe6a2a4721c33d34ad7c56->enter($__internal_b360653660cef3708929401e1dc2538448dfc49396fe6a2a4721c33d34ad7c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_12f8a77f805b04f69e8cc5d6db8c4163e3003d40051418017f09d1b4673d66c2->leave($__internal_12f8a77f805b04f69e8cc5d6db8c4163e3003d40051418017f09d1b4673d66c2_prof);

        
        $__internal_b360653660cef3708929401e1dc2538448dfc49396fe6a2a4721c33d34ad7c56->leave($__internal_b360653660cef3708929401e1dc2538448dfc49396fe6a2a4721c33d34ad7c56_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_063b3b52197ed20e47a3f0372b7d16488db3efdfe945874711c150cab15aa8eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_063b3b52197ed20e47a3f0372b7d16488db3efdfe945874711c150cab15aa8eb->enter($__internal_063b3b52197ed20e47a3f0372b7d16488db3efdfe945874711c150cab15aa8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_e42818512f965447294720bd7dd63482ebe56068a06a44db60d80ec6f67887d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42818512f965447294720bd7dd63482ebe56068a06a44db60d80ec6f67887d6->enter($__internal_e42818512f965447294720bd7dd63482ebe56068a06a44db60d80ec6f67887d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_e42818512f965447294720bd7dd63482ebe56068a06a44db60d80ec6f67887d6->leave($__internal_e42818512f965447294720bd7dd63482ebe56068a06a44db60d80ec6f67887d6_prof);

        
        $__internal_063b3b52197ed20e47a3f0372b7d16488db3efdfe945874711c150cab15aa8eb->leave($__internal_063b3b52197ed20e47a3f0372b7d16488db3efdfe945874711c150cab15aa8eb_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_0b2b9b2c09547f4a6efbd5179a1a31d6eb00508c9d2d27b5ad5fda54b544d759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2b9b2c09547f4a6efbd5179a1a31d6eb00508c9d2d27b5ad5fda54b544d759->enter($__internal_0b2b9b2c09547f4a6efbd5179a1a31d6eb00508c9d2d27b5ad5fda54b544d759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_d8c18f39fd6a08600e87cb548813a04d40a86319372d5bf1224c4b28d923cbc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c18f39fd6a08600e87cb548813a04d40a86319372d5bf1224c4b28d923cbc4->enter($__internal_d8c18f39fd6a08600e87cb548813a04d40a86319372d5bf1224c4b28d923cbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_d8c18f39fd6a08600e87cb548813a04d40a86319372d5bf1224c4b28d923cbc4->leave($__internal_d8c18f39fd6a08600e87cb548813a04d40a86319372d5bf1224c4b28d923cbc4_prof);

        
        $__internal_0b2b9b2c09547f4a6efbd5179a1a31d6eb00508c9d2d27b5ad5fda54b544d759->leave($__internal_0b2b9b2c09547f4a6efbd5179a1a31d6eb00508c9d2d27b5ad5fda54b544d759_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_c87be3b7d98b75f3fa399535b164b560e35520af4476215e85ec7f3d98f9752c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c87be3b7d98b75f3fa399535b164b560e35520af4476215e85ec7f3d98f9752c->enter($__internal_c87be3b7d98b75f3fa399535b164b560e35520af4476215e85ec7f3d98f9752c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_0a9f00fb9991422d2c02494ff8311d9eddc9bee24bff549e81b7b82a842794ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9f00fb9991422d2c02494ff8311d9eddc9bee24bff549e81b7b82a842794ce->enter($__internal_0a9f00fb9991422d2c02494ff8311d9eddc9bee24bff549e81b7b82a842794ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small form-control\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            // line 28
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_0a9f00fb9991422d2c02494ff8311d9eddc9bee24bff549e81b7b82a842794ce->leave($__internal_0a9f00fb9991422d2c02494ff8311d9eddc9bee24bff549e81b7b82a842794ce_prof);

        
        $__internal_c87be3b7d98b75f3fa399535b164b560e35520af4476215e85ec7f3d98f9752c->leave($__internal_c87be3b7d98b75f3fa399535b164b560e35520af4476215e85ec7f3d98f9752c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 30,  133 => 28,  131 => 27,  123 => 26,  119 => 25,  115 => 24,  108 => 23,  99 => 22,  88 => 19,  85 => 18,  76 => 17,  60 => 13,  51 => 12,  41 => 22,  38 => 21,  36 => 17,  33 => 16,  31 => 12,  28 => 11,);
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

{% block num_pages %}
    {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_results %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block max_per_page %}
    <label class=\"control-label\" for=\"{{ admin.uniqid }}_per_page\">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>
    <select class=\"per-page small form-control\" id=\"{{ admin.uniqid }}_per_page\" style=\"width: auto\">
        {% for per_page in admin.getperpageoptions %}
            <option {% if per_page == admin.datagrid.pager.maxperpage %}selected=\"selected\"{% endif %} value=\"{{ admin.generateUrl('list', {'filter': admin.datagrid.values|merge({'_page': 1, '_per_page': per_page})}) }}\">
                {{- per_page -}}
            </option>
        {% endfor %}
    </select>
{% endblock %}
", "SonataAdminBundle:Pager:base_results.html.twig", "/Users/lala/Sites/instantpot/vendor/sonata-project/admin-bundle/Resources/views/Pager/base_results.html.twig");
    }
}
