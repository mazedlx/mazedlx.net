@if($posts->count())
<div class="flex items-center justify-around">
    <a class="text-grey-dark no-underline hover:text-teal" href="/?page={{ request('page') - 1 > 0 ? request('page') - 1 : 0}}">&laquo; Zurück</a>
    <a class="text-grey-dark no-underline hover:text-teal" href="/?page={{ request('page') + 1}}">Vor &raquo; </a>
</div>
@endif