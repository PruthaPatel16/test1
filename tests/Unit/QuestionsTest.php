<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Question;

class QuestionsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $question = new Question();
        $question->title = 'my question';
        $question->body = 'my body';
        $question->type = 'public';

        $this->assertTrue($question->save());
    }
}
