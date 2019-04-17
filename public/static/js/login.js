let frm = $('form');
let key = false;
let emailExp = new RegExp('^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$');

frm[1].onsubmit = () => {
  if (!emailExp.test(frm[1].email.value)) {
    alert('邮箱格式不正确，正确格式举例：example@exp.com');
    frm[1].email.value = '';
    frm[1].email.focus();
    return false;
  }
}

$('.pwd-forgot').click(function () {
    $('.forgot').css('display', 'block');
});

$('.close').click(function () {
    $('.forgot').css('display', 'none');
});

$('.show').click(function () {
  key = !key;
  if (key) {
    $('.show').html('隐藏');
    $('#password').attr('type','text');
  } else {
    $('.show').html('显示');
    $('#password').attr('type','password');
  }
});