<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:31
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/component/element/color.js" */ ?>
<?php /*%%SmartyHeaderCode:13007620625cfad68775a387-96566275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1fcae9cbb3b942c7fa5e1233b24855ad44ecf35' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/component/element/color.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13007620625cfad68775a387-96566275',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68776a087_63737834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68776a087_63737834')) {function content_5cfad68776a087_63737834($_smarty_tpl) {?>/*
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category   Shopware
 * @package    Base
 * @subpackage Component
 * @version    $Id$
 * @author shopware AG
 */
Ext.define('Shopware.apps.Base.view.element.Color', {
    extend: 'Ext.form.TriggerField',
    alias: [
        'widget.base-element-color'
    ],

    triggerConfig: {
        src: Ext.BLANK_IMAGE_URL,
        tag: "img",
        cls: "x-form-trigger x-form-color-trigger"
    },

    //invalidText: "Colors must be in a the hex format #FFFFFF.",
    // 
    regex: /^#([0-9A-F]{6}|[0-9A-F]{3})$/i,
    // 

    initComponent: function () {
        this.callParent()
        this.addEvents('select');
        this.on('change', function (c, v) {
            this.onSelect(c, v);
        }, this);
    },

    // private
    onDestroy: function () {
        Ext.destroy(this.menu);
        this.callParent();
    },

    afterRender: function () {
        this.callParent(arguments)
        this.inputEl.setStyle('background', this.value);
        this.detectFontColor();
    },

    onTriggerClick: function (e) {
        if (this.disabled) {
            return;
        }
        this.menu = new Ext.ux.ColorPicker({
            shadow: true,
            autoShow: true,
            hideOnClick: false
        });
        this.menu.alignTo(this.inputEl, 'tl-bl?');
        this.menuEvents('on');
        this.menu.show(this.inputEl);
    },

    menuEvents: function (method) {
        this.menu[method]('select', this.onSelect, this);
        this.menu[method]('hide', this.onMenuHide, this);
        this.menu[method]('show', this.onFocus, this);
    },

    onSelect: function (m, d) {
        d = Ext.isString(d) && d.substr(0, 1) != '#' ? '#' + d : d;
        this.setValue(d);
        this.fireEvent('select', this, d);
        this.inputEl.setStyle('background', d);
        this.detectFontColor();
    },

    detectFontColor: function () {
        var value = this.value;
        if (!this.menu || !this.menu.picker.rawValue) {
            if (!value) {
                value = '#FFF';
            }
            if (value.length < 6) {
                value = value + value.slice(1, 5);
            };
            var h2d = function (d) {
                return parseInt(d, 16);
            }
            value = [
                h2d(value.slice(1, 3)),
                h2d(value.slice(3, 5)),
                h2d(value.slice(5))
            ];
        } else {
            value = this.menu.picker.rawValue;
        }
        var avg = (value[0] + value[1] + value[2]) / 3;
        this.inputEl.setStyle('color', (isNaN(avg) || avg > 128) ? '#000' : '#FFF');
    },

    onMenuHide: function () {
        this.focus(false, 60);
        this.menuEvents('un');
    }
});

Ext.define('Ext.ux.ColorPicker', {
    extend: 'Ext.menu.ColorPicker',
    initComponent: function () {
        var me = this;
        me.height = 100;
        me.hideOnClick = true;
        me.callParent();
        return me.processEvent();
    },
    processEvent: function () {
        return;
        var me = this;
        me.picker.clearListeners();
        me.relayEvents(me.picker, ['select']);

        if (me.hideOnClick) {
            me.on('select', me.hidePickerOnSelect, me);
        }
    }
});
<?php }} ?>