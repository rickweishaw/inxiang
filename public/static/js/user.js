let img = $('.item img');

$('#setting').click(function () {
    $('.setting').css('display', 'inline-block');
});

$('.cancel').click(function () {
    $('.setting').css('display', 'none');
});

for (let i = 0; i < img.length; i++) {
    img[i].onclick = () => {
        window.open('user/detail?id='+img[i].title, 'detail',
            "width=990, height=600, top=100, left=240, resizable=0");
    }
}