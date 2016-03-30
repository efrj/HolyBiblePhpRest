<?php

$app->get('/', function ($request, $response) {
    return $this->renderer->render($response, 'index.phtml');
});

$app->get('/book/{book}/chapter/{chapter}/verse/{verse}', function($request, $response) {
    
    $book = $request->getAttribute('book');
    $chapter = $request->getAttribute('chapter');
    $verse = $request->getAttribute('verse');

    $data = \BibleRest\Model\Bible::select('BookName AS book','Chapter as chapter', 'Verse as verse', 'VText as text')
                ->where('BookAbr', $book)
                ->where('Chapter', $chapter)
                ->where('Verse', $verse)
                ->get();
    
    echo $data['0'];
});