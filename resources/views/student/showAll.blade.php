<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->

    <table>
        <tr>
            <th>Student Name</th>
            <th>Student Email</th>
            <th>Student DOB</th>
            <th>Courses Enroled </th>
        </tr>
        @forelse ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->dob }}</td>
                <td>
                @foreach($student->courses as $course)
                    <span> {{ $course->name }} </span>
                @endforeach 
                </td>
            </tr> 
        @empty
            <p>No course</p>
        @endforelse
    </table>
    

</div>
