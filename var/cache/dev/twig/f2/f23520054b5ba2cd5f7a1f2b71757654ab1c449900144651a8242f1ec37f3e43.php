<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_d74e3f700b01cf05931947b8eed879e1b8a19a059d3ed5bdc1083feeddbdeab8 extends Twig_Template
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
        $__internal_c995e6cd21130193c139cf36c92549165b2a376f8e5d772beba97e5f06bef1bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c995e6cd21130193c139cf36c92549165b2a376f8e5d772beba97e5f06bef1bf->enter($__internal_c995e6cd21130193c139cf36c92549165b2a376f8e5d772beba97e5f06bef1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_349754ef811476ff4f3d5556a9af16c43fd7217b5b14300d2b2bebbdcb75b4d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349754ef811476ff4f3d5556a9af16c43fd7217b5b14300d2b2bebbdcb75b4d8->enter($__internal_349754ef811476ff4f3d5556a9af16c43fd7217b5b14300d2b2bebbdcb75b4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_c995e6cd21130193c139cf36c92549165b2a376f8e5d772beba97e5f06bef1bf->leave($__internal_c995e6cd21130193c139cf36c92549165b2a376f8e5d772beba97e5f06bef1bf_prof);

        
        $__internal_349754ef811476ff4f3d5556a9af16c43fd7217b5b14300d2b2bebbdcb75b4d8->leave($__internal_349754ef811476ff4f3d5556a9af16c43fd7217b5b14300d2b2bebbdcb75b4d8_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/Users/lala/Sites/instantpot/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
