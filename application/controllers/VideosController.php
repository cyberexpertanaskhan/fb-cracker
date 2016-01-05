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
use Models\VideosModel;
use Helpers\Input\Input;
use Helpers\Redirect\Redirect;

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

		//get all the videos from the database
		$data['videos'] = VideosModel::all();

		//load the framework homepage
		View::render('videos/list', $data);

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
		View::render('videos/addnew', $data);

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

		//get the input data from the array
		$data = array(
			'name' => Input::get('video_name'),
			'description' => Input::get('video_description'),
			'url' => Input::get('video_url'),
			'comments' => Input::get('video_comments')
		);

		//call the model to save data
		$saved = VideosModel::create($data);

		//check if the save was successful and redirect to video lists page
		if( $saved ) Redirect::to('videos');

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

		//get information about this video
		$data['video'] = VideosModel::getById(Input::get('id'));

		//load the framework homepage
		View::render('videos/edit', $data);

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

		//call model to delete this video
		$delete = VideosModel::deleteVideo(Input::get('id'));

		//check if query performed then redirect to home page
		if($delete) Redirect::with(array('success_message' => 'Delete successful~'))->to('videos');

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

		//call model to get info about this video
		$data['video'] = VideosModel::getById(Input::get('id'));

		//load the framework homepage
		View::render('videos/view', $data);

	}

}

