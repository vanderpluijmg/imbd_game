function showDropDown(id){
    var about = document.getElementById("one");
    var addTo = document.getElementById("two");
    var share = document.getElementById("three");
    switch (id) {
        case 1 :
            if (about.style.display == "none"){
                about.style.display="block";
                addTo.style.display="none";
                share.style.display="none";
            }
            break;
        case 2 :
            if (addTo.style.display == "none"){
                addTo.style.display="block";
                about.style.display="none";
                share.style.display="none";
            }
            break;
        case 3 :
            if (share.style.display == "none"){
                share.style.display="block";
                about.style.display="none";
                addTo.style.display="none";
            }
            break;
    }

}
$(document).ready(function(){
    $('.carousel').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3});
});