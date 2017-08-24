<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_a2b5701e873a23dcb656f8ef24d4d491f77c9a714484d848ae51adcd29033b65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'title' => array($this, 'block_title'),
            'navbar_title' => array($this, 'block_navbar_title'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'no_result_content' => array($this, 'block_no_result_content'),
            'list_footer' => array($this, 'block_list_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters_actions' => array($this, 'block_list_filters_actions'),
            'list_filters' => array($this, 'block_list_filters'),
            'sonata_list_filter_group_class' => array($this, 'block_sonata_list_filter_group_class'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_055e502859f13c506b5557498f52e383c7e5ec9f6ed5199e0fd679eca210c107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055e502859f13c506b5557498f52e383c7e5ec9f6ed5199e0fd679eca210c107->enter($__internal_055e502859f13c506b5557498f52e383c7e5ec9f6ed5199e0fd679eca210c107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $__internal_026a1731e5ef779217a707e22919b1ab5f6391916398ca394151fa20db501523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026a1731e5ef779217a707e22919b1ab5f6391916398ca394151fa20db501523->enter($__internal_026a1731e5ef779217a707e22919b1ab5f6391916398ca394151fa20db501523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_055e502859f13c506b5557498f52e383c7e5ec9f6ed5199e0fd679eca210c107->leave($__internal_055e502859f13c506b5557498f52e383c7e5ec9f6ed5199e0fd679eca210c107_prof);

        
        $__internal_026a1731e5ef779217a707e22919b1ab5f6391916398ca394151fa20db501523->leave($__internal_026a1731e5ef779217a707e22919b1ab5f6391916398ca394151fa20db501523_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e19ccbd562dce6d4cc7d06cd04f1faa9d74a6d9a88b10e75cee271d6632acf16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19ccbd562dce6d4cc7d06cd04f1faa9d74a6d9a88b10e75cee271d6632acf16->enter($__internal_e19ccbd562dce6d4cc7d06cd04f1faa9d74a6d9a88b10e75cee271d6632acf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6483270831b86a446154e6feabb63af4572914a19c1fa3779774386b7336b858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6483270831b86a446154e6feabb63af4572914a19c1fa3779774386b7336b858->enter($__internal_6483270831b86a446154e6feabb63af4572914a19c1fa3779774386b7336b858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 15)->display($context);
        
        $__internal_6483270831b86a446154e6feabb63af4572914a19c1fa3779774386b7336b858->leave($__internal_6483270831b86a446154e6feabb63af4572914a19c1fa3779774386b7336b858_prof);

        
        $__internal_e19ccbd562dce6d4cc7d06cd04f1faa9d74a6d9a88b10e75cee271d6632acf16->leave($__internal_e19ccbd562dce6d4cc7d06cd04f1faa9d74a6d9a88b10e75cee271d6632acf16_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_75adb4358b7a9e2ac31aec22f781f61cb8bb03ef7135b9ea229f84b02d329a9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75adb4358b7a9e2ac31aec22f781f61cb8bb03ef7135b9ea229f84b02d329a9b->enter($__internal_75adb4358b7a9e2ac31aec22f781f61cb8bb03ef7135b9ea229f84b02d329a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_0388666f135802d9aef44f4d635c703df5932e14a5283933600d5be5b46a8d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0388666f135802d9aef44f4d635c703df5932e14a5283933600d5be5b46a8d84->enter($__internal_0388666f135802d9aef44f4d635c703df5932e14a5283933600d5be5b46a8d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_0388666f135802d9aef44f4d635c703df5932e14a5283933600d5be5b46a8d84->leave($__internal_0388666f135802d9aef44f4d635c703df5932e14a5283933600d5be5b46a8d84_prof);

        
        $__internal_75adb4358b7a9e2ac31aec22f781f61cb8bb03ef7135b9ea229f84b02d329a9b->leave($__internal_75adb4358b7a9e2ac31aec22f781f61cb8bb03ef7135b9ea229f84b02d329a9b_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_80457ea8d36212b6ba3833ec82900a958ec1bffd01189b1f0b8bd890dffd994c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80457ea8d36212b6ba3833ec82900a958ec1bffd01189b1f0b8bd890dffd994c->enter($__internal_80457ea8d36212b6ba3833ec82900a958ec1bffd01189b1f0b8bd890dffd994c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_907f9c442a4d853004aa7be3b6306b7e880f0707d5069c46b7e61d57f3290c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907f9c442a4d853004aa7be3b6306b7e880f0707d5069c46b7e61d57f3290c17->enter($__internal_907f9c442a4d853004aa7be3b6306b7e880f0707d5069c46b7e61d57f3290c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 21
        echo "    ";
        // line 25
        echo "
    ";
        // line 26
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isChild", array()) && $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "parent", array()), "subject", array()))) {
            // line 27
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "parent", array()), "toString", array(0 => $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "parent", array()), "subject", array())), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_907f9c442a4d853004aa7be3b6306b7e880f0707d5069c46b7e61d57f3290c17->leave($__internal_907f9c442a4d853004aa7be3b6306b7e880f0707d5069c46b7e61d57f3290c17_prof);

        
        $__internal_80457ea8d36212b6ba3833ec82900a958ec1bffd01189b1f0b8bd890dffd994c->leave($__internal_80457ea8d36212b6ba3833ec82900a958ec1bffd01189b1f0b8bd890dffd994c_prof);

    }

    // line 31
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_d516d04242da188ac4f3b7f7a4e3d49f21fedf4d76090a884b0b00f8ecf950d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d516d04242da188ac4f3b7f7a4e3d49f21fedf4d76090a884b0b00f8ecf950d3->enter($__internal_d516d04242da188ac4f3b7f7a4e3d49f21fedf4d76090a884b0b00f8ecf950d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_d7fd48d57fe8772913ad6bf34b74cac0a371ee7288ff5c1c478a86c80f0182ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fd48d57fe8772913ad6bf34b74cac0a371ee7288ff5c1c478a86c80f0182ce->enter($__internal_d7fd48d57fe8772913ad6bf34b74cac0a371ee7288ff5c1c478a86c80f0182ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 32
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d7fd48d57fe8772913ad6bf34b74cac0a371ee7288ff5c1c478a86c80f0182ce->leave($__internal_d7fd48d57fe8772913ad6bf34b74cac0a371ee7288ff5c1c478a86c80f0182ce_prof);

        
        $__internal_d516d04242da188ac4f3b7f7a4e3d49f21fedf4d76090a884b0b00f8ecf950d3->leave($__internal_d516d04242da188ac4f3b7f7a4e3d49f21fedf4d76090a884b0b00f8ecf950d3_prof);

    }

    // line 35
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_c6197b2c0f22c04562fa6d6f2a9dd612d44f1c8b32d672cde994cb6ed841a3cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6197b2c0f22c04562fa6d6f2a9dd612d44f1c8b32d672cde994cb6ed841a3cc->enter($__internal_c6197b2c0f22c04562fa6d6f2a9dd612d44f1c8b32d672cde994cb6ed841a3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        $__internal_85c8d0bfc930b3a62d8426916c56cb3ce2b9ebc6341b2621f22af3e4776f3820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c8d0bfc930b3a62d8426916c56cb3ce2b9ebc6341b2621f22af3e4776f3820->enter($__internal_85c8d0bfc930b3a62d8426916c56cb3ce2b9ebc6341b2621f22af3e4776f3820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 36
        echo "    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 37
        $context["batchactions"] = $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "batchactions", array());
        // line 38
        echo "        ";
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, ($context["batchactions"] ?? $this->getContext($context, "batchactions"))))) {
            // line 39
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
            echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\">
        ";
        }
        // line 42
        echo "
        ";
        // line 44
        echo "        <div class=\"box box-primary\" ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) == 1)) {
            echo "style=\"margin-bottom: 100px;\"";
        }
        echo ">
            <div class=\"box-body ";
        // line 45
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            echo "table-responsive no-padding";
        }
        echo "\">
                ";
        // line 46
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")))));
        echo "

                ";
        // line 48
        $this->displayBlock('list_header', $context, $blocks);
        // line 49
        echo "
                ";
        // line 50
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 51
            echo "                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        ";
            // line 52
            $this->displayBlock('table_header', $context, $blocks);
            // line 88
            echo "
                        ";
            // line 89
            $this->displayBlock('table_body', $context, $blocks);
            // line 94
            echo "
                        ";
            // line 95
            $this->displayBlock('table_footer', $context, $blocks);
            // line 97
            echo "                    </table>
                ";
        } else {
            // line 99
            echo "                    ";
            $this->displayBlock('no_result_content', $context, $blocks);
            // line 117
            echo "                ";
        }
        // line 118
        echo "
                ";
        // line 119
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")))));
        echo "
            </div>
            ";
        // line 121
        $this->displayBlock('list_footer', $context, $blocks);
        // line 221
        echo "        </div>
        ";
        // line 222
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, ($context["batchactions"] ?? $this->getContext($context, "batchactions"))))) {
            // line 223
            echo "            </form>
        ";
        }
        // line 225
        echo "    </div>
";
        
        $__internal_85c8d0bfc930b3a62d8426916c56cb3ce2b9ebc6341b2621f22af3e4776f3820->leave($__internal_85c8d0bfc930b3a62d8426916c56cb3ce2b9ebc6341b2621f22af3e4776f3820_prof);

        
        $__internal_c6197b2c0f22c04562fa6d6f2a9dd612d44f1c8b32d672cde994cb6ed841a3cc->leave($__internal_c6197b2c0f22c04562fa6d6f2a9dd612d44f1c8b32d672cde994cb6ed841a3cc_prof);

    }

    // line 48
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_6e59570175bc1e551fa1f943d6152c05735d6ee92c6ac0a92fcc13ff3d52a007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e59570175bc1e551fa1f943d6152c05735d6ee92c6ac0a92fcc13ff3d52a007->enter($__internal_6e59570175bc1e551fa1f943d6152c05735d6ee92c6ac0a92fcc13ff3d52a007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        $__internal_0c43099526d92d053c067c27c1d9755faf7648113de49793f8102172ace3ea92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c43099526d92d053c067c27c1d9755faf7648113de49793f8102172ace3ea92->enter($__internal_0c43099526d92d053c067c27c1d9755faf7648113de49793f8102172ace3ea92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        
        $__internal_0c43099526d92d053c067c27c1d9755faf7648113de49793f8102172ace3ea92->leave($__internal_0c43099526d92d053c067c27c1d9755faf7648113de49793f8102172ace3ea92_prof);

        
        $__internal_6e59570175bc1e551fa1f943d6152c05735d6ee92c6ac0a92fcc13ff3d52a007->leave($__internal_6e59570175bc1e551fa1f943d6152c05735d6ee92c6ac0a92fcc13ff3d52a007_prof);

    }

    // line 52
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_f8b67a64d8b9caca37cbb7643c528b266e0d8f21bf797702023c9998376b963f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b67a64d8b9caca37cbb7643c528b266e0d8f21bf797702023c9998376b963f->enter($__internal_f8b67a64d8b9caca37cbb7643c528b266e0d8f21bf797702023c9998376b963f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        $__internal_9098215b192265ca38e3f937059f197c52f34f1bfb2eaa9c91147cb7b5e763c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9098215b192265ca38e3f937059f197c52f34f1bfb2eaa9c91147cb7b5e763c8->enter($__internal_9098215b192265ca38e3f937059f197c52f34f1bfb2eaa9c91147cb7b5e763c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 53
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 56
            echo "                                        ";
            if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, ($context["batchactions"] ?? $this->getContext($context, "batchactions"))) > 0))) {
                // line 57
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif (($this->getAttribute(            // line 60
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 61
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif ((($this->getAttribute(            // line 62
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 63
                echo "                                            ";
                // line 64
                echo "                                        ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 65
                echo "                                            ";
                // line 66
                echo "                                        ";
            } else {
                // line 67
                echo "                                            ";
                $context["sortable"] = false;
                // line 68
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 69
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 70
                    echo "                                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array())), "method");
                    // line 71
                    echo "                                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute(($context["sort_parameters"] ?? $this->getContext($context, "sort_parameters")), "filter", array()), "_sort_by", array())));
                    // line 72
                    echo "                                                ";
                    $context["sort_active_class"] = ((($context["current"] ?? $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 73
                    echo "                                                ";
                    $context["sort_by"] = ((($context["current"] ?? $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 74
                    echo "                                            ";
                }
                // line 75
                echo "
                                            ";
                // line 76
                ob_start();
                // line 77
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if (($context["sortable"] ?? $this->getContext($context, "sortable"))) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["sort_by"] ?? $this->getContext($context, "sort_by"))), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["sort_active_class"] ?? $this->getContext($context, "sort_active_class")), "html", null, true);
                }
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "header_class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "header_class", array()), "html", null, true);
                }
                echo "\"";
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "header_style", array(), "any", true, true)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "header_style", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
                                                    ";
                // line 78
                if (($context["sortable"] ?? $this->getContext($context, "sortable"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => ($context["sort_parameters"] ?? $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 79
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["field_description"], "label", array()), array(), $this->getAttribute($context["field_description"], "translationDomain", array())), "html", null, true);
                echo "
                                                    ";
                // line 80
                if (($context["sortable"] ?? $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 81
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 83
                echo "                                        ";
            }
            // line 84
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                                </tr>
                            </thead>
                        ";
        
        $__internal_9098215b192265ca38e3f937059f197c52f34f1bfb2eaa9c91147cb7b5e763c8->leave($__internal_9098215b192265ca38e3f937059f197c52f34f1bfb2eaa9c91147cb7b5e763c8_prof);

        
        $__internal_f8b67a64d8b9caca37cbb7643c528b266e0d8f21bf797702023c9998376b963f->leave($__internal_f8b67a64d8b9caca37cbb7643c528b266e0d8f21bf797702023c9998376b963f_prof);

    }

    // line 89
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_d6d1763682fdafd6018514b35c18cdeb05928134b33ed333a7f9a3529d486765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d1763682fdafd6018514b35c18cdeb05928134b33ed333a7f9a3529d486765->enter($__internal_d6d1763682fdafd6018514b35c18cdeb05928134b33ed333a7f9a3529d486765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_15d1319a6d215c5aa018c960179cb54f57c70ed8700fe238d6940865470eed49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d1319a6d215c5aa018c960179cb54f57c70ed8700fe238d6940865470eed49->enter($__internal_15d1319a6d215c5aa018c960179cb54f57c70ed8700fe238d6940865470eed49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 90
        echo "                            <tbody>
                                ";
        // line 91
        $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => ("outer_list_rows_" . $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getListMode", array(), "method"))), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 91)->display($context);
        // line 92
        echo "                            </tbody>
                        ";
        
        $__internal_15d1319a6d215c5aa018c960179cb54f57c70ed8700fe238d6940865470eed49->leave($__internal_15d1319a6d215c5aa018c960179cb54f57c70ed8700fe238d6940865470eed49_prof);

        
        $__internal_d6d1763682fdafd6018514b35c18cdeb05928134b33ed333a7f9a3529d486765->leave($__internal_d6d1763682fdafd6018514b35c18cdeb05928134b33ed333a7f9a3529d486765_prof);

    }

    // line 95
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_8a16d96966dd720da787dbaade39ce7b52d9d08501a83aada81944e18fd04680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a16d96966dd720da787dbaade39ce7b52d9d08501a83aada81944e18fd04680->enter($__internal_8a16d96966dd720da787dbaade39ce7b52d9d08501a83aada81944e18fd04680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        $__internal_5135fc5a585275f0659755646de201931efb8f548c7f8223741c2f07ce9dfa63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5135fc5a585275f0659755646de201931efb8f548c7f8223741c2f07ce9dfa63->enter($__internal_5135fc5a585275f0659755646de201931efb8f548c7f8223741c2f07ce9dfa63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 96
        echo "                        ";
        
        $__internal_5135fc5a585275f0659755646de201931efb8f548c7f8223741c2f07ce9dfa63->leave($__internal_5135fc5a585275f0659755646de201931efb8f548c7f8223741c2f07ce9dfa63_prof);

        
        $__internal_8a16d96966dd720da787dbaade39ce7b52d9d08501a83aada81944e18fd04680->leave($__internal_8a16d96966dd720da787dbaade39ce7b52d9d08501a83aada81944e18fd04680_prof);

    }

    // line 99
    public function block_no_result_content($context, array $blocks = array())
    {
        $__internal_d80df648624ec7c1647da8159e54f75b00260d6875a5b21aca9bf4e994073399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80df648624ec7c1647da8159e54f75b00260d6875a5b21aca9bf4e994073399->enter($__internal_d80df648624ec7c1647da8159e54f75b00260d6875a5b21aca9bf4e994073399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_result_content"));

        $__internal_2361dfd5ffcb5a635844572287d23076d93fdce3a73b293316c9b9fb2938448e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2361dfd5ffcb5a635844572287d23076d93fdce3a73b293316c9b9fb2938448e->enter($__internal_2361dfd5ffcb5a635844572287d23076d93fdce3a73b293316c9b9fb2938448e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_result_content"));

        // line 100
        echo "                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
        echo "</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    ";
        // line 108
        if ( !$this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "xmlHttpRequest", array())) {
            // line 109
            echo "                                    <ul class=\"list-unstyled\">
                                        ";
            // line 110
            $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 110)->display($context);
            // line 111
            echo "                                    </ul>
                                    ";
        }
        // line 113
        echo "                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    ";
        
        $__internal_2361dfd5ffcb5a635844572287d23076d93fdce3a73b293316c9b9fb2938448e->leave($__internal_2361dfd5ffcb5a635844572287d23076d93fdce3a73b293316c9b9fb2938448e_prof);

        
        $__internal_d80df648624ec7c1647da8159e54f75b00260d6875a5b21aca9bf4e994073399->leave($__internal_d80df648624ec7c1647da8159e54f75b00260d6875a5b21aca9bf4e994073399_prof);

    }

    // line 121
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_0a371e8e2edd49d96fba2d833a0f70b7704100fcb57f4232c16fd92f7733318d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a371e8e2edd49d96fba2d833a0f70b7704100fcb57f4232c16fd92f7733318d->enter($__internal_0a371e8e2edd49d96fba2d833a0f70b7704100fcb57f4232c16fd92f7733318d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        $__internal_2845b5360d45e45bdb6471cef1909100ef9067906d10a9bb1079ba72cd0cc6c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2845b5360d45e45bdb6471cef1909100ef9067906d10a9bb1079ba72cd0cc6c9->enter($__internal_2845b5360d45e45bdb6471cef1909100ef9067906d10a9bb1079ba72cd0cc6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        // line 122
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 123
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 125
            if ( !$this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) {
                // line 126
                echo "                                <div class=\"pull-left\">
                                    ";
                // line 127
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, ($context["batchactions"] ?? $this->getContext($context, "batchactions"))) > 0))) {
                    // line 128
                    echo "                                        ";
                    $this->displayBlock('batch', $context, $blocks);
                    // line 175
                    echo "                                    ";
                }
                // line 176
                echo "                                </div>


                                ";
                // line 180
                echo "                                ";
                $context["export_formats"] = ((array_key_exists("export_formats", $context)) ? (_twig_default_filter(($context["export_formats"] ?? $this->getContext($context, "export_formats")), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "exportFormats", array()))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "exportFormats", array())));
                // line 181
                echo "
                                <div class=\"pull-right\">
                                    ";
                // line 183
                if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "export"), "method")) && twig_length_filter($this->env, ($context["export_formats"] ?? $this->getContext($context, "export_formats"))))) {
                    // line 184
                    echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                ";
                    // line 187
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 191
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["export_formats"] ?? $this->getContext($context, "export_formats")));
                    foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                        // line 192
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 193
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                        echo "\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        ";
                        // line 195
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("export_format_" . $context["format"]), array(), "SonataAdminBundle"), "html", null, true);
                        echo "
                                                    </a>
                                                <li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 199
                    echo "                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    ";
                }
                // line 204
                echo "
                                    ";
                // line 205
                $this->displayBlock('pager_results', $context, $blocks);
                // line 208
                echo "                                </div>
                            ";
            }
            // line 210
            echo "                        </div>

                        ";
            // line 212
            $this->displayBlock('pager_links', $context, $blocks);
            // line 218
            echo "                    </div>
                ";
        }
        // line 220
        echo "            ";
        
        $__internal_2845b5360d45e45bdb6471cef1909100ef9067906d10a9bb1079ba72cd0cc6c9->leave($__internal_2845b5360d45e45bdb6471cef1909100ef9067906d10a9bb1079ba72cd0cc6c9_prof);

        
        $__internal_0a371e8e2edd49d96fba2d833a0f70b7704100fcb57f4232c16fd92f7733318d->leave($__internal_0a371e8e2edd49d96fba2d833a0f70b7704100fcb57f4232c16fd92f7733318d_prof);

    }

    // line 128
    public function block_batch($context, array $blocks = array())
    {
        $__internal_071460b58b25a7d9d71c397de6ea01635b72c2f006269416573497f7a288669a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_071460b58b25a7d9d71c397de6ea01635b72c2f006269416573497f7a288669a->enter($__internal_071460b58b25a7d9d71c397de6ea01635b72c2f006269416573497f7a288669a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        $__internal_79e58c71212c3a2bcefd9200a3030dd7757b5ac294ceaf90906a8752cf3525f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e58c71212c3a2bcefd9200a3030dd7757b5ac294ceaf90906a8752cf3525f0->enter($__internal_79e58c71212c3a2bcefd9200a3030dd7757b5ac294ceaf90906a8752cf3525f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        // line 129
        echo "                                            <script>
                                                ";
        // line 130
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 157
        echo "                                            </script>

                                        ";
        // line 159
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 172
        echo "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
        
        $__internal_79e58c71212c3a2bcefd9200a3030dd7757b5ac294ceaf90906a8752cf3525f0->leave($__internal_79e58c71212c3a2bcefd9200a3030dd7757b5ac294ceaf90906a8752cf3525f0_prof);

        
        $__internal_071460b58b25a7d9d71c397de6ea01635b72c2f006269416573497f7a288669a->leave($__internal_071460b58b25a7d9d71c397de6ea01635b72c2f006269416573497f7a288669a_prof);

    }

    // line 130
    public function block_batch_javascript($context, array $blocks = array())
    {
        $__internal_cd3fc23a13b44bb2d2d844fb48ce6b4fcd6c88fd019ed07dcfde3729d7366b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3fc23a13b44bb2d2d844fb48ce6b4fcd6c88fd019ed07dcfde3729d7366b98->enter($__internal_cd3fc23a13b44bb2d2d844fb48ce6b4fcd6c88fd019ed07dcfde3729d7366b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        $__internal_22953e3fd8db5dd26d40ba646a123fd2d0a43190a6e7dfb845795b3affc40813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22953e3fd8db5dd26d40ba646a123fd2d0a43190a6e7dfb845795b3affc40813->enter($__internal_22953e3fd8db5dd26d40ba646a123fd2d0a43190a6e7dfb845795b3affc40813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        // line 131
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;
                                                            if (window.SONATA_CONFIG.USE_ICHECK) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                ";
        
        $__internal_22953e3fd8db5dd26d40ba646a123fd2d0a43190a6e7dfb845795b3affc40813->leave($__internal_22953e3fd8db5dd26d40ba646a123fd2d0a43190a6e7dfb845795b3affc40813_prof);

        
        $__internal_cd3fc23a13b44bb2d2d844fb48ce6b4fcd6c88fd019ed07dcfde3729d7366b98->leave($__internal_cd3fc23a13b44bb2d2d844fb48ce6b4fcd6c88fd019ed07dcfde3729d7366b98_prof);

    }

    // line 159
    public function block_batch_actions($context, array $blocks = array())
    {
        $__internal_f4f4e24f7b97067cd3b2b2a7020b4a12c50d28416edaf97d9e63ddc0bbb2df26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f4e24f7b97067cd3b2b2a7020b4a12c50d28416edaf97d9e63ddc0bbb2df26->enter($__internal_f4f4e24f7b97067cd3b2b2a7020b4a12c50d28416edaf97d9e63ddc0bbb2df26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        $__internal_e9ceaadd291be2b46ca0d16418ebed84fbab28cdf1a289e0c98bfde5690fd4d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ceaadd291be2b46ca0d16418ebed84fbab28cdf1a289e0c98bfde5690fd4d5->enter($__internal_e9ceaadd291be2b46ca0d16418ebed84fbab28cdf1a289e0c98bfde5690fd4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 160
        echo "                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                ";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                (";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), "html", null, true);
        echo ")
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["batchactions"] ?? $this->getContext($context, "batchactions")));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 168
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["options"], "label", array()), array(), (($this->getAttribute($context["options"], "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["options"], "translation_domain", array()), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                                            </select>
                                        ";
        
        $__internal_e9ceaadd291be2b46ca0d16418ebed84fbab28cdf1a289e0c98bfde5690fd4d5->leave($__internal_e9ceaadd291be2b46ca0d16418ebed84fbab28cdf1a289e0c98bfde5690fd4d5_prof);

        
        $__internal_f4f4e24f7b97067cd3b2b2a7020b4a12c50d28416edaf97d9e63ddc0bbb2df26->leave($__internal_f4f4e24f7b97067cd3b2b2a7020b4a12c50d28416edaf97d9e63ddc0bbb2df26_prof);

    }

    // line 205
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_543f54b85facc943458a1ac84a3e1761a5514f3881fa60a8a531eff5f1e1714b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_543f54b85facc943458a1ac84a3e1761a5514f3881fa60a8a531eff5f1e1714b->enter($__internal_543f54b85facc943458a1ac84a3e1761a5514f3881fa60a8a531eff5f1e1714b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        $__internal_b20305d661f627f1be937b10a422375ee8931e89d454b78ff7ea506282f976a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20305d661f627f1be937b10a422375ee8931e89d454b78ff7ea506282f976a3->enter($__internal_b20305d661f627f1be937b10a422375ee8931e89d454b78ff7ea506282f976a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 206
        echo "                                        ";
        $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_results"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 206)->display($context);
        // line 207
        echo "                                    ";
        
        $__internal_b20305d661f627f1be937b10a422375ee8931e89d454b78ff7ea506282f976a3->leave($__internal_b20305d661f627f1be937b10a422375ee8931e89d454b78ff7ea506282f976a3_prof);

        
        $__internal_543f54b85facc943458a1ac84a3e1761a5514f3881fa60a8a531eff5f1e1714b->leave($__internal_543f54b85facc943458a1ac84a3e1761a5514f3881fa60a8a531eff5f1e1714b_prof);

    }

    // line 212
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_5f862e198ffe8e151a3cef959c3824a367b70efde1bade09017bf1e001a1d015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f862e198ffe8e151a3cef959c3824a367b70efde1bade09017bf1e001a1d015->enter($__internal_5f862e198ffe8e151a3cef959c3824a367b70efde1bade09017bf1e001a1d015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        $__internal_5243a707cb4f0e7d41922da8edad422965347419b647050304f7f2ad28a8c7fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5243a707cb4f0e7d41922da8edad422965347419b647050304f7f2ad28a8c7fe->enter($__internal_5243a707cb4f0e7d41922da8edad422965347419b647050304f7f2ad28a8c7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        // line 213
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 214
            echo "                                <hr/>
                                ";
            // line 215
            $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_links"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 215)->display($context);
            // line 216
            echo "                            ";
        }
        // line 217
        echo "                        ";
        
        $__internal_5243a707cb4f0e7d41922da8edad422965347419b647050304f7f2ad28a8c7fe->leave($__internal_5243a707cb4f0e7d41922da8edad422965347419b647050304f7f2ad28a8c7fe_prof);

        
        $__internal_5f862e198ffe8e151a3cef959c3824a367b70efde1bade09017bf1e001a1d015->leave($__internal_5f862e198ffe8e151a3cef959c3824a367b70efde1bade09017bf1e001a1d015_prof);

    }

    // line 228
    public function block_list_filters_actions($context, array $blocks = array())
    {
        $__internal_4358dbd91833efce37d5887dbeb3771800c69e063617d10005df51a54c51ef96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4358dbd91833efce37d5887dbeb3771800c69e063617d10005df51a54c51ef96->enter($__internal_4358dbd91833efce37d5887dbeb3771800c69e063617d10005df51a54c51ef96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        $__internal_a5be6c28ec0d71e8d08077f2daa75e4f384e00c29936ec2d7b6cf1bf4e54116c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5be6c28ec0d71e8d08077f2daa75e4f384e00c29936ec2d7b6cf1bf4e54116c->enter($__internal_a5be6c28ec0d71e8d08077f2daa75e4f384e00c29936ec2d7b6cf1bf4e54116c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        // line 229
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))) {
            // line 230
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    ";
            // line 235
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo " <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if ((($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")))) {
                    // line 240
                    echo "                        ";
                    $context["filterActive"] = (($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")) &&  !$this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isDefaultFilter", array(0 => $this->getAttribute($context["filter"], "formName", array())), "method"));
                    // line 241
                    echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 242
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                    echo "\">
                                <i class=\"fa ";
                    // line 243
                    echo ((($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) ? ("fa-check-square-o") : ("fa-square-o"));
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["filter"], "label", array()), array(), (($this->getAttribute($context["filter"], "translationDomain", array())) ? ($this->getAttribute($context["filter"], "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "                </ul>
            </li>
        </ul>
    ";
        }
        
        $__internal_a5be6c28ec0d71e8d08077f2daa75e4f384e00c29936ec2d7b6cf1bf4e54116c->leave($__internal_a5be6c28ec0d71e8d08077f2daa75e4f384e00c29936ec2d7b6cf1bf4e54116c_prof);

        
        $__internal_4358dbd91833efce37d5887dbeb3771800c69e063617d10005df51a54c51ef96->leave($__internal_4358dbd91833efce37d5887dbeb3771800c69e063617d10005df51a54c51ef96_prof);

    }

    // line 253
    public function block_list_filters($context, array $blocks = array())
    {
        $__internal_faea8eed3625fa04b9f9c48a3141d1d1347742feabae33d8db3ff9b90042cdc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faea8eed3625fa04b9f9c48a3141d1d1347742feabae33d8db3ff9b90042cdc0->enter($__internal_faea8eed3625fa04b9f9c48a3141d1d1347742feabae33d8db3ff9b90042cdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        $__internal_4d5df81f0563e1f52e2ae65b3da8d58859dfa3d1e9efd44cca82ab7ed368fc25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5df81f0563e1f52e2ae65b3da8d58859dfa3d1e9efd44cca82ab7ed368fc25->enter($__internal_4d5df81f0563e1f52e2ae65b3da8d58859dfa3d1e9efd44cca82ab7ed368fc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        // line 254
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array())) {
            // line 255
            echo "        ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "filter"), "method")));
            // line 256
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 257
            echo (($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "hasDisplayableFilters", array())) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 260
            echo ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 261
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 265
            $context["withAdvancedFilter"] = false;
            // line 266
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 267
                echo "                                    ";
                $context["filterActive"] = ((($this->getAttribute($context["filter"], "isActive", array(), "method") && (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) || ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true)) &&  !$this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isDefaultFilter", array(0 => $this->getAttribute($context["filter"], "formName", array())), "method"));
                // line 268
                echo "                                    ";
                $context["filterVisible"] = (($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")));
                // line 269
                echo "                                    <div class=\"form-group ";
                $this->displayBlock('sonata_list_filter_group_class', $context, $blocks);
                echo "\" id=\"filter-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" sonata-filter=\"";
                echo ((($context["filterVisible"] ?? $this->getContext($context, "filterVisible"))) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if (($context["filterActive"] ?? $this->getContext($context, "filterActive"))) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 270
                if ( !($this->getAttribute($context["filter"], "label", array()) === false)) {
                    // line 271
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["filter"], "label", array()), array(), (($this->getAttribute($context["filter"], "translationDomain", array())) ? ($this->getAttribute($context["filter"], "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                    echo "</label>
                                        ";
                }
                // line 273
                echo "                                        ";
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 274
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 276
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => ($context["attr"] ?? $this->getContext($context, "attr"))));
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 280
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 285
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    ";
                // line 292
                if ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "advanced_filter", array(), "array")) {
                    // line 293
                    echo "                                        ";
                    $context["withAdvancedFilter"] = true;
                    // line 294
                    echo "                                    ";
                }
                // line 295
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 300
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 301
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> ";
            // line 305
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn btn-default\" href=\"";
            // line 308
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 309
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                ";
            // line 313
            if (($context["withAdvancedFilter"] ?? $this->getContext($context, "withAdvancedFilter"))) {
                // line 314
                echo "                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            ";
                // line 317
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_advanced_filters", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                ";
            }
            // line 321
            echo "                            </div>
                        </div>

                        ";
            // line 324
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 325
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_4d5df81f0563e1f52e2ae65b3da8d58859dfa3d1e9efd44cca82ab7ed368fc25->leave($__internal_4d5df81f0563e1f52e2ae65b3da8d58859dfa3d1e9efd44cca82ab7ed368fc25_prof);

        
        $__internal_faea8eed3625fa04b9f9c48a3141d1d1347742feabae33d8db3ff9b90042cdc0->leave($__internal_faea8eed3625fa04b9f9c48a3141d1d1347742feabae33d8db3ff9b90042cdc0_prof);

    }

    // line 269
    public function block_sonata_list_filter_group_class($context, array $blocks = array())
    {
        $__internal_e138184cefd4b1f183d2918770fd39255ee4b6049f6c268b8698ca807f98eba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e138184cefd4b1f183d2918770fd39255ee4b6049f6c268b8698ca807f98eba3->enter($__internal_e138184cefd4b1f183d2918770fd39255ee4b6049f6c268b8698ca807f98eba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        $__internal_8258316d87391b5f742a8d7781b0781a8700592da19c896b5d1bbe3ace08fc77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8258316d87391b5f742a8d7781b0781a8700592da19c896b5d1bbe3ace08fc77->enter($__internal_8258316d87391b5f742a8d7781b0781a8700592da19c896b5d1bbe3ace08fc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        
        $__internal_8258316d87391b5f742a8d7781b0781a8700592da19c896b5d1bbe3ace08fc77->leave($__internal_8258316d87391b5f742a8d7781b0781a8700592da19c896b5d1bbe3ace08fc77_prof);

        
        $__internal_e138184cefd4b1f183d2918770fd39255ee4b6049f6c268b8698ca807f98eba3->leave($__internal_e138184cefd4b1f183d2918770fd39255ee4b6049f6c268b8698ca807f98eba3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1098 => 269,  1083 => 327,  1072 => 325,  1068 => 324,  1063 => 321,  1056 => 317,  1051 => 314,  1049 => 313,  1042 => 309,  1038 => 308,  1032 => 305,  1024 => 301,  1022 => 300,  1016 => 296,  1002 => 295,  999 => 294,  996 => 293,  994 => 292,  980 => 285,  972 => 280,  965 => 276,  961 => 274,  958 => 273,  950 => 271,  948 => 270,  931 => 269,  928 => 268,  925 => 267,  907 => 266,  905 => 265,  898 => 261,  892 => 260,  884 => 257,  881 => 256,  878 => 255,  875 => 254,  866 => 253,  852 => 247,  839 => 243,  831 => 242,  828 => 241,  825 => 240,  820 => 239,  813 => 235,  806 => 230,  804 => 229,  795 => 228,  785 => 217,  782 => 216,  780 => 215,  777 => 214,  774 => 213,  765 => 212,  755 => 207,  752 => 206,  743 => 205,  732 => 170,  721 => 168,  717 => 167,  710 => 163,  706 => 162,  702 => 161,  697 => 160,  688 => 159,  653 => 131,  644 => 130,  632 => 173,  629 => 172,  627 => 159,  623 => 157,  621 => 130,  618 => 129,  609 => 128,  599 => 220,  595 => 218,  593 => 212,  589 => 210,  585 => 208,  583 => 205,  580 => 204,  573 => 199,  563 => 195,  558 => 193,  555 => 192,  551 => 191,  544 => 187,  539 => 184,  537 => 183,  533 => 181,  530 => 180,  525 => 176,  522 => 175,  519 => 128,  517 => 127,  514 => 126,  512 => 125,  508 => 123,  505 => 122,  496 => 121,  483 => 113,  479 => 111,  477 => 110,  474 => 109,  472 => 108,  464 => 103,  459 => 100,  450 => 99,  440 => 96,  431 => 95,  420 => 92,  418 => 91,  415 => 90,  406 => 89,  394 => 85,  388 => 84,  385 => 83,  381 => 81,  377 => 80,  372 => 79,  366 => 78,  344 => 77,  342 => 76,  339 => 75,  336 => 74,  333 => 73,  330 => 72,  327 => 71,  324 => 70,  321 => 69,  318 => 68,  315 => 67,  312 => 66,  310 => 65,  307 => 64,  305 => 63,  303 => 62,  300 => 61,  298 => 60,  293 => 57,  290 => 56,  286 => 55,  282 => 53,  273 => 52,  256 => 48,  245 => 225,  241 => 223,  239 => 222,  236 => 221,  234 => 121,  229 => 119,  226 => 118,  223 => 117,  220 => 99,  216 => 97,  214 => 95,  211 => 94,  209 => 89,  206 => 88,  204 => 52,  201 => 51,  199 => 50,  196 => 49,  194 => 48,  189 => 46,  183 => 45,  176 => 44,  173 => 42,  168 => 40,  163 => 39,  160 => 38,  158 => 37,  155 => 36,  146 => 35,  133 => 32,  124 => 31,  110 => 27,  108 => 26,  105 => 25,  103 => 21,  94 => 20,  76 => 18,  66 => 15,  57 => 14,  36 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block title %}
    {#
        The list template can be used in nested mode,
        so we define the title corresponding to the parent's admin.
    #}

    {% if admin.isChild and admin.parent.subject %}
        {{ \"title_edit\"|trans({'%name%': admin.parent.toString(admin.parent.subject)|truncate(15) }, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{% block list_table %}
    <div class=\"col-xs-12 col-md-12\">
        {% set batchactions = admin.batchactions %}
        {% if admin.hasRoute('batch') and batchactions|length %}
            <form action=\"{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">
        {% endif %}

        {# Add a margin if no pager to prevent dropdown cropping on window #}
        <div class=\"box box-primary\" {% if admin.datagrid.pager.lastPage == 1 %}style=\"margin-bottom: 100px;\"{% endif %}>
            <div class=\"box-body {% if admin.datagrid.results|length > 0 %}table-responsive no-padding{% endif %}\">
                {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}

                {% block list_header %}{% endblock %}

                {% if admin.datagrid.results|length > 0 %}
                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        {% block table_header %}
                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    {% for field_description in admin.list.elements %}
                                        {% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        {% elseif field_description.getOption('code') == '_select' %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        {% elseif field_description.name == '_action' and app.request.isXmlHttpRequest %}
                                            {# Action buttons disabled in ajax view! #}
                                        {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}
                                            {# Disable fields with 'ajax_hidden' option set to true #}
                                        {% else %}
                                            {% set sortable = false %}
                                            {% if field_description.options.sortable is defined and field_description.options.sortable %}
                                                {% set sortable             = true %}
                                                {% set sort_parameters      = admin.modelmanager.sortparameters(field_description, admin.datagrid) %}
                                                {% set current              = admin.datagrid.values._sort_by == field_description or admin.datagrid.values._sort_by.fieldName == sort_parameters.filter._sort_by %}
                                                {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}
                                                {% set sort_by              = current ? admin.datagrid.values._sort_order : field_description.options._sort_order %}
                                            {% endif %}

                                            {% spaceless %}
                                                <th class=\"sonata-ba-list-field-header-{{ field_description.type}} {% if sortable %} sonata-ba-list-field-header-order-{{ sort_by|lower }} {{ sort_active_class }}{% endif %}{% if field_description.options.header_class is defined %} {{ field_description.options.header_class }}{% endif %}\"{% if field_description.options.header_style is defined %} style=\"{{ field_description.options.header_style }}\"{% endif %}>
                                                    {% if sortable %}<a href=\"{{ admin.generateUrl('list', sort_parameters) }}\">{% endif %}
                                                    {{ field_description.label|trans({}, field_description.translationDomain) }}
                                                    {% if sortable %}</a>{% endif %}
                                                </th>
                                            {% endspaceless %}
                                        {% endif %}
                                    {% endfor %}
                                </tr>
                            </thead>
                        {% endblock %}

                        {% block table_body %}
                            <tbody>
                                {% include admin.getTemplate('outer_list_rows_' ~ admin.getListMode()) %}
                            </tbody>
                        {% endblock %}

                        {% block table_footer %}
                        {% endblock %}
                    </table>
                {% else %}
                    {% block no_result_content %}
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">{{ 'no_result'|trans({}, 'SonataAdminBundle') }}</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    {% if not app.request.xmlHttpRequest %}
                                    <ul class=\"list-unstyled\">
                                        {% include 'SonataAdminBundle:Button:create_button.html.twig' %}
                                    </ul>
                                    {% endif %}
                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    {% endblock %}
                {% endif %}

                {{ sonata_block_render_event('sonata.admin.list.table.bottom', { 'admin': admin }) }}
            </div>
            {% block list_footer %}
                {% if admin.datagrid.results|length > 0 %}
                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            {% if not app.request.isXmlHttpRequest %}
                                <div class=\"pull-left\">
                                    {% if admin.hasRoute('batch') and batchactions|length > 0  %}
                                        {% block batch %}
                                            <script>
                                                {% block batch_javascript %}
                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;
                                                            if (window.SONATA_CONFIG.USE_ICHECK) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                {% endblock %}
                                            </script>

                                        {% block batch_actions %}
                                            <label class=\"checkbox\" for=\"{{ admin.uniqid }}_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"{{ admin.uniqid }}_all_elements\">
                                                {{ 'all_elements'|trans({}, 'SonataAdminBundle') }}
                                                ({{ admin.datagrid.pager.nbresults }})
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                {% for action, options in batchactions %}
                                                    <option value=\"{{ action }}\">{{ options.label|trans({}, options.translation_domain|default(admin.translationDomain)) }}</option>
                                                {% endfor %}
                                            </select>
                                        {% endblock %}

                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"{{ 'btn_batch'|trans({}, 'SonataAdminBundle') }}\">
                                        {% endblock %}
                                    {% endif %}
                                </div>


                                {# NEXT_MAJOR : remove this assignment #}
                                {% set export_formats = export_formats|default(admin.exportFormats) %}

                                <div class=\"pull-right\">
                                    {% if admin.hasRoute('export') and admin.hasAccess('export') and export_formats|length %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                {{ \"label_export_download\"|trans({}, \"SonataAdminBundle\") }}
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                {% for format in export_formats %}
                                                <li>
                                                    <a href=\"{{ admin.generateUrl('export', admin.modelmanager.paginationparameters(admin.datagrid, 0) + {'format' : format}) }}\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        {{ (\"export_format_\" ~ format)|trans({}, 'SonataAdminBundle') }}
                                                    </a>
                                                <li>
                                                {% endfor %}
                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    {% endif %}

                                    {% block pager_results %}
                                        {% include admin.getTemplate('pager_results') %}
                                    {% endblock %}
                                </div>
                            {% endif %}
                        </div>

                        {% block pager_links %}
                            {% if admin.datagrid.pager.haveToPaginate() %}
                                <hr/>
                                {% include admin.getTemplate('pager_links') %}
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
        {% if admin.hasRoute('batch') and batchactions|length %}
            </form>
        {% endif %}
    </div>
{% endblock %}

{% block list_filters_actions %}
    {%- if admin.datagrid.filters|length %}
        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    {{ 'link_filters'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    {% for filter in admin.datagrid.filters if (filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null) %}
                        {% set filterActive = ((filter.isActive() or filter.options['show_filter']) and not admin.isDefaultFilter(filter.formName)) %}
                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                <i class=\"fa {{ (filter.isActive() or filter.options['show_filter']) ? 'fa-check-square-o' : 'fa-square-o' }}\"></i>{{ filter.label|trans({}, filter.translationDomain ?: admin.translationDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </li>
        </ul>
    {% endif -%}
{% endblock %}

{% block list_filters %}
    {% if admin.datagrid.filters %}
        {% form_theme form admin.getTemplate('filter') %}

        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: {{ admin.datagrid.hasDisplayableFilters ? 'block' : 'none' }}\" id=\"filter-container-{{ admin.uniqid() }}\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }}\" action=\"{{ admin.generateUrl('list') }}\" method=\"GET\" role=\"form\">
                        {{ form_errors(form) }}

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                {% set withAdvancedFilter = false %}
                                {% for filter in admin.datagrid.filters %}
                                    {% set filterActive = ((filter.isActive() and filter.options['show_filter'] is null) or (filter.options['show_filter'] is same as(true))) and not admin.isDefaultFilter(filter.formName) %}
                                    {% set filterVisible = filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null %}
                                    <div class=\"form-group {% block sonata_list_filter_group_class %}{% endblock %}\" id=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" sonata-filter=\"{{ filterVisible ? 'true' : 'false' }}\" style=\"display: {% if filterActive %}block{% else %}none{% endif %}\">
                                        {% if filter.label is not same as(false) %}
                                            <label for=\"{{ form.children[filter.formName].children['value'].vars.id }}\" class=\"col-sm-3 control-label\">{{ filter.label|trans({}, filter.translationDomain ?: admin.translationDomain) }}</label>
                                        {% endif %}
                                        {% set attr = form.children[filter.formName].children['type'].vars.attr|default({}) %}

                                        <div class=\"col-sm-4 advanced-filter\">
                                            {{ form_widget(form.children[filter.formName].children['type'], {'attr':  attr}) }}
                                        </div>

                                        <div class=\"col-sm-4\">
                                            {{ form_widget(form.children[filter.formName].children['value']) }}
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    {% if filter.options['advanced_filter'] %}
                                        {% set withAdvancedFilter = true %}
                                    {% endif %}
                                {% endfor %}
                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                {% set foo = form.children['_page'].setRendered() %}
                                {{ form_rest(form) }}

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> {{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}
                                    </button>

                                    <a class=\"btn btn-default\" href=\"{{ admin.generateUrl('list', {filters: 'reset'}) }}\">
                                        {{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}
                                    </a>
                                </div>

                                {% if withAdvancedFilter %}
                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            {{ 'btn_advanced_filters'|trans({}, 'SonataAdminBundle') }}
                                        </a>
                                    </div>
                                {% endif %}
                            </div>
                        </div>

                        {% for paramKey, paramValue in admin.persistentParameters %}
                            <input type=\"hidden\" name=\"{{ paramKey }}\" value=\"{{ paramValue }}\">
                        {% endfor %}
                    </form>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_list.html.twig", "/Users/lala/Sites/instantpot/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_list.html.twig");
    }
}
