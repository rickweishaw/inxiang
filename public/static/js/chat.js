let bgcolors = ['#59866F', '#B1B6BA', '#6EA8AA', '#F4AE2E', '#0587B8', '#F08437', '#D83A36'];
let lFirst = $('.left .name').html().substr(0,1);
let rFirst = $('.right .name').html().substr(0,1);

$('#exit').click(function () { 
    history.back(-1);
});

function back() {
    for(let i=0; i<bgcolors.length;i++) {
        let item = bgcolors[Math.floor(Math.random()*bgcolors.length+0)];
        return item;
    }
}

$('.left .avatar').html(lFirst);
$('.left .avatar').css('background-color', back());
$('.right .avatar').html(rFirst);
$('.right .avatar').css('background-color', back());
