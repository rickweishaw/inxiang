<?php
namespace app\account\controller;
use think\Controller;
use phpmailer\phpmailer;
use app\account\model\User as UserModel;

class Captcha extends Controller
{
    public function getNum(){
        $rndNum = '';
        for ($i=0; $i < 6; $i++) $rndNum .= rand(0,9);
        session('cpt', $rndNum);
        return $rndNum;
    }

    public function index(){
        $number = self::getNum();
        $sendmail = 'rcwei44@qq.com'; //发件人邮箱
        $sendmailpswd = "edrkgpwjekrhechg"; //客户端授权密码,而不是邮箱的登录密码！
        $send_name = '小印相'; // 设置发件人信息，如邮件格式说明中的发件人，
        $toemail = UserModel::where('nickname', cookie('name'))->value('email'); //定义收件人的邮箱
        $to_name = cookie('name'); //设置收件人信息，如邮件格式说明中的收件人

        $mail = new PHPMailer();
        $mail->isSMTP(); // 使用SMTP服务
        $mail->CharSet = "utf8"; // 编码格式为utf8，不设置编码的话，中文会出现乱码
        $mail->Host = "smtp.qq.com"; // 发送方的SMTP服务器地址
        $mail->SMTPAuth = true; // 是否使用身份验证
        $mail->Username = $sendmail; // 发送方的
        $mail->Password = $sendmailpswd; //客户端授权密码,而不是邮箱的登录密码！
        $mail->SMTPSecure = "ssl"; // 使用ssl协议方式
        $mail->Port = 465; // qq端口465或587）

        $mail->setFrom($sendmail,$send_name); // 设置发件人信息，如邮件格式说明中的发件人，
        $mail->addAddress($toemail,$to_name); // 设置收件人信息，如邮件格式说明中的收件人，
        $mail->addReplyTo($sendmail,$send_name); // 设置回复人信息，指的是收件人收到邮件后，如果要回复，回复邮件将发送到的邮箱地址

        $mail->Subject = "小印相 -- 忘记密码"; // 邮件标题
        $mail->Body = "你的随机码为: $number ,请尽快输入验证！（本邮件由系统发出，无需回复）"; // 邮件正文

        if ($mail->send()) {
            return $this->success('邮件已发送，请前往邮箱查阅');
        } else {
            return $this->error($mail->ErrorInfo);
        }
    }
}

?>