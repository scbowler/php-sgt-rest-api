getGradeData();

$('#add-record').click(async () => {
    const name = $('#name');
    const course = $('#course');
    const grade = $('#grade');

    const resp = await $.post('/api/grades', {
        name: name.val(),
        course: course.val(),
        grade: grade.val()
    });

    const row = createRow(resp.record);

    $('#grade-data').append(row);

    name.val('');
    course.val('');
    grade.val('');
});

function createRow(record){
    const row = $('<tr>');
    const name = $('<td>', {
        text: record.name
    });
    const course = $('<td>', {
        text: record.course
    });
    const grade = $('<td>', {
        text: record.grade
    });

    row.append(name, course, grade);

    return row;
}

async function getGradeData() {
    const table = $('#grade-data');
    const rows = [];

    const resp = await $.get('/api/grades');
    
    resp.records.forEach(r => {
        const row = createRow(r);

        rows.push(row);
    });

    table.append(rows);
}
