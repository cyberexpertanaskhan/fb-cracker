<?php namespace Models;

/**
 *This models handles all user management datatabase operations
 *@author Geoffrey Bans <geoffreybans@gmail.com>
 *@copyright 2015 - 2020 Geoffrey Bans
 *@category Models
 *@package Models\UsersModel
 *@link https://github.com/gliver-mvc/gliver
 *@license http://opensource.org/licenses/MIT MIT License
 *@version 1.0.1
 */

class VideosModel extends Model {

	/**
	*@var string The name of the table associated with this model
	*/
	protected static $table = 'users';	

	/**
	 *This method gets all the videos from the database
	 *
	 *@param null
	 *@return array The videos data in an array format
	 */
	public static function all()
	{
		//excecute query to return all users
		$users = static::Query()->from(self::$table)->all();

		//return the rows found in object notation
		return $users->result();

	}
	/**
	 *This method creates a new video record into the database
	 *
	 *@param array $video_info The information about the video to save
	 *@return int The video insert_id
	 */
	public static function create($video_info)
	{		
		//excecute query to save video info
		$save = static::Query()->from(self::$table)->save($video_info);

		//return the rows found in object notation
		return $save->lastInsertId();

	}

	/**
	 *This method updates info about a video already in the database
	 *
	 *@param int $video_id The unique id of the video in the database
	 *@param array $video_info The new information of the video to update
	 *@return bool True if update success
	 */
	public static function update($video_id, $video_info)
	{
		//excecute query to return all users
		$update = static::Query()->from(self::$table)->where('id = ?', $video_id)->save($video_info);

		//return the rows found in object notation
		return $update->updateSuccess();

	}
	/**
	 *This method gets and returns info of a particular video by id.
	 *@param int $video_id The unique id for which to get video
	 *@return array The videos data in an array format
	 */
	public static function getById($video_id)
	{
		//excecute query to return all users
		$video_info = static::Query()->from(self::$table)->where('id = ?', $video_id)->all();

		//return the rows found in object notation
		return $video_info->result();

	}

	/**
	 *This method deletes record of a video from the database.
	 *@param int $video_id The unique of the video to download
	 *@return int The number of row affected by the delete query
	 */
	public static function delete($video_id)
	{
		//excecute query to return all users
		$delete = static::Query()->from(self::$table)->where('id = ?', $video_id)->delete();

		//return the rows found in object notation
		return $delete->affectedRows();

	}

}