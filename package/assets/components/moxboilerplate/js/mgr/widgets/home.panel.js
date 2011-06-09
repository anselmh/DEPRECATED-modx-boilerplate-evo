modxboilerplate.panel.Home = function(config) {
    config = config || {};
    Ext.apply(config,{
        border: false
        ,baseCls: 'modx-formpanel'
        ,items: [{
            html: '<h2>'+_('modxboilerplate')+'</h2>'
            ,border: false
            ,cls: 'modx-page-header'
        },{
            xtype: 'modx-tabs'
            ,bodyStyle: 'padding: 10px'
            ,defaults: { border: false ,autoHeight: true }
            ,border: true
            ,activeItem: 0
            ,hideMode: 'offsets'
            ,items: [{
                title: _('modxboilerplate.items')
                ,items: [{
                    html: '<p>'+_('modxboilerplate.intro_msg')+'</p><br />'
                    ,border: false
                },{
                    xtype: 'modxboilerplate-grid-items'
                    ,preventRender: true
                }]
            }]
        }]
    });
    modxboilerplate.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(modxboilerplate.panel.Home,MODx.Panel);
Ext.reg('modxboilerplate-panel-home',modxboilerplate.panel.Home);
