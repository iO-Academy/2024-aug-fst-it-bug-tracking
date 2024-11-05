<?php

namespace tests;

use ITBugTracking\Entities\Issue;
use PHPUnit\Framework\TestCase;

class IssueTest extends TestCase
{

    public function testJsonSerialize()
    {
        $issue = new Issue();

        $issue->id = 7;
        $issue->title = "A Title";
        $issue->description = "I'm a summary";
        $issue->severity = "Severe";
        $issue->date_created = "2024-11-05";
        $issue->count = 5;
        $issue->completed = false;

        $expected = json_encode([
            'id' => 7,
            'title' => "A Title",
            'summary' => "I'm a summary",
            'severity' => "Severe",
            'date_created' => "2024-11-05",
            'comment_count' => 5,
            'completed' => false,
        ]);

        $actual = json_encode($issue);

        $this->assertEquals($expected, $actual);

    }
}
