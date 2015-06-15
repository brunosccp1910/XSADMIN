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
            prevClass: 'mdi-navigation-chevron-left',
            nextClass: 'mdi-navigation-chevron-right',
            numberClass: 'number',
            totalElements: 0,
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
            plugin.paginatorContainer.append(buildPaginatorContent('prev', null));
            for (var i = 1; i <= calcPages(); i++) {
                plugin.paginatorContainer.append(buildPaginatorContent('number', i));
            }
            
            plugin.paginatorContainer.append(buildPaginatorContent('next', null));
            plugin.paginatorContainer.children('li').first().addClass('disabled');
            plugin.after(plugin.paginatorContainer);
        };

        function buildPaginatorContent(type, dataPos) {
            var pContent = $('<li></li>').addClass(plugin.settings.paginationContentClass);
            switch (type) {
                case 'prev':
                    pContent.append('<a href="#!"><i class="' + plugin.settings.prevClass + '"></a></li>');
                    break;
                case 'next':
                    pContent.append('<a href="#!"><i class="' + plugin.settings.nextClass + '"></a></li>');
                    break;
                case 'number':
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
                    if ($(this).hasClass('number')) {
                        plugin.paginatorContainer.find('li').removeClass(plugin.settings.selectedClass);
                        $(this).addClass(plugin.settings.selectedClass);
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
