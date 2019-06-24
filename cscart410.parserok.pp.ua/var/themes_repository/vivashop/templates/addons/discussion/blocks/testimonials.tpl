{** block-description:discussion_title_home_page **}

{assign var="discussion" value=0|fn_get_discussion:"E":true:$block.properties}

{if $discussion && $discussion.type != "D" && $discussion.posts}

{assign var="obj_prefix" value="`$block.block_id`000"}

{if $block.properties.outside_navigation == "Y"}
    <div class="owl-theme ty-owl-controls">
        <div class="owl-controls clickable owl-controls-outside" id="owl_outside_nav_{$block.block_id}">
            <div class="owl-buttons">
                <div id="owl_prev_{$obj_prefix}" class="owl-prev"></div>
                <div id="owl_next_{$obj_prefix}" class="owl-next"></div>
            </div>
        </div>
    </div>
{/if}

<div class="ty-mb-l vs-testimonials-scroller">
    <div class="ty-scroller-discussion-list">
        <div id="scroll_list_{$block.block_id}" class="owl-carousel ty-scroller-list">

        {foreach from=$discussion.posts item=post}
            <div class="ty-discussion-post__content ty-scroller-discussion-list__item">
                {hook name="discussion:items_list_row"}
                <a href="{"discussion.view?thread_id=`$discussion.thread_id`&post_id=`$post.post_id`"|fn_url}#post_{$post.post_id}">
                    <div class="ty-discussion-post {cycle values=", ty-discussion-post_even"}" id="post_{$post.post_id}">

                        {if $discussion.type == "C" || $discussion.type == "B"}
                        <div class="ty-discussion-post__message clearfix">
                            <div>"{$post.message|strip_tags|truncate:250:"..." nofilter}"</div>
                            <span class="ty-discussion-post__date ty-clear-both">{$post.timestamp|date_format:"`$settings.Appearance.date_format`"}</span>
                        </div>
                        {/if}
                    </div>
                </a>
                <div class="ty-center vs-rating-author-container">
                    {if $discussion.type == "R" || $discussion.type == "B" && $post.rating_value > 0}
                        <div class="clearfix ty-discussion-post__rating">
                            {include file="addons/discussion/views/discussion/components/stars.tpl" stars=$post.rating_value|fn_get_discussion_rating}
                        </div>
                    {/if}
                    <span class="ty-discussion-post__author">{$post.name}</span>
                </div>                

                {/hook}
            </div>
        {/foreach}

        </div>
    </div>
</div>

{include file="common/scroller_init_with_quantity.tpl" prev_selector="#owl_prev_`$obj_prefix`" next_selector="#owl_next_`$obj_prefix`" vs_tablet_items=2}

{/if}
