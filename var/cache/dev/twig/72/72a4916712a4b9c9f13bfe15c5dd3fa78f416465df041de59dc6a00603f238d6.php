<?php

/* base.html.twig */
class __TwigTemplate_4db01c470d3a6c43024f315e30aa48bbe0a620d48027ff32d274f62796ef192c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_617be11a96117401b05a3e79b49508328612cbcc44dd1c39770f5057dc8010ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617be11a96117401b05a3e79b49508328612cbcc44dd1c39770f5057dc8010ff->enter($__internal_617be11a96117401b05a3e79b49508328612cbcc44dd1c39770f5057dc8010ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e506746bf160a1b90d0308bf5bae314389e81cd393e021d1a9b8a6bb47516a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e506746bf160a1b90d0308bf5bae314389e81cd393e021d1a9b8a6bb47516a6e->enter($__internal_e506746bf160a1b90d0308bf5bae314389e81cd393e021d1a9b8a6bb47516a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_617be11a96117401b05a3e79b49508328612cbcc44dd1c39770f5057dc8010ff->leave($__internal_617be11a96117401b05a3e79b49508328612cbcc44dd1c39770f5057dc8010ff_prof);

        
        $__internal_e506746bf160a1b90d0308bf5bae314389e81cd393e021d1a9b8a6bb47516a6e->leave($__internal_e506746bf160a1b90d0308bf5bae314389e81cd393e021d1a9b8a6bb47516a6e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f096aac5e7792fce0149d4a3297c9a07a6b7355f81224f446cf3a884b0f59774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f096aac5e7792fce0149d4a3297c9a07a6b7355f81224f446cf3a884b0f59774->enter($__internal_f096aac5e7792fce0149d4a3297c9a07a6b7355f81224f446cf3a884b0f59774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60d88bd7dc1df9be7ff0cebc7fa5f398d20caac189a9b26bb35c1d465a73e231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d88bd7dc1df9be7ff0cebc7fa5f398d20caac189a9b26bb35c1d465a73e231->enter($__internal_60d88bd7dc1df9be7ff0cebc7fa5f398d20caac189a9b26bb35c1d465a73e231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_60d88bd7dc1df9be7ff0cebc7fa5f398d20caac189a9b26bb35c1d465a73e231->leave($__internal_60d88bd7dc1df9be7ff0cebc7fa5f398d20caac189a9b26bb35c1d465a73e231_prof);

        
        $__internal_f096aac5e7792fce0149d4a3297c9a07a6b7355f81224f446cf3a884b0f59774->leave($__internal_f096aac5e7792fce0149d4a3297c9a07a6b7355f81224f446cf3a884b0f59774_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d9d116915d39eacec5a2cd94029a3f07ef9b0f58637f1a19b8348b6e4825790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d9d116915d39eacec5a2cd94029a3f07ef9b0f58637f1a19b8348b6e4825790->enter($__internal_1d9d116915d39eacec5a2cd94029a3f07ef9b0f58637f1a19b8348b6e4825790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bbef8e64fd9985df2918613c93f27c706d869ae6d3796ed29fe233b87391e3af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbef8e64fd9985df2918613c93f27c706d869ae6d3796ed29fe233b87391e3af->enter($__internal_bbef8e64fd9985df2918613c93f27c706d869ae6d3796ed29fe233b87391e3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bbef8e64fd9985df2918613c93f27c706d869ae6d3796ed29fe233b87391e3af->leave($__internal_bbef8e64fd9985df2918613c93f27c706d869ae6d3796ed29fe233b87391e3af_prof);

        
        $__internal_1d9d116915d39eacec5a2cd94029a3f07ef9b0f58637f1a19b8348b6e4825790->leave($__internal_1d9d116915d39eacec5a2cd94029a3f07ef9b0f58637f1a19b8348b6e4825790_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dda03ebbeee1445dc2042e03e475c1aea25c32b240e381477c4c7b9f6ace320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dda03ebbeee1445dc2042e03e475c1aea25c32b240e381477c4c7b9f6ace320->enter($__internal_2dda03ebbeee1445dc2042e03e475c1aea25c32b240e381477c4c7b9f6ace320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0a2a3cdf9ec456216f24bf9f64a3d5c89a623f4db90ce336ee2646908b26530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a2a3cdf9ec456216f24bf9f64a3d5c89a623f4db90ce336ee2646908b26530->enter($__internal_e0a2a3cdf9ec456216f24bf9f64a3d5c89a623f4db90ce336ee2646908b26530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e0a2a3cdf9ec456216f24bf9f64a3d5c89a623f4db90ce336ee2646908b26530->leave($__internal_e0a2a3cdf9ec456216f24bf9f64a3d5c89a623f4db90ce336ee2646908b26530_prof);

        
        $__internal_2dda03ebbeee1445dc2042e03e475c1aea25c32b240e381477c4c7b9f6ace320->leave($__internal_2dda03ebbeee1445dc2042e03e475c1aea25c32b240e381477c4c7b9f6ace320_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_661d80c77ce22817ca1bd9641884dd8ef6fb48c36479a92fc5cbac93839fbc16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_661d80c77ce22817ca1bd9641884dd8ef6fb48c36479a92fc5cbac93839fbc16->enter($__internal_661d80c77ce22817ca1bd9641884dd8ef6fb48c36479a92fc5cbac93839fbc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2a97182ecbacb646d7c933b300e1d551843e990008ab043a59665ff8a99025f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a97182ecbacb646d7c933b300e1d551843e990008ab043a59665ff8a99025f2->enter($__internal_2a97182ecbacb646d7c933b300e1d551843e990008ab043a59665ff8a99025f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2a97182ecbacb646d7c933b300e1d551843e990008ab043a59665ff8a99025f2->leave($__internal_2a97182ecbacb646d7c933b300e1d551843e990008ab043a59665ff8a99025f2_prof);

        
        $__internal_661d80c77ce22817ca1bd9641884dd8ef6fb48c36479a92fc5cbac93839fbc16->leave($__internal_661d80c77ce22817ca1bd9641884dd8ef6fb48c36479a92fc5cbac93839fbc16_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/lala/Sites/instantpot/app/Resources/views/base.html.twig");
    }
}
