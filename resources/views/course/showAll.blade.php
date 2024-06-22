<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <table>
        <tr>
            <th>Course Name</th>
            <th>Course Start Date</th>
            <th>Course End Date</th>
            <th>Student Enroled </th>
        </tr>
        @forelse ($courses as $course)
            <tr>
                <td>{{ $course->name }}</td>
                <td>{{ $course->start_date }}</td>
                <td>{{ $course->end_date }}</td>
                <td>
                @foreach($course->students as $student)
                    <span> {{ $student->name }} </span>
                @endforeach
                </td>
            </tr> 
        @empty
            <p>No course</p>
        @endforelse
    </table>
</div>
