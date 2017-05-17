function setVerticalAlign() {
    const navbar = $('.navbar');
    const features = $('#features-description');

    const navbarPadding = parseInt(navbar.css("padding-top"));
    const windowHeight = $(window).height() - (navbar.height() + (navbarPadding * 2));

    if(windowHeight > features.height()) {
        const margin = (windowHeight / 2) - (features.height() / 2);
        features.css("margin-top", margin);
        features.css("margin-bottom", margin);
    }
}

setVerticalAlign()
$(window).resize(setVerticalAlign);
$('.navbar').resize(setVerticalAlign);
