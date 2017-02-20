<?php 
    header('Content-Type:text/html;charset=utf-8');

    $productList = array(
      array(
              'imgUrl' => 'images/detail02.jpg',
              'nowPrice' => '13.00',
              'oldPrice' => '2113.0'
      ),
      array(
              'imgUrl' => 'images/detail01.jpg',
              'nowPrice' => '12.00',
              'oldPrice' => '213.0'
      ),array(
              'imgUrl' => 'images/detail02.jpg',
              'nowPrice' => '34.00',
              'oldPrice' => '211.0'
      )
    );

    sleep(1);

    include 'index.html';


?>