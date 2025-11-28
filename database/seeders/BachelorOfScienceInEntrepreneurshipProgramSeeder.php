<?php

namespace Database\Seeders;

use App\Actions\Curriculums\CreateNewSubjectAction;
use App\Data\Curriculums\CreateNewSubjectData;
use App\Models\Department;
use App\Models\Program;
use App\Models\SchoolYear;
use Illuminate\Database\Seeder;

class BachelorOfScienceInEntrepreneurshipProgramSeeder extends Seeder
{
    public function run(): void
    {
        if (Program::where('code', 'BSENTREP')->count() === 0) {
            $department = Department::firstOrCreate([
                'name' => 'Entrepreneurship',
            ]);

            $program = Program::create([
                'name' => 'Bachelor of Science in Entrepreneurship',
                'major' => null,
                'code' => 'BSENTREP',
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
                'name' => 'BSENTREP Curriculum ' . now()->year,
                'school_year_id' => $currentSchoolYear->id,
            ]);

            $curricula = [

                // First Year - First Semester
                [
                    'year_level' => 1,
                    'sem' => 1,
                    'subjects' => [
                        ['code' => 'GE 1', 'name' => 'Understanding the Self', 'units' => 3],
                        ['code' => 'GE 2', 'name' => 'Readings in Philippine History', 'units' => 3],
                        ['code' => 'ENTREP 101', 'name' => 'Principles of Entrepreneurship', 'units' => 3],
                        ['code' => 'ENTREP 102', 'name' => 'Microeconomics', 'units' => 3],
                        ['code' => 'ENG 101', 'name' => 'Purposive Communication', 'units' => 3],
                        ['code' => 'MATH 101', 'name' => 'Business Mathematics', 'units' => 3],
                        ['code' => 'NSTP 1', 'name' => 'National Service Training Program 1', 'units' => 3],
                    ],
                ],

                // First Year - Second Semester
                [
                    'year_level' => 1,
                    'sem' => 2,
                    'subjects' => [
                        ['code' => 'GE 3', 'name' => 'The Contemporary World', 'units' => 3],
                        ['code' => 'ENTREP 103', 'name' => 'Entrepreneurial Behavior', 'units' => 3],
                        ['code' => 'ENTREP 104', 'name' => 'Accounting for Entrepreneurs', 'units' => 3],
                        ['code' => 'MKTG 101', 'name' => 'Principles of Marketing', 'units' => 3],
                        ['code' => 'MATH 102', 'name' => 'Basic Statistics', 'units' => 3],
                        ['code' => 'NSTP 2', 'name' => 'National Service Training Program 2', 'units' => 3],
                    ],
                ],

                // Second Year - First Semester
                [
                    'year_level' => 2,
                    'sem' => 1,
                    'subjects' => [
                        ['code' => 'GE 4', 'name' => 'Mathematics in the Modern World', 'units' => 3],
                        ['code' => 'ENTREP 201', 'name' => 'Innovation and Product Development', 'units' => 3],
                        ['code' => 'ENTREP 202', 'name' => 'Financial Management for Entrepreneurs', 'units' => 3],
                        ['code' => 'ENTREP 203', 'name' => 'Business Law and Ethics', 'units' => 3],
                        ['code' => 'COM 201', 'name' => 'Business Communication', 'units' => 3],
                    ],
                ],

                // Second Year - Second Semester
                [
                    'year_level' => 2,
                    'sem' => 2,
                    'subjects' => [
                        ['code' => 'GE 5', 'name' => 'Science, Technology, and Society', 'units' => 3],
                        ['code' => 'ENTREP 204', 'name' => 'Operations Management', 'units' => 3],
                        ['code' => 'ENTREP 205', 'name' => 'Human Resource Management', 'units' => 3],
                        ['code' => 'ENTREP 206', 'name' => 'Digital Marketing', 'units' => 3],
                        ['code' => 'RESEARCH 1', 'name' => 'Methods of Research in Business', 'units' => 3],
                    ],
                ],

                // Third Year - First Semester
                [
                    'year_level' => 3,
                    'sem' => 1,
                    'subjects' => [
                        ['code' => 'GE 6', 'name' => 'Ethics', 'units' => 3],
                        ['code' => 'ENTREP 301', 'name' => 'Strategic Management', 'units' => 3],
                        ['code' => 'ENTREP 302', 'name' => 'Supply Chain Management', 'units' => 3],
                        ['code' => 'ENTREP 303', 'name' => 'Entrepreneurial Finance', 'units' => 3],
                        ['code' => 'FIELD 1', 'name' => 'Field Study 1 (Observation and Participation)', 'units' => 3],
                    ],
                ],

                // Third Year - Second Semester
                [
                    'year_level' => 3,
                    'sem' => 2,
                    'subjects' => [
                        ['code' => 'GE 7', 'name' => 'Art Appreciation', 'units' => 3],
                        ['code' => 'ENTREP 304', 'name' => 'Entrepreneurial Marketing Strategies', 'units' => 3],
                        ['code' => 'ENTREP 305', 'name' => 'Social Entrepreneurship', 'units' => 3],
                        ['code' => 'ENTREP 306', 'name' => 'Business Plan Preparation', 'units' => 3],
                        ['code' => 'RESEARCH 2', 'name' => 'Applied Business Research', 'units' => 3],
                    ],
                ],

                // Fourth Year - First Semester
                [
                    'year_level' => 4,
                    'sem' => 1,
                    'subjects' => [
                        ['code' => 'ENTREP 401', 'name' => 'Business Plan Implementation 1 (On-Campus)', 'units' => 6],
                        ['code' => 'ENTREP 402', 'name' => 'Entrepreneurial Leadership', 'units' => 3],
                        ['code' => 'ENTREP 403', 'name' => 'Seminar on Current Trends in Entrepreneurship', 'units' => 3],
                    ],
                ],

                // Fourth Year - Second Semester
                [
                    'year_level' => 4,
                    'sem' => 2,
                    'subjects' => [
                        ['code' => 'ENTREP 404', 'name' => 'Business Plan Implementation 2 (Off-Campus)', 'units' => 6],
                        ['code' => 'ENTREP 405', 'name' => 'Capstone Project / Feasibility Study', 'units' => 3],
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
