<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_080131830e75c28924b09fb7a1c95e0176611bce6cdb4fb5fb52d8463f9dd01b extends Twig_Template
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
        $__internal_7d8d71a579df42c27c77061fefb3b84d98a355d3f81f9104e90d67bc3f3ffea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d8d71a579df42c27c77061fefb3b84d98a355d3f81f9104e90d67bc3f3ffea7->enter($__internal_7d8d71a579df42c27c77061fefb3b84d98a355d3f81f9104e90d67bc3f3ffea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_f3031c0623fd4de9b834642b800db7a116182bb771e0ca88d5336b78b289b484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3031c0623fd4de9b834642b800db7a116182bb771e0ca88d5336b78b289b484->enter($__internal_f3031c0623fd4de9b834642b800db7a116182bb771e0ca88d5336b78b289b484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_7d8d71a579df42c27c77061fefb3b84d98a355d3f81f9104e90d67bc3f3ffea7->leave($__internal_7d8d71a579df42c27c77061fefb3b84d98a355d3f81f9104e90d67bc3f3ffea7_prof);

        
        $__internal_f3031c0623fd4de9b834642b800db7a116182bb771e0ca88d5336b78b289b484->leave($__internal_f3031c0623fd4de9b834642b800db7a116182bb771e0ca88d5336b78b289b484_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/lala/Sites/instantpot/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
