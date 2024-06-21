<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->

    @forelse ($courses as $course)
        <li>{{ $course->name }}</li>
        @foreach($course->students as $student)
            <span> {{ $student->name }} </span>
        @endforeach
    @empty
        <p>No course</p>
    @endforelse

</div>
