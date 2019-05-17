<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	public function __construct() {
		parent::__construct();
		$keyword = clean(trim($_GET['keyword']));
		$plan    = clean(trim($_GET['plan']));
		$unit    = clean(trim($_GET['unit']));
		cookie('plan', $plan);
		cookie('unit', $unit);
		cookie('keyword', $keyword);
	}

	public function get_client_ip($type = 0, $adv = false) {
		$type      = $type ? 1 : 0;
		static $ip = NULL;
		if ($ip !== NULL) {
			return $ip[$type];
		}

		if ($adv) {
			if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$arr = explode(',', $_SERVER[
						      'HTTP_X_FORWARDED_FOR']);
				$pos = array_search('unknown', $arr);
				if (false !== $pos) {
					unset($arr[$pos]);
				}

				$ip = trim($arr[0]);
			} elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
				$ip = $_SERVER['HTTP_CLIENT_IP'];
			} elseif (isset($_SERVER['REMOTE_ADDR'])) {
				$ip = $_SERVER['REMOTE_ADDR'];
			}
		} elseif (isset($_SERVER['REMOTE_ADDR'])) {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		// IP地址合法验证
		$long = sprintf("%u", ip2long($ip));
		$ip   = $long ? array($ip, $long) : array('0.0.0.0', 0);
		return $ip[$type];
	}

	public function index() {
		$phone = M('info')->where("id = '1'")->getField('phone');
		$code  = M('info')->where("id = '1'")->getField('code');
		$array = array(
			'phone' => $phone,
			'code'  => htmlspecialchars_decode(html_entity_decode(
									$code))
		);
		$this->assign($array);
		$this->display('index');
	}

	public function fh() {
		$this->display('fh');
	}

	public function guest() {
		$this->display('guest');
	}

	public function add() {
		load("@.clean");
		load("@.check");
		load("@.safe");
		$name1 = clean(trim(I('post.name')));
		//留言者姓名
		$name = $name1;
		//手机
		$mobile = clean(trim(I('post.mobile')));
		//留言者地址
		$content = clean(trim(I('post.content')));
		$address = clean(trim(I('post.address')));
		//留言者ip
		// $mip = $_SERVER["REMOTE_ADDR"];
		$mip = $this->get_client_ip(0);

		//标示
		$from  = clean(trim(cookie('keyword')));
		$plan  = clean(trim(cookie('plan')));
		$unit  = clean(trim(cookie('unit')));
		$froms = 'plan=' . $plan . '&unit=' . $unit . '&keyword=' .
									  $from;
		if (empty($plan)) {
			$plan = 'none';
		}
		if (empty($unit)) {
			$unit = 'none';
		}
		if (empty($from)) {
			$from = 'none';
		}
		//编辑日期
		$updatetime = time();
		//留言日期
		$dateline    = time();
		$checkName   = is_name($name1);
		$checkMobile = is_mobile($mobile);
		if (!$checkName) {
			echo "
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
			<script>alert('姓名为2~4个汉字');history.back(-1);</script>";
		}
		if (!$checkMobile) {
			echo "
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
			<script>alert('请正确填写手机');history.back(-1);</script>";
		}

		load("@.jm");
		$mob = gbcrypt($mobile, 'ENCODE');
		//$ema = gbcrypt($email, 'ENCODE');
		if ($_POST['token'] !== session('token')) {
			echo
	    "<script>alert('请不要重复提交');history.back(-1);</script>";
		} else {
			if ($_POST) {
				if ($checkName && $checkMobile) {
					$guestbook          = M("guestbook");
					$condition["name"]  = $name;
					$condition["phone"] = $mobile;
					$result             = $guestbook->where
							   ($condition)->find();
					if ($result) {
						echo
"<script>alert('提交过于频繁，请稍后再试!!');history.go(-1);</script>"
									       ;
					} else {
						$data['name']        = $name;
						$data['phone']       = $mobile;
						$data['address']     = $address
									      ;
						$data['content']     = $content
									      ;
						$data['is_read']     = 0;
						$data['diqu']        = $froms;
						$data['mip']         = $mip;
						$data['create_time'] =
								     $dateline;
						$guestbook->add($data);
						if ($data) {
							session('token', null);
							echo
		      "<script>alert('提交成功!');history.go(-1);</script>";
						} else {
							echo
		      "<script>alert('提交失败!');history.go(-1);</script>";
						}
					}
				}
			}
		}
	}
}
