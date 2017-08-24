<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5226fe453509622e0239ada20afa467004694610e48f52308e5bd51b8eae2ea3 extends Twig_Template
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
        $__internal_1265e771c0d9a7098b4b7c4690be36f2a7378bd533b649a8d1f2a9cb2007fdf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1265e771c0d9a7098b4b7c4690be36f2a7378bd533b649a8d1f2a9cb2007fdf7->enter($__internal_1265e771c0d9a7098b4b7c4690be36f2a7378bd533b649a8d1f2a9cb2007fdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_66c21656f341f4b43eff0cd6e4fb77f97cd88596e9085e581c1af09acc7324d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c21656f341f4b43eff0cd6e4fb77f97cd88596e9085e581c1af09acc7324d6->enter($__internal_66c21656f341f4b43eff0cd6e4fb77f97cd88596e9085e581c1af09acc7324d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1265e771c0d9a7098b4b7c4690be36f2a7378bd533b649a8d1f2a9cb2007fdf7->leave($__internal_1265e771c0d9a7098b4b7c4690be36f2a7378bd533b649a8d1f2a9cb2007fdf7_prof);

        
        $__internal_66c21656f341f4b43eff0cd6e4fb77f97cd88596e9085e581c1af09acc7324d6->leave($__internal_66c21656f341f4b43eff0cd6e4fb77f97cd88596e9085e581c1af09acc7324d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/Users/lala/Sites/instantpot/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
