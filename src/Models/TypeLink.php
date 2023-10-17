<?php
declare(strict_types=1);

namespace JGrim\ActivityPub\Models;

use JGrim\ActivityPub\Contracts\Type\Core\TypeLink\NameMapInterface;
use JGrim\ActivityPub\Contracts\Type\Core\TypeLink\PreviewInterface;
use JGrim\ActivityPub\Contracts\Type\Core\TypeLink\RelInterface;
use JGrim\ActivityPub\Contracts\Type\Core\TypeLinkInterface;
use JGrim\ActivityPub\Enums\ActivityPubType;

class TypeLink implements TypeLinkInterface
{
    public string $id;
    public ActivityPubType $type = ActivityPubType::LINK;
    public string $href;
    public RelInterface $rel;
    public string $mediaType;
    public string $name;
    public NameMapInterface $nameMap;
    public string $hreflang;
    public int $height;
    public int $width;
    public PreviewInterface $preview;
}
