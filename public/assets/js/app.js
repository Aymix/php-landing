$(function() {
    LodestoneAPI.Search.Character("Shinichi Sagara", "Adamantoise", function(Character) {

        if(Character) {
            console.log(Character);
            // Character name, job level and class
            $('.character-name').append(Character.name);
            $('.character-joblv').append("<p>Lv " + Character.activeLevel + " " + Character.activeJob + "</p>");
            // Character portrait
            $('.character-portrait').append("<img src=" + Character.portrait + "/>");
            // FC Info
            $('.character-gcinfo').prepend('<h4>' + Character.freeCompany + '</h4>');
            $.each(Character.grandCompany, function (array, grandCompany) {
                $('.character-gcinfo').append(
                    "<p><span><img src='" + grandCompany.icon + "'/></span>" +
                    '<span> ' + grandCompany.rank + '</span></p>');
                console.log(grandCompany.company + grandCompany.rank);
            });
            // Classes section
            $('.character-class-wrap').prepend("<h4>Classes</h4>");
            $.each(Character.classjobs, function (array, job) {
                $(".character-classes").append("<div class='character-class'>" +
                    "<p><span>" +
                    job.level +
                    "</span>" +
                    job.name +
                    "</p>");
            });
            // Minions section
            $('.character-minion-wrap').prepend("<h4>Minions</h4>");
            $.each(Character.minions, function (array, minion) {
                $(".character-minions").append("<img src='" + minion.icon + "' alt='" + minion.name + "'/>");
            });
            //Mounts section
            $('.character-mount-wrap').prepend("<h4>Mounts</h4>");
            $.each(Character.mounts, function (array, mount) {
                $(".character-mounts").append("<img src='" + mount.icon + "' alt='" + mount.name + "'/>");
            });
            // Load the content only after the div is ready to be loaded
            $('.character-portrait img').one('load', function() {
                $('.lodestone-wrapper').addClass("animated bounceInRight show");
            })


        } else {
            console.log("Couldn't find it bro!");
        }
        //build HTML into DOM in the HTML file. Append the values to the classes inside of that via JS. DO NOT BUILD HTML WITH JS!! BAD CODE!!
    });
    $('.rss-container').addClass("animated bounceInUp show");
    $('.padding-wrapper iframe').addClass("animated bounceInDown show");
    $('.character-class-wrap').click(function(){
       $('.character-classes').slideToggle('slow');
    });
    $('.character-minion-wrap').click(function(){
        $('.character-minions').slideToggle('slow');
    });
    $('.character-mount-wrap').click(function(){
        $('.character-mounts').slideToggle('slow');
    });
    $('.article-title').click(function(){
        $(this).next('.article-body').slideToggle('slow');
    });
});