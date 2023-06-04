<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Task;

class TaskProviderTwoTest extends TestCase
{

    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function test_get_data_from_task_api(): void
    {
        $mockData = file_get_contents( 'public/mock/task1.json');

        $mockModel = $this->createMock(Task::class);

        $this->assertEquals($mockData, $mockModel->getTaskData());
    }

    public function test_is_provider_return_valid_response(): void
    {


        $this->assertTrue(true);

    }


}
