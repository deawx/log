<?php
/*--------------------------------------------------------------------------
 | Software: [WillPHP framework]
 | Site: www.113344.com
 |--------------------------------------------------------------------------
 | Author: no-mind <24203741@qq.com>
 | WeChat: www113344
 | Copyright (c) 2020-2022, www.113344.com. All Rights Reserved.
 |-------------------------------------------------------------------------*/
namespace willphp\log;
use willphp\framework\build\Provider;
class LogProvider extends Provider {
	public $defer = false;  //延迟加载
	public function boot() {	
		
	}
	public function register() {
		$this->app->single('Log', function () {
			return Log::single();
		});
	}
}