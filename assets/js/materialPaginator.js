/**
 * Plugin to paginate some content
 * @param {type} $
 * @returns {undefined}
 */

(function ($) {
    $.fn.contentPaginator = function (options) {

        $.fn.contentPaginator.defaults = {
            elementsPerPage: 2,
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
        ;

        function buildPaginator() {
            plugin.paginatorContainer = $('<ul></ul>').addClass(plugin.settings.paginationClass);
            plugin.paginatorContainer.append(buildPaginatorContent(plugin.settings.prevClass, null));
            for (var i = 1; i <= calcPages(); i++) {
                plugin.paginatorContainer.append(buildPaginatorContent(plugin.settings.numberClass, i));
            }

            plugin.paginatorContainer.append(buildPaginatorContent(plugin.settings.nextClass, null));
            plugin.paginatorContainer.children('li').first().addClass('disabled');
            plugin.paginatorContainer.children('li.' + plugin.settings.numberClass).first().addClass(plugin.settings.selectedClass);
            plugin.after(plugin.paginatorContainer);
        }
        ;

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
                    break;
            }
            return pContent;
        }
        ;

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
                        $(this).addClass(plugin.settings.selectedClass);

                        if ($(this).prev().hasClass(plugin.settings.prevClass)) {
                            $(this).prev().addClass('disabled');
                        } else if (!$(this).prev().hasClass(plugin.settings.prevClass)) {
                            plugin.paginatorContainer.children('.' + plugin.settings.prevClass).removeClass('disabled');
                        };

                        if ($(this).next().hasClass(plugin.settings.nextClass)) {
                            $(this).next().addClass('disabled');
                        } else if (!$(this).next().hasClass(plugin.settings.nextClass)) {
                            plugin.paginatorContainer.children('.' + plugin.settings.nextClass).removeClass('disabled');
                        };
                    };
                    if ($(this).hasClass(plugin.settings.prevClass)) {
                        if (active.prev().is('.'+plugin.settings.prevClass)) {
                            $(this).addClass('disabled');
                        } else {
                            plugin.paginatorContainer.children('.'+plugin.settings.nextClass).removeClass('disabled');
                            active.removeClass(plugin.settings.selectedClass);
                            active.prev('.' + plugin.settings.numberClass).addClass(plugin.settings.selectedClass);
                            active = active.prev();
                        };
                        
                    };
                    if ($(this).hasClass(plugin.settings.nextClass)) {                        
                        if (active.next().is('.'+plugin.settings.nextClass)) {
                            $(this).addClass('disabled');
                        } else {
                            plugin.paginatorContainer.children('.'+plugin.settings.prevClass).removeClass('disabled');
                            active.removeClass(plugin.settings.selectedClass);
                            active.next('.' + plugin.settings.numberClass).addClass(plugin.settings.selectedClass);
                            active = active.next();
                        };

                    };
                    if(active.next().hasClass(plugin.settings.nextClass)){
                        active.next().addClass('disabled');
                    }else if(active.prev().hasClass(plugin.settings.prevClass)){
                        active.prev().addClass('disabled');
                    };
                    
                });
            });
        }
        ;

        function calcPages() {
            return Math.round(plugin.settings.totalElements / plugin.settings.elementsPerPage);
        }
        ;

        init();
        clickEvent();

    };
})(jQuery);





//$.fn.paginator = function (options) {
//    var totalElements = this.children('li').length;
//    var collection = this;
//    var defaults = {
//        elementsPerPage: 2,
//        elementsIdentify: '.collection-item',
//    };
//
//    this.after('<ul class="pagination">' +
//            '<li class="prev disabled"><a href="#!"><i class="mdi-navigation-chevron-left"></i></a></li>' +
//            '<li class="waves-effect next"><a href="#!"><i class="mdi-navigation-chevron-right"></i></a></li>' +
//            '</ul>');
//
//    var paginator = $('.pagination');
//    createElement();
//    showPage();
//
//
//    function createElement() {
//        for (var i = 1; i <= calculatePages(); i++) {
//            paginator.find('.next').before('<li class="waves-effect"><a href="#!">' + i + '</a></li>');
//        }
//        $('.prev').next().addClass('active');
//    };
//
//    paginator.children('li:not(.next,.prev)').on('click', function () {
//        paginator.children('li.active').removeClass('active');
//        $(this).addClass('active');
//        showPage();
//    });
//
//    function showPage() {
//        var currentPage = parseInt(paginator.children('li.active').text());
//        collection.find(defaults.elementsIdentify).each(function (index) {
//            if (index < (currentPage - 1) * defaults.elementsPerPage || index >= (currentPage * defaults.elementsPerPage)) {
//                $(this).hide();
//            }else{
//                $(this).show();
//            }
//        });
//    }
//
//    function calculatePages() {
//        return Math.round(totalElements / defaults.elementsPerPage);
//    }
//
//    function organizePaginator(selectedElement) {
//
//    }
//};
