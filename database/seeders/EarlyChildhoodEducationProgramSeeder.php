<?php

namespace Database\Seeders;

use App\Actions\Curriculums\CreateNewSubjectAction;
use App\Data\Curriculums\CreateNewSubjectData;
use App\Models\Department;
use App\Models\Program;
use App\Models\SchoolYear;
use Illuminate\Database\Seeder;

class EarlyChildhoodEducationProgramSeeder extends Seeder
{
    public function run(): void
    {
        if (Program::where('code', 'BECED')->count() === 0) {
            $department = Department::firstOrCreate([
                'name' => 'Education',
            ]);

            $program = Program::create([
                'name' => 'Bachelor of Early Childhood Education',
                'major' => null,
                'code' => 'BECED',
                'department_id' => $department->id,
            ]);

            $currentSchoolYear = SchoolYear::current()->first();

            if (! $currentSchoolYear) {
                $currentSchoolYear = SchoolYear::create([
                    'name' => now()->year,
                    'start_date' => now()->startOfYear(),
                    'end_date' => now()->endOfYear(),
                ]);
            }

            $curriculum = $program->curriculums()->create([
                'name' => 'BECED Curriculum '. now()->year,
                'school_year_id' => $currentSchoolYear->id
            ]);

            $curricula = [
                // First Year - First Semester
                [
                    'year_level' => 1,
                    'sem' => 1,
                    'subjects' => [
                        ['code' => 'GE 1', 'name' => 'Understanding the Self', 'units' => 3],
                        ['code' => 'GE 2', 'name' => 'Readings in Philippine History', 'units' => 3],
                        ['code' => 'BECED 101', 'name' => 'Child Growth and Development', 'units' => 3],
                        ['code' => 'BECED 102', 'name' => 'Foundations of Early Childhood Education', 'units' => 3],
                        ['code' => 'ENG 101', 'name' => 'Purposive Communication', 'units' => 3],
                        ['code' => 'PATHFIT 1', 'name' => 'Movement Competency Training', 'units' => 2],
                        ['code' => 'NSTP 1', 'name' => 'National Service Training Program 1', 'units' => 3],
                    ],
                ],

                // First Year - Second Semester
                [
                    'year_level' => 1,
                    'sem' => 2,
                    'subjects' => [
                        ['code' => 'GE 3', 'name' => 'The Contemporary World', 'units' => 3],
                        ['code' => 'SOC 101', 'name' => 'Introduction to Sociology', 'units' => 3],
                        ['code' => 'BECED 103', 'name' => 'Play and Developmentally Appropriate Practices', 'units' => 3],
                        ['code' => 'BECED 104', 'name' => 'Health, Nutrition and Safety for Young Children', 'units' => 3],
                        ['code' => 'EDU 101', 'name' => 'Foundations of Education', 'units' => 3],
                        ['code' => 'PATHFIT 2', 'name' => 'Exercise-based Fitness Activities', 'units' => 2],
                        ['code' => 'NSTP 2', 'name' => 'National Service Training Program 2', 'units' => 3],
                    ],
                ],

                // Second Year - First Semester
                [
                    'year_level' => 2,
                    'sem' => 1,
                    'subjects' => [
                        ['code' => 'GE 4', 'name' => 'Mathematics in the Modern World', 'units' => 3],
                        ['code' => 'PSY 101', 'name' => 'Educational Psychology', 'units' => 3],
                        ['code' => 'BECED 201', 'name' => 'Language Development in Early Childhood', 'units' => 3],
                        ['code' => 'BECED 202', 'name' => 'Emergent Literacy', 'units' => 3],
                        ['code' => 'BECED 203', 'name' => 'Creative and Aesthetic Development', 'units' => 3],
                        ['code' => 'COMPUTER 1', 'name' => 'Educational Technology for Early Childhood', 'units' => 3],
                    ],
                ],

                // Second Year - Second Semester
                [
                    'year_level' => 2,
                    'sem' => 2,
                    'subjects' => [
                        ['code' => 'GE 5', 'name' => 'Science, Technology, and Society', 'units' => 3],
                        ['code' => 'BECED 204', 'name' => 'Assessment and Evaluation in Early Childhood Education', 'units' => 3],
                        ['code' => 'BECED 205', 'name' => 'Guidance and Counseling in Early Childhood', 'units' => 3],
                        ['code' => 'FAMILY 1', 'name' => 'Family and Community Relations', 'units' => 3],
                        ['code' => 'BECED 206', 'name' => 'Learning Resource Development for Young Children', 'units' => 3],
                    ],
                ],

                // Third Year - First Semester
                [
                    'year_level' => 3,
                    'sem' => 1,
                    'subjects' => [
                        ['code' => 'GE 6', 'name' => 'Ethics', 'units' => 3],
                        ['code' => 'BECED 301', 'name' => 'Curriculum Models and Trends in Early Childhood Education', 'units' => 3],
                        ['code' => 'BECED 302', 'name' => 'Special Education in Early Childhood', 'units' => 3],
                        ['code' => 'BECED 303', 'name' => 'Guiding Children\'s Behavior', 'units' => 3],
                        ['code' => 'METHODS 1', 'name' => 'Teaching Strategies for Early Childhood (Language & Literacy)', 'units' => 3],
                        ['code' => 'FIELD 1', 'name' => 'Field Study 1 (Observation and Participation)', 'units' => 3],
                    ],
                ],

                // Third Year - Second Semester
                [
                    'year_level' => 3,
                    'sem' => 2,
                    'subjects' => [
                        ['code' => 'GE 7', 'name' => 'Art Appreciation', 'units' => 3],
                        ['code' => 'BECED 304', 'name' => 'Methods of Teaching for Early Childhood (Mathematics & Science)', 'units' => 3],
                        ['code' => 'BECED 305', 'name' => 'Field Study 2 (Guided Teaching)', 'units' => 3],
                        ['code' => 'RESEARCH 1', 'name' => 'Methods of Research', 'units' => 3],
                        ['code' => 'BECED 306', 'name' => 'Instructional Materials Production for Young Learners', 'units' => 3],
                    ],
                ],

                // Fourth Year - First Semester
                [
                    'year_level' => 4,
                    'sem' => 1,
                    'subjects' => [
                        ['code' => 'BECED 401', 'name' => 'Practice Teaching 1 (On-Campus)', 'units' => 6],
                        ['code' => 'BECED 402', 'name' => 'Administration of Early Childhood Programs', 'units' => 3],
                        ['code' => 'BECED 403', 'name' => 'Action Research in Early Childhood Education', 'units' => 3],
                    ],
                ],

                // Fourth Year - Second Semester
                [
                    'year_level' => 4,
                    'sem' => 2,
                    'subjects' => [
                        ['code' => 'BECED 404', 'name' => 'Practice Teaching 2 (Off-Campus)', 'units' => 6],
                        ['code' => 'BECED 405', 'name' => 'Capstone Project / Internship Report', 'units' => 3],
                        ['code' => 'BECED 406', 'name' => 'Seminar on Contemporary Issues in Early Childhood Education', 'units' => 2],
                    ],
                ],
            ];

            foreach ($curricula as $yearSem) {
                $yearLevel = data_get($yearSem, 'year_level');
                $sem = data_get($yearSem, 'sem');

                foreach ($yearSem['subjects'] as $subject) {
                    CreateNewSubjectAction::execute(new CreateNewSubjectData(
                        name: data_get($subject, 'name'),
                        code: data_get($subject, 'code'),
                        units: data_get($subject, 'units'),
                        labUnits: 0,
                        computerLabUnits: 0,
                        nstpUnits: (str_starts_with(strtoupper(data_get($subject, 'code')), 'NSTP') ? data_get($subject, 'units') : 0),
                        description: data_get($subject,'name'),
                        semester: $sem,
                        yearLevel: $yearLevel,
                        curriculumId: $curriculum->id
                    ));
                }
            }
        }
    }
}
