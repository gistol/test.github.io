<?php

/* @install/install.html.twig */
class __TwigTemplate_2394782e5720785a7b6a7e70502204cb1efc20dcdb899d9417100036dcf3825d extends Twig_Template
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
        $__internal_43a07010065a1ca1d47465a7fafb93600af8ad7513985185bb84b27bd566f13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a07010065a1ca1d47465a7fafb93600af8ad7513985185bb84b27bd566f13f->enter($__internal_43a07010065a1ca1d47465a7fafb93600af8ad7513985185bb84b27bd566f13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@install/install.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"robots\" content=\"noindex, nofollow\" />
    <link rel=\"icon\" type=\"image/png\" href=\"/pimcore/static6/img/favicon/favicon-32x32.png\" />

    <title>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->getSourceContext()); })()), "request", array()), "httpHost", array()), "html", null, true);
        echo " :: Pimcore</title>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"/pimcore/static6/js/lib/ext/classic/theme-triton/resources/theme-triton-all.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/pimcore/static6/css/admin.css\"/>

    <style type=\"text/css\">
        body {
            min-height: 600px;
        }

        .invalid .x-form-item-body {
            border-right: 5px solid #a61717;
        }

        #credential_error {
            color: #a61717;
        }

        .icon_generate {
            background: url(/pimcore/static6/img/flat-color-icons/engineering.svg) center center no-repeat !important;
        }

        .icon_ok {
            background: url(/pimcore/static6/img/flat-color-icons/ok.svg) center center no-repeat !important;
        }

        .icon_check {
            background: url(/pimcore/static6/img/flat-color-icons/factory.svg) center center no-repeat !important;
        }

        .icon_reload {
            background: url(/pimcore/static6/img/flat-color-icons/synchronize.svg) center center no-repeat !important;
        }

        #install_errors, #install_errors b {
            color: red;
        }

        #install_errors a {
            color: #404040;
        }

    </style>

</head>

<body>

<script type=\"text/javascript\" src=\"/pimcore/static6/js/lib/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"/pimcore/static6/js/lib/ext/ext-all.js\"></script>
<script type=\"text/javascript\" src=\"/pimcore/static6/js/pimcore/overrides.js\"></script>
<script type=\"text/javascript\" src=\"/pimcore/static6/js/lib/ext/classic/theme-triton/theme-triton.js\"></script>

";
        // line 61
        $context["errorString"] = "";
        // line 62
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 62, $this->getSourceContext()); })()))) {
            // line 63
            echo "    ";
            ob_start();
            // line 64
            echo "        ";
            ob_start();
            // line 65
            echo "        <b>ERROR(s):</b><br />
        <ul>
            ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 67, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 68
                echo "                <li>";
                echo $context["error"];
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "        </ul>
        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 72
            echo "    ";
            $context["errorString"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 74
        echo "
<script type=\"text/javascript\">
    var errorMessages = '";
        // line 76
        echo twig_trim_filter((isset($context["errorString"]) || array_key_exists("errorString", $context) ? $context["errorString"] : (function () { throw new Twig_Error_Runtime('Variable "errorString" does not exist.', 76, $this->getSourceContext()); })()));
        echo "';
    var availableProfiles = ";
        // line 77
        echo json_encode((isset($context["profiles"]) || array_key_exists("profiles", $context) ? $context["profiles"] : (function () { throw new Twig_Error_Runtime('Variable "profiles" does not exist.', 77, $this->getSourceContext()); })()));
        echo ";

    ";
        // line 467
        echo "
    Ext.onReady(function() {

        Ext.tip.QuickTipManager.init();
        Ext.Ajax.setDisableCaching(true);
        Ext.Ajax.setTimeout(900000);


        var passwordGenerator = function ( len ) {
            var length = (len)?(len):(10);
            var string = \"abcdefghijklmnopqrstuvwxyz\"; //to upper
            var numeric = '0123456789';
            var punctuation = '!@#\$%^&*()_+~`|}{[]\\:;?><,./-=';
            var password = \"\";
            var character = \"\";
            while( password.length<length ) {
                entity1 = Math.ceil(string.length * Math.random()*Math.random());
                entity2 = Math.ceil(numeric.length * Math.random()*Math.random());
                entity3 = Math.ceil(punctuation.length * Math.random()*Math.random());
                hold = string.charAt( entity1 );
                hold = (entity1%2==0)?(hold.toUpperCase()):(hold);
                character += hold;
                character += numeric.charAt( entity2 );
                character += punctuation.charAt( entity3 );
                password = character;
            }
            return password;
        };

        var isValidPassword = function (pass) {
            var passRegExp = /^(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\\s).{10,}\$/;
            if(!pass.match(passRegExp)) {
                return false;
            }
            return true;
        };

        var validateInput = function () {

            var validInstall = true;
            var validCheckReq = true;
            var credentialError;


            \$.each([\"mysql_host_socket\",\"mysql_username\",\"mysql_database\"], function (index, value) {
                var item = Ext.getCmp(value);
                if(item.getValue().length < 1) {
                    validCheckReq = false;
                    item.addCls(\"invalid\");
                } else {
                    item.removeCls(\"invalid\");
                }
            });

            \$.each([\"admin_username\",\"admin_password\", \"profile\"], function (index, value) {
                var item = Ext.getCmp(value);
                if(!item.getValue()) {
                    validInstall = false;
                    item.addCls(\"invalid\");
                } else {
                    item.removeCls(\"invalid\");
                }
            });

            if(validInstall) {
                var adminPassword = Ext.getCmp(\"admin_password\");
                if (!isValidPassword(adminPassword.getValue())) {
                    validInstall = false;
                    credentialError = \"Password must contain at least 10 characters, one lowercase letter, one uppercase letter, one numeric digit, and one special character!\";
                }
            }

            var credentialErrorEl = Ext.getCmp(\"credential_error\");
            if(credentialError) {
                credentialErrorEl.update(credentialError);
                credentialErrorEl.show();
            } else {
                credentialErrorEl.hide();
            }

            if(!validCheckReq) {
                validInstall = false;
            }

            if(validInstall) {
                Ext.getCmp(\"install_button\").enable();
            } else {
                Ext.getCmp(\"install_button\").disable();
            }

            if(validCheckReq) {
                Ext.getCmp(\"check_button\").enable();
            } else {
                Ext.getCmp(\"check_button\").disable();
            }
        };

        var logoPanelConf = {
            xtype: \"panel\",
            id: \"logo\",
            border: false,
            manageHeight: false,
            bodyStyle: \"padding: 20px 10px 5px 10px\",
            html: '<div align=\"center\"><img width=\"200\" src=\"/pimcore/static6/img/logo-gray.svg\" align=\"center\" /></div>'
        };

        var win = null;

        if(errorMessages.length > 0) {
            win = new Ext.Window({
                width: 450,
                closable: false,
                closeable: false,
                y: 20,
                items: [
                    logoPanelConf,
                    {
                        xtype: \"panel\",
                        id: \"install_errors\",
                        border: false,
                        bodyStyle: \"padding: 10px\",
                        html: errorMessages
                    }
                ],
                bbar: [\"->\", {
                    id: \"check_button\",
                    text: \"Reload\",
                    iconCls: \"icon_reload\",
                    handler: function () {
                        window.location.reload();
                    }
                }],
                listeners: {
                    afterrender: function () {
                        // no idea why this is necessary to layout the window correctly
                        window.setTimeout(function () {
                            win.updateLayout();
                        }, 1000);
                    }
                }
            });
        } else {
            win = new Ext.Window({
                width: 450,
                closable: false,
                closeable: false,
                y: 20,
                items: [
                    logoPanelConf,
                    {
                        xtype: \"panel\",
                        id: \"install_errors\",
                        border: false,
                        bodyStyle: \"padding: 10px\",
                        hidden: true
                    },
                    {
                        xtype: \"form\",
                        id: \"install_form\",
                        defaultType: \"textfield\",
                        bodyStyle: \"padding: 20px 10px 10px 10px\",
                        items: [{
                            xtype: \"combo\",
                            name: \"profile\",
                            id: \"profile\",
                            fieldLabel: \"<b>Install Profile</b>\",
                            labelWidth: 116,
                            store: availableProfiles,
                            mode: \"local\",
                            emptyText: \"Please select a profile\",
                            width: 396,
                            editable: false,
                            triggerAction: \"all\",
                            listeners: {
                                \"select\": validateInput
                            }
                        },{
                            title: \"MySQL Settings\",
                            xtype: \"fieldset\",
                            defaults: {
                                width: 380
                            },
                            items: [{
                                xtype: \"textfield\",
                                name: \"mysql_host_socket\",
                                id: \"mysql_host_socket\",
                                fieldLabel: \"Host / Socket\",
                                value: \"localhost\",
                                enableKeyEvents: true,
                                listeners: {
                                    \"keyup\": validateInput
                                }
                            },
                                {
                                    xtype: \"textfield\",
                                    name: \"mysql_port\",
                                    fieldLabel: \"Port\",
                                    value: \"3306\"
                                },
                                {
                                    xtype: \"textfield\",
                                    name: \"mysql_username\",
                                    id: \"mysql_username\",
                                    fieldLabel: \"Username\",
                                    enableKeyEvents: true,
                                    listeners: {
                                        \"keyup\": validateInput
                                    }
                                },
                                {
                                    xtype: \"textfield\",
                                    name: \"mysql_password\",
                                    fieldLabel: \"Password\"
                                },
                                {
                                    xtype: \"textfield\",
                                    name: \"mysql_database\",
                                    id: \"mysql_database\",
                                    fieldLabel: \"Database\",
                                    enableKeyEvents: true,
                                    listeners: {
                                        \"keyup\": validateInput
                                    }
                                }
                            ]
                        },
                            {
                                title: \"Admin User\",
                                xtype: \"fieldset\",
                                defaults: {
                                    width: 380
                                },
                                items: [
                                    {
                                        xtype: \"textfield\",
                                        name: \"admin_username\",
                                        id: \"admin_username\",
                                        fieldLabel: \"Username\",
                                        value: \"admin\",
                                        enableKeyEvents: true,
                                        listeners: {
                                            \"keyup\": validateInput
                                        }
                                    },
                                    {
                                        xtype: \"fieldcontainer\",
                                        layout: 'hbox',
                                        items: [{
                                            xtype: \"textfield\",
                                            width: 340,
                                            name: \"admin_password\",
                                            id: \"admin_password\",
                                            fieldLabel: \"Password\",
                                            enableKeyEvents: true,
                                            listeners: {
                                                \"keyup\": validateInput
                                            }
                                        }, {
                                            xtype: \"button\",
                                            width: 32,
                                            style: \"margin-left: 8px\",
                                            iconCls: \"icon_generate\",
                                            handler: function () {

                                                var pass;

                                                while(true) {
                                                    pass = passwordGenerator(15);
                                                    if(isValidPassword(pass)) {
                                                        break;
                                                    }
                                                }

                                                Ext.getCmp(\"admin_password\").setValue(pass);
                                                validateInput();
                                            }
                                        }]
                                    }, {
                                        xtype: \"container\",
                                        id: \"credential_error\",
                                        hidden: true
                                    }
                                ]
                            }
                        ]
                    }
                ],
                bbar: [{
                    id: \"check_button\",
                    text: \"Check Requirements\",
                    iconCls: \"icon_check\",
                    disabled: true,
                    handler: function () {
                        var checkWin = new Ext.Window({
                            width: 720,
                            scrollable: true,
                            height: 500,
                            title: 'Check Requirements',
                            html: 'Please wait ...'
                        });
                        checkWin.show();

                        var params = Ext.getCmp(\"install_form\").getForm().getFieldValues();
                        params['headless'] = 'true';

                        Ext.Ajax.request({
                            url: \"/install/check\",
                            method: \"post\",
                            params: params,
                            success: function (response) {
                                checkWin.update(response.responseText);
                            },
                            failure: function (response) {
                                checkWin.update(\"<h3>Ooops ... something went wrong</h3><p>Please check your database configuration values and your log files.</p>\");
                            }
                        });
                    }
                },\"->\",
                    {
                        id: \"install_button\",
                        text: \"<b>Install Now!</b>\",
                        iconCls: \"icon_ok\",
                        disabled: true,
                        handler: function (btn) {

                            btn.disable();
                            Ext.getCmp(\"install_form\").hide();
                            Ext.getCmp(\"check_button\").hide();

                            Ext.getCmp(\"install_errors\").show();
                            Ext.getCmp(\"install_errors\").update(\"Installing ...\");

                            var handleResponse = function (transport) {
                                try {
                                    var response = Ext.decode(transport.responseText);
                                } catch (e) {
                                    Ext.getCmp(\"install_errors\").update(transport.responseText);
                                    Ext.getCmp(\"install_form\").show();
                                    Ext.getCmp(\"check_button\").show();
                                    btn.enable();
                                }

                                if (response.success) {
                                    var date = new Date();
                                    location.href = \"/admin?_dc=\" + date.getTime();
                                } else {
                                    var errorString = '<b>ERROR(s) (please see var/installer/logs for details):</b><br><ul>';

                                    if (response.errors && response.errors.length > 0) {
                                        Ext.each(response.errors, function (error) {
                                            errorString += '<li>' + error + '</li>';
                                        });
                                    }

                                    errorString += '</ul>';

                                    Ext.getCmp(\"install_errors\").update(errorString);
                                    Ext.getCmp(\"install_form\").show();
                                    Ext.getCmp(\"check_button\").show();
                                    btn.enable();
                                }
                            };

                            Ext.Ajax.request({
                                url: \"/install\",
                                method: \"post\",
                                params: Ext.getCmp(\"install_form\").getForm().getFieldValues(),
                                success: handleResponse,
                                failure: handleResponse
                            });
                        }
                    }
                ],
                listeners: {
                    afterrender: function () {
                        // no idea why this is necessary to layout the window correctly
                        window.setTimeout(function () {
                            win.updateLayout();

                            validateInput();
                        }, 1000);
                    }
                }
            });
        }

        win.show();
    });
    ";
        echo "
</script>

</body>
</html>
";
        
        $__internal_43a07010065a1ca1d47465a7fafb93600af8ad7513985185bb84b27bd566f13f->leave($__internal_43a07010065a1ca1d47465a7fafb93600af8ad7513985185bb84b27bd566f13f_prof);

    }

    public function getTemplateName()
    {
        return "@install/install.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 467,  130 => 77,  126 => 76,  122 => 74,  118 => 72,  114 => 70,  105 => 68,  101 => 67,  97 => 65,  94 => 64,  91 => 63,  89 => 62,  87 => 61,  31 => 8,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"robots\" content=\"noindex, nofollow\" />
    <link rel=\"icon\" type=\"image/png\" href=\"/pimcore/static6/img/favicon/favicon-32x32.png\" />

    <title>{{ app.request.httpHost }} :: Pimcore</title>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"/pimcore/static6/js/lib/ext/classic/theme-triton/resources/theme-triton-all.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/pimcore/static6/css/admin.css\"/>

    <style type=\"text/css\">
        body {
            min-height: 600px;
        }

        .invalid .x-form-item-body {
            border-right: 5px solid #a61717;
        }

        #credential_error {
            color: #a61717;
        }

        .icon_generate {
            background: url(/pimcore/static6/img/flat-color-icons/engineering.svg) center center no-repeat !important;
        }

        .icon_ok {
            background: url(/pimcore/static6/img/flat-color-icons/ok.svg) center center no-repeat !important;
        }

        .icon_check {
            background: url(/pimcore/static6/img/flat-color-icons/factory.svg) center center no-repeat !important;
        }

        .icon_reload {
            background: url(/pimcore/static6/img/flat-color-icons/synchronize.svg) center center no-repeat !important;
        }

        #install_errors, #install_errors b {
            color: red;
        }

        #install_errors a {
            color: #404040;
        }

    </style>

</head>

<body>

<script type=\"text/javascript\" src=\"/pimcore/static6/js/lib/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"/pimcore/static6/js/lib/ext/ext-all.js\"></script>
<script type=\"text/javascript\" src=\"/pimcore/static6/js/pimcore/overrides.js\"></script>
<script type=\"text/javascript\" src=\"/pimcore/static6/js/lib/ext/classic/theme-triton/theme-triton.js\"></script>

{% set errorString = '' %}
{% if errors is not empty %}
    {% set errorString %}
        {% spaceless %}
        <b>ERROR(s):</b><br />
        <ul>
            {% for error in errors %}
                <li>{{ error|raw }}</li>
            {% endfor %}
        </ul>
        {% endspaceless %}
    {% endset %}
{% endif %}

<script type=\"text/javascript\">
    var errorMessages = '{{ errorString|trim|raw }}';
    var availableProfiles = {{ profiles|json_encode()|raw }};

    {% verbatim %}
    Ext.onReady(function() {

        Ext.tip.QuickTipManager.init();
        Ext.Ajax.setDisableCaching(true);
        Ext.Ajax.setTimeout(900000);


        var passwordGenerator = function ( len ) {
            var length = (len)?(len):(10);
            var string = \"abcdefghijklmnopqrstuvwxyz\"; //to upper
            var numeric = '0123456789';
            var punctuation = '!@#\$%^&*()_+~`|}{[]\\:;?><,./-=';
            var password = \"\";
            var character = \"\";
            while( password.length<length ) {
                entity1 = Math.ceil(string.length * Math.random()*Math.random());
                entity2 = Math.ceil(numeric.length * Math.random()*Math.random());
                entity3 = Math.ceil(punctuation.length * Math.random()*Math.random());
                hold = string.charAt( entity1 );
                hold = (entity1%2==0)?(hold.toUpperCase()):(hold);
                character += hold;
                character += numeric.charAt( entity2 );
                character += punctuation.charAt( entity3 );
                password = character;
            }
            return password;
        };

        var isValidPassword = function (pass) {
            var passRegExp = /^(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\\s).{10,}\$/;
            if(!pass.match(passRegExp)) {
                return false;
            }
            return true;
        };

        var validateInput = function () {

            var validInstall = true;
            var validCheckReq = true;
            var credentialError;


            \$.each([\"mysql_host_socket\",\"mysql_username\",\"mysql_database\"], function (index, value) {
                var item = Ext.getCmp(value);
                if(item.getValue().length < 1) {
                    validCheckReq = false;
                    item.addCls(\"invalid\");
                } else {
                    item.removeCls(\"invalid\");
                }
            });

            \$.each([\"admin_username\",\"admin_password\", \"profile\"], function (index, value) {
                var item = Ext.getCmp(value);
                if(!item.getValue()) {
                    validInstall = false;
                    item.addCls(\"invalid\");
                } else {
                    item.removeCls(\"invalid\");
                }
            });

            if(validInstall) {
                var adminPassword = Ext.getCmp(\"admin_password\");
                if (!isValidPassword(adminPassword.getValue())) {
                    validInstall = false;
                    credentialError = \"Password must contain at least 10 characters, one lowercase letter, one uppercase letter, one numeric digit, and one special character!\";
                }
            }

            var credentialErrorEl = Ext.getCmp(\"credential_error\");
            if(credentialError) {
                credentialErrorEl.update(credentialError);
                credentialErrorEl.show();
            } else {
                credentialErrorEl.hide();
            }

            if(!validCheckReq) {
                validInstall = false;
            }

            if(validInstall) {
                Ext.getCmp(\"install_button\").enable();
            } else {
                Ext.getCmp(\"install_button\").disable();
            }

            if(validCheckReq) {
                Ext.getCmp(\"check_button\").enable();
            } else {
                Ext.getCmp(\"check_button\").disable();
            }
        };

        var logoPanelConf = {
            xtype: \"panel\",
            id: \"logo\",
            border: false,
            manageHeight: false,
            bodyStyle: \"padding: 20px 10px 5px 10px\",
            html: '<div align=\"center\"><img width=\"200\" src=\"/pimcore/static6/img/logo-gray.svg\" align=\"center\" /></div>'
        };

        var win = null;

        if(errorMessages.length > 0) {
            win = new Ext.Window({
                width: 450,
                closable: false,
                closeable: false,
                y: 20,
                items: [
                    logoPanelConf,
                    {
                        xtype: \"panel\",
                        id: \"install_errors\",
                        border: false,
                        bodyStyle: \"padding: 10px\",
                        html: errorMessages
                    }
                ],
                bbar: [\"->\", {
                    id: \"check_button\",
                    text: \"Reload\",
                    iconCls: \"icon_reload\",
                    handler: function () {
                        window.location.reload();
                    }
                }],
                listeners: {
                    afterrender: function () {
                        // no idea why this is necessary to layout the window correctly
                        window.setTimeout(function () {
                            win.updateLayout();
                        }, 1000);
                    }
                }
            });
        } else {
            win = new Ext.Window({
                width: 450,
                closable: false,
                closeable: false,
                y: 20,
                items: [
                    logoPanelConf,
                    {
                        xtype: \"panel\",
                        id: \"install_errors\",
                        border: false,
                        bodyStyle: \"padding: 10px\",
                        hidden: true
                    },
                    {
                        xtype: \"form\",
                        id: \"install_form\",
                        defaultType: \"textfield\",
                        bodyStyle: \"padding: 20px 10px 10px 10px\",
                        items: [{
                            xtype: \"combo\",
                            name: \"profile\",
                            id: \"profile\",
                            fieldLabel: \"<b>Install Profile</b>\",
                            labelWidth: 116,
                            store: availableProfiles,
                            mode: \"local\",
                            emptyText: \"Please select a profile\",
                            width: 396,
                            editable: false,
                            triggerAction: \"all\",
                            listeners: {
                                \"select\": validateInput
                            }
                        },{
                            title: \"MySQL Settings\",
                            xtype: \"fieldset\",
                            defaults: {
                                width: 380
                            },
                            items: [{
                                xtype: \"textfield\",
                                name: \"mysql_host_socket\",
                                id: \"mysql_host_socket\",
                                fieldLabel: \"Host / Socket\",
                                value: \"localhost\",
                                enableKeyEvents: true,
                                listeners: {
                                    \"keyup\": validateInput
                                }
                            },
                                {
                                    xtype: \"textfield\",
                                    name: \"mysql_port\",
                                    fieldLabel: \"Port\",
                                    value: \"3306\"
                                },
                                {
                                    xtype: \"textfield\",
                                    name: \"mysql_username\",
                                    id: \"mysql_username\",
                                    fieldLabel: \"Username\",
                                    enableKeyEvents: true,
                                    listeners: {
                                        \"keyup\": validateInput
                                    }
                                },
                                {
                                    xtype: \"textfield\",
                                    name: \"mysql_password\",
                                    fieldLabel: \"Password\"
                                },
                                {
                                    xtype: \"textfield\",
                                    name: \"mysql_database\",
                                    id: \"mysql_database\",
                                    fieldLabel: \"Database\",
                                    enableKeyEvents: true,
                                    listeners: {
                                        \"keyup\": validateInput
                                    }
                                }
                            ]
                        },
                            {
                                title: \"Admin User\",
                                xtype: \"fieldset\",
                                defaults: {
                                    width: 380
                                },
                                items: [
                                    {
                                        xtype: \"textfield\",
                                        name: \"admin_username\",
                                        id: \"admin_username\",
                                        fieldLabel: \"Username\",
                                        value: \"admin\",
                                        enableKeyEvents: true,
                                        listeners: {
                                            \"keyup\": validateInput
                                        }
                                    },
                                    {
                                        xtype: \"fieldcontainer\",
                                        layout: 'hbox',
                                        items: [{
                                            xtype: \"textfield\",
                                            width: 340,
                                            name: \"admin_password\",
                                            id: \"admin_password\",
                                            fieldLabel: \"Password\",
                                            enableKeyEvents: true,
                                            listeners: {
                                                \"keyup\": validateInput
                                            }
                                        }, {
                                            xtype: \"button\",
                                            width: 32,
                                            style: \"margin-left: 8px\",
                                            iconCls: \"icon_generate\",
                                            handler: function () {

                                                var pass;

                                                while(true) {
                                                    pass = passwordGenerator(15);
                                                    if(isValidPassword(pass)) {
                                                        break;
                                                    }
                                                }

                                                Ext.getCmp(\"admin_password\").setValue(pass);
                                                validateInput();
                                            }
                                        }]
                                    }, {
                                        xtype: \"container\",
                                        id: \"credential_error\",
                                        hidden: true
                                    }
                                ]
                            }
                        ]
                    }
                ],
                bbar: [{
                    id: \"check_button\",
                    text: \"Check Requirements\",
                    iconCls: \"icon_check\",
                    disabled: true,
                    handler: function () {
                        var checkWin = new Ext.Window({
                            width: 720,
                            scrollable: true,
                            height: 500,
                            title: 'Check Requirements',
                            html: 'Please wait ...'
                        });
                        checkWin.show();

                        var params = Ext.getCmp(\"install_form\").getForm().getFieldValues();
                        params['headless'] = 'true';

                        Ext.Ajax.request({
                            url: \"/install/check\",
                            method: \"post\",
                            params: params,
                            success: function (response) {
                                checkWin.update(response.responseText);
                            },
                            failure: function (response) {
                                checkWin.update(\"<h3>Ooops ... something went wrong</h3><p>Please check your database configuration values and your log files.</p>\");
                            }
                        });
                    }
                },\"->\",
                    {
                        id: \"install_button\",
                        text: \"<b>Install Now!</b>\",
                        iconCls: \"icon_ok\",
                        disabled: true,
                        handler: function (btn) {

                            btn.disable();
                            Ext.getCmp(\"install_form\").hide();
                            Ext.getCmp(\"check_button\").hide();

                            Ext.getCmp(\"install_errors\").show();
                            Ext.getCmp(\"install_errors\").update(\"Installing ...\");

                            var handleResponse = function (transport) {
                                try {
                                    var response = Ext.decode(transport.responseText);
                                } catch (e) {
                                    Ext.getCmp(\"install_errors\").update(transport.responseText);
                                    Ext.getCmp(\"install_form\").show();
                                    Ext.getCmp(\"check_button\").show();
                                    btn.enable();
                                }

                                if (response.success) {
                                    var date = new Date();
                                    location.href = \"/admin?_dc=\" + date.getTime();
                                } else {
                                    var errorString = '<b>ERROR(s) (please see var/installer/logs for details):</b><br><ul>';

                                    if (response.errors && response.errors.length > 0) {
                                        Ext.each(response.errors, function (error) {
                                            errorString += '<li>' + error + '</li>';
                                        });
                                    }

                                    errorString += '</ul>';

                                    Ext.getCmp(\"install_errors\").update(errorString);
                                    Ext.getCmp(\"install_form\").show();
                                    Ext.getCmp(\"check_button\").show();
                                    btn.enable();
                                }
                            };

                            Ext.Ajax.request({
                                url: \"/install\",
                                method: \"post\",
                                params: Ext.getCmp(\"install_form\").getForm().getFieldValues(),
                                success: handleResponse,
                                failure: handleResponse
                            });
                        }
                    }
                ],
                listeners: {
                    afterrender: function () {
                        // no idea why this is necessary to layout the window correctly
                        window.setTimeout(function () {
                            win.updateLayout();

                            validateInput();
                        }, 1000);
                    }
                }
            });
        }

        win.show();
    });
    {% endverbatim %}
</script>

</body>
</html>
", "@install/install.html.twig", "/home/t/torick/project.gistol.ru/pimcore/lib/Pimcore/Install/Resources/views/Install/install.html.twig");
    }
}
