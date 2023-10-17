<?php
declare(strict_types=1);

namespace JGrim\ActivityPub\Models;

use JGrim\ActivityPub\Contracts\Type\Core\TypeObject\AttachmentInterface;
use JGrim\ActivityPub\Contracts\Type\Core\TypeObject\SourceInterface;
use JGrim\ActivityPub\Contracts\Type\Core\TypeObjectInterface;
use JGrim\ActivityPub\Enums\ActivityPubType;

class TypeObject implements TypeObjectInterface
{
    public string $id;
    public ActivityPubType $type = ActivityPubType::OBJECT;
    public AttachmentInterface $attachment;
    public SourceInterface $source;
    public string $attributedTo;
    public string $audience;
    public string $content;
    public string $context;
    public string $name;
    public string $endTime;
    public string $generator;
    public string $icon;
    public string $image;
    public string $inReplyTo;
    public string $location;
    public string $preview;
    public string $published;
    public string $replies;
    public string $startTime;
    public string $summary;
    public string $tag;
    public string $updated;
    public string $url;
    public string $to;
    public string $bto;
    public string $cc;
    public string $bcc;
    public string $mediaType;
    public string $duration;
}
