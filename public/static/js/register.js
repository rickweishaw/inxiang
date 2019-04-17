let frm = $('form');
let emailExp = new RegExp('^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$');
frm[0].onsubmit = () => {
    if (!emailExp.test(frm[0].email.value)) {
        alert('邮箱格式不正确，正确格式举例：example@exp.com');
        frm[0].email.value = '';
        frm[0].email.focus();
        return false;
    }

    if (frm[0].nickname.value.length < 2 || frm[0].nickname.value.length > 8) {
        alert('昵称不能小于2位或大于10位，你输入了 ' + frm[0].nickname.value.length  + ' 个字符');
        frm[0].nickname.value = '';
        frm[0].nickname.focus();
        return false;
    }

    if (frm[0].password.value.length < 6 || frm[0].password.value.length > 12) {
        alert('密码不能小于6位或大于12位，你输入了 ' + frm[0].password.value.length  + ' 个字符');
        frm[0].password.value = '';
        frm[0].password.focus();
        return false;
    }
    return true;
}