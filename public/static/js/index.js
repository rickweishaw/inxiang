let frm = $('form');
let img = $('.pic img');

$('#showImg').click(function () {
    $('.up-img').css('display', 'block');
});

$('.up-img span').click(function () {
    $('.up-img').css('display', 'none');
});

$('#i-upload').change(function () {
    let pic = this.files[0];
    preview(pic);
});

document.onkeydown = function (event) {
    let e = event || window.event || arguments.callee.caller.arguments[0];
    if (e && e.keyCode == 78) $('#content').focus(); // press N key
}

preview = (pic) => {
    let r = new FileReader();
    r.readAsDataURL(pic);
    r.onload = function() {
        $path = this.result;
        $('#base64').attr('value', this.result).show();
        $('#img').attr('src', this.result).show();
    }
}

frm[1].onsubmit = () => {
    if ($('#content').value.length == 0) {
        alert('请输入文字');
        $('#content').focus();
        return false;
    }
    return true;
}

for (let i = 0; i < img.length; i++) {
    img[i].onclick = () => {
        window.open('index/detail?id='+img[i].alt, 'detail',
            "width=990, height=600, top=100, left=240, resizable=0");
    }
}