<?php

declare(strict_types=1);

class DNA
{
    public static function nucleotide_count(string $input): array
    {
        return [
            'A' => substr_count($input, 'A'),
            'C' => substr_count($input, 'C'),
            'T' => substr_count($input, 'T'),
            'G' => substr_count($input, 'G')
        ];
    }
}

class School
{
    private $students = [];

    public function add(string $name, int $grade): void
    {
        $this->students[$grade][] = $name;
    }

    public function grade($grade): array
    {
        return $this->students[$grade] ?? [];
    }

    public function students_by_grade_alphabetical(): array
    {
        ksort($this->students);

        return array_map(function ($grade) {
            sort($grade);
            return $grade;
        }, $this->students);
    }
}