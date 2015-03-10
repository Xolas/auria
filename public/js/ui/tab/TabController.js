/**
 * 
 * @param {TabControllerParams} params Initial parameters for the tab group
 * 
 * @returns {undefined}
 */
function TabController(params) {

    var self = this;

    this.container;

    this.name = "";

    this.tabs = {};

    $.extend(this, params);

    this.init = function () {

    };

    /**
     *  Return the number of tabs
     * @returns {number}
     */
    this.size = function () {
        return self.tabs.length;
    };

    this.createTab = function (tabName) {

    };

    this.destroy = function () {
        
    };
    
    this.destroyTab = function (tabName) {

    };

    this.focus = function (tabName) {

    };

    this.focusTabAt = function (index) {

    };

    this.previousTab = function () {

    };

    this.blur = function () {

    };

    var tabStackCont = 0;

    this.tabStack = [];



}

({
    group: {},
    /**
     * 
     * @param {string} groupName
     * @returns {undefined}
     */
    create: function (groupName) {

        if (Tabs.group[groupName] !== undefined) {
            Tabs.destroy(groupName);
        }

        var tabCtrl = new TabController({
            name: groupName,
            container : $('.auria-body')
        });

        Tabs.group[groupName] = tabCtrl;
        tabCtrl.init();

        return tabCtrl;
    },
    
    destroy: function (groupName) {
        
        if(Tabs.group[groupName] !== undefined) {
            Tabs.group[groupName].destroy();
        }

    },
    
    close: function (groupName, tabName) {

    },
    
    get: function (gorupName) {

    }
})(Tabs);