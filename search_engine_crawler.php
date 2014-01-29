<?php
/*
Author		:	Giriraj Namachivayam
DOC			: 	29-jan-2014
License		:	Free to use
Description	:	Extract Search Engine results in single page by using HTML DOM.
*/

class search_engine_crawler {
	/* 
	# Google, Bing, Yahoo,ask,amazon 
	*/
	public $searchEngineName='';
	
	/*
	# Search Engine URL
	*/
	public $searchEnginelink = '';
	
	/*
	# Record Maximum Display count
	*/
    public $maxcount;
	
	/*
	# Search Query
	*/
    public $q;
	
	/*
	# DOM ID (h3.r, h3, div.classname, div#divid)
	*/
	public $linkDomId;
	
	/*
	# pagination keyword (start,b,page,num)
	*/
	public $start;
	
	/*
	#	Crawl Search Engine Result
	*/
   function SimpleCrawler() {
		print "<h1>".$this->searchEngineName."</h1>";
			
     	 for ($i=0;$i<$this->maxcount;$i+=10){
			$url=$this->searchEnginelink."".$this->q."&".$this->start."=".$i;
			#print $url;
			$html_inner = file_get_html($url);
			$row = $i;
			foreach($html_inner->find($this->linkDomId) as $ece){
				$row++;
				echo $row.". ".$ece->innertext . '<BR>';
			}
		}

	}
 }



?>
