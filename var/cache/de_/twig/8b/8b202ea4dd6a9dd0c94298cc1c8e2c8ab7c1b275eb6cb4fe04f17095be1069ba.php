<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b522b39956ecdcfdc16b553d007f8903a3a65bcfc7c1605e283c62e0736bc721 extends Twig_Template
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
        $__internal_796bceb271e077b6f8895c16351853155c914bdb3d6fc1673d4d9cb1317daafd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_796bceb271e077b6f8895c16351853155c914bdb3d6fc1673d4d9cb1317daafd->enter($__internal_796bceb271e077b6f8895c16351853155c914bdb3d6fc1673d4d9cb1317daafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_80c9a0bcef83c51fa52b1b60681a08cc23f76b07547d9bbdf96b47d78bbc6f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c9a0bcef83c51fa52b1b60681a08cc23f76b07547d9bbdf96b47d78bbc6f02->enter($__internal_80c9a0bcef83c51fa52b1b60681a08cc23f76b07547d9bbdf96b47d78bbc6f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_796bceb271e077b6f8895c16351853155c914bdb3d6fc1673d4d9cb1317daafd->leave($__internal_796bceb271e077b6f8895c16351853155c914bdb3d6fc1673d4d9cb1317daafd_prof);

        
        $__internal_80c9a0bcef83c51fa52b1b60681a08cc23f76b07547d9bbdf96b47d78bbc6f02->leave($__internal_80c9a0bcef83c51fa52b1b60681a08cc23f76b07547d9bbdf96b47d78bbc6f02_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Users/lala/Sites/instantpot/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
