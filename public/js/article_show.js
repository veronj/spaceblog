$(document).ready(function() {
  $(".js-like-article").on("click", function(e) {
    e.preventDefault();

    var $link = $(e.currentTarget);
    $link.toggleClass("fa-heart-o fa-heart");

    var $heart = $(".js-like-article-count");
    $heart.html("tes");
  });
});
