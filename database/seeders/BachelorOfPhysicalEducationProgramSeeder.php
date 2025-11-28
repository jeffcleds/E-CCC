<?php

namespace Database\Seeders;

use App\Actions\Curriculums\CreateNewSubjectAction;
use App\Data\Curriculums\CreateNewSubjectData;
use App\Models\Department;
use App\Models\Program;
use App\Models\SchoolYear;
use Illuminate\Database\Seeder;

class BachelorOfPhysicalEducationProgramSeeder extends Seeder
{
    public function run(): void
    {
        if (Program::where('code', 'BPED')->count() === 0) {
            $department = Department::firstOrCreate([
                'name' => 'Education',
            ]);

            $program = Program::create([
                'name' => 'Bachelor of Physical Education',
                'major' => null,
                'code' => 'BPED',
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
                'name' => 'BPED Curriculum ' . now()->year,
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
                        ['code' => 'BPED 101', 'name' => 'Philosophical and Socio-cultural Foundations of Physical Education', 'units' => 3],
                        ['code' => 'BPED 102', 'name' => 'Anatomy and Physiology of Human Movement', 'units' => 3],
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
                        ['code' => 'GE 4', 'name' => 'Mathematics in the Modern World', 'units' => 3],
                        ['code' => 'BPED 103', 'name' => 'Motor Learning and Control', 'units' => 3],
                        ['code' => 'BPED 104', 'name' => 'Principles and Practices in Physical Fitness and Conditioning', 'units' => 3],
                        ['code' => 'PATHFIT 2', 'name' => 'Exercise-based Fitness Activities', 'units' => 2],
                        ['code' => 'NSTP 2', 'name' => 'National Service Training Program 2', 'units' => 3],
                    ],
                ],

                // Second Year - First Semester
                [
                    'year_level' => 2,
                    'sem' => 1,
                    'subjects' => [
                        ['code' => 'GE 5', 'name' => 'Science, Technology, and Society', 'units' => 3],
                        ['code' => 'BPED 201', 'name' => 'Fundamentals of Coaching and Officiating', 'units' => 3],
                        ['code' => 'BPED 202', 'name' => 'Gymnastics and Dance', 'units' => 3],
                        ['code' => 'BPED 203', 'name' => 'Physiology of Exercise', 'units' => 3],
                        ['code' => 'EDU 101', 'name' => 'The Teaching Profession', 'units' => 3],
                        ['code' => 'PATHFIT 3', 'name' => 'Dance-based Fitness Activities', 'units' => 2],
                    ],
                ],

                // Second Year - Second Semester
                [
                    'year_level' => 2,
                    'sem' => 2,
                    'subjects' => [
                        ['code' => 'GE 6', 'name' => 'Ethics', 'units' => 3],
                        ['code' => 'BPED 204', 'name' => 'Team Sports', 'units' => 3],
                        ['code' => 'BPED 205', 'name' => 'Assessment in Physical Education', 'units' => 3],
                        ['code' => 'BPED 206', 'name' => 'Research Methods in Physical Education and Sports', 'units' => 3],
                        ['code' => 'PATHFIT 4', 'name' => 'Sports-based Fitness Activities', 'units' => 2],
                    ],
                ],

                // Third Year - First Semester
                [
                    'year_level' => 3,
                    'sem' => 1,
                    'subjects' => [
                        ['code' => 'BPED 301', 'name' => 'Individual and Dual Sports', 'units' => 3],
                        ['code' => 'BPED 302', 'name' => 'Adapted Physical Education', 'units' => 3],
                        ['code' => 'BPED 303', 'name' => 'Curriculum and Instruction in Physical Education', 'units' => 3],
                        ['code' => 'FIELD 1', 'name' => 'Field Study 1 (Observation and Participation)', 'units' => 3],
                        ['code' => 'RESEARCH 1', 'name' => 'Applied Research in Physical Education', 'units' => 3],
                    ],
                ],

                // Third Year - Second Semester
                [
                    'year_level' => 3,
                    'sem' => 2,
                    'subjects' => [
                        ['code' => 'BPED 304', 'name' => 'Outdoor and Recreational Activities', 'units' => 3],
                        ['code' => 'BPED 305', 'name' => 'Trends and Issues in Physical Education and Sports', 'units' => 3],
                        ['code' => 'FIELD 2', 'name' => 'Field Study 2 (Teaching Application)', 'units' => 3],
                        ['code' => 'BPED 306', 'name' => 'Sports and Exercise Management', 'units' => 3],
                    ],
                ],

                // Fourth Year - First Semester
                [
                    'year_level' => 4,
                    'sem' => 1,
                    'subjects' => [
                        ['code' => 'BPED 401', 'name' => 'Practice Teaching 1 (On-Campus)', 'units' => 6],
                        ['code' => 'BPED 402', 'name' => 'Seminar in Physical Education and Sports Science', 'units' => 3],
                    ],
                ],

                // Fourth Year - Second Semester
                [
                    'year_level' => 4,
                    'sem' => 2,
                    'subjects' => [
                        ['code' => 'BPED 403', 'name' => 'Practice Teaching 2 (Off-Campus)', 'units' => 6],
                        ['code' => 'BPED 404', 'name' => 'Capstone Project / Internship Report', 'units' => 3],
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
                        description: data_get($subject, 'name'),
                        semester: $sem,
                        yearLevel: $yearLevel,
                        curriculumId: $curriculum->id
                    ));
                }
            }
        }
    }
}
