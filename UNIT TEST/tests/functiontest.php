<? php



class functiontest extends PHPUnit\Framework\TestCase
{
    public function sumReturnsTheCorrectValue()
    {
        require 'sum.php';
        $this->assertEquals(4, add(2,2));
        $this->assertEquals(8, add(2,6));

    }
}
