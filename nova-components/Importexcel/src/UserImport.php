<?php 

namespace Aulab\Importexcel;

use App\Models\Article;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class UserImport implements ToModel, WithHeadingRow, WithChunkReading
{
    /**
     * @param array $row
     *
     * @return User|null
     */

    public function model(array $row)
    {
    	$user = Article::create([
            'name' => $row['name'],
            'surname' => $row['surname'],
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }

    public function chunkSize(): int
    {
        return 100;
    }
}