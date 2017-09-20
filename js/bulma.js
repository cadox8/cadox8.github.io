document.addEventListener('DOMContentLoaded', function () {

    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    if ($navbarBurgers.length > 0) {
        $navbarBurgers.forEach(function ($el) {
            $el.addEventListener('click', function () {

                var target = $el.dataset.target;
                var $target = document.getElementById(target);

                $el.classList.toggle('is-active');
                $target.classList.toggle('is-active');
            });
        });
    }
});

seconds = ((new Date()).getTime()-beforeload) / 1000;
document.getElementById("loadTime").innerHTML = '<span class="icon is-small"><i class="fa fa-lg fa-clock-o"></i></span> Page loaded in ' + seconds + ' seconds';