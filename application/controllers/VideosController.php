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
use Helpers\Path\Path;
use Helpers\Url\Url;

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
		$data['videos'] = VideosModel::all()->result();

		//check for success message
		if(Input::get('utrue')) $data['success_message'] = "Update Successful!";
		if(Input::get('dtrue')) $data['success_message'] = "Delete Successful!";

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

		//get the input data from the array
		$data = array(
			'name' => Input::get('video_name'),
			'description' => Input::get('video_description'),
			'url' => Input::get('video_url'),
			'comments' => Input::get('video_comments'),
			'thumbnails' => Input::get('thumbnail_1')
		);

		//call the model to save data
		$saved = VideosModel::save($data);

		//check if the save was successful and redirect to video lists page
		if( $saved->lastInsertId() ) Redirect::to('videos');

	}

	/**
	 *This method loads the edit video info page.
	 *@param int $video_id The video id to edit
	 *@return void
	 */
	public function getEdit($video_id)
	{
		//define the page title
		$data['title'] = $this->site_title;

		//get information about this video
		$data['video'] = VideosModel::where('id = ?', $video_id)->all()->result();

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
		//create the video info to update
		$video_info = array(
			'name' => Input::get('video_name'),
			'description' => Input::get('video_description'),
			'url' => Input::get('video_url'),
			'comments' => Input::get('video_comments'),
			'thumbnails' => Input::get('thumbnail_1')
		);

		//call model to update the info
		$updated = VideosModel::where('id = ?',Input::get('id'))->save($video_info);

		//check if update was successful and the redirect
		if( $updated->updateSuccess() ) Redirect::with(array('utrue' => true))->to('videos');

	}

	/**
	 *This method deletes a video listing from the database
	 *@param int $video_id The video id to delete
	 *@return void
	 */
	public function delete($video_id)
	{
		//call model to delete this video
		$delete = VideosModel::where('id = ?',$video_id)->delete();

		//check if query performed then redirect to home page
		if($delete) Redirect::with(array('dtrue' =>true))->to('videos');

	}
	
	/**
	 *This method loads a particular video.
	 *@param int $video_id The video id to lookup
	 *@return void
	 */
	public function view($video_id)
	{
		//define the page title
		$data['title'] = $this->site_title;

		//call model to get info about this video
		$data['video'] = VideosModel::where('id = ?',$video_id)->all()->result();

		//load the framework homepage
		View::render('videos/view', $data);

	}

	/**
	 *This method pushes an image file for download.
	 *@param int $video_id The video id to download
	 *@return void
	 */
	public function download($video_id)
	{
		//define the page title
		$data['title'] = $this->site_title;

		//get info about this video
		$video_info = VideosModel::where('id = ?', $video_id)->all();

		//convert result set to array
		$video_info = $video_info->result_array();

		//get link to play button
		$play_button_path = Url::assets('img/samller.gif');

		//get link to thumbnail
		$thumbnail_path = $video_info[0]['thumbnails'];

		//create resource of the thumbnail image
		$dest_resource = imagecreatefromjpeg($thumbnail_path);

		//create resource of the source image
		$src_resource = imagecreatefromgif($play_button_path);

		//set the image blendmode to false
		imagealphablending($dest_resource, true);

		//set the flag to save aplha chanel
		imagesavealpha($dest_resource, true);

		//copy the source to destination specifying the indices and coordinates
		imagecopymerge($dest_resource, $src_resource, 150, 120, 0, 0, 150, 107, 100); 

		//set png image content headers
		header('Content-Type: image/png');
		header("Content-Disposition: attachment; filename=thumbnail".mt_rand().".png"); 

		//load the image content
		imagepng($dest_resource);

		imagedestroy($dest_resource);
		imagedestroy($src_resource);

	}

}

