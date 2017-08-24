<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_930a2ea37ef8d79eb13c6e3292332bfa3c35ce6d40d2da208676b731326296e7 extends Twig_Template
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
        $__internal_6b0c3d33ff76496f62b42acb184200414625957ce5eddc6b29481c9673698dc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b0c3d33ff76496f62b42acb184200414625957ce5eddc6b29481c9673698dc9->enter($__internal_6b0c3d33ff76496f62b42acb184200414625957ce5eddc6b29481c9673698dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_5764ddfef38f4b735a419084b30aca8eac72f891a01d8544208cbb219e645c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5764ddfef38f4b735a419084b30aca8eac72f891a01d8544208cbb219e645c62->enter($__internal_5764ddfef38f4b735a419084b30aca8eac72f891a01d8544208cbb219e645c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_6b0c3d33ff76496f62b42acb184200414625957ce5eddc6b29481c9673698dc9->leave($__internal_6b0c3d33ff76496f62b42acb184200414625957ce5eddc6b29481c9673698dc9_prof);

        
        $__internal_5764ddfef38f4b735a419084b30aca8eac72f891a01d8544208cbb219e645c62->leave($__internal_5764ddfef38f4b735a419084b30aca8eac72f891a01d8544208cbb219e645c62_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Users/lala/Sites/instantpot/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
