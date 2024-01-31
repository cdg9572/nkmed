<?
include_once  '../_init.php';
include_once $GP -> CLS . 'class.member.php';
$C_Member = new Member();	

$args = array();
$args['mb_id'] = $_POST['mb_id'];
$args['mb_name'] = $_POST['mb_name'];
$rst = $C_Member->membersFindInfo($args);

if(!$rst['mb_code']){
    $C_Func->put_msg_and_go("존재하지 않는 아이디 입니다.", "/mypage/idpw.html");
}

function SMail($From,$Mail_from_name,$To,$Subject,$Text) {
$Headers .= "Content-Type: text/html; charset=UTF-8";
$fp = popen("/home/bin/sendmail -t -f $From","w"); // 주의하실 부분
if(!$fp) return false;
fputs($fp,"from: =?utf-8?B?".base64_encode($Mail_from_name)."?=  <$From>
"); // from 과 : 은 붙여주세요 => from:
fputs($fp, "to: <$To>
");
fputs($fp, "subject: $Subject
");
fputs($fp, "$Headers
");
fputs($fp, "$Text");
fputs($fp, "
");
pclose($fp);
return true;
}

$mail_from = "webmaster@nkhospital.net"; // 보내는 사람메일주소
$mail_to = $rst['mb_email']; // 받는사람 메일주소
$mail_from_name = "뉴고려병원"; // 보내는 사람 이름
$subject = '고객님께서 요청하신 정보입니다.';

$contents ='
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>비밀번호 발송</title>
    </head>
    <body>
        <table cellpadding="0" cellspacing="0" summary="">
            <tr>
                <td><img src="http://nkhospital.net/images/mail/bg_lefttop.gif" alt=""/></td>
                <td style="border-top:1px solid #dadada;">&nbsp;</td>
                <td><img src="http://nkhospital.net/images/mail/bg_righttop.gif" alt=""/></td>
            </tr>
            <tr>
                <td style="border-left:1px solid #dadada;">&nbsp;</td>
                <td
                    style="font-family:Dotum, Verdana, Geneva, sans-serif; font-size:12px; color:#5e5e5e; line-height:18px;">
                    <!-- 내용 -->
                    <table cellpadding="0" cellspacing="0" summary="" style="width:610px;">
                        <tr>
                            <td
                                colspan="2" align="center"
                                style="border-bottom:2px solid #29b07a; padding-bottom:20px;"><img src="http://nkhospital.net/images/common/img-top-logo.png" alt=""/></td><br/></tr>
                        <tr>
                            <td colspan="2" style="padding-top:60px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td
                                colspan="2"
                                style="font-size:16px; color:#333028; padding-bottom:55px; padding-left:3px;"><img src="http://nkhospital.net/images/mail/m_t_pw.gif" alt=""/></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding:0 0 28px 3px;">
                                <strong>안녕하세요. 뉴 고려병원 입니다.</strong><br/>요청하신 임시 비밀번호는 다음과 같습니다.</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div
                                    style="background-color:#29b07a; color:#ffffff; padding:30px 20px; font-size:16px; font-weight:bold; text-align:center;">
                                    임시 비밀번호 : '. $rst['new_pw'] .'
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding-top:25px; padding-left:3px;">보안을 위해서 필히 비밀번호를 변경해 주시기 바랍니다.<br/>임시 비밀번호를 사용해서 로그인 하신 후 바로 비밀번호를 변경하셔야 정상적으로 로그인이 가능합니다.<br/>다른 문의사항이 있으시면
                                <strong>031)980-9114</strong>
                                로 문의해 주시기 바랍니다.</td>
                        </tr>
                        <tr>
                            <td
                                colspan="2"
                                style="padding-top:40px; padding-bottom:60px; text-align:center;">
                                <a
                                    href="http://nkhospital.net/mypage/mypage02.html"
                                    style="background-color:#6E6761; font-size:12px; font-weight:bold; color:#fff; display:inline-block; padding:10px 20px; text-align:center; text-decoration:none;">비밀번호 바로 변경하기 →</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color:#29b07a;" height="2px"></td>
                        </tr>                        
                        <tr>
                            <td
                                style="font-size:11px; color:#919191; letter-spacing:-1px; line-height:18px; text-align:center; padding-top:26px;">상 호 : 뉴 고려병원 &nbsp;&nbsp;|&nbsp;&nbsp; 대표자 : 윤영순 &nbsp;&nbsp;<br/>
                                경기도김포시 김포한강3로 283번지<br/>T + 031 - 980-9114</td>
                        </tr>
                    </table>
                    <!-- //내용 -->
                </td>
                <td style="border-right:1px solid #dadada;">&nbsp;</td>
            </tr>
            <tr>
                <td><img src="http://nkhospital.net/images/mail/bg_leftbottom.gif" alt=""/></td>
                <td style="border-bottom:1px solid #dadada;">&nbsp;</td>
                <td><img src="http://nkhospital.net/images/mail/bg_rightbottom.gif" alt=""/></td>
            </tr>
        </table>
    </body>
</html>
 ';

SMail($mail_from,$mail_from_name, $mail_to,$subject,$contents);
$send_msg = $rst['mb_email'] ."로 임시비밀번호를 발급하였습니다";
$C_Func->put_msg_and_go($send_msg , "/");
?>

