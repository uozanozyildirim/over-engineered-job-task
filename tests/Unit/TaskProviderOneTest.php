<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\Task;

class TaskProviderOneTest extends TestCase
{
    use DatabaseTransactions;

    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function test_get_data_from_task_api(): void
    {
        $mockModel = new Task();

        $mockData = file_get_contents( 'public/mock/task1.json');

        $this->assertEquals($mockData, $mockModel->getTaskData());
    }

   public function test_insert_datas_to_db()
   {
       // Your test logic goes here

       // Use the database to insert data
       $data = [
           'name' => 'John Doe',
           'email' => 'john@example.com',
       ];
       Task::create($data);

       // Assertions and further test logic

       // Verify that the data exists in the database
       $this->assertDatabaseHas('your_table', $data);


   }

}
