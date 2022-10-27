var leftMenu = [
    {
        menuItem: 'leftMenuHome',
        hrefs: [
            '/member',
            '/member/home',
            '/member/home/index'
        ]
    },
    {
        menuItem: 'leftMenuCourse',
        hrefs: [
            '/member/course/mycourses',
            '/member/course/instructorcourses',
            '/member/course/create',
            '/member/batch/create'
        ]
    },
    {
        menuItem: 'leftMenuProfile',
        hrefs: [
            '/member/home/profile',
            '/member/home/editprofile',
            '/member/paymentmethod/bankaccount',
            '/member/paymentmethod/bkashaccount'
        ]
    },
    {
        menuItem: 'leftMenuDevCoin',
        hrefs: [
            '/member/devcoin',
            '/member/devcoin/index',
            '/member/devcoin/cashout'
        ]
    },
    {
        menuItem: 'leftMenuDevShop',
        hrefs: [
            '/member/shop',
            '/member/shop/index',
            '/member/shop/Details',
            '/member/shop/Order'
        ]
    }
];

$(document).ready(function () {
    $('ul.leftMenu a.active').removeClass('active');
    var urlPath = window.location.pathname.toLowerCase();
    if (urlPath.slice(-1) == '/') {
        urlPath = urlPath.substring(0, urlPath.length - 1);
    }

    $.each(leftMenu, function (i, item) {
        $.each(item.hrefs, function (j, href) {
            if (href == urlPath) {
                var menuItemclass = 'li.' + item.menuItem;
                $(menuItemclass).find("a").addClass('active');
            }
        });
    });
});