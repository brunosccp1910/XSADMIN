/**
 * Plugin to paginate some content
 * @param {type} $
 * @returns {undefined}
 */

(function ($) {
    $.fn.contentPaginator = function (options) {

        $.fn.contentPaginator.defaults = {
            elementsPerPage: 7,
            visablePages: 5,
            childs: 'li',
            paginationClass: 'pagination',
            paginationContentClass: 'waves-effect',
            selectedClass: 'active',
            prevClass: 'prev',
            nextClass: 'next',
            prevIcon: 'mdi-navigation-chevron-left',
            nextIcon: 'mdi-navigation-chevron-right',
            numberClass: 'number',
            totalElements: 0
        };

        var plugin = this;
        plugin.settings = {};
        var paginatorContainer = null;

        function init() {
            plugin.settings = $.extend({}, $.fn.contentPaginator.defaults, options);
            plugin.settings.totalElements = plugin.children(plugin.settings.childs).length;
            buildPaginator();
        }
        

        function buildPaginator() {
            plugin.paginatorContainer = $('<ul></ul>').addClass(plugin.settings.paginationClass);
            plugin.paginatorContainer.append(buildPaginatorContent(plugin.settings.prevClass, null));
            for (var i = 1; i <= calcPages(); i++) {
                plugin.paginatorContainer.append(buildPaginatorContent(plugin.settings.numberClass, i));
            }

            plugin.paginatorContainer.append(buildPaginatorContent(plugin.settings.nextClass, null));
            plugin.paginatorContainer.children('li').first().addClass('disabled');
            plugin.paginatorContainer.children('li.' + plugin.settings.numberClass).first().addClass(plugin.settings.selectedClass);
            showPage(plugin.paginatorContainer.children('li.' + plugin.settings.numberClass).first());
            plugin.after(plugin.paginatorContainer);
        }
        

        function buildPaginatorContent(type, dataPos) {
            var pContent = $('<li></li>').addClass(plugin.settings.paginationContentClass);
            switch (type) {
                case plugin.settings.prevClass:
                    pContent.addClass(plugin.settings.prevClass).
                            append('<a href="#!"><i class="' + plugin.settings.prevIcon + '"></a></li>');
                    break;
                case plugin.settings.nextClass:
                    pContent.addClass(plugin.settings.nextClass).
                            append('<a href="#!"><i class="' + plugin.settings.nextIcon + '"></a></li>');
                    break;
                case plugin.settings.numberClass:
                    pContent.addClass(plugin.settings.numberClass)
                            .append('<a href="#!" data-pos="' + dataPos + '">' + dataPos + '</a></li>');
//                    if(dataPos > plugin.settings.visablePages) pContent.hide();
                    break;
            }
            return pContent;
        }
        

        function clickEvent() {
            plugin.paginatorContainer.find('li').each(function () {
                $(this).click(function () {
                    var active = plugin.paginatorContainer.find('li.' + plugin.settings.selectedClass);

                    if ($(this).hasClass(plugin.settings.selectedClass) || $(this).hasClass('.disabled')) {
                        $(this).click(function (e) {
                            e.preventDefault();
                        });
                        return;
                    }
                    if ($(this).hasClass(plugin.settings.numberClass)) {
                        plugin.paginatorContainer.find('li').removeClass(plugin.settings.selectedClass);
                        active = $(this).addClass(plugin.settings.selectedClass);

                        if ($(this).prev().hasClass(plugin.settings.prevClass)) {
                            $(this).prev().addClass('disabled');
                        } else if (!$(this).prev().hasClass(plugin.settings.prevClass)) {
                            plugin.paginatorContainer.children('.' + plugin.settings.prevClass).removeClass('disabled');
                        }
                        

                        if ($(this).next().hasClass(plugin.settings.nextClass)) {
                            $(this).next().addClass('disabled');
                        } else if (!$(this).next().hasClass(plugin.settings.nextClass)) {
                            plugin.paginatorContainer.children('.' + plugin.settings.nextClass).removeClass('disabled');
                        }
                        
                    }
                    
                    if ($(this).hasClass(plugin.settings.prevClass)) {
                        if (active.prev().is('.' + plugin.settings.prevClass)) {
                            $(this).addClass('disabled');
                        } else {
                            plugin.paginatorContainer.children('.' + plugin.settings.nextClass).removeClass('disabled');
                            active.removeClass(plugin.settings.selectedClass);
                            active.prev('.' + plugin.settings.numberClass).addClass(plugin.settings.selectedClass);
                            active = active.prev();
                        }
                        

                    }
                    
                    if ($(this).hasClass(plugin.settings.nextClass)) {
                        if (active.next().is('.' + plugin.settings.nextClass)) {
                            $(this).addClass('disabled');
                        } else {
                            plugin.paginatorContainer.children('.' + plugin.settings.prevClass).removeClass('disabled');
                            active.removeClass(plugin.settings.selectedClass);
                            active.next('.' + plugin.settings.numberClass).addClass(plugin.settings.selectedClass);
                            active = active.next();
                        }

                    }
                    if (active.next().hasClass(plugin.settings.nextClass)) {
                        active.next().addClass('disabled');
                    } else if (active.prev().hasClass(plugin.settings.prevClass)) {
                        active.prev().addClass('disabled');
                    }
                    ;
                    showPage(active);
                    showNumbers(active);
                });
            });
        }

        function calcPages() {
            return Math.round(plugin.settings.totalElements / plugin.settings.elementsPerPage);
        }
        
        function showNumbers(activeElement){
            var visables = '.'+plugin.settings.numberClass+':visible';
            var half = Math.floor(plugin.settings.visablePages/2);
            var currentPos = parseInt($(activeElement).children('a').data('pos'));
            plugin.paginatorContainer.children(visables).each(function (index) {
                console.log($(this));
            });
            
        }
        
        function showPage(activeElement) {
            plugin.children(plugin.settings.childs).each(function (index) {
                var currentPos = parseInt($(activeElement).children('a').data('pos'));
                if (index < (currentPos - 1) * plugin.settings.elementsPerPage || index >= (currentPos * plugin.settings.elementsPerPage)) {
                    $(this).hide();
                } else {
                    $(this).show();
                }
            });
        }

        init();
        clickEvent();

    };
})(jQuery);
