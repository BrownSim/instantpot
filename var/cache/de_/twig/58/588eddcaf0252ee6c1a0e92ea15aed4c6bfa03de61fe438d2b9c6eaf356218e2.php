<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bee293ff9519429f8285dd6d14f0b6b26fdee7f13df5b340608442e3fdda48b7 extends Twig_Template
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
        $__internal_7bac4b02740fb8f8a21bdf8336a2a34589ce18193d7e515079bb4a76f0d6cc5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bac4b02740fb8f8a21bdf8336a2a34589ce18193d7e515079bb4a76f0d6cc5b->enter($__internal_7bac4b02740fb8f8a21bdf8336a2a34589ce18193d7e515079bb4a76f0d6cc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_d1d8212457388177fa1aed979bdbb733d10ec2e4d6a201942f4e5f8eeb308a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d8212457388177fa1aed979bdbb733d10ec2e4d6a201942f4e5f8eeb308a38->enter($__internal_d1d8212457388177fa1aed979bdbb733d10ec2e4d6a201942f4e5f8eeb308a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_7bac4b02740fb8f8a21bdf8336a2a34589ce18193d7e515079bb4a76f0d6cc5b->leave($__internal_7bac4b02740fb8f8a21bdf8336a2a34589ce18193d7e515079bb4a76f0d6cc5b_prof);

        
        $__internal_d1d8212457388177fa1aed979bdbb733d10ec2e4d6a201942f4e5f8eeb308a38->leave($__internal_d1d8212457388177fa1aed979bdbb733d10ec2e4d6a201942f4e5f8eeb308a38_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/Users/lala/Sites/instantpot/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
