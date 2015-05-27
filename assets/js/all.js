$(function () {
    $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            });
});

$(function () {
    $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            });
});


//function ads() {
//    this.title = arguments[0];
//    this.category = arguments[1];
//    this.image = arguments[2];
//    this.price = arguments[3];
//    this.location = arguments[4];
//}
//function post_add(item, base_url) {
//    var str = '<div class="block">';
//    str += ' <div class="image">';
//    str += '<img class="ad-img" src="' + base_url + 'assets/uploads/' + item.image + '" alt="" class="img-responsive">';
//    str += '</div>';
//    str += '<div class="text-wrap">';
//    str += '<a href="' + base_url + 'advertisement/view/' + item.title + '">';
//    str += '<span class="title">' + item.title + '</span>';
//    str += '</a>';
//    str += '<span class="price">Rs.' + item.price + '</span>';
//    str += '<span class="location">' + item.location + '</span>';
//    str += '</div>';
//    str += '<a class="buy" href="' + base_url + 'advertisement/buy/id">Buy</a>';
//    str += '</div>';
//    $('.ads').append(str);
//    return true;
//}
$(document).ready(function () {
    var base_url = $('#base_url').val();
    $("#servey").parsley({trigger: "change"});
});


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#browse-img-view').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}