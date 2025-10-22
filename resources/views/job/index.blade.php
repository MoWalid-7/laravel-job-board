<div>
    <h1> my name is : {{ $name}} </h1>
    @foreach ($jobs as $job)
        <div>{{ $job['title'] }} : {{ $job['Salary'] }}</div>
    @endforeach
</div>
