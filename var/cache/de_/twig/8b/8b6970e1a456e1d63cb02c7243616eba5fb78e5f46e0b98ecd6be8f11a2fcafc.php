<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_dcf6401346f120a21d7d3d749a9573386e37b4a01bcc11e0ddc7ef8620d4307d extends Twig_Template
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
        $__internal_c023be830fa9f12f3c4d3e652a6699acb9008ce30a23072f10a5c83096f30317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c023be830fa9f12f3c4d3e652a6699acb9008ce30a23072f10a5c83096f30317->enter($__internal_c023be830fa9f12f3c4d3e652a6699acb9008ce30a23072f10a5c83096f30317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_7e1559dc5d14074c767dfb6afb828603b18be7c81c96284bca05abb5772efc49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1559dc5d14074c767dfb6afb828603b18be7c81c96284bca05abb5772efc49->enter($__internal_7e1559dc5d14074c767dfb6afb828603b18be7c81c96284bca05abb5772efc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c023be830fa9f12f3c4d3e652a6699acb9008ce30a23072f10a5c83096f30317->leave($__internal_c023be830fa9f12f3c4d3e652a6699acb9008ce30a23072f10a5c83096f30317_prof);

        
        $__internal_7e1559dc5d14074c767dfb6afb828603b18be7c81c96284bca05abb5772efc49->leave($__internal_7e1559dc5d14074c767dfb6afb828603b18be7c81c96284bca05abb5772efc49_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Users/lala/Sites/instantpot/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
