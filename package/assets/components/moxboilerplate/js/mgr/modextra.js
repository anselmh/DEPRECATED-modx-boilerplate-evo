var modxboilerplate = function(config) {
    config = config || {};
    modxboilerplate.superclass.constructor.call(this,config);
};
Ext.extend(modxboilerplate,Ext.Component,{
    page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {},view: {}
});
Ext.reg('modxboilerplate',modxboilerplate);

modxboilerplate = new modxboilerplate();