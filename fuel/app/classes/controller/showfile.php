<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.8
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2016 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Showfile extends Controller
{

	public function action_index() {

		//ファイル名を指定
		$file = DOCROOT . "show_file.php";

		//ファイルの中身を代入
		$content = file_get_contents($file);

		//Viewオブジェクトを生成
		$view = View::forge("showfile");

		//ビューにtitleをセット
		$view->set("title" , "ファイル表示プログラム");
		//ビューにcontentをセット
		$view->set("content" , $content);
		
		return $view;
	}

}
