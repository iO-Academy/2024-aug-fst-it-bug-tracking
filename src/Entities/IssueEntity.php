<?php

namespace ITBugTracking\Entities;

class IssueEntity
{
    public int $id;
    public string $title;
    public string $description;
    public string $date_created;
    public string $reporter;
    public int $completed;
    public int $department;
    public string $severity;

}