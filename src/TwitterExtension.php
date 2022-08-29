<?php

declare(strict_types=1);

/*
 * This file is part of Cachet Twitter.
 *
 * (c) apilayer GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Twitter;

use League\CommonMark\Environment\EnvironmentBuilderInterface;
use League\CommonMark\Extension\ExtensionInterface;

/**
 * This is the twitter extension class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class TwitterExtension implements ExtensionInterface
{
    /**
     * The twitter parser.
     *
     * @var \CachetHQ\Twitter\TwitterParser
     */
    protected $parser;

    /**
     * Create a new twitter parser instance.
     *
     * @param \CachetHQ\Twitter\TwitterParser $parser
     *
     * @return void
     */
    public function __construct(TwitterParser $parser)
    {
        $this->parser = $parser;
    }

    /**
     * Register extensions.
     *
     * @return void
     */
    public function register(EnvironmentBuilderInterface $environment)
    {
        $environment->addInlineParser($this->parser);
    }
}
