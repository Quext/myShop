<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:30
         compiled from "/Applications/MAMP/htdocs/myShop/engine/Library/ExtJs/overrides/Ext.panel.Panel.js" */ ?>
<?php /*%%SmartyHeaderCode:17685183995cfad686404552-58032135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fefb13998902f8c3f23f1c2e1c3d918f81cb7e12' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/engine/Library/ExtJs/overrides/Ext.panel.Panel.js',
      1 => 1559938519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17685183995cfad686404552-58032135',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad686410ff6_09135756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad686410ff6_09135756')) {function content_5cfad686410ff6_09135756($_smarty_tpl) {?>/**
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
 */

/**
 * Overrides the Ext.panel.Panel to disable for all browsers except Google
 * Chrome which performs well here.
 */
Ext.override(Ext.panel.Panel, {
    animCollapse: Ext.isChrome,

    /**
     * Initializes the component and forces the panel
     * to disable all animations.
     *
     * @public
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.animCollapse = Ext.isChrome;
        me.callOverridden(arguments);
    },

     // private - used for dragging
    ghost: function(cls, windowMoving) {
        var me = this,
            ghostPanel = me.ghostPanel,
            box = me.getBox(),
            header;

        if (!ghostPanel) {
            ghostPanel = new Ext.panel.Panel({
                renderTo: document.body,
                floating: {
                    shadow: false
                },
                frame: me.frame && !me.alwaysFramed,
                alwaysFramed: me.alwaysFramed,
                overlapHeader: me.overlapHeader,
                headerPosition: me.headerPosition,
                baseCls: me.baseCls,
                cls: me.baseCls + '-ghost ' + (cls ||'')
            });
            me.ghostPanel = ghostPanel;
        }
        ghostPanel.floatParent = me.floatParent;
        if (me.floating) {
            ghostPanel.setZIndex(Ext.Number.from(me.el.getStyle('zIndex'), (windowMoving) ? -10 : 0));
        } else {
            if(!windowMoving) {
                ghostPanel.toFront();
            }
        }
        if (!(me.preventHeader || (me.header === false))) {
            header = ghostPanel.header;
            // restore options
            if (header) {
                header.suspendLayouts();
                Ext.Array.forEach(header.query('tool'), header.remove, header);
                header.resumeLayouts();
            }
            ghostPanel.addTool(me.ghostTools());
            ghostPanel.setTitle(me.title);
            ghostPanel.setIconCls(me.iconCls);
        }

        ghostPanel.el.show();
        ghostPanel.setPagePosition(box.x, box.y);
        Ext.defer(function() {
            ghostPanel.setSize(box.width, box.height);
        }, 10, me);
        me.el.hide();
        return ghostPanel;
    },

    // private
    unghost: function(show, matchPosition, windowMoving) {
        var me = this;
        if (!me.ghostPanel) {
            return;
        }
        if (show !== false) {
            // Show el first, so that position adjustment in setPagePosition
            // will work when relative positioned elements have their XY read.
            me.el.show();
            if (matchPosition !== false) {
                me.setPagePosition(me.ghostPanel.el.getXY());
                if (me.hideMode == 'offsets') {
                    // clear the hidden style because we just repositioned
                    delete me.el.hideModeStyles;
                }
            }
            if(!windowMoving) {
                Ext.defer(me.focus, 10, me);
            }

        }
        me.ghostPanel.el.hide();
    },
});
<?php }} ?>