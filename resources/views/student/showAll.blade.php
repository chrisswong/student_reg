<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->

    @forelse ($students as $student)
        <li>{{ $student->name }}</li>
        @foreach($student->courses as $course)
            <span> {{ $course->name }} </span>
        @endforeach
    @empty
        <p>No students</p>
    @endforelse
</div>
