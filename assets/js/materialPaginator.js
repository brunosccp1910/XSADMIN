$.fn.paginator = function (options) {
    var totalElements = this.children('li').length;
    var collection = this;
    var defaults = {
        elementsPerPage: 2,
        elementsIdentify: '.collection-item',
    };

    this.after('<ul class="pagination">' +
            '<li class="prev disabled"><a href="#!"><i class="mdi-navigation-chevron-left"></i></a></li>' +
            '<li class="waves-effect next"><a href="#!"><i class="mdi-navigation-chevron-right"></i></a></li>' +
            '</ul>');

    var paginator = $('.pagination');
    createElement();
    showPage();


    function createElement() {
        for (var i = 1; i <= calculatePages(); i++) {
            paginator.find('.next').before('<li class="waves-effect"><a href="#!">' + i + '</a></li>');
        }
        $('.prev').next().addClass('active');
    };

    paginator.children('li:not(.next,.prev)').on('click', function () {
        paginator.children('li.active').removeClass('active');
        $(this).addClass('active');
        showPage();
    });

    function showPage() {
        var currentPage = parseInt(paginator.children('li.active').text());
        collection.find(defaults.elementsIdentify).each(function (index) {
            if (index < (currentPage - 1) * defaults.elementsPerPage || index >= (currentPage * defaults.elementsPerPage)) {
                $(this).hide();
            }else{
                $(this).show();
            }
        });
    }

    function calculatePages() {
        return Math.round(totalElements / defaults.elementsPerPage);
    }

    function organizePaginator(selectedElement) {

    }
};
