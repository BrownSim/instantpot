<?php

/* knp_menu.html.twig */
class __TwigTemplate_f287115531614139c9b8bc9242e23e58e45021060bd025a77350073e63ac5805 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1c7749639e6169daa8bd0e827519b5db7e461b17beba1733e5ba47cc5567f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c7749639e6169daa8bd0e827519b5db7e461b17beba1733e5ba47cc5567f46->enter($__internal_d1c7749639e6169daa8bd0e827519b5db7e461b17beba1733e5ba47cc5567f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_557565c8bc2de0f5aaa494bcb90bbc776ac8dbca306f7c7c7f651efee82616e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557565c8bc2de0f5aaa494bcb90bbc776ac8dbca306f7c7c7f651efee82616e4->enter($__internal_557565c8bc2de0f5aaa494bcb90bbc776ac8dbca306f7c7c7f651efee82616e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1c7749639e6169daa8bd0e827519b5db7e461b17beba1733e5ba47cc5567f46->leave($__internal_d1c7749639e6169daa8bd0e827519b5db7e461b17beba1733e5ba47cc5567f46_prof);

        
        $__internal_557565c8bc2de0f5aaa494bcb90bbc776ac8dbca306f7c7c7f651efee82616e4->leave($__internal_557565c8bc2de0f5aaa494bcb90bbc776ac8dbca306f7c7c7f651efee82616e4_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_c90141ba632f8763386ac865975b6ee980fae4ba9dc18ea4e5b02be580bacac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90141ba632f8763386ac865975b6ee980fae4ba9dc18ea4e5b02be580bacac7->enter($__internal_c90141ba632f8763386ac865975b6ee980fae4ba9dc18ea4e5b02be580bacac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_b960d2f6412dbc6a7c73ab620e435b0cbbaaaa97dd479cd91f4d47308f401bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b960d2f6412dbc6a7c73ab620e435b0cbbaaaa97dd479cd91f4d47308f401bab->enter($__internal_b960d2f6412dbc6a7c73ab620e435b0cbbaaaa97dd479cd91f4d47308f401bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b960d2f6412dbc6a7c73ab620e435b0cbbaaaa97dd479cd91f4d47308f401bab->leave($__internal_b960d2f6412dbc6a7c73ab620e435b0cbbaaaa97dd479cd91f4d47308f401bab_prof);

        
        $__internal_c90141ba632f8763386ac865975b6ee980fae4ba9dc18ea4e5b02be580bacac7->leave($__internal_c90141ba632f8763386ac865975b6ee980fae4ba9dc18ea4e5b02be580bacac7_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_45501e386013ec421373129a524bb26021db217291d8f0ed15cf350d6216a733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45501e386013ec421373129a524bb26021db217291d8f0ed15cf350d6216a733->enter($__internal_45501e386013ec421373129a524bb26021db217291d8f0ed15cf350d6216a733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_7fcc996f5d0248098be74ae7bb060df7280fb6976aa9fd3469e4cfc47f54715a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fcc996f5d0248098be74ae7bb060df7280fb6976aa9fd3469e4cfc47f54715a->enter($__internal_7fcc996f5d0248098be74ae7bb060df7280fb6976aa9fd3469e4cfc47f54715a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_7fcc996f5d0248098be74ae7bb060df7280fb6976aa9fd3469e4cfc47f54715a->leave($__internal_7fcc996f5d0248098be74ae7bb060df7280fb6976aa9fd3469e4cfc47f54715a_prof);

        
        $__internal_45501e386013ec421373129a524bb26021db217291d8f0ed15cf350d6216a733->leave($__internal_45501e386013ec421373129a524bb26021db217291d8f0ed15cf350d6216a733_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_1e3745f5441e5970a977deaa135e15513320703fafedebad13429ede1d49c271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e3745f5441e5970a977deaa135e15513320703fafedebad13429ede1d49c271->enter($__internal_1e3745f5441e5970a977deaa135e15513320703fafedebad13429ede1d49c271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_653f4077dfbc4667a1450c30da45062c43ba69a4be0282534035033506bc5a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653f4077dfbc4667a1450c30da45062c43ba69a4be0282534035033506bc5a8a->enter($__internal_653f4077dfbc4667a1450c30da45062c43ba69a4be0282534035033506bc5a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes(($context["listAttributes"] ?? $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_653f4077dfbc4667a1450c30da45062c43ba69a4be0282534035033506bc5a8a->leave($__internal_653f4077dfbc4667a1450c30da45062c43ba69a4be0282534035033506bc5a8a_prof);

        
        $__internal_1e3745f5441e5970a977deaa135e15513320703fafedebad13429ede1d49c271->leave($__internal_1e3745f5441e5970a977deaa135e15513320703fafedebad13429ede1d49c271_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_8aa5954ba36a0488d0ef049d82496ef2ebb1f0662c21977dca1907018c4fc8e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa5954ba36a0488d0ef049d82496ef2ebb1f0662c21977dca1907018c4fc8e8->enter($__internal_8aa5954ba36a0488d0ef049d82496ef2ebb1f0662c21977dca1907018c4fc8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_fbef598bb37abffdbaacd1b9ca0ba5ea836f74131b249f2165f9181c65017104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbef598bb37abffdbaacd1b9ca0ba5ea836f74131b249f2165f9181c65017104->enter($__internal_fbef598bb37abffdbaacd1b9ca0ba5ea836f74131b249f2165f9181c65017104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = ($context["options"] ?? $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = ($context["item"] ?? $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("depth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentItem"] ?? $this->getContext($context, "currentItem")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = ($context["currentItem"] ?? $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = ($context["currentOptions"] ?? $this->getContext($context, "currentOptions"));
        
        $__internal_fbef598bb37abffdbaacd1b9ca0ba5ea836f74131b249f2165f9181c65017104->leave($__internal_fbef598bb37abffdbaacd1b9ca0ba5ea836f74131b249f2165f9181c65017104_prof);

        
        $__internal_8aa5954ba36a0488d0ef049d82496ef2ebb1f0662c21977dca1907018c4fc8e8->leave($__internal_8aa5954ba36a0488d0ef049d82496ef2ebb1f0662c21977dca1907018c4fc8e8_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_4eb05e9e9b18b82ef32ac0ef3a1022b261d18c4ee8fe56e664f60718e008f206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb05e9e9b18b82ef32ac0ef3a1022b261d18c4ee8fe56e664f60718e008f206->enter($__internal_4eb05e9e9b18b82ef32ac0ef3a1022b261d18c4ee8fe56e664f60718e008f206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_f9a9d588d0d650d8c68d13ee08dc500b708a31889afe7bc0cd69d0e84e9fda77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a9d588d0d650d8c68d13ee08dc500b708a31889afe7bc0cd69d0e84e9fda77->enter($__internal_f9a9d588d0d650d8c68d13ee08dc500b708a31889afe7bc0cd69d0e84e9fda77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method") || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_f9a9d588d0d650d8c68d13ee08dc500b708a31889afe7bc0cd69d0e84e9fda77->leave($__internal_f9a9d588d0d650d8c68d13ee08dc500b708a31889afe7bc0cd69d0e84e9fda77_prof);

        
        $__internal_4eb05e9e9b18b82ef32ac0ef3a1022b261d18c4ee8fe56e664f60718e008f206->leave($__internal_4eb05e9e9b18b82ef32ac0ef3a1022b261d18c4ee8fe56e664f60718e008f206_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_e97be47f099c5de77b97fe32f8bbf014d9a7eae0f10bedec1b2a044c9b1925cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e97be47f099c5de77b97fe32f8bbf014d9a7eae0f10bedec1b2a044c9b1925cd->enter($__internal_e97be47f099c5de77b97fe32f8bbf014d9a7eae0f10bedec1b2a044c9b1925cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_0b5145b774690c798f95ba515f0aa11fe3c66c6844fdde7ced14208140ae154a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5145b774690c798f95ba515f0aa11fe3c66c6844fdde7ced14208140ae154a->enter($__internal_0b5145b774690c798f95ba515f0aa11fe3c66c6844fdde7ced14208140ae154a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_0b5145b774690c798f95ba515f0aa11fe3c66c6844fdde7ced14208140ae154a->leave($__internal_0b5145b774690c798f95ba515f0aa11fe3c66c6844fdde7ced14208140ae154a_prof);

        
        $__internal_e97be47f099c5de77b97fe32f8bbf014d9a7eae0f10bedec1b2a044c9b1925cd->leave($__internal_e97be47f099c5de77b97fe32f8bbf014d9a7eae0f10bedec1b2a044c9b1925cd_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_b65f1804613827564291122bc859e1edfefed6ca082b4c4e97e7e6cb985eb0c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b65f1804613827564291122bc859e1edfefed6ca082b4c4e97e7e6cb985eb0c0->enter($__internal_b65f1804613827564291122bc859e1edfefed6ca082b4c4e97e7e6cb985eb0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_68ba1a18215236920d3fb194d60b39bb869f28ede242a3a5c47bf47308abcb33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ba1a18215236920d3fb194d60b39bb869f28ede242a3a5c47bf47308abcb33->enter($__internal_68ba1a18215236920d3fb194d60b39bb869f28ede242a3a5c47bf47308abcb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_68ba1a18215236920d3fb194d60b39bb869f28ede242a3a5c47bf47308abcb33->leave($__internal_68ba1a18215236920d3fb194d60b39bb869f28ede242a3a5c47bf47308abcb33_prof);

        
        $__internal_b65f1804613827564291122bc859e1edfefed6ca082b4c4e97e7e6cb985eb0c0->leave($__internal_b65f1804613827564291122bc859e1edfefed6ca082b4c4e97e7e6cb985eb0c0_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_cba4b81a0ef5081afb0ad506f28f0d2230511d8174a90a52b37817b7b931b320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba4b81a0ef5081afb0ad506f28f0d2230511d8174a90a52b37817b7b931b320->enter($__internal_cba4b81a0ef5081afb0ad506f28f0d2230511d8174a90a52b37817b7b931b320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_d69d52cd0094b9286c099be2dbc115041aae4c4e738129a8131154868024891c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69d52cd0094b9286c099be2dbc115041aae4c4e738129a8131154868024891c->enter($__internal_d69d52cd0094b9286c099be2dbc115041aae4c4e738129a8131154868024891c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_d69d52cd0094b9286c099be2dbc115041aae4c4e738129a8131154868024891c->leave($__internal_d69d52cd0094b9286c099be2dbc115041aae4c4e738129a8131154868024891c_prof);

        
        $__internal_cba4b81a0ef5081afb0ad506f28f0d2230511d8174a90a52b37817b7b931b320->leave($__internal_cba4b81a0ef5081afb0ad506f28f0d2230511d8174a90a52b37817b7b931b320_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_9b4ce5698a1987f8a5ae4adbe9f943a549d40c482f781fee321efe11473c2663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_9b4ce5698a1987f8a5ae4adbe9f943a549d40c482f781fee321efe11473c2663->enter($__internal_9b4ce5698a1987f8a5ae4adbe9f943a549d40c482f781fee321efe11473c2663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_9038b1045865b03458cf6a59642cc4a73710fcc46a3dc684cec931d1312cd124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9038b1045865b03458cf6a59642cc4a73710fcc46a3dc684cec931d1312cd124->enter($__internal_9038b1045865b03458cf6a59642cc4a73710fcc46a3dc684cec931d1312cd124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_9038b1045865b03458cf6a59642cc4a73710fcc46a3dc684cec931d1312cd124->leave($__internal_9038b1045865b03458cf6a59642cc4a73710fcc46a3dc684cec931d1312cd124_prof);

            
            $__internal_9b4ce5698a1987f8a5ae4adbe9f943a549d40c482f781fee321efe11473c2663->leave($__internal_9b4ce5698a1987f8a5ae4adbe9f943a549d40c482f781fee321efe11473c2663_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "/Users/lala/Sites/instantpot/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu.html.twig");
    }
}
