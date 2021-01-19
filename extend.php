<?php

/*
 * This file is part of flarumite/simple-spoilers.
 *
 * Copyright (c) 2021 Flarumite.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Flarumite\SimpleSpoilers;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__ . '/resources/less/forum.less'),

    // Add locales
    new Extend\Locales(__DIR__ . '/resources/locale'),

    // Add spoilers and accordions (this is the cool bit!!)
    (new Extend\Formatter)->configure(function (Configurator $configurator) {
        $translator = app(\Flarum\Locale\Translator::class);

        $configurator->BBCodes->addCustom(
            // TEXT = spoiler content
            // TEXT2 = spoiler title (optional)
            '[spoiler title={TEXT2;optional}]{TEXT}[/spoiler]',
            '<details class="flarumite-spoiler">
                <summary>
                    <span class="flarumite-spoiler--title flarumite-spoiler--title-closed">
                        <span class="flarumite-spoiler--custom-text">
                            {TEXT2}
                        </span>
                        <span class="flarumite-spoiler--default-text">
                            ' . $translator->trans('flarumite.spoilers-and-accordions.forum.post.spoiler.closed') . '
                        </span>
                    </span>
                    <span class="flarumite-spoiler--title flarumite-spoiler--title-open">
                        <span class="flarumite-spoiler--custom-text">
                            {TEXT2}
                        </span>
                        <span class="flarumite-spoiler--default-text">
                            ' . $translator->trans('flarumite.spoilers-and-accordions.forum.post.spoiler.open') . '
                        </span>
                    </span>
                </summary>
                <div class="flarumite-spoiler--content">
                    {TEXT}
                </div>
            </details>'
        );
    }),
];
