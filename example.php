<?php
/*
// Required > PHP 5
// Include the simple_html_dom library
// Download from http://kaz.dl.sourceforge.net/project/simplehtmldom/simplehtmldom/1.5/simplehtmldom_1_5.zip
// Manual http://simplehtmldom.sourceforge.net/manual.htm
// file_get_contents() issue, use PHP-CURL and send the results in to str_get_html
//
//
// Refer respective Search Engines TOC for further implementations
// 
// Easy to Extend remaining search engines (baidu,ebay,torrentz,books)
// Change "linkDomId" based on your requirements
// 
// Usage : http://localhost/xampp/search_engine.php?q=phparray
*/



include('simple_html_dom.php');
include('search_engine_crawler.php');

/* Search Query */
$qry = (@$_GET['q']) ? ($_GET['q']) : "ngiriraj.com";


$Google = new search_engine_crawler;
$Google->searchEngineName="Google";
$Google->q = $qry;
$Google->maxcount = "20";
$Google->start = "start";
$Google->searchEnginelink="http://www.google.com/custom?q=";
$Google->linkDomId="h2.r";
echo $Google->SimpleCrawler();
 
 
$Bing = new search_engine_crawler;
$Bing->searchEngineName="Bing";
$Bing->q = $qry;
$Bing->maxcount = "20";
$Bing->start = "first";
$Bing->searchEnginelink="http://www.bing.com/search?q=";
$Bing->linkDomId="div.sb_tlst>h3";
echo $Bing->SimpleCrawler();


$Yahoo = new search_engine_crawler;
$Yahoo->searchEngineName="Yahoo";
$Yahoo->q = $qry;
$Yahoo->maxcount = "20";
$Yahoo->start = "b";
$Yahoo->searchEnginelink="http://in.search.yahoo.com/search;_ylt=A2oKmKiQvehSHDcAszm6HAx.?p=";
$Yahoo->linkDomId="h3";
echo $Yahoo->SimpleCrawler();


$Amazon = new search_engine_crawler;
$Amazon->searchEngineName="Amazon";
$Amazon->q = $qry;
$Amazon->maxcount = "20";
$Amazon->start = "page";
$Amazon->searchEnginelink="http://www.amazon.com/s?ie=UTF8&field-keywords=";
$Amazon->linkDomId="div.imageBox";
echo $Amazon->SimpleCrawler();



$Ask = new search_engine_crawler;
$Ask->searchEngineName="Ask.com";
$Ask->q = $qry;
$Ask->maxcount = "20";
$Ask->start = "page";
$Ask->searchEnginelink="http://www.ask.com/web?q=";
$Ask->linkDomId="div.durl";
echo $Ask->SimpleCrawler();

?>
