<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_fe514bd32222b1d0f082074e36355d46c21e86f25095eec8526abc4e0df41af6 extends Twig_Template
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
        $__internal_3ac05373bf0439bd265df7fd6ca91839b774649a55912a561a44dbec4eea38d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ac05373bf0439bd265df7fd6ca91839b774649a55912a561a44dbec4eea38d6->enter($__internal_3ac05373bf0439bd265df7fd6ca91839b774649a55912a561a44dbec4eea38d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_c09db36471479e50c2c029f7c337f5a0f8e5b9026ecd3dc5716854c67ef13259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09db36471479e50c2c029f7c337f5a0f8e5b9026ecd3dc5716854c67ef13259->enter($__internal_c09db36471479e50c2c029f7c337f5a0f8e5b9026ecd3dc5716854c67ef13259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3ac05373bf0439bd265df7fd6ca91839b774649a55912a561a44dbec4eea38d6->leave($__internal_3ac05373bf0439bd265df7fd6ca91839b774649a55912a561a44dbec4eea38d6_prof);

        
        $__internal_c09db36471479e50c2c029f7c337f5a0f8e5b9026ecd3dc5716854c67ef13259->leave($__internal_c09db36471479e50c2c029f7c337f5a0f8e5b9026ecd3dc5716854c67ef13259_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Users/lala/Sites/instantpot/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
