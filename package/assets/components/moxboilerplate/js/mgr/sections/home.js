Ext.onReady(function() {
    MODx.load({ xtype: 'modxboilerplate-page-home'});
});

modxboilerplate.page.Home = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        components: [{
            xtype: 'modxboilerplate-panel-home'
            ,renderTo: 'modxboilerplate-panel-home-div'
        }]
    }); 
    modxboilerplate.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(modxboilerplate.page.Home,MODx.Component);
Ext.reg('modxboilerplate-page-home',modxboilerplate.page.Home);