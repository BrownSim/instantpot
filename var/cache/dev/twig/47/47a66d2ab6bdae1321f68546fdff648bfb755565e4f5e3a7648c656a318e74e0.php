<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_8e96cc230d65f7424a4dd8a9a51e6b89d47493645b6b4a6cf05b7128c4013dad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b7848b83cc66d117aa32689986d72c047eb9cfc2c486c25f3d43688d3f2dd92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7848b83cc66d117aa32689986d72c047eb9cfc2c486c25f3d43688d3f2dd92->enter($__internal_3b7848b83cc66d117aa32689986d72c047eb9cfc2c486c25f3d43688d3f2dd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        $__internal_07503f29645a8d374a5753a6d908c04a66009373392eec2ae16fda463ab03680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07503f29645a8d374a5753a6d908c04a66009373392eec2ae16fda463ab03680->enter($__internal_07503f29645a8d374a5753a6d908c04a66009373392eec2ae16fda463ab03680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 24
        echo "
<!DOCTYPE html>
<html ";
        // line 26
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 28
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "
        <title>
        ";
        // line 90
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 116
        echo "        </title>
    </head>
    <body ";
        // line 118
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 122
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 221
        echo "
        ";
        // line 222
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 355
        echo "    </div>

    ";
        // line 357
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 358
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 364
            echo "    ";
        }
        // line 365
        echo "
    </body>
</html>
";
        
        $__internal_3b7848b83cc66d117aa32689986d72c047eb9cfc2c486c25f3d43688d3f2dd92->leave($__internal_3b7848b83cc66d117aa32689986d72c047eb9cfc2c486c25f3d43688d3f2dd92_prof);

        
        $__internal_07503f29645a8d374a5753a6d908c04a66009373392eec2ae16fda463ab03680->leave($__internal_07503f29645a8d374a5753a6d908c04a66009373392eec2ae16fda463ab03680_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_eb53d84b407e64a618938feea130bde5540438dd95b9fe24fd95a83727ecdfef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb53d84b407e64a618938feea130bde5540438dd95b9fe24fd95a83727ecdfef->enter($__internal_eb53d84b407e64a618938feea130bde5540438dd95b9fe24fd95a83727ecdfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_a7ca26729a94b381579d3e64a916a9e7b0dbaadf273f07e1f0e251eef2c9af5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ca26729a94b381579d3e64a916a9e7b0dbaadf273f07e1f0e251eef2c9af5c->enter($__internal_a7ca26729a94b381579d3e64a916a9e7b0dbaadf273f07e1f0e251eef2c9af5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_a7ca26729a94b381579d3e64a916a9e7b0dbaadf273f07e1f0e251eef2c9af5c->leave($__internal_a7ca26729a94b381579d3e64a916a9e7b0dbaadf273f07e1f0e251eef2c9af5c_prof);

        
        $__internal_eb53d84b407e64a618938feea130bde5540438dd95b9fe24fd95a83727ecdfef->leave($__internal_eb53d84b407e64a618938feea130bde5540438dd95b9fe24fd95a83727ecdfef_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_8993de8ffae4ad90a2fd616855f6dc55a3a23e47db72e9905dcb7228b2ea7d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8993de8ffae4ad90a2fd616855f6dc55a3a23e47db72e9905dcb7228b2ea7d1f->enter($__internal_8993de8ffae4ad90a2fd616855f6dc55a3a23e47db72e9905dcb7228b2ea7d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_6032e99b4585147cb1f75ba0ca94579d187d45b9e84c31bc233f47eaf1837bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6032e99b4585147cb1f75ba0ca94579d187d45b9e84c31bc233f47eaf1837bae->enter($__internal_6032e99b4585147cb1f75ba0ca94579d187d45b9e84c31bc233f47eaf1837bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_6032e99b4585147cb1f75ba0ca94579d187d45b9e84c31bc233f47eaf1837bae->leave($__internal_6032e99b4585147cb1f75ba0ca94579d187d45b9e84c31bc233f47eaf1837bae_prof);

        
        $__internal_8993de8ffae4ad90a2fd616855f6dc55a3a23e47db72e9905dcb7228b2ea7d1f->leave($__internal_8993de8ffae4ad90a2fd616855f6dc55a3a23e47db72e9905dcb7228b2ea7d1f_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_47d93bf5408bb9e7e8de551101a9bfb14d23c5527dd00513e9844614416a152b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d93bf5408bb9e7e8de551101a9bfb14d23c5527dd00513e9844614416a152b->enter($__internal_47d93bf5408bb9e7e8de551101a9bfb14d23c5527dd00513e9844614416a152b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d3d5f48c4ddf4edf7e3b999c91ca62a213797650b8bc4fa4d82f411a1a608f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d5f48c4ddf4edf7e3b999c91ca62a213797650b8bc4fa4d82f411a1a608f05->enter($__internal_d3d5f48c4ddf4edf7e3b999c91ca62a213797650b8bc4fa4d82f411a1a608f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 36
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
        
        $__internal_d3d5f48c4ddf4edf7e3b999c91ca62a213797650b8bc4fa4d82f411a1a608f05->leave($__internal_d3d5f48c4ddf4edf7e3b999c91ca62a213797650b8bc4fa4d82f411a1a608f05_prof);

        
        $__internal_47d93bf5408bb9e7e8de551101a9bfb14d23c5527dd00513e9844614416a152b->leave($__internal_47d93bf5408bb9e7e8de551101a9bfb14d23c5527dd00513e9844614416a152b_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cc5c3ee844083d3806b192a3033626fb66b57d58df0bdcae3f9f96a230754e28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5c3ee844083d3806b192a3033626fb66b57d58df0bdcae3f9f96a230754e28->enter($__internal_cc5c3ee844083d3806b192a3033626fb66b57d58df0bdcae3f9f96a230754e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0312596f122456939c05d2212cb583dd4964b07ecf6bd10e1700aeed2d8cf22d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0312596f122456939c05d2212cb583dd4964b07ecf6bd10e1700aeed2d8cf22d->enter($__internal_0312596f122456939c05d2212cb583dd4964b07ecf6bd10e1700aeed2d8cf22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        $context["locale"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(twig_lower_filter($this->env,             // line 73
($context["locale"] ?? $this->getContext($context, "locale"))), array("_" => "-"))) . ".js")), "html", null, true);
            // line 75
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            ";
        // line 79
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 80
            echo "                ";
            if ((($context["locale"] ?? $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 81
            echo "
                ";
            // line 83
            echo "                ";
            if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 84
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter(($context["locale"] ?? $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
        
        $__internal_0312596f122456939c05d2212cb583dd4964b07ecf6bd10e1700aeed2d8cf22d->leave($__internal_0312596f122456939c05d2212cb583dd4964b07ecf6bd10e1700aeed2d8cf22d_prof);

        
        $__internal_cc5c3ee844083d3806b192a3033626fb66b57d58df0bdcae3f9f96a230754e28->leave($__internal_cc5c3ee844083d3806b192a3033626fb66b57d58df0bdcae3f9f96a230754e28_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_b39bc1659c1eeecb0558f51936dc14fb98992823ced12a2614ba152c5864daf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b39bc1659c1eeecb0558f51936dc14fb98992823ced12a2614ba152c5864daf0->enter($__internal_b39bc1659c1eeecb0558f51936dc14fb98992823ced12a2614ba152c5864daf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_d7f41cebf7db56f6d05bd79cbb7692451db098eb2663fe0d89ea3122610421cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f41cebf7db56f6d05bd79cbb7692451db098eb2663fe0d89ea3122610421cc->enter($__internal_d7f41cebf7db56f6d05bd79cbb7692451db098eb2663fe0d89ea3122610421cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 42
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 44
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 45
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 46
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 47
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 48
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            ";
        
        $__internal_d7f41cebf7db56f6d05bd79cbb7692451db098eb2663fe0d89ea3122610421cc->leave($__internal_d7f41cebf7db56f6d05bd79cbb7692451db098eb2663fe0d89ea3122610421cc_prof);

        
        $__internal_b39bc1659c1eeecb0558f51936dc14fb98992823ced12a2614ba152c5864daf0->leave($__internal_b39bc1659c1eeecb0558f51936dc14fb98992823ced12a2614ba152c5864daf0_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_502b603d782f04aad1726303e4ffc9b9cac6cb9febbc7e1c1f2d5dd6c13197bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_502b603d782f04aad1726303e4ffc9b9cac6cb9febbc7e1c1f2d5dd6c13197bb->enter($__internal_502b603d782f04aad1726303e4ffc9b9cac6cb9febbc7e1c1f2d5dd6c13197bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_58078615e0bc811c9267d095939e51e57adf14b6a3648ca8acb59947a7ad0ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58078615e0bc811c9267d095939e51e57adf14b6a3648ca8acb59947a7ad0ebb->enter($__internal_58078615e0bc811c9267d095939e51e57adf14b6a3648ca8acb59947a7ad0ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 64
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            ";
        
        $__internal_58078615e0bc811c9267d095939e51e57adf14b6a3648ca8acb59947a7ad0ebb->leave($__internal_58078615e0bc811c9267d095939e51e57adf14b6a3648ca8acb59947a7ad0ebb_prof);

        
        $__internal_502b603d782f04aad1726303e4ffc9b9cac6cb9febbc7e1c1f2d5dd6c13197bb->leave($__internal_502b603d782f04aad1726303e4ffc9b9cac6cb9febbc7e1c1f2d5dd6c13197bb_prof);

    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_b1fb81ea3a8caeebd8379939b1e2af0c8952d7e44ef5ce8c478c575c931cf48e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1fb81ea3a8caeebd8379939b1e2af0c8952d7e44ef5ce8c478c575c931cf48e->enter($__internal_b1fb81ea3a8caeebd8379939b1e2af0c8952d7e44ef5ce8c478c575c931cf48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_85d92397ca4b85dbf599f0814ccd01d510863dee33419bba95b67cca8e391ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d92397ca4b85dbf599f0814ccd01d510863dee33419bba95b67cca8e391ace->enter($__internal_85d92397ca4b85dbf599f0814ccd01d510863dee33419bba95b67cca8e391ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 91
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 93
        if ( !twig_test_empty(($context["_title"] ?? $this->getContext($context, "_title")))) {
            // line 94
            echo "                ";
            echo ($context["_title"] ?? $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 96
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 97
                echo "                    -
                    ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 99
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 100
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 101
                            echo "                                &gt;
                            ";
                        }
                        // line 104
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 105
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 106
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 107
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 110
                        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                        echo "
                        ";
                    }
                    // line 112
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                ";
            }
            // line 114
            echo "            ";
        }
        // line 115
        echo "        ";
        
        $__internal_85d92397ca4b85dbf599f0814ccd01d510863dee33419bba95b67cca8e391ace->leave($__internal_85d92397ca4b85dbf599f0814ccd01d510863dee33419bba95b67cca8e391ace_prof);

        
        $__internal_b1fb81ea3a8caeebd8379939b1e2af0c8952d7e44ef5ce8c478c575c931cf48e->leave($__internal_b1fb81ea3a8caeebd8379939b1e2af0c8952d7e44ef5ce8c478c575c931cf48e_prof);

    }

    // line 118
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_28860be51adee82827014d4ee2b472640539fc9f73e6870793645e9ba26c6b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28860be51adee82827014d4ee2b472640539fc9f73e6870793645e9ba26c6b73->enter($__internal_28860be51adee82827014d4ee2b472640539fc9f73e6870793645e9ba26c6b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_bf413734791ef2b442c97b9d85f398ab1b46feceb1c4801046a445d2008c4d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf413734791ef2b442c97b9d85f398ab1b46feceb1c4801046a445d2008c4d8c->enter($__internal_bf413734791ef2b442c97b9d85f398ab1b46feceb1c4801046a445d2008c4d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_bf413734791ef2b442c97b9d85f398ab1b46feceb1c4801046a445d2008c4d8c->leave($__internal_bf413734791ef2b442c97b9d85f398ab1b46feceb1c4801046a445d2008c4d8c_prof);

        
        $__internal_28860be51adee82827014d4ee2b472640539fc9f73e6870793645e9ba26c6b73->leave($__internal_28860be51adee82827014d4ee2b472640539fc9f73e6870793645e9ba26c6b73_prof);

    }

    // line 122
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_4a761adb9a12388a3f60ab37bbdac18881649ae5ee27adf6b157e697ceb1853a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a761adb9a12388a3f60ab37bbdac18881649ae5ee27adf6b157e697ceb1853a->enter($__internal_4a761adb9a12388a3f60ab37bbdac18881649ae5ee27adf6b157e697ceb1853a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_867dc937befa2996bdede50f4e85cdeee88366e7bac3e1106c5067b8873e8ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867dc937befa2996bdede50f4e85cdeee88366e7bac3e1106c5067b8873e8ab9->enter($__internal_867dc937befa2996bdede50f4e85cdeee88366e7bac3e1106c5067b8873e8ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 123
        echo "            <header class=\"main-header\">
                ";
        // line 124
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 131
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 143
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 219
        echo "            </header>
        ";
        
        $__internal_867dc937befa2996bdede50f4e85cdeee88366e7bac3e1106c5067b8873e8ab9->leave($__internal_867dc937befa2996bdede50f4e85cdeee88366e7bac3e1106c5067b8873e8ab9_prof);

        
        $__internal_4a761adb9a12388a3f60ab37bbdac18881649ae5ee27adf6b157e697ceb1853a->leave($__internal_4a761adb9a12388a3f60ab37bbdac18881649ae5ee27adf6b157e697ceb1853a_prof);

    }

    // line 124
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_bc31b50be40f5a5a1dad179adeaa3e1175c1ef847aa119091bf418f66317808e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc31b50be40f5a5a1dad179adeaa3e1175c1ef847aa119091bf418f66317808e->enter($__internal_bc31b50be40f5a5a1dad179adeaa3e1175c1ef847aa119091bf418f66317808e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_056b94b4c2acd409e265b2944c0791a3625ba1a757fe20155f658caacdee86e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056b94b4c2acd409e265b2944c0791a3625ba1a757fe20155f658caacdee86e0->enter($__internal_056b94b4c2acd409e265b2944c0791a3625ba1a757fe20155f658caacdee86e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 125
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_056b94b4c2acd409e265b2944c0791a3625ba1a757fe20155f658caacdee86e0->leave($__internal_056b94b4c2acd409e265b2944c0791a3625ba1a757fe20155f658caacdee86e0_prof);

        
        $__internal_bc31b50be40f5a5a1dad179adeaa3e1175c1ef847aa119091bf418f66317808e->leave($__internal_bc31b50be40f5a5a1dad179adeaa3e1175c1ef847aa119091bf418f66317808e_prof);

    }

    // line 131
    public function block_logo($context, array $blocks = array())
    {
        $__internal_8ffcbac77c55d501f9f214e0bcc1b9888a7afe97f337f7ec1569dcf2c474cd6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ffcbac77c55d501f9f214e0bcc1b9888a7afe97f337f7ec1569dcf2c474cd6a->enter($__internal_8ffcbac77c55d501f9f214e0bcc1b9888a7afe97f337f7ec1569dcf2c474cd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_2704f6ab1424450045474f716effce02cf02c359290903c3ff7d72ce3ae5ac2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2704f6ab1424450045474f716effce02cf02c359290903c3ff7d72ce3ae5ac2f->enter($__internal_2704f6ab1424450045474f716effce02cf02c359290903c3ff7d72ce3ae5ac2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 132
        echo "                    ";
        ob_start();
        // line 133
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 134
        if ((("single_image" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 135
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 137
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 138
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 140
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 142
        echo "                ";
        
        $__internal_2704f6ab1424450045474f716effce02cf02c359290903c3ff7d72ce3ae5ac2f->leave($__internal_2704f6ab1424450045474f716effce02cf02c359290903c3ff7d72ce3ae5ac2f_prof);

        
        $__internal_8ffcbac77c55d501f9f214e0bcc1b9888a7afe97f337f7ec1569dcf2c474cd6a->leave($__internal_8ffcbac77c55d501f9f214e0bcc1b9888a7afe97f337f7ec1569dcf2c474cd6a_prof);

    }

    // line 143
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_6088fbeb174b0569261bdb8bfb6f30fcb656881c02d88a0895fc9fb335e4d58e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6088fbeb174b0569261bdb8bfb6f30fcb656881c02d88a0895fc9fb335e4d58e->enter($__internal_6088fbeb174b0569261bdb8bfb6f30fcb656881c02d88a0895fc9fb335e4d58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_a0532eafc2738e34987292564073785b911a4f6ea8273b1e98e2aa4a3c1d2779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0532eafc2738e34987292564073785b911a4f6ea8273b1e98e2aa4a3c1d2779->enter($__internal_a0532eafc2738e34987292564073785b911a4f6ea8273b1e98e2aa4a3c1d2779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 144
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 150
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 189
        echo "                        </div>

                        ";
        // line 191
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 217
        echo "                    </nav>
                ";
        
        $__internal_a0532eafc2738e34987292564073785b911a4f6ea8273b1e98e2aa4a3c1d2779->leave($__internal_a0532eafc2738e34987292564073785b911a4f6ea8273b1e98e2aa4a3c1d2779_prof);

        
        $__internal_6088fbeb174b0569261bdb8bfb6f30fcb656881c02d88a0895fc9fb335e4d58e->leave($__internal_6088fbeb174b0569261bdb8bfb6f30fcb656881c02d88a0895fc9fb335e4d58e_prof);

    }

    // line 150
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_f1b13889740beb4d6ef7b684c88e1991e0c0b04f02ff0086405ba6f700755fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b13889740beb4d6ef7b684c88e1991e0c0b04f02ff0086405ba6f700755fec->enter($__internal_f1b13889740beb4d6ef7b684c88e1991e0c0b04f02ff0086405ba6f700755fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_9ff53f4f97afce942445b37156dbd68278173a99cda223f0ea76c5a38e6c5e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ff53f4f97afce942445b37156dbd68278173a99cda223f0ea76c5a38e6c5e6d->enter($__internal_9ff53f4f97afce942445b37156dbd68278173a99cda223f0ea76c5a38e6c5e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 151
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 152
        if (( !twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 153
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 154
            if (twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb")))) {
                // line 155
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 156
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 157
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 158
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 159
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 160
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 163
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 164
                            echo "                                                            <li>
                                                                ";
                            // line 165
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 166
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 167
                                if ($this->getAttribute($context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 168
                                    echo ($context["label"] ?? $this->getContext($context, "label"));
                                } else {
                                    // line 170
                                    echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                }
                                // line 172
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 174
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 176
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 178
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 180
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    echo "                                                ";
                }
                // line 182
                echo "                                            ";
            } else {
                // line 183
                echo "                                                ";
                echo ($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 185
            echo "                                        </ol>
                                    ";
        }
        // line 187
        echo "                                </div>
                            ";
        
        $__internal_9ff53f4f97afce942445b37156dbd68278173a99cda223f0ea76c5a38e6c5e6d->leave($__internal_9ff53f4f97afce942445b37156dbd68278173a99cda223f0ea76c5a38e6c5e6d_prof);

        
        $__internal_f1b13889740beb4d6ef7b684c88e1991e0c0b04f02ff0086405ba6f700755fec->leave($__internal_f1b13889740beb4d6ef7b684c88e1991e0c0b04f02ff0086405ba6f700755fec_prof);

    }

    // line 191
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_19fce63b5b2618976698038ee98b0c89ac9de032c239ede358618a2265611517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19fce63b5b2618976698038ee98b0c89ac9de032c239ede358618a2265611517->enter($__internal_19fce63b5b2618976698038ee98b0c89ac9de032c239ede358618a2265611517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_76d90bd92655cac4d4ed6c122c038c8f5cc087d7ddf4a126ebcf2da842f25229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d90bd92655cac4d4ed6c122c038c8f5cc087d7ddf4a126ebcf2da842f25229->enter($__internal_76d90bd92655cac4d4ed6c122c038c8f5cc087d7ddf4a126ebcf2da842f25229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 192
        echo "                            ";
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 193
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 195
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 203
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 213
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 216
        echo "                        ";
        
        $__internal_76d90bd92655cac4d4ed6c122c038c8f5cc087d7ddf4a126ebcf2da842f25229->leave($__internal_76d90bd92655cac4d4ed6c122c038c8f5cc087d7ddf4a126ebcf2da842f25229_prof);

        
        $__internal_19fce63b5b2618976698038ee98b0c89ac9de032c239ede358618a2265611517->leave($__internal_19fce63b5b2618976698038ee98b0c89ac9de032c239ede358618a2265611517_prof);

    }

    // line 195
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_837727faa7eb93a7cc63231b95de66586eb239faec23ee425eb5a2e91ab67fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837727faa7eb93a7cc63231b95de66586eb239faec23ee425eb5a2e91ab67fa8->enter($__internal_837727faa7eb93a7cc63231b95de66586eb239faec23ee425eb5a2e91ab67fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_3545d3dcee1693638e2c832959f5d5c2ffec095ff019155e9c2f5f73d0c5b817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3545d3dcee1693638e2c832959f5d5c2ffec095ff019155e9c2f5f73d0c5b817->enter($__internal_3545d3dcee1693638e2c832959f5d5c2ffec095ff019155e9c2f5f73d0c5b817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 196
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 200
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 200)->display($context);
        // line 201
        echo "                                            </li>
                                        ";
        
        $__internal_3545d3dcee1693638e2c832959f5d5c2ffec095ff019155e9c2f5f73d0c5b817->leave($__internal_3545d3dcee1693638e2c832959f5d5c2ffec095ff019155e9c2f5f73d0c5b817_prof);

        
        $__internal_837727faa7eb93a7cc63231b95de66586eb239faec23ee425eb5a2e91ab67fa8->leave($__internal_837727faa7eb93a7cc63231b95de66586eb239faec23ee425eb5a2e91ab67fa8_prof);

    }

    // line 203
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_4bf5dbb9af9b6113a4aa30d2c8bc28b52aed28b1ab4282c8436058b2d22cae95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf5dbb9af9b6113a4aa30d2c8bc28b52aed28b1ab4282c8436058b2d22cae95->enter($__internal_4bf5dbb9af9b6113a4aa30d2c8bc28b52aed28b1ab4282c8436058b2d22cae95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_0d44b8aac953f11237ed2afd1830b96fbd479c06992fda8453da7ca83444644a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d44b8aac953f11237ed2afd1830b96fbd479c06992fda8453da7ca83444644a->enter($__internal_0d44b8aac953f11237ed2afd1830b96fbd479c06992fda8453da7ca83444644a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 204
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 209
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 209)->display($context);
        // line 210
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_0d44b8aac953f11237ed2afd1830b96fbd479c06992fda8453da7ca83444644a->leave($__internal_0d44b8aac953f11237ed2afd1830b96fbd479c06992fda8453da7ca83444644a_prof);

        
        $__internal_4bf5dbb9af9b6113a4aa30d2c8bc28b52aed28b1ab4282c8436058b2d22cae95->leave($__internal_4bf5dbb9af9b6113a4aa30d2c8bc28b52aed28b1ab4282c8436058b2d22cae95_prof);

    }

    // line 222
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_e486955b33d12fdd4b9f6c5b1ab50b46024f47d1ef5003094946682b4812b3ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e486955b33d12fdd4b9f6c5b1ab50b46024f47d1ef5003094946682b4812b3ac->enter($__internal_e486955b33d12fdd4b9f6c5b1ab50b46024f47d1ef5003094946682b4812b3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_2765de607f66dcd67b26c62f3a3ca6bcc60a430e2955ba6a6a808258fd9dbb82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2765de607f66dcd67b26c62f3a3ca6bcc60a430e2955ba6a6a808258fd9dbb82->enter($__internal_2765de607f66dcd67b26c62f3a3ca6bcc60a430e2955ba6a6a808258fd9dbb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 223
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 255
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 257
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 353
        echo "            </div>
        ";
        
        $__internal_2765de607f66dcd67b26c62f3a3ca6bcc60a430e2955ba6a6a808258fd9dbb82->leave($__internal_2765de607f66dcd67b26c62f3a3ca6bcc60a430e2955ba6a6a808258fd9dbb82_prof);

        
        $__internal_e486955b33d12fdd4b9f6c5b1ab50b46024f47d1ef5003094946682b4812b3ac->leave($__internal_e486955b33d12fdd4b9f6c5b1ab50b46024f47d1ef5003094946682b4812b3ac_prof);

    }

    // line 223
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_160209168df33afcb57ac2dad1d4220c12902029706eb73250b1afbc7f56c422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_160209168df33afcb57ac2dad1d4220c12902029706eb73250b1afbc7f56c422->enter($__internal_160209168df33afcb57ac2dad1d4220c12902029706eb73250b1afbc7f56c422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_5ccee7893f33fe55f9a7d68309bbadc9c167a138fc48a943308359d321110189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ccee7893f33fe55f9a7d68309bbadc9c167a138fc48a943308359d321110189->enter($__internal_5ccee7893f33fe55f9a7d68309bbadc9c167a138fc48a943308359d321110189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 224
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 226
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 252
        echo "                    </section>
                </aside>
            ";
        
        $__internal_5ccee7893f33fe55f9a7d68309bbadc9c167a138fc48a943308359d321110189->leave($__internal_5ccee7893f33fe55f9a7d68309bbadc9c167a138fc48a943308359d321110189_prof);

        
        $__internal_160209168df33afcb57ac2dad1d4220c12902029706eb73250b1afbc7f56c422->leave($__internal_160209168df33afcb57ac2dad1d4220c12902029706eb73250b1afbc7f56c422_prof);

    }

    // line 226
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_ae31e9a061037599c7f658d1e76f6232311db09ec692d282e7018e9f504f0aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae31e9a061037599c7f658d1e76f6232311db09ec692d282e7018e9f504f0aca->enter($__internal_ae31e9a061037599c7f658d1e76f6232311db09ec692d282e7018e9f504f0aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_209f013243fef3edb59e1015aee2cc35b55621778c32e4828673b9982631754f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_209f013243fef3edb59e1015aee2cc35b55621778c32e4828673b9982631754f->enter($__internal_209f013243fef3edb59e1015aee2cc35b55621778c32e4828673b9982631754f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 227
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 239
        echo "
                            ";
        // line 240
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 241
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 244
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 251
        echo "                        ";
        
        $__internal_209f013243fef3edb59e1015aee2cc35b55621778c32e4828673b9982631754f->leave($__internal_209f013243fef3edb59e1015aee2cc35b55621778c32e4828673b9982631754f_prof);

        
        $__internal_ae31e9a061037599c7f658d1e76f6232311db09ec692d282e7018e9f504f0aca->leave($__internal_ae31e9a061037599c7f658d1e76f6232311db09ec692d282e7018e9f504f0aca_prof);

    }

    // line 227
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_156fd7f0c3bea8b4a8fb3cf8cb936d6b387bdde3e8908a76bf8059fe2c03e931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156fd7f0c3bea8b4a8fb3cf8cb936d6b387bdde3e8908a76bf8059fe2c03e931->enter($__internal_156fd7f0c3bea8b4a8fb3cf8cb936d6b387bdde3e8908a76bf8059fe2c03e931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_77bd3acf19c9686767f9fd635e52f73b625834459d1c8032b6e46d869c9e1317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77bd3acf19c9686767f9fd635e52f73b625834459d1c8032b6e46d869c9e1317->enter($__internal_77bd3acf19c9686767f9fd635e52f73b625834459d1c8032b6e46d869c9e1317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 228
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            ";
        
        $__internal_77bd3acf19c9686767f9fd635e52f73b625834459d1c8032b6e46d869c9e1317->leave($__internal_77bd3acf19c9686767f9fd635e52f73b625834459d1c8032b6e46d869c9e1317_prof);

        
        $__internal_156fd7f0c3bea8b4a8fb3cf8cb936d6b387bdde3e8908a76bf8059fe2c03e931->leave($__internal_156fd7f0c3bea8b4a8fb3cf8cb936d6b387bdde3e8908a76bf8059fe2c03e931_prof);

    }

    // line 240
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_9f02e936e85c64cf6a4aeb60842327e8979c0250c19b97b1e867514f65049bf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f02e936e85c64cf6a4aeb60842327e8979c0250c19b97b1e867514f65049bf5->enter($__internal_9f02e936e85c64cf6a4aeb60842327e8979c0250c19b97b1e867514f65049bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_1be32c10fab349e8d8d32dbcfad423b77ea7c2caa9b68e4ba5f3b3618b7d1867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be32c10fab349e8d8d32dbcfad423b77ea7c2caa9b68e4ba5f3b3618b7d1867->enter($__internal_1be32c10fab349e8d8d32dbcfad423b77ea7c2caa9b68e4ba5f3b3618b7d1867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_1be32c10fab349e8d8d32dbcfad423b77ea7c2caa9b68e4ba5f3b3618b7d1867->leave($__internal_1be32c10fab349e8d8d32dbcfad423b77ea7c2caa9b68e4ba5f3b3618b7d1867_prof);

        
        $__internal_9f02e936e85c64cf6a4aeb60842327e8979c0250c19b97b1e867514f65049bf5->leave($__internal_9f02e936e85c64cf6a4aeb60842327e8979c0250c19b97b1e867514f65049bf5_prof);

    }

    // line 241
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_b26f828a3202de5a4bb5689cd6a4344e4b3a80a69117274578f6f123297c8603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b26f828a3202de5a4bb5689cd6a4344e4b3a80a69117274578f6f123297c8603->enter($__internal_b26f828a3202de5a4bb5689cd6a4344e4b3a80a69117274578f6f123297c8603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_766c8a5139a7b7b97e8139b139e8c8e992bc857f44b4dc58d0e2979fbe063bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_766c8a5139a7b7b97e8139b139e8c8e992bc857f44b4dc58d0e2979fbe063bac->enter($__internal_766c8a5139a7b7b97e8139b139e8c8e992bc857f44b4dc58d0e2979fbe063bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 242
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_766c8a5139a7b7b97e8139b139e8c8e992bc857f44b4dc58d0e2979fbe063bac->leave($__internal_766c8a5139a7b7b97e8139b139e8c8e992bc857f44b4dc58d0e2979fbe063bac_prof);

        
        $__internal_b26f828a3202de5a4bb5689cd6a4344e4b3a80a69117274578f6f123297c8603->leave($__internal_b26f828a3202de5a4bb5689cd6a4344e4b3a80a69117274578f6f123297c8603_prof);

    }

    // line 244
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_ed24c7a5fcf7c29d6ecb25dd405d840bdd43cf5d6e0d7c10dc556edaa09ef4d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed24c7a5fcf7c29d6ecb25dd405d840bdd43cf5d6e0d7c10dc556edaa09ef4d4->enter($__internal_ed24c7a5fcf7c29d6ecb25dd405d840bdd43cf5d6e0d7c10dc556edaa09ef4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_2a8961b1f59a636ca00dd1efe7ed51ac169247c6647061f90a8ca98cb4508f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8961b1f59a636ca00dd1efe7ed51ac169247c6647061f90a8ca98cb4508f60->enter($__internal_2a8961b1f59a636ca00dd1efe7ed51ac169247c6647061f90a8ca98cb4508f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 245
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 246
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 249
        echo "                                </p>
                            ";
        
        $__internal_2a8961b1f59a636ca00dd1efe7ed51ac169247c6647061f90a8ca98cb4508f60->leave($__internal_2a8961b1f59a636ca00dd1efe7ed51ac169247c6647061f90a8ca98cb4508f60_prof);

        
        $__internal_ed24c7a5fcf7c29d6ecb25dd405d840bdd43cf5d6e0d7c10dc556edaa09ef4d4->leave($__internal_ed24c7a5fcf7c29d6ecb25dd405d840bdd43cf5d6e0d7c10dc556edaa09ef4d4_prof);

    }

    // line 246
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_1065481204e319423089f057bec5d4b855b21d1f27a6afde430cc15d6fc13f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1065481204e319423089f057bec5d4b855b21d1f27a6afde430cc15d6fc13f56->enter($__internal_1065481204e319423089f057bec5d4b855b21d1f27a6afde430cc15d6fc13f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_d95b7585a398d484ce204f7708574e424c31002e4b30cafe265e94957ec52a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95b7585a398d484ce204f7708574e424c31002e4b30cafe265e94957ec52a2e->enter($__internal_d95b7585a398d484ce204f7708574e424c31002e4b30cafe265e94957ec52a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 247
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_d95b7585a398d484ce204f7708574e424c31002e4b30cafe265e94957ec52a2e->leave($__internal_d95b7585a398d484ce204f7708574e424c31002e4b30cafe265e94957ec52a2e_prof);

        
        $__internal_1065481204e319423089f057bec5d4b855b21d1f27a6afde430cc15d6fc13f56->leave($__internal_1065481204e319423089f057bec5d4b855b21d1f27a6afde430cc15d6fc13f56_prof);

    }

    // line 257
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_9d7d3e520d09c00ee85a376c8446b54f802e7b3d0465b5c8646530456a2dab36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d7d3e520d09c00ee85a376c8446b54f802e7b3d0465b5c8646530456a2dab36->enter($__internal_9d7d3e520d09c00ee85a376c8446b54f802e7b3d0465b5c8646530456a2dab36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_10efb4c53f8e68e713a49287f7c77bcac4a292dccf2353f307bdb443647b92c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10efb4c53f8e68e713a49287f7c77bcac4a292dccf2353f307bdb443647b92c8->enter($__internal_10efb4c53f8e68e713a49287f7c77bcac4a292dccf2353f307bdb443647b92c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 258
        echo "                    <section class=\"content-header\">

                        ";
        // line 260
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 314
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 317
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 351
        echo "                    </section>
                ";
        
        $__internal_10efb4c53f8e68e713a49287f7c77bcac4a292dccf2353f307bdb443647b92c8->leave($__internal_10efb4c53f8e68e713a49287f7c77bcac4a292dccf2353f307bdb443647b92c8_prof);

        
        $__internal_9d7d3e520d09c00ee85a376c8446b54f802e7b3d0465b5c8646530456a2dab36->leave($__internal_9d7d3e520d09c00ee85a376c8446b54f802e7b3d0465b5c8646530456a2dab36_prof);

    }

    // line 260
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_e718f8e6a4f288cfcba2b807cc22b2ba99c9d39c9bec3355f8caacacbc88da70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e718f8e6a4f288cfcba2b807cc22b2ba99c9d39c9bec3355f8caacacbc88da70->enter($__internal_e718f8e6a4f288cfcba2b807cc22b2ba99c9d39c9bec3355f8caacacbc88da70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_f31ff2475628dd2496ce8f67b013751b2ca1500e0bf9d66fcb8ec18bb04e9056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31ff2475628dd2496ce8f67b013751b2ca1500e0bf9d66fcb8ec18bb04e9056->enter($__internal_f31ff2475628dd2496ce8f67b013751b2ca1500e0bf9d66fcb8ec18bb04e9056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 261
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 313
        echo "                        ";
        
        $__internal_f31ff2475628dd2496ce8f67b013751b2ca1500e0bf9d66fcb8ec18bb04e9056->leave($__internal_f31ff2475628dd2496ce8f67b013751b2ca1500e0bf9d66fcb8ec18bb04e9056_prof);

        
        $__internal_e718f8e6a4f288cfcba2b807cc22b2ba99c9d39c9bec3355f8caacacbc88da70->leave($__internal_e718f8e6a4f288cfcba2b807cc22b2ba99c9d39c9bec3355f8caacacbc88da70_prof);

    }

    // line 261
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_98cf275c66ce752e594495afd14539aecb513f39bf7671267d7ad8692f010810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98cf275c66ce752e594495afd14539aecb513f39bf7671267d7ad8692f010810->enter($__internal_98cf275c66ce752e594495afd14539aecb513f39bf7671267d7ad8692f010810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_465e3c7db63bfd54ac22912d6afafc9d5c6bff3d7d09d414239f48a1827e2b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465e3c7db63bfd54ac22912d6afafc9d5c6bff3d7d09d414239f48a1827e2b74->enter($__internal_465e3c7db63bfd54ac22912d6afafc9d5c6bff3d7d09d414239f48a1827e2b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 262
        echo "                                ";
        if ((( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty(($context["_actions"] ?? $this->getContext($context, "_actions")))) ||  !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"))))) {
            // line 263
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 265
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 272
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 274
            if ( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu")))) {
                // line 275
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 276
                echo ($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"));
                echo "
                                                    </div>
                                                ";
            }
            // line 279
            echo "
                                                ";
            // line 280
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && (($context["action"] ?? $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 281
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 282
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 283
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 285
                echo "                                                    </div>
                                                ";
            }
            // line 287
            echo "
                                                ";
            // line 288
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 304
            echo "
                                                ";
            // line 305
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions")))) {
                // line 306
                echo "                                                    ";
                echo ($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 308
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 312
        echo "                            ";
        
        $__internal_465e3c7db63bfd54ac22912d6afafc9d5c6bff3d7d09d414239f48a1827e2b74->leave($__internal_465e3c7db63bfd54ac22912d6afafc9d5c6bff3d7d09d414239f48a1827e2b74_prof);

        
        $__internal_98cf275c66ce752e594495afd14539aecb513f39bf7671267d7ad8692f010810->leave($__internal_98cf275c66ce752e594495afd14539aecb513f39bf7671267d7ad8692f010810_prof);

    }

    // line 265
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_43e1cf9a1c10e2e81a921b3f55c012b2eb91dc0f4244a6904b309e23e8ac15ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e1cf9a1c10e2e81a921b3f55c012b2eb91dc0f4244a6904b309e23e8ac15ef->enter($__internal_43e1cf9a1c10e2e81a921b3f55c012b2eb91dc0f4244a6904b309e23e8ac15ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_5251a14f0da89eb68e732b9b609f16973eb322986db94fc229f4165e58b7ab0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5251a14f0da89eb68e732b9b609f16973eb322986db94fc229f4165e58b7ab0a->enter($__internal_5251a14f0da89eb68e732b9b609f16973eb322986db94fc229f4165e58b7ab0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 266
        echo "                                                ";
        if ( !twig_test_empty(($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title")))) {
            // line 267
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 268
            echo ($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 271
        echo "                                            ";
        
        $__internal_5251a14f0da89eb68e732b9b609f16973eb322986db94fc229f4165e58b7ab0a->leave($__internal_5251a14f0da89eb68e732b9b609f16973eb322986db94fc229f4165e58b7ab0a_prof);

        
        $__internal_43e1cf9a1c10e2e81a921b3f55c012b2eb91dc0f4244a6904b309e23e8ac15ef->leave($__internal_43e1cf9a1c10e2e81a921b3f55c012b2eb91dc0f4244a6904b309e23e8ac15ef_prof);

    }

    // line 288
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_3c9039eb12053e2b0386609e838e7e7607c589366d5289a94db144ed82558a2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c9039eb12053e2b0386609e838e7e7607c589366d5289a94db144ed82558a2d->enter($__internal_3c9039eb12053e2b0386609e838e7e7607c589366d5289a94db144ed82558a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_04b853e207f451515a4e45d0aa6000de4a5129d5f7b20007087a2e204f99be30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b853e207f451515a4e45d0aa6000de4a5129d5f7b20007087a2e204f99be30->enter($__internal_04b853e207f451515a4e45d0aa6000de4a5129d5f7b20007087a2e204f99be30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 289
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter(($context["_actions"] ?? $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 290
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 291
            if ((twig_length_filter($this->env, twig_split_filter($this->env, ($context["_actions"] ?? $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 292
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 293
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 295
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 299
                echo "                                                            ";
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 301
            echo "                                                        </ul>
                                                    ";
        }
        // line 303
        echo "                                                ";
        
        $__internal_04b853e207f451515a4e45d0aa6000de4a5129d5f7b20007087a2e204f99be30->leave($__internal_04b853e207f451515a4e45d0aa6000de4a5129d5f7b20007087a2e204f99be30_prof);

        
        $__internal_3c9039eb12053e2b0386609e838e7e7607c589366d5289a94db144ed82558a2d->leave($__internal_3c9039eb12053e2b0386609e838e7e7607c589366d5289a94db144ed82558a2d_prof);

    }

    // line 317
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_b76f74c80bf925999e5f2f13917158c3660f1498b6aceeb2c1e5880b30969be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b76f74c80bf925999e5f2f13917158c3660f1498b6aceeb2c1e5880b30969be7->enter($__internal_b76f74c80bf925999e5f2f13917158c3660f1498b6aceeb2c1e5880b30969be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_9df77bdfb17bca3032f6b6d01f62881a8b55b73f02a3ae616855eb8b43a68533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df77bdfb17bca3032f6b6d01f62881a8b55b73f02a3ae616855eb8b43a68533->enter($__internal_9df77bdfb17bca3032f6b6d01f62881a8b55b73f02a3ae616855eb8b43a68533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 318
        echo "
                            ";
        // line 319
        $this->displayBlock('notice', $context, $blocks);
        // line 322
        echo "
                            ";
        // line 323
        if ( !twig_test_empty(($context["_preview"] ?? $this->getContext($context, "_preview")))) {
            // line 324
            echo "                                <div class=\"sonata-ba-preview\">";
            echo ($context["_preview"] ?? $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 326
        echo "
                            ";
        // line 327
        if ( !twig_test_empty(($context["_content"] ?? $this->getContext($context, "_content")))) {
            // line 328
            echo "                                <div class=\"sonata-ba-content\">";
            echo ($context["_content"] ?? $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 330
        echo "
                            ";
        // line 331
        if ( !twig_test_empty(($context["_show"] ?? $this->getContext($context, "_show")))) {
            // line 332
            echo "                                <div class=\"sonata-ba-show\">";
            echo ($context["_show"] ?? $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 334
        echo "
                            ";
        // line 335
        if ( !twig_test_empty(($context["_form"] ?? $this->getContext($context, "_form")))) {
            // line 336
            echo "                                <div class=\"sonata-ba-form\">";
            echo ($context["_form"] ?? $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 338
        echo "
                            ";
        // line 339
        if ( !twig_test_empty(($context["_list_filters"] ?? $this->getContext($context, "_list_filters")))) {
            // line 340
            echo "                                <div class=\"row\">
                                    ";
            // line 341
            echo ($context["_list_filters"] ?? $this->getContext($context, "_list_filters"));
            echo "
                                </div>
                            ";
        }
        // line 344
        echo "
                            ";
        // line 345
        if ( !twig_test_empty(($context["_list_table"] ?? $this->getContext($context, "_list_table")))) {
            // line 346
            echo "                                <div class=\"row\">
                                    ";
            // line 347
            echo ($context["_list_table"] ?? $this->getContext($context, "_list_table"));
            echo "
                                </div>
                            ";
        }
        // line 350
        echo "                        ";
        
        $__internal_9df77bdfb17bca3032f6b6d01f62881a8b55b73f02a3ae616855eb8b43a68533->leave($__internal_9df77bdfb17bca3032f6b6d01f62881a8b55b73f02a3ae616855eb8b43a68533_prof);

        
        $__internal_b76f74c80bf925999e5f2f13917158c3660f1498b6aceeb2c1e5880b30969be7->leave($__internal_b76f74c80bf925999e5f2f13917158c3660f1498b6aceeb2c1e5880b30969be7_prof);

    }

    // line 319
    public function block_notice($context, array $blocks = array())
    {
        $__internal_0732d03ac170d65c72c23547eebdebc465b52fc77b28f729aa394d268563ec6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0732d03ac170d65c72c23547eebdebc465b52fc77b28f729aa394d268563ec6c->enter($__internal_0732d03ac170d65c72c23547eebdebc465b52fc77b28f729aa394d268563ec6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_a3bce58883e87890e09be83aa8b312b70e2efa70ed3868d5200ca6e131e6c464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3bce58883e87890e09be83aa8b312b70e2efa70ed3868d5200ca6e131e6c464->enter($__internal_a3bce58883e87890e09be83aa8b312b70e2efa70ed3868d5200ca6e131e6c464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 320
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 320)->display($context);
        // line 321
        echo "                            ";
        
        $__internal_a3bce58883e87890e09be83aa8b312b70e2efa70ed3868d5200ca6e131e6c464->leave($__internal_a3bce58883e87890e09be83aa8b312b70e2efa70ed3868d5200ca6e131e6c464_prof);

        
        $__internal_0732d03ac170d65c72c23547eebdebc465b52fc77b28f729aa394d268563ec6c->leave($__internal_0732d03ac170d65c72c23547eebdebc465b52fc77b28f729aa394d268563ec6c_prof);

    }

    // line 358
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_228ab0a6258e744024fb5daa088a25f07b50df6d5a1dbda1de267dca3d815f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_228ab0a6258e744024fb5daa088a25f07b50df6d5a1dbda1de267dca3d815f89->enter($__internal_228ab0a6258e744024fb5daa088a25f07b50df6d5a1dbda1de267dca3d815f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_84e97530434c95f0b4d681dbc82906951667e9aab95d0f16bb7efbf231b14fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e97530434c95f0b4d681dbc82906951667e9aab95d0f16bb7efbf231b14fab->enter($__internal_84e97530434c95f0b4d681dbc82906951667e9aab95d0f16bb7efbf231b14fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 359
        echo "            ";
        // line 360
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_84e97530434c95f0b4d681dbc82906951667e9aab95d0f16bb7efbf231b14fab->leave($__internal_84e97530434c95f0b4d681dbc82906951667e9aab95d0f16bb7efbf231b14fab_prof);

        
        $__internal_228ab0a6258e744024fb5daa088a25f07b50df6d5a1dbda1de267dca3d815f89->leave($__internal_228ab0a6258e744024fb5daa088a25f07b50df6d5a1dbda1de267dca3d815f89_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1458 => 360,  1456 => 359,  1447 => 358,  1437 => 321,  1434 => 320,  1425 => 319,  1415 => 350,  1409 => 347,  1406 => 346,  1404 => 345,  1401 => 344,  1395 => 341,  1392 => 340,  1390 => 339,  1387 => 338,  1381 => 336,  1379 => 335,  1376 => 334,  1370 => 332,  1368 => 331,  1365 => 330,  1359 => 328,  1357 => 327,  1354 => 326,  1348 => 324,  1346 => 323,  1343 => 322,  1341 => 319,  1338 => 318,  1329 => 317,  1319 => 303,  1315 => 301,  1309 => 299,  1302 => 295,  1297 => 293,  1294 => 292,  1292 => 291,  1289 => 290,  1286 => 289,  1277 => 288,  1267 => 271,  1261 => 268,  1258 => 267,  1255 => 266,  1246 => 265,  1236 => 312,  1230 => 308,  1224 => 306,  1222 => 305,  1219 => 304,  1217 => 288,  1214 => 287,  1210 => 285,  1195 => 283,  1191 => 282,  1188 => 281,  1186 => 280,  1183 => 279,  1177 => 276,  1174 => 275,  1172 => 274,  1168 => 272,  1166 => 265,  1162 => 263,  1159 => 262,  1150 => 261,  1140 => 313,  1137 => 261,  1128 => 260,  1117 => 351,  1115 => 317,  1110 => 314,  1108 => 260,  1104 => 258,  1095 => 257,  1084 => 247,  1075 => 246,  1064 => 249,  1062 => 246,  1059 => 245,  1050 => 244,  1037 => 242,  1028 => 241,  1010 => 240,  989 => 230,  983 => 228,  974 => 227,  964 => 251,  961 => 244,  958 => 241,  956 => 240,  953 => 239,  950 => 227,  941 => 226,  929 => 252,  927 => 226,  923 => 224,  914 => 223,  903 => 353,  901 => 257,  897 => 255,  894 => 223,  885 => 222,  873 => 210,  871 => 209,  864 => 204,  855 => 203,  844 => 201,  842 => 200,  836 => 196,  827 => 195,  817 => 216,  812 => 213,  809 => 203,  807 => 195,  803 => 193,  800 => 192,  791 => 191,  780 => 187,  776 => 185,  770 => 183,  767 => 182,  764 => 181,  750 => 180,  744 => 178,  740 => 176,  734 => 174,  730 => 172,  727 => 170,  724 => 168,  722 => 167,  717 => 166,  715 => 165,  712 => 164,  710 => 163,  707 => 160,  705 => 159,  703 => 158,  701 => 157,  683 => 156,  680 => 155,  678 => 154,  675 => 153,  673 => 152,  670 => 151,  661 => 150,  650 => 217,  648 => 191,  644 => 189,  642 => 150,  634 => 144,  625 => 143,  615 => 142,  611 => 140,  605 => 138,  602 => 137,  594 => 135,  592 => 134,  587 => 133,  584 => 132,  575 => 131,  561 => 127,  557 => 125,  548 => 124,  537 => 219,  534 => 143,  531 => 131,  529 => 124,  526 => 123,  517 => 122,  499 => 118,  489 => 115,  486 => 114,  483 => 113,  469 => 112,  464 => 110,  461 => 107,  459 => 106,  457 => 105,  455 => 104,  451 => 101,  448 => 100,  445 => 99,  428 => 98,  425 => 97,  422 => 96,  416 => 94,  414 => 93,  408 => 91,  399 => 90,  389 => 66,  380 => 64,  375 => 63,  366 => 62,  345 => 50,  341 => 48,  335 => 47,  327 => 46,  319 => 45,  311 => 44,  307 => 42,  298 => 41,  288 => 87,  285 => 86,  279 => 84,  276 => 83,  273 => 81,  268 => 80,  265 => 79,  262 => 77,  258 => 75,  256 => 73,  254 => 71,  251 => 70,  249 => 69,  247 => 68,  244 => 67,  242 => 62,  239 => 61,  236 => 41,  227 => 40,  217 => 38,  208 => 36,  203 => 35,  194 => 34,  181 => 29,  172 => 28,  154 => 26,  141 => 365,  138 => 364,  135 => 358,  133 => 357,  129 => 355,  127 => 222,  124 => 221,  122 => 122,  115 => 118,  111 => 116,  109 => 90,  105 => 88,  103 => 40,  100 => 39,  98 => 34,  95 => 33,  93 => 28,  88 => 26,  84 => 24,  82 => 23,  80 => 22,  78 => 21,  76 => 20,  74 => 19,  72 => 18,  70 => 17,  68 => 16,  66 => 15,  64 => 14,  62 => 13,  60 => 12,  57 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% set _preview = block('preview') is defined ? block('preview')|trim : null %}
{% set _form = block('form') is defined ? block('form')|trim : null %}
{% set _show = block('show') is defined ? block('show')|trim : null %}
{% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
{% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
{% set _tab_menu = block('tab_menu') is defined ? block('tab_menu')|trim : null %}
{% set _content = block('content') is defined ? block('content')|trim : null %}
{% set _title = block('title') is defined ? block('title')|trim : null %}
{% set _breadcrumb = block('breadcrumb') is defined ? block('breadcrumb')|trim : null %}
{% set _actions = block('actions') is defined ? block('actions')|trim : null %}
{% set _navbar_title = block('navbar_title') is defined ? block('navbar_title')|trim : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                        USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                        USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                        USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset(
                    'bundles/sonatacore/vendor/moment/locale/' ~
                    locale|lower|replace({'_':'-'}) ~
                    '.js'
                ) }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {% if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif %}
        {% endblock %}
        </title>
    </head>
    <body {% block body_attributes %}class=\"sonata-bc skin-black fixed\"{% endblock %}>

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                        {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                        {%- set label = menu.label -%}
                                                        {%- if translation_domain is not same as(false) -%}
                                                            {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                        {%- endif -%}

                                                        {% if not loop.last %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">
                                                                        {% if menu.extra('safe_label', true) %}
                                                                            {{- label|raw -}}
                                                                        {% else %}
                                                                            {{- label -}}
                                                                        {% endif %}
                                                                    </a>
                                                                {% else %}
                                                                    <span>{{ label }}</span>
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        {% block sonata_top_nav_menu_add_block %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                            </li>
                                        {% endblock %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                                </ul>
                                            </li>
                                        {% endblock %}
                                    </ul>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                {% if _tab_menu is not empty %}
                                                    <div class=\"navbar-left\">
                                                        {{ _tab_menu|raw }}
                                                    </div>
                                                {% endif %}

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_filters is not empty %}
                                <div class=\"row\">
                                    {{ _list_filters|raw }}
                                </div>
                            {% endif %}

                            {% if _list_table is not empty %}
                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>
                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "SonataAdminBundle::standard_layout.html.twig", "/Users/lala/Sites/instantpot/vendor/sonata-project/admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
