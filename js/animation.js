var toggleHeader = document.getElementById('icon-nav-header');
var navHeader = document.getElementsByClassName('list-nav__mobile')[0];
var closeNav = document.getElementById('close-menu-header');
var body = document.getElementsByTagName('body')[0];

toggleHeader.addEventListener('click', function (event) {
        navHeader.style.visibility= "visible";
        navHeader.style.marginTop= "0";
        body.style.overflow = "hidden";
        
});

closeNav.addEventListener('click', function (event) {
        navHeader.style.visibility = "hidden";
        navHeader.style.marginTop= "-900px";
        body.style.overflow = "auto";

});

var numberFaqItems = document.getElementsByClassName('list-faq').length;

const faqItemClose = (faqItem) => {
    faqItem.style.visibility = 'hidden';
    faqItem.style.marginBottom = '0';
    faqItem.style.padding = '0 0';
    faqItem.style.opacity = '0';
    clickCounter = 0;
}
const faqItemOpen = (faqItem) => {
    faqItem.style.visibility = 'visible';
    faqItem.style.marginBottom = '20px';
    faqItem.style.padding = '40px 0';
    faqItem.style.opacity = '1';
}


var div = document.getElementById('faq-name0');
var faqItem = document.getElementById('faq-item-dropdown0');


var clickCounter = 0;

for (let i = 0; i < numberFaqItems; i++) {
    document.getElementById('faq-name' + i).addEventListener('click', function (event) {
        if (clickCounter == 1) {
            faqItemClose(document.getElementById('faq-item-dropdown' + i));
            clickCounter = 0;
        }
        else {
            faqItemOpen(document.getElementById('faq-item-dropdown' + i));
            clickCounter++;
        }
    });
}
