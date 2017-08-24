<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_1be2252925bc1dfcc3deba76a448949e0db02e9a32b656dc132f1fd70954a01d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a92475b13d2eb24a32ea9ba6f584cd7c4d8cbc68437b49625dddf2e5e94d061c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a92475b13d2eb24a32ea9ba6f584cd7c4d8cbc68437b49625dddf2e5e94d061c->enter($__internal_a92475b13d2eb24a32ea9ba6f584cd7c4d8cbc68437b49625dddf2e5e94d061c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c312944f90e8f68ce095dc5b337f2d1d475a448685256c136cf6e321c3f0afbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c312944f90e8f68ce095dc5b337f2d1d475a448685256c136cf6e321c3f0afbd->enter($__internal_c312944f90e8f68ce095dc5b337f2d1d475a448685256c136cf6e321c3f0afbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_a92475b13d2eb24a32ea9ba6f584cd7c4d8cbc68437b49625dddf2e5e94d061c->leave($__internal_a92475b13d2eb24a32ea9ba6f584cd7c4d8cbc68437b49625dddf2e5e94d061c_prof);

        
        $__internal_c312944f90e8f68ce095dc5b337f2d1d475a448685256c136cf6e321c3f0afbd->leave($__internal_c312944f90e8f68ce095dc5b337f2d1d475a448685256c136cf6e321c3f0afbd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a9b47d9160c5a83b69cef38c9a53fd076b72a8bb88e5ffc0253d09bd41b8eff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a9b47d9160c5a83b69cef38c9a53fd076b72a8bb88e5ffc0253d09bd41b8eff->enter($__internal_0a9b47d9160c5a83b69cef38c9a53fd076b72a8bb88e5ffc0253d09bd41b8eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8c872a6d0f30e0338185f030c0581dfe39072d0b90dae917934daeb3813e4a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c872a6d0f30e0338185f030c0581dfe39072d0b90dae917934daeb3813e4a72->enter($__internal_8c872a6d0f30e0338185f030c0581dfe39072d0b90dae917934daeb3813e4a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8c872a6d0f30e0338185f030c0581dfe39072d0b90dae917934daeb3813e4a72->leave($__internal_8c872a6d0f30e0338185f030c0581dfe39072d0b90dae917934daeb3813e4a72_prof);

        
        $__internal_0a9b47d9160c5a83b69cef38c9a53fd076b72a8bb88e5ffc0253d09bd41b8eff->leave($__internal_0a9b47d9160c5a83b69cef38c9a53fd076b72a8bb88e5ffc0253d09bd41b8eff_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_93045c3ce0783dc7cbb14506b1bb75e444a6aadee720f8f55a5176fb77df2411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93045c3ce0783dc7cbb14506b1bb75e444a6aadee720f8f55a5176fb77df2411->enter($__internal_93045c3ce0783dc7cbb14506b1bb75e444a6aadee720f8f55a5176fb77df2411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0c0acb0edbab552d1e9174a80c330982e7025a4949c20c7daf86df1e598cab7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0acb0edbab552d1e9174a80c330982e7025a4949c20c7daf86df1e598cab7b->enter($__internal_0c0acb0edbab552d1e9174a80c330982e7025a4949c20c7daf86df1e598cab7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0c0acb0edbab552d1e9174a80c330982e7025a4949c20c7daf86df1e598cab7b->leave($__internal_0c0acb0edbab552d1e9174a80c330982e7025a4949c20c7daf86df1e598cab7b_prof);

        
        $__internal_93045c3ce0783dc7cbb14506b1bb75e444a6aadee720f8f55a5176fb77df2411->leave($__internal_93045c3ce0783dc7cbb14506b1bb75e444a6aadee720f8f55a5176fb77df2411_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d9dab9b0baa52de80638c4d96ffbe445fc67fa1050f14b4623bf0f89c80268b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d9dab9b0baa52de80638c4d96ffbe445fc67fa1050f14b4623bf0f89c80268b->enter($__internal_0d9dab9b0baa52de80638c4d96ffbe445fc67fa1050f14b4623bf0f89c80268b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d8008467ef97a883fcdfd63e1c47d11ac5e403902e2880e25150e070481950a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8008467ef97a883fcdfd63e1c47d11ac5e403902e2880e25150e070481950a->enter($__internal_7d8008467ef97a883fcdfd63e1c47d11ac5e403902e2880e25150e070481950a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7d8008467ef97a883fcdfd63e1c47d11ac5e403902e2880e25150e070481950a->leave($__internal_7d8008467ef97a883fcdfd63e1c47d11ac5e403902e2880e25150e070481950a_prof);

        
        $__internal_0d9dab9b0baa52de80638c4d96ffbe445fc67fa1050f14b4623bf0f89c80268b->leave($__internal_0d9dab9b0baa52de80638c4d96ffbe445fc67fa1050f14b4623bf0f89c80268b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/lala/Sites/instantpot/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
