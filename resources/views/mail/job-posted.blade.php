<h2>
    {{ $job->Title }}
</h2>
<p>
    Congrats! Your job is now live on your website
</p>
<p>
    <a href="{{ url('/job/'.$job->id) }}">View Your Job Listing</a>
</p>

