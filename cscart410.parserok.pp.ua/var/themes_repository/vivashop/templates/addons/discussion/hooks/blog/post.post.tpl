{assign var="discussion" value=$page.page_id|fn_get_discussion:"A":true:$smarty.request}
{if $discussion && $discussion.type != "D"}
<div class="vs-comments">
	<i class="vs-icon-testimonial"></i> {$discussion.posts|count}
</div>
{/if}