<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Task;

class TaskProviderOneTest extends TestCase
{

    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function test_get_data_from_task_api(): void
    {
        $mockData = file_get_contents( 'public/mock/task.json');

        $mockModel = $this->createMock(Task::class);

        $this->assertEquals($mockData, $mockModel->getTaskData());
    }

   public function test_insert_datas_to_db()
   {
       //
   }

    public function test_is_values_inserted_right()
    {
     //
    }



}
