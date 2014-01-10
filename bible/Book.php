<?php 
	/**
	* Filename: Book.php
	* Class Message for the Guestbook Project
	*/

class Book{
	var $_book_id;
	var $_chapter_number;
	var $_verse_number;
	var $_verse_text;
    var $_search;

public function __construct($config) {
        if (isset($config['book_id'])) {
            $this->_book_id = $config['book_id'];
        }
        if (isset($config['chapter_number'])) {
            $this->_chapter_number = $config['chapter_number'];
        }
        if (isset($config['verse_number'])) {
            $this->_verse_number = $config['verse_number'];
        }
        if (isset($config['verse_text'])) {
            $this->_verse_text = $config['verse_text'];
        }
        if (isset($config['search'])) {
            $this->_search = $config['search'];
        }
    }


    public function getBook_id() {    
        return $this->_book_id;
    }
    public function getChapternumber() {
        return $this->_chapter_number;
    }
    public function getVersenumber() {
        return $this->_verse_number;
    }
    public function getVersetext() {
        return $this->_verse_text;
    } 
    public function getsearch() {
        return $this->_search;
    }
}
 ?>