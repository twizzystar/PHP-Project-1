
<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
$quotes = array();
$quotes[] = array(
    'quote' => "Without the work the magic won't come",
    'source' => 'Jay Z',
    'citation' => 'Decoded Enhanced Edition, Random House Group',
    'year' => 2010
);
$quotes[] = array(
    'quote' => 'Once you climb to another level, you have to figure out how to sustain it',
    'source' => 'Mary J. Blige',
    'citation' => 'Twitter',
    'year' => 2014
);
$quotes[] = array(
    'quote' => "It hurts when you have to smile and you don't want to smile, but the best thing to do is smile.",
    'source' => 'Mary J. Blige',
    'citation' => 'Pinterest',
    'year' => 2014
);
$quotes[] = array(
    'quote' => 'Everyday is another chance to make your dreams come true',
    'source' => 'Mary J. Blige',
    'citation' => '',
    'year' => 2017
);
$quotes[] = array(
    'quote' => 'I love what I do, and when you love what you do you want to be the best at it',
    'source' => 'Mary J. Blige',
    'citation' => '',
    'year' => ''
);
$quotes[] = array(
    'quote' => "I'm hungry for knowledge. The whole thing is to learn every day, to get brighter and brighter.",
    'source' => 'Jay Z',
    'citation' => 'Calling Dreams',
    'year' => 2016
);

function getRandomQuote($quotes) {
global $quotes;
    // return the random item
return $quotes [array_rand($quotes)];
};

function printQuote($twizzyQuotes) {
//
 global $quotes;
 $twizzyQuotes = getRandomQuote($quotes);
    //
    //
 $writeQuotes = '';
 $writeQuotes =   '<p class="quote">' . $twizzyQuotes ['quote'] . '</p>';
 $writeQuotes .=  '<p class="source">' . $twizzyQuotes ['source'].
  '<span class= "citation">' . $twizzyQuotes ['citation'] . '</span>' .
  '<span class="year">' . $twizzyQuotes ['year'] . '</span> </p>';
  //
  //
  //
  if ($twizzyQuotes ['citation'] && ['year'] == Null) {
    '<p class="quote">' . $twizzyQuotes ['quote'] . '</p>';
    $writeQuotes = '<p class="source">' . $twizzyQuotes ['source'] . '</p>';
  }
 echo $writeQuotes;
}
// Each inner array element should be an associative array



// Create the getRandomQuuote function and name it getRandomQuote



// Create the printQuote funtion and name it printQuote

?>
