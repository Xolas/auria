/**
 * 
 * Template Manager
 * @type Template
 */
Template = {
    /**
     * Holds all the loaded templates
     */
    loadedTemplates: {},
    /**
     *  Get an underscore template based on the given name.
     *  
     *  The name is actualy the path to the template without the html extension
     * and the slashes replaced by a dot.
     * 
     *  Even tough it can return the template if it's already loaded u should use
     * callbacks instead!
     * 
     *  Only use this function without a callback if you're 100% sure the template
     * its already loaded
     *  
     *  
     * @param {string} name
     * @param {function} callback
     * @returns {Template.loadedTemplates}
     */
    get: function (name, callback) {
        if (Template.loadedTemplates[name] !== undefined) {
            if (callback !== undefined) {
                callback(Template.loadedTemplates);
            } else {
                return Template.loadedTemplates[name];
            }
        } else {
            Template.load(name, function (ans) {
                if (callback !== undefined) {
                    callback(
                            Template.loadedTemplates[name] = _.template(ans,
                            {
                                variable: 'data',
                                interpolate: /\{\{(.+?)\}\}/g
                            }
                    ));
                }
            });
        }
    },
    load: function (name, callback) {

        var req = $.ajax({
            url: '/js/views/' + name.replace(/\./g, '/') + '.html',
            type: 'GET'
        });

        req.done(function (ans) {

            if (callback !== undefined) {
                callback(ans);
            } else {
                Template.loadedTemplates[name] = ans;
            }

        });
    },
    /**
     *  Load and compile a template with the given options
     *  
     * @param {string} name
     * @param {Object} object
     * @param {function} callback
     */
    build: function (name, object, callback) {

        Template.get(name, function (template) {
            callback(template(object));
        });
    }


};