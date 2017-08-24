<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a672591edece5f28a6e9416a074070b10ee02d01188d511ecefb8b5cd8c65577 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8888cae05708bd91a44693cf3b734c3816400d84e1a714361dfbcd5943b6fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8888cae05708bd91a44693cf3b734c3816400d84e1a714361dfbcd5943b6fc6->enter($__internal_e8888cae05708bd91a44693cf3b734c3816400d84e1a714361dfbcd5943b6fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e2758b6c4ad0fb35e5ca7d1be7568f8b09e6caf04bbe3c538ce265ba88d430d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2758b6c4ad0fb35e5ca7d1be7568f8b09e6caf04bbe3c538ce265ba88d430d5->enter($__internal_e2758b6c4ad0fb35e5ca7d1be7568f8b09e6caf04bbe3c538ce265ba88d430d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8888cae05708bd91a44693cf3b734c3816400d84e1a714361dfbcd5943b6fc6->leave($__internal_e8888cae05708bd91a44693cf3b734c3816400d84e1a714361dfbcd5943b6fc6_prof);

        
        $__internal_e2758b6c4ad0fb35e5ca7d1be7568f8b09e6caf04bbe3c538ce265ba88d430d5->leave($__internal_e2758b6c4ad0fb35e5ca7d1be7568f8b09e6caf04bbe3c538ce265ba88d430d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_760f207c9abfd48c4a7bfaed31dd0268cd5b909325c3aaf3d6889a8ced953164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760f207c9abfd48c4a7bfaed31dd0268cd5b909325c3aaf3d6889a8ced953164->enter($__internal_760f207c9abfd48c4a7bfaed31dd0268cd5b909325c3aaf3d6889a8ced953164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_93737dc86b54bf220143439d03621295024784db6ffa10a46cad3c92d932d721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93737dc86b54bf220143439d03621295024784db6ffa10a46cad3c92d932d721->enter($__internal_93737dc86b54bf220143439d03621295024784db6ffa10a46cad3c92d932d721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_93737dc86b54bf220143439d03621295024784db6ffa10a46cad3c92d932d721->leave($__internal_93737dc86b54bf220143439d03621295024784db6ffa10a46cad3c92d932d721_prof);

        
        $__internal_760f207c9abfd48c4a7bfaed31dd0268cd5b909325c3aaf3d6889a8ced953164->leave($__internal_760f207c9abfd48c4a7bfaed31dd0268cd5b909325c3aaf3d6889a8ced953164_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d417597d01169d86463cd5bec7e4a5d49de0e330784c8c429cfea4fec8611873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d417597d01169d86463cd5bec7e4a5d49de0e330784c8c429cfea4fec8611873->enter($__internal_d417597d01169d86463cd5bec7e4a5d49de0e330784c8c429cfea4fec8611873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_502ad35bf56f8f8872a82fff10747a377142b7be50e07496d6b0296fb8b9db9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_502ad35bf56f8f8872a82fff10747a377142b7be50e07496d6b0296fb8b9db9d->enter($__internal_502ad35bf56f8f8872a82fff10747a377142b7be50e07496d6b0296fb8b9db9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_502ad35bf56f8f8872a82fff10747a377142b7be50e07496d6b0296fb8b9db9d->leave($__internal_502ad35bf56f8f8872a82fff10747a377142b7be50e07496d6b0296fb8b9db9d_prof);

        
        $__internal_d417597d01169d86463cd5bec7e4a5d49de0e330784c8c429cfea4fec8611873->leave($__internal_d417597d01169d86463cd5bec7e4a5d49de0e330784c8c429cfea4fec8611873_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2377092ae31edeab66100b14c548961410e3e268aa6580732af654f9a626b50b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2377092ae31edeab66100b14c548961410e3e268aa6580732af654f9a626b50b->enter($__internal_2377092ae31edeab66100b14c548961410e3e268aa6580732af654f9a626b50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99bd559f6c3ccff28ef9891dbedb3a5abcfeae416e9929da55fce9541740025c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99bd559f6c3ccff28ef9891dbedb3a5abcfeae416e9929da55fce9541740025c->enter($__internal_99bd559f6c3ccff28ef9891dbedb3a5abcfeae416e9929da55fce9541740025c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_99bd559f6c3ccff28ef9891dbedb3a5abcfeae416e9929da55fce9541740025c->leave($__internal_99bd559f6c3ccff28ef9891dbedb3a5abcfeae416e9929da55fce9541740025c_prof);

        
        $__internal_2377092ae31edeab66100b14c548961410e3e268aa6580732af654f9a626b50b->leave($__internal_2377092ae31edeab66100b14c548961410e3e268aa6580732af654f9a626b50b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/lala/Sites/instantpot/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
