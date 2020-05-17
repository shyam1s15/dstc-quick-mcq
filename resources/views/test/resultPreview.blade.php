<h2 class="mb-1 mt-1 font-weight-bold cust-dstc-nav-color text-center">The Results are now Out.</h2>
@if ( $higgest_subjects )
<h4 class="mb-1 mt-1 font-weight-bolder cust-dstc-nav-color text-center">Most Suitable branch for you :
    @foreach ($higgest_subjects as $subject)
        {{ $subject->branch_subject }} <br>
    @endforeach
</h4>
@endif

