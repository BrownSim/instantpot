<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c3b8886250fcbd5ad52838a1936c073938e2f92b43c2b52aef3e658a631243cd extends Twig_Template
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
        $__internal_9ebe5eeb365d49c5c7be87b1427c75c55cbe76e856f837f4dda14f984dac0880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ebe5eeb365d49c5c7be87b1427c75c55cbe76e856f837f4dda14f984dac0880->enter($__internal_9ebe5eeb365d49c5c7be87b1427c75c55cbe76e856f837f4dda14f984dac0880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_51c83941117b55f4f56864cf4c88bd59491f91e507dfc3c6efc24f1b184f4a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c83941117b55f4f56864cf4c88bd59491f91e507dfc3c6efc24f1b184f4a76->enter($__internal_51c83941117b55f4f56864cf4c88bd59491f91e507dfc3c6efc24f1b184f4a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9ebe5eeb365d49c5c7be87b1427c75c55cbe76e856f837f4dda14f984dac0880->leave($__internal_9ebe5eeb365d49c5c7be87b1427c75c55cbe76e856f837f4dda14f984dac0880_prof);

        
        $__internal_51c83941117b55f4f56864cf4c88bd59491f91e507dfc3c6efc24f1b184f4a76->leave($__internal_51c83941117b55f4f56864cf4c88bd59491f91e507dfc3c6efc24f1b184f4a76_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/lala/Sites/instantpot/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
