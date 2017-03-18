var totalCenter = {
    init: function (settings) {
        try {
            if (!settings) throw Error('No Settings Specified!');
            var windowHeight = $(window).height(),
                windowWidth = $(window).width(),
                contentWidth = $(settings.content).width(),
                contentHeight = $(settings.content).height();

            $(settings.content).css({
                left: ((windowWidth - contentWidth) / 2),
                top: ((windowHeight - contentHeight) / 2)
            })
        }
        catch (err) {
            this.error(err);
        }
    },
    error: function (err) {
        console.log(err.message);
    }
}

totalCenter.init({content: ".homepage"});