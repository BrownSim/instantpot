<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_0b6c336c003ce27e7149f31f30562aa8fdb21a0dd9b9e0787e0a56667bb9cec0 extends Twig_Template
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
        $__internal_3c013a6c8733765c1f1915e92b20b240a53ee7baa0794b60dee023f504febad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c013a6c8733765c1f1915e92b20b240a53ee7baa0794b60dee023f504febad4->enter($__internal_3c013a6c8733765c1f1915e92b20b240a53ee7baa0794b60dee023f504febad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_c6de7683e87170713cb51927c8b2c5dc307b1724cc9470794d9c79b6717367b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6de7683e87170713cb51927c8b2c5dc307b1724cc9470794d9c79b6717367b2->enter($__internal_c6de7683e87170713cb51927c8b2c5dc307b1724cc9470794d9c79b6717367b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3c013a6c8733765c1f1915e92b20b240a53ee7baa0794b60dee023f504febad4->leave($__internal_3c013a6c8733765c1f1915e92b20b240a53ee7baa0794b60dee023f504febad4_prof);

        
        $__internal_c6de7683e87170713cb51927c8b2c5dc307b1724cc9470794d9c79b6717367b2->leave($__internal_c6de7683e87170713cb51927c8b2c5dc307b1724cc9470794d9c79b6717367b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/Users/lala/Sites/instantpot/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
