<?php

$app->get('/', function ($request, $response) {
    return $this->renderer->render($response, 'index.phtml');
});

$app->get('/book/{book}/chapter/{chapter}', function($request, $response) {
    
    $book = $request->getAttribute('book');
    $chapter = $request->getAttribute('chapter');

    $data_chapter = \BibleRest\Model\Bible::select('BookName AS book', 'Chapter as chapter')
                ->where('BookAbr', $book)
                ->where('Chapter', $chapter)
                ->first();

    $data_verses = \BibleRest\Model\Bible::select('Verse as verse', 'VText as text')
                ->where('BookAbr', $book)
                ->where('Chapter', $chapter)
                ->get();
    
    return $response->withJson([
        'book' => $data_chapter['book'],
        'chapter' => $data_chapter['chapter'],
        'verses' => $data_verses
    ]);
});

$app->get('/book/{book}/chapter/{chapter}/verse/{verse}', function($request, $response) {
    
    $book = $request->getAttribute('book');
    $chapter = $request->getAttribute('chapter');
    $verse = $request->getAttribute('verse');

    $data = \BibleRest\Model\Bible::select('BookName AS book', 'Chapter as chapter', 'Verse as verse', 'VText as text')
                ->where('BookAbr', $book)
                ->where('Chapter', $chapter)
                ->where('Verse', $verse)
                ->first();
    
    return $response->withJson($data);
});
