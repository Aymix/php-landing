$(function() {
    $(".iframe-wrap").fitVids();
    $("[class^=flash-hide]").click(function() {
        $(this).fadeOut();
    });

    LodestoneAPI.Search.Character("Shinichi Sagara", "Adamantoise", function(Character) {

        $('.lodestone-wrapper').append(Character);

    };

});