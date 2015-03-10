(function () {
    
    Auria.MainMenu = {
        
        container: $('.auria-menu'),
        
        show: function () {

        },
        
        hide: function () {

        },
        
        moduleContainer: $('.module-holder').eq(0),
        
        personContainer: $('.person-holder').eq(0),
        
        init: function () {
            Auria.MainMenu.container.find('.ui-menu-scroller').perfectScrollbar();
        }
    };
    
})(window);