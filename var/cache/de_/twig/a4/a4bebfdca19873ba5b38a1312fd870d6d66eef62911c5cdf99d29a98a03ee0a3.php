<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_54502c6cd3d1d109480f6668e23ce92edbee328710143063d803041bdfac44a8 extends Twig_Template
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
        $__internal_e09da03a4cba29dcbfd9dc1dc6f560241fb04c7fbc01e53eee733f3c3c075557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e09da03a4cba29dcbfd9dc1dc6f560241fb04c7fbc01e53eee733f3c3c075557->enter($__internal_e09da03a4cba29dcbfd9dc1dc6f560241fb04c7fbc01e53eee733f3c3c075557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_beecccd29dca6128706e89d9390f5a75fcf9fd06288e33edbdcf38bc073e70ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beecccd29dca6128706e89d9390f5a75fcf9fd06288e33edbdcf38bc073e70ab->enter($__internal_beecccd29dca6128706e89d9390f5a75fcf9fd06288e33edbdcf38bc073e70ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e09da03a4cba29dcbfd9dc1dc6f560241fb04c7fbc01e53eee733f3c3c075557->leave($__internal_e09da03a4cba29dcbfd9dc1dc6f560241fb04c7fbc01e53eee733f3c3c075557_prof);

        
        $__internal_beecccd29dca6128706e89d9390f5a75fcf9fd06288e33edbdcf38bc073e70ab->leave($__internal_beecccd29dca6128706e89d9390f5a75fcf9fd06288e33edbdcf38bc073e70ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Users/lala/Sites/instantpot/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
