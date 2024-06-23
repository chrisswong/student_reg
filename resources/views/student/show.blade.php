<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    Student Name : {{ $student->name }}
    Student Email : {{ $student->email }}
    Student DOB : {{ $student->dob }}
    <form action="/studentApply" method="POST">
        <input type="hidden" name="student_id" value="{{ $student->id }}">
    </form>
</div>
