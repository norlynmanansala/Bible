<?php
include_once('config.php');
include_once('BookDAO.php');

$book_id = (isset($_GET['book_id'])) ? $_GET['book_id']: false;

$chapters = BookDAO::getChapterNumbers($book_id);

if ($chapters == false) {
	echo json_encode(
			array(
				'status' => 'failed',
				'message' => 'Unable to get chapters'
			)
		);
} else {
	echo json_encode(
			array(
				'status' => 'success',
				'chapters' => $chapters
			)
		);
}