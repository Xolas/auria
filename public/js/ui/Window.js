function Window(params) {
    
    this.width;
    
    this.height;
    
    this.controlButtons = ['close'];
    
    this.title = '';
    
    this.name = '';
    
    this.draggable = false;
    
    this.parent = $();
            
    this.placement = 'center';
    
    this.zIndex = 10;
    
    this.windowManager = windowManager;
    
    $.extend(this,params);
    
    this.open = function () {
        
    };
    
    this.hide = function () {
        
    };
    
    this.minimize = function () {
        
    };
    
    
}

windowManager = {
    windows : {},
    active : {},
    lastActive : {},
    stack : []
    
    
};
