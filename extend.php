<?php

/*
 * This file is part of davwheat/spoilers-and-accordions.
 *
 * Copyright (c) 2021 David Wheatley.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Davwheat\SpoilersAndAccordions;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;




return [
    (new Extend\Frontend('forum'))
        //     ->js(__DIR__ . '/js/dist/forum.js')
        ->css(__DIR__ . '/resources/less/forum.less'),

    // Add locales
    new Extend\Locales(__DIR__ . '/resources/locale'),

    // Add spoilers and accordions (this is the cool bit!!)
    (new Extend\Formatter)->configure(function (Configurator $configurator) {
        $translator = app(\Flarum\Locale\Translator::class);

        $configurator->BBCodes->addCustom(
            '[spoiler title={TEXT2;optional}]{TEXT}[/spoiler]',
            '<details class="davwheat-spoiler">
                <summary>
                    <span class="davwheat-spoiler--title davwheat-spoiler--title-closed">
                        <span class="davwheat-spoiler--custom-text">
                            {TEXT2}
                        </span>
                        <span class="davwheat-spoiler--default-text">
                            ' . $translator->trans('davwheat.spoilers-and-accordions.forum.post.spoiler.closed') . '
                        </span>
                    </span>
                    <span class="davwheat-spoiler--title davwheat-spoiler--title-open">
                        <span class="davwheat-spoiler--custom-text">
                            {TEXT2}
                        </span>
                        <span class="davwheat-spoiler--default-text">
                            ' . $translator->trans('davwheat.spoilers-and-accordions.forum.post.spoiler.open') . '
                        </span>
                    </span>
                </summary>
                <div class="davwheat-spoiler--content">
                    {TEXT}
                </div>
            </details>'
        );

        // $configurator->BBCodes->addCustom(
        //     '[spoiler={TEXTTITLE}]{TEXT}[/spoiler]',
        //     '<details class="davwheat-accordion">
        //         <summary>
        //             <span class="davwheat-accordion--title davwheat-accordion--title-closed" title="' . $translator->trans('davwheat.spoilers-and-accordions.forum.post.accordion.tooltip.closed') . '">
        //                 {TEXTTITLE}
        //             </span>
        //             <span class="davwheat-accordion--title davwheat-accordion--title-open" title="' . $translator->trans('davwheat.spoilers-and-accordions.forum.post.accordion.tooltip.open') . '">
        //                 {TEXTTITLE}
        //             </span>
        //         </summary>
        //         <div class="davwheat-accordion--content">
        //             {TEXT}
        //         </div>
        //     </details>'
        // );
    }),
];
