<?php

namespace ITBugTracking\Entities;
class CommentEntity
{
    public int $id;
    public string $name;
    public string $comment;
    public string $date_created;
    public int $issue_id;
}