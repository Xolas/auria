(function () {

    window.Auria = {
        /**
         *  Initinalize Auria interface.
         *  
         *  - Bind events to their proper listeners;
         *  - Set values based on the user preferences
         *  
         */
        init: function () {

            $('.auria-header .auria-logo').on('click', function (e) {
                Auria.showMainMenu();
            });

            $('.auria-fade-background, .menu-header-logo-animation').on('click', function () {
                Auria.hideMainMenu();
            });

            Auria.MainMenu.init();
        },
        /**
         * 
         */
        showMainMenu: function () {
            $(
                    '.ui-menu.auria-menu,'
                    + '.menu-header-logo-animation,'
                    + '.auria-fade-background'
                    ).removeClass('hidden');

            $('.auria-header .auria-logo').addClass('hidden');

        },
        /**
         * 
         */
        hideMainMenu: function () {
            $(
                    '.ui-menu.auria-menu,'
                    + '.menu-header-logo-animation,'
                    + '.auria-fade-background'
                    ).addClass('hidden');

            $('.auria-header .auria-logo').removeClass('hidden');
        }
    };

    window.App = window.Auria;

    if (window.$ === undefined) {

        console.error(
                "Auria depends on jQuery framework in order to work properly!\n"
                + "Delaying Auria initialization to see if jQuery will be imported later on."
                );

        setTimeout(function () {
            App.init();
        }, 3000);

    } else {
        $(function () {
            App.init();
        });
    }



})(window);