<?php namespace Controllers;

/**
 *This class loads the application homepage
 *@author Geoffrey Oliver <geoffrey.oliver2@gmail.com>
 *@copyright 2015 - 2020 Geoffrey Oliver
 *@category Controllers
 *@package Controllers\Home
 *@link https://github.com/gliver-mvc/gliver
 *@license http://opensource.org/licenses/MIT MIT License
 *@version 1.0.1
 */

use Drivers\Templates\View;

class VideosController extends BaseController {

	/**
	 *This method loads the homepage 
	 *
	 *@param null
	 *@return void
	 */
	public function index()
	{
		//define the page title
		$data['title'] = $this->site_title;

		//load the framework homepage
		View::render('index', $data);

	}

	/**
	 *This method loads page for adding new video 
	 *
	 *@param null
	 *@return void
	 */
	public function getAddnew()
	{
		//define the page title
		$data['title'] = $this->site_title;

		//load the framework homepage
		View::render('index', $data);

	}

	/**
	 *This method adds a new video to the database
	 *
	 *@param null
	 *@return void
	 */
	public function postAddnew()
	{
		//define the page title
		$data['title'] = $this->site_title;

		//load the framework homepage
		View::render('index', $data);

	}

	/**
	 *This method loads the edit video info page
	 *
	 *@param null
	 *@return void
	 */
	public function getEdit()
	{
		//define the page title
		$data['title'] = $this->site_title;

		//load the framework homepage
		View::render('index', $data);

	}

	/**
	 *This method saves edited video info into the database
	 *
	 *@param null
	 *@return void
	 */
	public function postEdit()
	{
		//define the page title
		$data['title'] = $this->site_title;

		//load the framework homepage
		View::render('index', $data);

	}

	/**
	 *This method deletes a video listing from the database
	 *
	 *@param null
	 *@return void
	 */
	public function delete()
	{
		//define the page title
		$data['title'] = $this->site_title;

		//load the framework homepage
		View::render('index', $data);

	}
	
	/**
	 *This method loads a particular video
	 *
	 *@param null
	 *@return void
	 */
	public function view()
	{
		//define the page title
		$data['title'] = $this->site_title;

		//load the framework homepage
		View::render('index', $data);

	}

}

